<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $location=Location::all();
        return view('myapps.location',compact('location'));
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
        $Location = Location::create([
            'name' =>$request->name,
            
             // bcrypt is used to hash passwords
        ]);
        if ($Location) {
            return view('myapps.location');
           // return redirect()->route('myapps.location')->with('success', 'Location created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create user.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        //
    }
}
