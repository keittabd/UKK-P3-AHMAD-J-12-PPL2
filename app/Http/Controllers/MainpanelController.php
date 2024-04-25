<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videourl;

class MainpanelController extends Controller
{
    
    public function index(Request $request)
    {
        $videos = Videourl::all();
        return view('/videourl', ['video' => $videos]);

        $request->validate([
            'youtube_url' => 'required|url|regex:/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/'
        ]);
        $youtubeUrl = 'https://youtu.be/92a7Hj0ijLs?si=7FqHFVmX-WjyhFtT';
        $query = parse_url($youtubeUrl, PHP_URL_QUERY);
        parse_str($query, $params);
        $youtubeId = $params['v']; // '7FqHFVmX-WjyhFtT'

        
    }
}

