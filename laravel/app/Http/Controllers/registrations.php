<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrations extends Controller
{
   public function customer()
   {

       return view('registrations.customer');
   }
}
