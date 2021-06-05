<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
    // Get all available services from the DB and send them into service.index page
    public function indexPage()
    {
        $services = DB::table('service')->where('reserved', '=', false)->get();
        return view('services.index', ['services' => $services]);
    }

    // Return services form page
    public function createPage()
    {
        return view('services.create');
    }

    // create service into the DB (from Worker)
    public function insert(Request $request)
    {
        $categoryName = $request->category;
        $categoryId = DB::table('category')->select('id')->where('name', "=", $categoryName);
        
        $service = new Service();
        $service->category_id = $categoryId;
        $service->worker_id = Auth::id();
        $service->description = $request->description;
        $service->price = $request->price;
        $service->reserved = false;
        $service->save();
        return redirect()->route('home'); 
    }

    // this is only for the client, if the service is reserved 
    // it should be added into job table and set the service as reserved
    public function reserve(Request $request, Service $service)
    {
        $clientId = Auth::id();
        $workerId = DB::table('service')->select('worker_id')->where('id', '=', $service->id);

        DB::table('job')->insert(
            array('service_id' => $service->id,
            'worker_id' => $workerId,
            'client_id' => $clientId,
            'accepeted' => false)
        );

        DB::table('service')->where('id', '=', $service->id)->update(
            array('reserved', true)
        );
        return redirect()->route('category.index'); // redirect client to categories
    }


}
