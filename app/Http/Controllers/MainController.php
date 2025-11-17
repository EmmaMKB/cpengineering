<?php

namespace App\Http\Controllers;

use Dom\Text;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    //
    function contact(Request $request) : string {

        return "We have received your message. Thank you!";
    }
}
