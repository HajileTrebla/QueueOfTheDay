<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTasksRequest;
use App\Http\Requests\UpdateTasksRequest;
use App\Http\Resources\TaskResource;
use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Tasks::orderby('id', 'desc')->paginate(10);
        return view('dashboard', ['tasks'=>$tasks]);
    }

    public function home()
    {
        $tasks = Tasks::paginate(10);
        return view('home', ['tasks'=>$tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => 'required:numeric',
            'name' => 'required',
        ]);

        $newTask = Tasks::create($data);
        return redirect(route('dashboard'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasks $tasks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Tasks $tasks)
    {
        dd($request);

//        return view('dashboard', [
//            'task' => $request,
//        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tasks $tasks)
    {
        $task = Tasks::where('id', '=', $request->id);

        $data = $request->validate([
            'completion_status' => 'required'
        ]);

        $task->update($data);

        return redirect(view('dashboard'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $tasks)
    {
        //
    }
}
