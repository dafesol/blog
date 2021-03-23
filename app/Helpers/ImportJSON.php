<?php

namespace App\Helpers;
use Illuminate\Support\Facades\Http;

class ImportJSON
{
    public function readJSON(){
        return json_decode(Http::get('https://sq1-api-test.herokuapp.com/posts')->body());
    }
}
