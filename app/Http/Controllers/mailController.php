<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newUser;

class mailController extends Controller
{
    public function index(){

    }
    public function send(){
    	Mail::send(['text' => 'mail'],['name','Akshay'],function($message){
    		$message->to('akshay.dongare@gohappyride.in','To Akshay')->subject('Test email');
    		$message->from('akshay9219@gmail.com','Akshay');
    	});
    }

}
