<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Record;
use App\Report;
use App\Template;
use App\SharedScience\UiQueryBuilder\UiQueryBuilder;
use Flynsarmy\DbBladeCompiler\Facades\DbView;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::getUser()->cannot('view reports')) {
            abort(403);
        }
        $reports = Report::get();
        return view('reports.index', compact('reports'));
    }

    /**
     * Shows selection of records to choose from
     */
    public function pre_create()
    {
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $record_list = Record::lists('name', 'id')->all();
        return view("reports.pre_create", compact("record_list"));
    }

    public function pre_store(Request $request)
    {
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $input = array_except($request->all(), '_token');

        if (array_key_exists('record_id', $input) && $input['record_id'] > 0) {
            $record_id = $input['record_id'];
            $request->session()->put("record_id", $record_id);
            return redirect('reports/create');
        }

        //otherwise stay on the same page, display warning
        else
        {
            return back()->with('warning','Please select a report type!');
        }
    }

    public function run(Request $request)
    {
        if (Auth::getUser()->cannot('view reports')) {
            abort(403);
        }
        $input = array_except($request->all(), '_token');
        $data = json_decode($input['data'], true);
        $template_id = $input['template_id'];
        $record_id = $input['record_id'];

        //try to obtain results
        $result = [];

        try {
            $result = UiQueryBuilder::query(Record::find($record_id), $data['filters'], $data['columns']);
        }
        catch (Exception $e)
        {
            return Redirect::route("reports/create")->with('warning','SQL error. Please check your values. Error: '.$e->getMessage());
        }

        //dd($result);

        //Try to process template
        try {
            //process template
            $template = Template::find($template_id);

            //get columns and values from queryResults
            $selects = $result["selects"];
            $record = $result["record"];
            $results = $result["results"];

            return DbView::make($template, compact('results', 'selects', 'record'))->render();
        }
        catch (Exception $e) {
            return Redirect::to('reports.pre_create')->with('warning', 'Error rendiring template. Error: '.$e->getMessage());
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $record_id = $request->session()->get('record_id');

        if (!$record_id)
        {
            return redirect('reports/pre_create');
        }

        $record = Record::find($record_id);
        $template_list = Template::lists('name', 'id');
        $filters = $record->filters;
        $columns = $record->columns;

        return view('reports.create', compact('record', 'template_list', 'filters', 'columns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|unique:records',
            'record_id' => 'required',
            'data' => 'required'
        ]);

        $input = array_except($request->all(), '_token');
        $data = json_decode($input['data'], true);

        //create report model and save it
        $report = Report::create(
            [
                'record_id' => $input['record_id'],
                'name' => $input['name'],
                'filters' => json_encode($data['filters']),
                'columns' => json_encode($data['columns']),
                'template_id' => $input['template_id']
            ]
        );

        return redirect('reports')->with('success', 'Report saved.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::getUser()->cannot('view reports')) {
            abort(403);
        }
        return redirect('reports/'.$id.'/edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $report = Report::find($id);

        $record = Record::find($report->record_id);
        $template_list = Template::lists('name', 'id');
        $filters = $record->filters;
        $columns = $record->columns;

        return view('reports.edit', compact('report', 'record', 'template_list', 'filters', 'columns'));
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
        if (Auth::getUser()->cannot('edit reports')) {
            abort(403);
        }
        $this->validate($request, [
            'name' => 'required|unique:reports,name,'.$id,
            'record_id' => 'required',
            'data' => 'required'
        ]);

        $input = array_except($request->all(), '_token');
        $data = json_decode($input['data'], true);

        $report = Report::find($id);

        $report->update([
            'record_id' => $input['record_id'],
            'name' => $input['name'],
            'filters' => json_encode($data['filters']),
            'columns' => json_encode($data['columns']),
            'template_id' => $input['template_id']
        ]);

        return redirect('reports')->with('success', 'Report updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::getUser()->cannot('delete reports')) {
            abort(403);
        }
        $report = Report::find($id);

        $report->delete();

        //go back to the report list, but display message
        return redirect('reports')->with('success', 'Report deleted');
    }
}
