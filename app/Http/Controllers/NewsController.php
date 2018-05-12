<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\News;

class NewsController extends BaseController {

    public function save(Request $request) {
        $data = $request->all();
        $news = new News();
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->image = 'image';
        $news->save();
        return redirect('create-news');
    }

    public function create() {
        return view('news.news');
    }

}
