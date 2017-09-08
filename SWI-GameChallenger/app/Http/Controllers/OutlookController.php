<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

//use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class OutlookController extends Controller
{
    public function mail()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $tokenCache = new \App\TokenStore\TokenCache;

        $graph = new Graph();
        $graph->setAccessToken($tokenCache->getAccessToken());

        $user = $graph->createRequest('GET', '/me')
            ->setReturnType(Model\User::class)
            ->execute();

        //echo 'User: ' . $user->getDisplayName() . ' - ' . $user->getMail();

        return view("content")->with('username',$user->getDisplayName());

    }
    public function createChallenge(Request $request){
        $name = $request->input('game');
//        $input = Input::only('game');
        echo $name;
        return view("content")->with("laala");
    }
    public function signOut(){
        return view("signout");
    }

}