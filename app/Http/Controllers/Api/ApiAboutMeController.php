<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutMeResource;
use App\Models\AboutMe;
use Illuminate\Http\Response;


class ApiAboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = AboutMe::all();
        $data = AboutMeResource::collection($data);
        return response()->json($data);
    }

}
