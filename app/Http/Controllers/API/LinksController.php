<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Links;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller
{
    public function createShortLink(Request $request)
    {
        $link = new Links();
        $link->uid = (Auth::user()) ? Auth::user()->id : NULL;
        $link->title = $request->title;
        $link->link = $request->link;
        $link->shortLink = env("APP_URL") . ':' . env("SERVER_PORT") . '/' . uniqid();
        $link->save();

        return response()->json($link);
    }
}
