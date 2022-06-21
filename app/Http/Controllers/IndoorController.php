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
        $indoors = Indoor::all();
        return view('admin.indoors.index', compact('indoors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.indoors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreIndoorRequest $request
     * @return Response
     */
    public function store(StoreIndoorRequest $request)
    {
        Indoor::create( $request->validated());
        return redirect('/indoor')->with('success', 'Indoor Image created successfully' );
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
        return view('admin.indoors.edit', compact('indoor'));
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
        $indoor->update($request->validated());
        return redirect('/indoor')->with('success', 'Indoor Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Indoor $indoor
     * @return Response
     */
    public function destroy(Indoor $indoor)
    {
        $indoor->delete();
        return redirect('/indoor')->with('success', 'Indoor Image deleted successfully');
    }
}
