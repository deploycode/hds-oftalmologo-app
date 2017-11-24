<?php

namespace App\Http\Controllers;
use App\Mail\SendValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;

class MailController extends Controller
{
  public function sendMail(Request $request)
  {
      $data = ['email'=> $request->input('email') , 'message'=> $request->input('message')];
      Mail::to('promocionyprevencion@hablemosdesalud.com.co', 'ASDF')->send(new SendValidation($data));
      return redirect()->route('success');
  }
}
