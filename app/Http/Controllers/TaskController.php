<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Profile;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("help");
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * $table->foreignId('project_id')->constrained()->onDelete('cascade');

     * 
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());

        $formFields = $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'assignee' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'project_id' => 'required'
            ]
        );
        $formFields['assignee'] = implode(", ", $formFields['assignee']);
        // dd($formFields);
        DB::table('tasks')->insert($formFields);
        return redirect('/projects')->with('message', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return view('projects.tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        // Show Edit Form


        return view('listings.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {

        $formFields = $request->validate([

            'comment' => 'required',
            'id' => 'required'
        ]);

        $formFields["comment"] = $task->comment . "," . $formFields["comment"] . " * " . $formFields["id"];
        $task->update($formFields);

        return back()->with('message', 'Comment   updated successfully!');
    }

    public function update_status(Request $request, Task $task)
    {

        $formFields = $request->validate([

            'status' => 'required'
        ]);
        $status = "completed";

        if ($formFields["status"] == 'backlog') {
            $status = "ongoing";
        }

        if ($formFields["status"] == 'ongoing') {
            $status = "completed";
        }

        $task->status = $status;
        $task->save();
        //  dd($formFields);

        return back()->with('message', 'Task Status Changed successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect("project/{$task->project->id}")->with('message', 'Task Deleted successfully!');
    }
}
