<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('chats')->where('id_user', Auth::id())->get();
        return view('chat/index_user', ['data' => $data]);
    }
    public function indexadmin()
    {
        $data = DB::table('chats')
        ->select('users.name','chats.id_user')
        ->leftJoin('users', 'users.id', '=', 'chats.id_user')
        ->groupby('id_user','users.name')->get();
        return view('chat/index_admin', ['data' => $data]);
    }
    public function showuser(Request $request){
        $data = DB::table('chats')->select('chats.*','users.name')
        ->leftJoin('users', 'users.id', '=', 'chats.id_user')->where('id_user', $request->id_user)->get();
        return view('chat/show_user', ['data' => $data,'id_user' => $request->id_user]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send_pesan_user(Request $request)
    {
        $data = new \App\Chat;
        $data->id_user = Auth::id();
        $data->comment = $request->comment;
        $data->type = 'user';

        $data->save();
        return redirect('/chat');
    }
    public function send_pesan_admin(Request $request)
    {
        $data = new \App\Chat;
        $data->id_user = $request->id_user;
        $data->comment = $request->comment;
        $data->type = 'admin';

        $data->save();
        return redirect('/showuser/'.$request->id_user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function show(Chat $chat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chat  $chat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chat $chat)
    {
        //
    }
}
