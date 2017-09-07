<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

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


        $messageQueryParams = array (
            // Only return Subject, ReceivedDateTime, and From fields
            "\$select" => "subject,receivedDateTime,from",
            // Sort by ReceivedDateTime, newest first
            "\$orderby" => "receivedDateTime DESC",
            // Return at most 10 results
            "\$top" => "10"
        );

        // https://email.solarwinds.com/api/v2.0/me/events?$select=Subject,Organizer,Start,End,Location,Attendees
        // me/events?$select=Subject,Organizer,Start,End,Location,Attendees

        $getMessagesUrl = 'me/events?$select=Subject,Organizer,Start,End,Location,Attendees';
        $messages = $graph->createRequest('GET', $getMessagesUrl)
            ->addHeaders(array ('X-AnchorMailbox' => $user->getCalendar()))
            ->setReturnType(Model\Message::class)
            ->execute();

        return view('mail', array(
            'username' => $user->getDisplayName(),
            'usermail' => $user->getMail(),
            'messages' => $messages
        ));
    }
}