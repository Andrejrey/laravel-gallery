<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OutdoorResource;
use App\Models\Outdoor;
use Illuminate\Http\Response;


class ApiOutdoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $data = Outdoor::all();
        $data = OutdoorResource::collection($data);
        return response()->json($data);
    }

}
