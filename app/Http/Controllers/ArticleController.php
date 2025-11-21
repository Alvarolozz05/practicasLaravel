<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Article;

    class ArticleController extends Controller {

        public function index() {
             $arts = Article::all();
            return view('articles.index', compact('arts'));
        }
    }