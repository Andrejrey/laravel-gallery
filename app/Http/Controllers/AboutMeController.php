<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Http\Requests\StoreAboutMeRequest;
use App\Http\Requests\UpdateAboutMeRequest;
use Illuminate\Http\Response;

class AboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $aboutMe = AboutMe::all();
        return view('admin.about_me.index', compact('aboutMe'));
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
     * @param StoreAboutMeRequest $request
     * @return Response
     */
    public function store(StoreAboutMeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param AboutMe $aboutMe
     * @return Response
     */
    public function show(AboutMe $aboutMe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AboutMe $aboutMe
     * @return Response
     */
    public function edit(AboutMe $aboutMe)
    {
        return view('admin.about_me.edit', compact('aboutMe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAboutMeRequest $request
     * @param AboutMe $aboutMe
     * @return Response
     */
    public function update(UpdateAboutMeRequest $request, AboutMe $aboutMe)
    {
        $aboutMe->update($request->validated());
        return redirect('/about_me')->with('success', 'About Me updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AboutMe $aboutMe
     * @return Response
     */
    public function destroy(AboutMe $aboutMe)
    {
        $aboutMe->delete();
        return redirect('/about_me')->with('success', 'About Me deleted successfully');
    }
}
