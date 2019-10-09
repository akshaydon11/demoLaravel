<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newUser;

class mailController extends Controller
{
    public function index(){

    }
    public function send(Request $request){

    	$to = $request->email;
    	$message = $request->message;
    	Mail::send(['text' => 'mail'],['name','Akshay'],function($message){
    		$message->to('akss@gmail.com','To User')->subject('Request');
    		$message->from('akshay9219@gmail.com','Akshay');
    	});

    	return redirect()->route('empList');
    }

}
