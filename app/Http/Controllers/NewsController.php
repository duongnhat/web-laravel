<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\News;

class NewsController extends BaseController {

    public function save(Request $request) {
        $data = $request->all();
        $file = $request->file('photo');
        $nameImage = $file->getClientOriginalName();
        $file->move('upfile', $nameImage);
        //$path = $request->file('photo')->store('news-photos');
        unlink('upfile/Hình nền 4K đẹp (26).jpg');
        $news = new News();
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->image = $nameImage;
        $news->save();
        return redirect('/admin/tools/create-news');
    }

    public function create() {
        return view('news.news');
    }

}
