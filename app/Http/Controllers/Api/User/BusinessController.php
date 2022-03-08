<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Business;
use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function listBusinessCategories()
    {
        $business_categories = BusinessCategory::join('galleries', 'business_categories.gallery_uuid', '=', 'galleries.uuid')
            ->get(['business_categories.*', 'galleries.path']);

        $meta = [
            'message' => "List all categories",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $business_categories
        ];
        return response()->json($response, 200);
    }

    public function listBusiness()
    {
        // $businesses = Business::join('galleries', 'businesses.image_path', '=', 'galleries.uuid')
        //     ->get(['businesses.*', 'galleries.path']);

        $businesses = Business::all();

        $meta = [
            'message' => "List all businesses",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $businesses
        ];
        return response()->json($response, 200);
    }
}
