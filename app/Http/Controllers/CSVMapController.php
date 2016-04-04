<?php

/*----------------------------------------------------
| Controller responsible for CSV map resource
-----------------------------------------------------*/

namespace App\Http\Controllers;

use App\CSVMap;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CSVMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::getUser()->cannot('view csv_maps')) {
            abort(403);
        }

        $csv_maps = CSVMap::get();
        return view('csv.maps.index', compact('csv_maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::getUser()->cannot('edit csv_maps')) {
            abort(403);
        }
        return view('csv.maps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::getUser()->cannot('edit csv_maps')) {
            abort(403);
        }

        $this->validate($request, [
            'name' => 'required|unique:csv_maps'
        ]);

        $input = array_except($request->all(), '_token');

        $csv_map = CSVMap::create($input);

        return redirect('csv_maps')->with('success', 'CSVMap created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::getUser()->cannot('view csv_maps')) {
            abort(403);
        }
        $csv_map = CSVMap::find($id);

        return view('csv.maps.show', compact('csv_map'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::getUser()->cannot('edit csv_maps')) {
            abort(403);
        }
        $csv_map = CSVMap::find($id);

        return view('csv.maps.edit', compact('csv_map'));
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
        if (Auth::getUser()->cannot('edit csv_maps')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|unique:csv_maps,name,'.$id,
        ]);

        $input = array_except($request->all(), '_token');

        $csv_map = CSVMap::find($id);

        $csv_map->update($input);

        return redirect('csv_maps')->with('success', 'CSVMap updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::getUser()->cannot('delete csv_maps')) {
            abort(403);
        }
        $csv_map = CSVMap::find($id);

        $csv_map->delete();

        //go back to the csv_map list, but display message
        return back()->with('success', 'CSVMap deleted');
    }
}
