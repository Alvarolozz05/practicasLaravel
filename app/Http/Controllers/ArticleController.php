<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;

    class ArticleController extends Controller {

        public function index() {
            $id = 1;
            $username = 'Pepe';
            $articles = ["Artículo 1", "Artículo 2", "Artículo 3"];

            return view('articles', compact('id', 'username', 'articles'));
        }
    }