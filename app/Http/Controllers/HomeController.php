<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;

class HomeController extends Controller{

    protected $client;

    public function __construct(){
        $this->client = new Client(['base_uri' => 'http://li1416-221.members.linode.com:8889/api/', 'timeout' => 2.0]);
    }

    public function home(){
        $code = null;
        $reason = null;
        $body = null;
        try{
            $response = $this->client->request('GET', 'activites', ['auth' => ['john123', 'password']]);
            $code = $response->getStatusCode();
            $reason = $response->getReasonPhrase();
            $body = $response->getBody();
            dd(json_decode($body, true));
        }catch (ClientException $ex){
            $code = $ex->getResponse()->getStatusCode();
            $reason = $ex->getResponse()->getReasonPhrase();
            dd('Code: ' . $code . ' : Reason: ' . $reason);
        }
        $types = null;
        return view('home', compact('code','reason', 'body'));
    }

    public function login(){

    }

}
