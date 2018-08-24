<?php


namespace App\Transformer;


use League\Fractal\TransformerAbstract;

class TaskTransformer extends TransformerAbstract{

    public function transform($task){

    return [

        'id' => $task->id,
        'task' => $task->name,
        'task_description' => $task->description

        ];

    }
}
