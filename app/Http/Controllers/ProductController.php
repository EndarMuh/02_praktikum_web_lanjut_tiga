<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function marbel_edu_games()
    {
        return redirect()->to('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function marbel_and_friends_kids_games()
    {
        return redirect()->to('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function riri_story_books()
    {
        return redirect()->to('https://www.educastudio.com/category/riri-story-books');
    }

    public function kolak_kids_songs()
    {
        return redirect()->to('https://www.educastudio.com/category/kolak-kids-songs');
    }
}