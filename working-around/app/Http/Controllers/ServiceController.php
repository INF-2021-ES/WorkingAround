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
        $services = Service::orderBy('name', 'ASC')->paginate();
        return view('service.index', ['services' => $services]);
    }

    // Return services form page
    public function createPage()
    {
        return view('service.create');
    }

    // insert service into the service
    public function insert(Request $request)
    {
        $service = new Service();
        $service->worker_id = Auth::id();
        $service->description = $request->description;
        $service->price = $request->price;
    }
}
