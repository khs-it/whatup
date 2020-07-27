<?php

namespace App\Http\Controllers;

use App\trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    function index(){
        $result = trip::get();
        return view('admin.site_admin.admin.trip')->with('data',$result);
    }

    function create_trip(Request $request){
        $data = [
            'from' => $request->from,
            'to' => $request->to,
            'dep_date' => $request->dep_date,
            'arrival_date' => $request->arrival_date,
            'dep_time' => $request->dep_time,
            'arrival_time' => $request->arrival_time,
        ];

        trip::create($data);
        return redirect('admin_index')->with('create_trip_success','Create Trip Success');
    }

    function create_trip_view(){
        return view('admin.site_admin.admin.create_trip');
    }

    function search_trip(Request $request){
        $from = $request->from;
        $to = $request->to;
        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $result = trip::query()
        ->where('from', 'LIKE', "%{$from}%") 
        ->where('to', 'LIKE', "%{$to}%") 
        ->whereDate('dep_date', 'LIKE', "%{$from_date}%") 
        ->whereDate('arrival_date', 'LIKE', "%{$to_date}%") 
        ->get();
      
        
        return view('detail')->with('data',$result);
    }


    function delete_trip($id){
        $result = trip::findOrFail($id)->delete();
        return back()->with('delete_success','Delete Trip Success');
    }

    function edit_trip($id){
        $result = trip::findOrFail($id);
        return view('admin.site_admin.admin.edit_trip')->with('data',$result);
    }

    function update_trip(Request $request){
        $id = $request->trip_id;
        $data = [
            'from' => $request->from,
            'dep_date' => $request->dep_date,
            'dep_time' => $request->dep_time,
            'arrival_date' => $request->arrival_date,
            'arrival_time' => $request->arrival_time,
            'to' => $request->to,
        ];

        $result = trip::findOrFail($id)->update($data);
        return redirect()->route('admin_index')->with('update_success','update trip success');
    }
}
