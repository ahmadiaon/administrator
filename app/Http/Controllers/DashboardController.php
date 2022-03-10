<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\Datatables\Datatables;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        $data["email"] = "dataahmadi2021@gmail.com";
        $data["title"] = "From digi.com";
        $data["body"] = "This is Demo";
        $data["content"] = "This is Demo";

        $pdf = PDF::loadView('myPDF', $data);
        session()->put('email', 'id');

         Mail::send('contenMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });

        return view('dashboard.index', [
            'title'         => 'Dashboard'
        ]);
    }
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
