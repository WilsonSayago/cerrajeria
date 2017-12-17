<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slider;
use App\Product;
use App\Notice;
use Illuminate\Support\Facades\Input;
use Abraham\TwitterOAuth\TwitterOAuth;

class IndexController extends Controller
{
	public function index(){
		return view('welcome');
	}
	public function about(){
		return view('about');
	}
	public function contact(){
		
        define('COMSUMER_KEY', '1pBqfRVgd520lF215LZlPNqwI');
        define('COMSUMER_SECRET', 'V94SrpiReAeUgJDY1KrY1OdbkRtMU9szMNfwI1skiD3alfzOzE');
        $access_token = '889308796581015552-0wzx0eZCWbNi9YfBXXmK8J4ffbT4NgN';
        $access_token_secret = 't6ypbxNdqtRcQ3kNNDMOcyi3MuSFd9WwBd6ETrEVuuEs0';
        $connection = new TwitterOAuth(COMSUMER_KEY, COMSUMER_SECRET, $access_token, $access_token_secret);
        $sendTweet = $connection->post('statuses/update',['status' => 'prueba']);
		return view('contact');

	}
}
