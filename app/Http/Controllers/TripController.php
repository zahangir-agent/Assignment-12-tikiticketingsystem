<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Location;
use App\Models\SeatSetup;

use Illuminate\Http\Request;
use App\Models\SeatAllocation;
use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations   =Location::all();
        return view('myapps.trip',compact('locations'));
    }

    public function alltrips()
    {
        $alltrips   =Trip::where('status','=','Active')->get();
        return view('myapps.viewtrip',compact('alltrips'));
    }

    public function availableseats($id)
    {
        $seats =SeatSetup::where('trip_id',$id)->get();
        $alltrips   =Trip::find($id);
   
        return view('myapps.seatallocation',compact('seats','alltrips'));
    }
    
    
    public function confirmseats($id)
    {
        $seats =SeatSetup::find($id);
      //return $seats;
   
         return view('myapps.seatconfirm',compact('seats'));
    }
    
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Trip = Trip::create([
                    
            'trip_from'     =>$request->trip_from,
            'trip_to'       =>$request->trip_to,
            'tripdate'      =>$request->tripdate,
            'fare'          =>$request->fare,
            'coach_type'    =>$request->coach_type,
            'departure_time'=>$request->departure_time,
            'arrival_time'  =>$request->arrival_time,
            'total_seat'    =>$request->total_seat,
        ]);
        if ($Trip) {
           $locations   =Location::all();
           $return= view('myapps.trip',compact('locations'));
           
        } else {
            return redirect()->back()->with('error', 'Failed to create user.');
        }
    }

    public function tripconfirm(Request $request)
    {
        $confirmseat = Seatallocation::create([
                    
            'seat_setup_id' =>$request->seat_setup_id,
            'trip_id'       =>$request->trip_id,
            'user_id'       =>Auth::user()->id,
        
            
        ]);
        if ($confirmseat) {
          

          $updatestatus = [];

          $updatestatus['status']     = 'Booked';
          
  
          SeatSetup::where('id', $request->seat_setup_id)->limit(1)->update($updatestatus);
          return 'Seat successfully booked';

           
        } else {
            return redirect()->back()->with('error', 'Failed to create user.');
        }
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
