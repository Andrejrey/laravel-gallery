<?php

namespace App\Http\Controllers;

use App\Models\Indoor;
use App\Http\Requests\StoreIndoorRequest;
use App\Http\Requests\UpdateIndoorRequest;
use Illuminate\Http\Response;

class IndoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
     * @param StoreIndoorRequest $request
     * @return Response
     */
    public function store(StoreIndoorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Indoor $indoor
     * @return Response
     */
    public function show(Indoor $indoor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Indoor $indoor
     * @return Response
     */
    public function edit(Indoor $indoor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateIndoorRequest $request
     * @param Indoor $indoor
     * @return Response
     */
    public function update(UpdateIndoorRequest $request, Indoor $indoor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Indoor $indoor
     * @return Response
     */
    public function destroy(Indoor $indoor)
    {
        //
    }
}