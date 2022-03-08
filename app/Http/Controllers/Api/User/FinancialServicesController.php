<?php

namespace App\Http\Controllers\Api\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FinancialService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Models\FinancialServiceRegister;
use App\Models\FinancialServiceSubmission;

class FinancialServicesController extends Controller
{
    // list all financial services
    public function listFinancialServicesUser()
    {
        // $financial_services = FinancialService::all();
        $financial_services = FinancialService::join('galleries', 'financial_services.logo_path', '=', 'galleries.uuid')
            ->get(['financial_services.*', 'galleries.path']);

        $meta = [
            'message' => "List all financial services",
            'code'  => 200,
            'status'  => "success"
        ];
        $response = [
            'meta'  => $meta,
            'data'  => $financial_services
        ];
        return response()->json($response, 200);
    }

    public function registerFinancialServicesUser(Request $request, $id)
    {
        $request->validate([
            'financial_service_uuid' => 'required',
            'name'           => 'required',
            'address'        => 'required',
            'phone_number'   => 'required',
            'email'          => 'required|email',
            'profession'     => 'required',
            // 'status'         => 'required',
        ]);

        DB::beginTransaction();
        try {
            $uuid = Str::uuid()->toString();
            $register = FinancialServiceRegister::create([
                'uuid'              => $uuid,
                'financial_service_uuid'    => $request->financial_service_uuid,
                'user_uuid'         => $id,
                'name'              => $request->name,
                'address'           => $request->address,
                'phone_number'      => $request->phone_number,
                'email'             => $request->email,
                'profession'        => $request->profession,
                // 'status'            => $request->status,
            ]);

            $meta = [
                'message' => "Financial service register has been success",
                'code'  => 201,
                'status'  => "success"
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $register,
            ];
            DB::commit();
            return response()->json($response, 201);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }

    // financial service submission
    public function submissionFinancialServicesUser(Request $request, $id)
    {
        // return $request->all();
        $request->validate([
            'financial_service_uuid' => 'required',
            'name'           => 'required',
            'address'        => 'required',
            'business_name'  => 'required',
            'business_address' => 'required',
            'income'         => 'required',
            'loan_estimate'  => 'required',
            'purpose'        => 'required',
            'identity_card' => 'required',
        ]);

        DB::beginTransaction();
        try {

            if ($image = $request->file('identity_card')) {
                $random = Str::random(16);
                $uploadImage = 'images/identitiy-card/';
                $profileImage = $random . "." . $image->getClientOriginalExtension();
                $image->move($uploadImage, $profileImage);
                $request->identity_card = '/' . $uploadImage . $profileImage;
            } else {
                return response()->json(422);
            }

            $uuid = Str::uuid()->toString();
            $submission = FinancialServiceSubmission::create([
                'uuid'              => $uuid,
                'financial_service_uuid'    => $request->financial_service_uuid,
                'user_uuid'         => $id,
                'name'              => $request->name,
                'address'           => $request->address,
                'business_name'     => $request->business_name,
                'business_address'  => $request->business_address,
                'income'            => $request->income,
                'loan_estimate'     => $request->loan_estimate,
                'purpose'           => $request->purpose,
                'identity_card'     => $request->identity_card,
            ]);

            $meta = [
                'message' => "Financial service submission has been success",
                'code'  => 201,
                'status'  => "success"
            ];

            $response = [
                'meta'  => $meta,
                'data'  => $submission,
            ];
            DB::commit();
            return response()->json($response, 201);
        } catch (QueryException $e) {
            DB::rollback();
            return response()->json([
                'message' => 'Failed' . $e->errorInfo
            ]);
        }
    }
}
