<?php

namespace Elyan\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Elyan\Models\Task;
use Elyan\Http\Requests;
use Elyan\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate(5);;
        //$tasks = DB::table('tasks')->paginate(3);;
        return view('tasks.index', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $request->user()->tasks()->create([
            'nombre' => $request->name,
        ]);
        return redirect('/task')->with('success', 'Tarea agregada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', [
            'task' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        // $this->authorize('owner',$task);
        $task->update($request->all());
        return redirect('/task')->with('success', 'Tarea actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/task')->with('success', 'Tarea eliminada correctamente');
    }
}
