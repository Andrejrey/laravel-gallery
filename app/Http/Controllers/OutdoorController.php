<?php

namespace App\Http\Controllers;



use App\Models\Outdoor;
use App\Http\Requests\StoreOutdoorRequest;
use App\Http\Requests\UpdateOutdoorRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class OutdoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $outdoors = Outdoor::all();
        return view('admin.outdoors.index', compact('outdoors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.outdoors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreOutdoorRequest $request
     * @return Response
     */
    public function store(StoreOutdoorRequest $request)
    {
        $validated = $request->validated();

        $file = $request->file('filename');
        if($file) {
            $imgName = $file->hashName();
            Storage::disk('outdoor')->putFileAs('', $file, $imgName);
            $validated['filename'] = $imgName;
        }

        Outdoor::create($validated);
        return redirect('/outdoor')->with('success', 'Outdoor Image created successfully' );
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
        return view('admin.outdoors.edit', compact('outdoor'));
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
        $validated = $request->validated();

        $file = $request->file('filename');
        if($file) {
            $imgName = $file->hashName();
            Storage::disk('outdoor')->putFileAs('', $file, $imgName);
            $validated['filename'] = $imgName;
        }

        $outdoor->update($validated);
        return redirect('/outdoor')->with('success', 'Outdoor Image updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Outdoor $outdoor
     * @return Response
     */
    public function destroy(Outdoor $outdoor)
    {
        $outdoor->delete();
        return redirect('/outdoor')->with('success', 'Outdoor Image deleted successfully');
    }
}
