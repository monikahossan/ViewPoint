<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    public function index()
    {
    	return view('layout.index');
    }


    public function addclient(Request $request)
    {
    	if($request->isMethod('post'))
    	{
    		$data= $request->all();

    		$client=new Client;
    		$client->name=$data['name'];
            $client->email=$data['email'];
    		$client->textbox=$data['textbox'];
    		$client->save();
    		return redirect()->back();
    	}
    }
}
