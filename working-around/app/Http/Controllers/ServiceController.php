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
    public function createPage($id)
    {
        return view('services.create', ['id' => $id]);
    }

    // create service into the DB (from Worker)
    public function insert(Request $request, $id)
    {
        $input = $request->all();
        DB::table('service')->insert(
            array('category_id' => $id,
            'worker_id' => Auth::id(),
            'description' => $input['description'],
            'price' => $input['price'],
            'reserved' => false)
        );
    
        return redirect()->route('categories.index'); 
    }

    // this is only for the client, if the service is reserved 
    // it should be added into job table and set the service as reserved


    public function reserve($category, $id)
    {
        $service = DB::table('service')->where('id', '=', $id)->first();
        $clientId = Auth::id();

        DB::table('job')->insert(
            array('service_id' => $service->id,
            'workerId' => $service->worker_id,
            'clientId' => $clientId,
            'accepted' => false)
        );

        DB::table('service')->where('id', '=', $id)->update(
            ['reserved' => true]
        );
        return redirect()->route('categories.index'); // redirect client to categories
    }


}
