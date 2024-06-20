<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = array (
            'title' => 'Top Ghibli Films',
            'ghibli' => 'Howl Moving Castle',
            'ghibli1' => 'My Neighbor Tororo',
            'ghibli2' => 'Spirited Away',
            'ghibli3' => 'Princess Mononoke',
            'ghibli4' => 'Kikis Delivery Service',
            'ghibli5' => 'The Wind Rises',
            'ghibli6' => 'Arrietty',

            'title1' => 'Top Anime Picks of all Time',
            'name' => 'Dragon Balls Series',
            'name1' => 'Naruto Series',
            'name2' => 'One Piece',
            'name3' => 'Neon Genesis Evangelion',
            'name4' => 'Full Metal Alchemist',
            'name5' => 'Gintama',
            'name6' => 'Fate Series',

            'title2' => 'Top Modern Anime',
            'mod' => 'Attack On Titan',
            'mod1' => 'My Hero Academia',
            'mod2' => 'Jujustsu Kaisen',
            'mod3' => 'Demon Slayer',
            'mod4' => 'Chainsaw Man'
        );

        return view('anime', $data);
    }
}
