<?php

namespace App\Http\Controllers;
use App\Mail\SendValidation;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
  public function sendMail()
  {
      // Envío vacío
      // Mail::to('nicolas.ormeno@krei.cl', 'ASDF')->send(new SendValidation([]));

      // Envío con información a $data
      $data = ['nombre' => 'Juan', 'apellido' => 'Pérez'];
      Mail::to('web@altavision.com.co', 'ASDF')->send(new SendValidation($data));
  }
}
