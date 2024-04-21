<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainpanelController extends Controller
{
    public function videourl(Request $request)
{
    $video_url = $_GET['video-url'];
    $video_url = explode('=', $video_url);
    $video_url = $video_url['1'];
    $video_url = "https://youtu.be/92a7Hj0ijLs?si=x3cB4pwkkLEkP326";


    return redirect('/video-url');
}
}
