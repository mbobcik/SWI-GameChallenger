<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class OutlookController extends Controller
{
    public function mail()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        $tokenCache = new \App\TokenStore\TokenCache;

        echo 'Token: '.$tokenCache->getAccessToken();
    }
}