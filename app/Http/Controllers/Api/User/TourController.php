<?php

namespace App\Http\Controllers\Api\User;

use App\Models\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourController extends Controller
{
    // list all tours
    public function listTourUser()
    {
        $tours = Tour::all();
        // $tours = Tour::join('galleries', 'tours.image_path', '=', 'galleries.uuid')
        //     ->get(['tours.*', 'galleries.path']);
        $meta = [
            'message' => "List all tours",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $tours
        ];
        return response()->json($response, 200);
    }
}
