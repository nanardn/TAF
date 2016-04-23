<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class crowdController extends Controller
{
    //
     public function index()
    {
        return view('dashboard.dashboard-pendanaan');
    }

    public function showReport()
    {
        return view('dashboard.dashboard-reportpendanaan');
    }
   
    public function listReportCrowd(Request $request){
    	$result = DB::select('SELECT * FROM laporan_crowd, pendanaan 
            WHERE laporan_crowd.id_pendanaan=pendanaan.id_pendanaan');
    	return view('dashboard.dashboard-reportpendanaan')->with('reportCrowd',$result);
    }
}
