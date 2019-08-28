<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Message;
use Mail;
use App\Mail\NewContact;
use App\Mail\MailReceived;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except'=>'store']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('id', 'ASC')->paginate();
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = Message::create($request->all());
        Mail::to('kukulhasupp@gmail.com')->send(new NewContact($message));
        Mail::to($message->email)->send(new MailReceived($message));
        return redirect()->route('home')->with('infom', 'Mensaje enviado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::findOrFail($id)->delete();
        return redirect()->route('messages.index')->with('infom', 'Mensaje eliminado correctamente');
    }
}
