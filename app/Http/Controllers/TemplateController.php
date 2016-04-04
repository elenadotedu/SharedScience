<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Template;
use Illuminate\Support\Facades\Auth;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::getUser()->cannot('view templates')) {
            abort(403);
        }

        $templates = Template::get();
        return view('templates.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::getUser()->cannot('edit templates')) {
            abort(403);
        }

        return view('templates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::getUser()->cannot('edit templates')) {
            abort(403);
        }

        $this->validate($request, [
            'name' => 'required|unique:templates',
            'content' => 'required'
        ]);

        $input = array_except($request->all(), '_token');

        $template = Template::create($input);

        return redirect('templates')->with('success', 'Template created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::getUser()->cannot('view templates')) {
            abort(403);
        }

        $template = Template::find($id);

        return view('templates.show', compact('template'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::getUser()->cannot('edit templates')) {
            abort(403);
        }

        $template = Template::find($id);

        return view('templates.edit', compact('template'));
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
        if (Auth::getUser()->cannot('edit templates')) {
            abort(403);
        }

        $this->validate($request, [
            'name' => 'required|unique:templates,name,'.$id,
        ]);

        $input = array_except($request->all(), '_token');

        $template = Template::find($id);

        $template->update($input);

        return redirect('templates')->with('success', 'Template updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::getUser()->cannot('delete templates')) {
            abort(403);
        }

        $template = Template::find($id);

        $template->delete();

        //go back to the template list, but display message
        return back()->with('success', 'Template deleted');
    }
}
