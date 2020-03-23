<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show()
    {
        $articles = \DB::table('articles')->get();
        return view('articles', [
            'articles' => $articles
        ]);
    }

    public function search(Request $request)
    {
        $article = $request->input('article');
        if (empty($article)) {
            return $this->show();
        } else {
            $articles = \DB::table('articles')->where('name', $article)->get();
            return view('articles', [
                'articles' => $articles
            ]);
        }
    }
}
