<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
// use GuzzleHttp\Exception\GuzzleException;
// use GuzzleHttp\Client;
// use GuzzleHttp\RequestOptions;
// use App\Services\DashboardServices;
use Session;

class DashboardController extends Controller
{
    

    public function detailDashboard()
    {
        
        return view('detail-content');
    }

}
