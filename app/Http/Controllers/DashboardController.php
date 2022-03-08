<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Yajra\Datatables\Datatables;


class DashboardController extends Controller
{
    public function index()
    {
        
        $data["email"] = "aatmaninfotech@gmail.com";
        $data["title"] = "From ItSolutionStuff.com";
        $data["body"] = "This is Demo";
  
        $pdf = PDF::loadView('emails.myTestMail', $data);
  
        Mail::send('emails.myTestMail', $data, function($message)use($data, $pdf) {
            $message->to($data["email"], $data["email"])
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "text.pdf");
        });
        Mail::to('clanuciha31@gmail.com')->send(new SendEmail);
        return view('dashboard.index', [
            'title'         => 'Dashboard'
        ]);
    }
    public function anyData()
    {
        return Datatables::of(User::query())->make(true);
    }
}
