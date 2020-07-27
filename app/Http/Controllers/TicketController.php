<?php

namespace App\Http\Controllers;

use App\trip;
use App\ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketController extends Controller
{
    function admin_booking(){
        return view('admin.site_admin.admin.booking');
    }

    function admin_ticket(){
        $result = trip::get();
        
        // $result = DB::table('tickets')
        //     ->join('trips','trips.id','>=','tickets.trip_id')
        //     ->select('trips.*','tickets.*','trips.id as trip_ID','tickets.id as ticket_id')
        //     ->get();

        
            // dd($result->toArray());
        return view('admin.site_admin.admin.ticket')->with('data',$result);
    }

    function create_ticket(Request $request){

        $data = [
            'trip_id' => $request->trip_id,
            'level' => $request->level,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];
        
        ticket::create($data);
        return back()->with('create_ticket','Create Ticket Success');
    }

    function edit_ticket($id){
        $result = ticket::findOrFail($id);
        return view('admin.site_admin.admin.edit_ticket')->with('data',$result);
    }

    function update_ticket(Request $request){
        $id = $request->ticket_id;

        $data = [
            'trip_id' => $request->trip_id,
            'level' => $request->level,
            'quantity' => $request->quantity,
            'price' => $request->price
        ];

        $result = ticket::findOrFail($id)->update($data);
        return redirect()->route('admin_ticket')->with('update_ticket','update ticket success');
    }

    function delete_ticket($id){
        $result = ticket::findOrFail($id)->delete();
        return back()->with('delete_ticket','Delete Ticket Success');
    }
}
