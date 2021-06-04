<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MessagesController;
use App\Models\Message;
use App\Models\User0;

class MessagesController extends Controller
{
    public function submit(Request $request) {
       $this->validate($request, [
        'name' => 'required',
        'email' => 'required'
       ]);

       //create New Message
       $message = new Message;
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->message = $request->input('message');

       //save Message
       $message->save();

       //redirect again to home page

       return redirect('/')->with('success','Message Sent');
    }

    public function getMessages(){
        $messages = Message::all();

        return view('messages')->with('messages',$messages);
    }

    public function submit0(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        $users= new User0;
        $users->name = $request->input('name');
        $users->email = $request->input('email');
        $users->password = $request->input('password');

        $users->save();

        $messages = Message::all();
        return view('messages')->with('messages',$messages);
    }
}
