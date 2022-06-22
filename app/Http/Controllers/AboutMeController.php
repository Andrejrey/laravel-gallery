<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Http\Requests\StoreAboutMeRequest;
use App\Http\Requests\UpdateAboutMeRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

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
        return view('admin.about_me.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAboutMeRequest $request
     * @return Response
     */
    public function store(StoreAboutMeRequest $request)
    {
        $validated = $request->validated();

        $file = $request->file('img');
        if($file) {
            $imgName = $file->hashName();
            Storage::disk('about_me')->putFileAs('', $file, $imgName);
            $validated['img'] = $imgName;
        }

        AboutMe::create($validated);
        return redirect('/about_me')->with('success', 'About Me created successfully');
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
        $validated = $request->validated();

        $file = $request->file('img');
        if($file) {
            $imgName = $file->hashName();
            Storage::disk('about_me')->putFileAs('', $file, $imgName);
            $validated['img'] = $imgName;
        }

        $aboutMe->update($validated);
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
