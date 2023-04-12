<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        return view('projects.index', ['projects' => Project::all()]);
    }


    public function personal()
    {
        return view('projects.personal', ['projects' => Project::all()]);
    }



    public function task_index(Project $project)
    {
        return view('projects.tasks.index', ['project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }


    public function createtask(Project $project)
    {

        return view('projects.tasks.create', [
            'project' => $project,
            'staffs' => DB::table('profile')->orderBy('firstname')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $formFields = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'start_date' => 'required',
            'type' => 'required',
            'end_date' => 'required',
            'budget' => 'required',
            'description' => 'required'
        ]);

        $formFields['user_id'] = auth()->id();


        DB::table('projects')->insert($formFields);
        return redirect('/projects')->with('message', 'Project created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.tasks.index', ['project' => $project]);
    }
    public function show_task(Project $project)
    {
        return view('projects.tasks.show', [
            'project' => $project,
            'staffs' => DB::table('profile')->orderBy('firstname')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect("projects")->with('message', 'Task Deleted successfully!');
    }
}
