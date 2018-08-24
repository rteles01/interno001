<?php

namespace App\Http\Controllers;

use App\Financeiro;
use Illuminate\Http\Request;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Task;
use App\Transformer\TaskTransformer;


class FinanceiroController extends Controller
{

    protected $respose;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Get all task
        $tasks = Financeiro::paginate(15);
        // Return a collection of $task with pagination
        return $this->response->withPaginator($tasks, new  TaskTransformer());
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
    public function store(Request $request)  {
        if ($request->isMethod('put')) {
            //Get the task
            $task = Financeiro::find($request->task_id);
            if (!$task) {
                return $this->response->errorNotFound('Task Not Found');
            }
        } else {
            $task = new Financeiro;
        }

        $task->id = $request->input('task_id');
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->user_id =  1; //$request->user()->id;

        if($task->save()) {
            return $this->response->withItem($task, new  TaskTransformer());
        } else {
            return $this->response->errorInternalError('Could not updated/created a task');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function show(Financeiro $financeiro)
    {
        //

        //Get the task
        $task = Financeiro::find($id);
        if (!$task) {
            return $this->response->errorNotFound('Task Not Found');
        }
        // Return a single task
        return $this->response->withItem($task, new  TaskTransformer());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function edit(Financeiro $financeiro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Financeiro $financeiro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Financeiro  $financeiro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Financeiro $financeiro)
    {
        //
        //Get the task
        $task = Financeiro::find($id);
        if (!$task) {
            return $this->response->errorNotFound('Task Not Found');
        }

        if($task->delete()) {
            return $this->response->withItem($task, new  TaskTransformer());
        } else {
            return $this->response->errorInternalError('Could not delete a task');
        }
    }
}
