<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        event(new MessageSent($request->input('message')));
    }
}

?>