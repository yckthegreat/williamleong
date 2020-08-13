<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;


class ArticlesController extends Controller
{
    public function overview() {

        $allArticles = Article::all();

        return view('backoffice.articles.overview');
    }
}
