<?php

namespace App\Http\Controllers;

use App\Models\CommunityRegister;
use App\Models\FinancialServiceRegister;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ManageBankRegisterController extends Controller
{
    public function index()
    {
        // return CommunityRegister::join('communities', 'communities.uuid', '=', 'community_registers.community_uuid')->get(['community_registers.*', 'community_registers.name as nama', 'communities.name']);

        return view('dashboard.manage.bankregister.index', [
            'title'         => 'Bank Register',
        ]);
    }
    public function anyData()
    {
        return Datatables::of(FinancialServiceRegister::latest())
            ->addColumn('action', function ($model) {
                return '<button onclick="myFunction(' . $model->id . ')"  type="button" class="btn btn-danger  py-1 px-2"><i class="icon-copy dw dw-trash"></i></button>';
            })


            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FinancialServiceRegister  $financialServiceRegister
     * @return \Illuminate\Http\Response
     */
    public function show(FinancialServiceRegister $financialServiceRegister)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FinancialServiceRegister  $financialServiceRegister
     * @return \Illuminate\Http\Response
     */
    public function edit(FinancialServiceRegister $financialServiceRegister)
    {
        //
        return $financialServiceRegister;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FinancialServiceRegister  $financialServiceRegister
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FinancialServiceRegister $financialServiceRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FinancialServiceRegister  $financialServiceRegister
     * @return \Illuminate\Http\Response
     */
    public function destroy(FinancialServiceRegister $financialServiceRegister)
    {
        FinancialServiceRegister::destroy($financialServiceRegister->id);
        return redirect('/bank-register')->with('success', 'Financial Register has been Deleted!');
    }
}
