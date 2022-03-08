<?php

namespace App\Http\Controllers\Api\User;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    // list all news
    public function listNewsUser()
    {
        $news = News::all();
        // $news = News::join('galleries', 'news.logo_path', '=', 'galleries.uuid')
        //     ->get(['news.*', 'galleries.path']);

        $meta = [
            'message' => "List all news",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $news
        ];
        return response()->json($response, 200);
    }
}
