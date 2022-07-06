<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\IndoorResource;
use App\Models\Indoor;
use Illuminate\Http\Response;


class ApiIndoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Indoor::orderBy('id', 'desc')->get();
        $data = IndoorResource::collection($data);
        return response()->json($data);
    }
}
