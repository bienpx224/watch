<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){

        $listType = DB::table('channels')->select('type')->distinct()->where('state','=',1)->get();
        $listChannel = DB::table('channels')->distinct()->where('state','=',1)->get();

        $data = [
            "listType" => $listType,
            "listChannel" => $listChannel
        ];

        view()->share($data);
    }

    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        if ($req->method() == "POST")
        {
            $type = $req->input('type');
            $name = $req->input('name');
            $image = $req->input('image');
            $url = $req->input('url');
            $width = $req->input('width');
            $height = $req->input('height');
            $note = $req->input('note');
            $alias = $req->input('alias');

            $channel = new Channel();
            $channel->type = $type;
            $channel->name = $name;
            $channel->image = $image;
            $channel->url = $url;
            $channel->width = $width;
            $channel->height = $height;
            $channel->note = $note;
            $channel->alias = $alias;
            $channel->type = $type;
            $saved = $channel->save();

            return redirect('create');
        }
        if ($req->method()=="GET")
        {
            $data = [
                "title"=>"Create Channel"
            ];
            return view('create', $data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        if ($req->method() == "POST")
        {

        }
        if ($req->method()=="GET")
        {
            $channels = DB::table('channels')->groupBy('type')->orderBy('created_at', 'asc')->get();

            $data = [
                "title"=>"List Channel",
                "channels" => $channels
            ];
            return view('store', $data);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function show(Channel $channel, $alias = "vtv-1")
    {
        $channel = DB::table('channels')->where('alias','=',$alias)->first();
        if(!$channel){
            return view('error');
        }

        $data = [
            "title" => $channel->name,
            "channel" => $channel,
        ];
        return view('show', $data);
    }
    public function show2(Channel $channel)
    {
        return view('show', ["tuoi"=>"23", "alias"=>"alias"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function postUpdate(Request $req)
    {
        if ($req->method() == "POST")
        {
            $id = $req->input('id');
            $type = $req->input('type');
            $name = $req->input('name');
            $image = $req->input('image');
            $url = $req->input('url');
            $width = $req->input('width');
            $height = $req->input('height');
            $note = $req->input('note');
            $alias = $req->input('alias');
            $state = $req->input('state');

            $data = [
                "type" => $type,
                "name" => $name,
                "image" => $image,
                "url" => $url,
                "width" => $width,
                "height" => $height,
                "note" => $note,
                "alias" => $alias,
                "state" => $state,
            ];

            $channel = DB::table('channels')->where('id','=', $id)->update($data);

            return redirect('store');
        }
    }
    public function getUpdate($alias){
        if(!$alias){
            return view('error');
        }
        $channel = DB::table('channels')->where('alias','=',$alias)->first();
        if(!$channel) return view('error');
        $data = [
            "title" => "Update Channel",
            "channel" => $channel,
        ];
        return view('update', $data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Channel $channel)
    {
        //
    }
}
