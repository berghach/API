<?php

namespace App\Http\Controllers;

use App\Models\TaskTable;
use App\Http\Requests\StoreTaskTableRequest;
use App\Http\Requests\UpdateTaskTableRequest;

class TaskTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskTableRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TaskTable $taskTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskTable $taskTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskTableRequest $request, TaskTable $taskTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskTable $taskTable)
    {
        //
    }
}
