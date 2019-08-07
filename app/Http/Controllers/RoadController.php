<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Road;

class RoadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roads = Road::all();
        return view('roads.index',compact('roads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = $this->types();
        $lanes = $this->lanes();
        $activities = $this->activities();
        return view('roads.create',compact('types','lanes','activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $road = new \App\Road();
        $road->name = $request->name;
        $road->speed = $request->speed;
        if($request->activity == 'Ringan'){
            $road->activity = 20;
        }elseif ($request->activity == 'Berat') {
            $road->activity = 45;
        }else{
            $road->activity = 35;
        }
        $road->long  = $request->long;
        $road->width = $request->width;
        $road->time = $request->time;
        $road->type = $request->type;
        if($request->lane == '1'){
            $road->lane = 1;
        }elseif ($request->lane == '2') {
            $road->lane = 2;
        }else{
            $road->lane = 3;
        }
       
        $road->first_latitude = $request->first_latitude;
        $road->first_longitude = $request->first_longitude;
        $road->middle_latitude_1 = $request->middle_latitude_1;
        $road->middle_longitude_1 = $request->middle_longitude_1;
        $road->middle_latitude_2 = $request->middle_latitude_2;
        $road->middle_longitude_2 = $request->middle_longitude_2;
        $road->second_latitude = $request->second_latitude;
        $road->second_longitude = $request->second_longitude;
       
        $road->save();

        return redirect()->route('road.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = $this->types();
        $road = Road::find($id);
        $lanes = $this->lanes();
        $activities = $this->activities();
        return view('roads.edit',compact('road','types','lanes','activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // dd($request->all());
        $road = Road::findOrFail($id);
        $road->name = $request->name;
        $road->speed = $request->speed;
        if($request->activity == 'Ringan'){
            $road->activity = 20;
        }elseif ($request->activity == 'Berat') {
            $road->activity = 45;
        }else{
            $road->activity = 35;
        }
        $road->long  = $request->long;
        $road->width = $request->width;
        $road->time = $request->time;
        $road->type = $request->type;
        if($request->lane == '1'){
            $road->lane = 1;
        }elseif ($request->lane == '2') {
            $road->lane = 2;
        }else{
            $road->lane = 3;
        }
       
        $road->first_latitude = $request->first_latitude;
        $road->first_longitude = $request->first_longitude;
        $road->middle_latitude_1 = $request->middle_latitude_1;
        $road->middle_longitude_1 = $request->middle_longitude_1;
        $road->middle_latitude_2 = $request->middle_latitude_2;
        $road->middle_longitude_2 = $request->middle_longitude_2;
        $road->second_latitude = $request->second_latitude;
        $road->second_longitude = $request->second_longitude;
       
        $road->update();

        return redirect()->route('road.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $road =  Road::findOrFail($id);
        $road->delete();

        return redirect()->route('road.index');
    }

    private function types()
    {
        return $types = [
            '0' => '06.00 - 18.00',
            '1' => '06.00 - 22.00',
            '2' => '24 jam',
            '3' => 'contra flow'
        ];
    }
    private function lanes()
    {
        return $lanes = [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4'
        ];
    }
    private function activities()
    {
        return $activities = [
            '20' => 'Ringan',
            '45' => 'Berat',
            '35' => 'Sedang',
        ];
    }
}
