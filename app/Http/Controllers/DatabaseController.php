<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $processes = \App\Models\ProcessesModel::get();
        $entities = \App\Models\EntitiesModel::get();
        $servicePoints = \App\Models\ServicePointsModel::get();

        /*foreach ($processes as $process) {
            $process->entity = explode( ',', $process->entity );
            $process->pointsOfService = explode( ',', $process->pointsOfService );
        }

        foreach ($entities as $entity) {
            $entity->processes = explode( ',', $entity->processes );
            $entity->pointsOfService = explode( ',', $entity->pointsOfService );
        }

        foreach ($servicePoints as $servicePoint) {
            $servicePoint->processes = explode( ',', $servicePoint->processes );
        }
        */
        $processes->toArray();
        $entities->toArray();
        $servicePoints->toArray();

        return response()->json([

            "processes"=>$processes,
            "entities"=>$entities,
            "servicePoints"=>$servicePoints,
        ],200

        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}