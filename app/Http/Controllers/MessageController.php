<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function getMessages()
    {
        $Messages = DB::table('messages')->get();
        return view('dashboard', [
            'messages' => $Messages
        ]);
    }
}





