<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // code start here
        $data = [ ];

        return view('backend.area.add', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'area_name' => 'required|min:3|max:120|unique:areas',
        ]);
        // insert code start here
        $areas = new Area();
        $areas->area_name = $request->area_name;
        $areas->save();
        // flash msg
        session()->flash('success','Area Created Successfully!');
        return redirect(route('showArea'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
        $data = [ ];
        $data['areas'] = Area::all();
        return view('backend.area.area_view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($areaid)
    {
        //  edit code start here
        $data = [ ];
        $data['areas'] =  Area::find($areaid);
        return view('backend.area.edit', $data);
    }


    public function update(Request $request)
    {
        // update here
        $areas = Area::findOrfail($request)->first();
        $areas->area_name = $request->area_name;
        $areas->save();

        session()->flash('success','Successfully Updated!');
        return redirect(route('showArea'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $areas = Area::find($id);
        $areas->delete();

        session()->flash('success','Area Deleted Successfully!');
        return redirect(route('showArea'));
    }


}
