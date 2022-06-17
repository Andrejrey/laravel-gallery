<?php

namespace App\Http\Controllers;

use App\Models\Outdoor;
use App\Http\Requests\StoreOutdoorRequest;
use App\Http\Requests\UpdateOutdoorRequest;
use Illuminate\Http\Response;

class OutdoorController extends Controller
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
     * @param StoreOutdoorRequest $request
     * @return Response
     */
    public function store(StoreOutdoorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Outdoor $outdoor
     * @return Response
     */
    public function show(Outdoor $outdoor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Outdoor $outdoor
     * @return Response
     */
    public function edit(Outdoor $outdoor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateOutdoorRequest $request
     * @param Outdoor $outdoor
     * @return Response
     */
    public function update(UpdateOutdoorRequest $request, Outdoor $outdoor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Outdoor $outdoor
     * @return Response
     */
    public function destroy(Outdoor $outdoor)
    {
        //
    }
}
