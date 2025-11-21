<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Article;

    class ArticleController extends Controller {

        public function index() {
             $arts = Article::all();
            return view('articles.index', compact('arts'));
        }

        public function show($id) {
            $article = Article::find($id);
            return view('articles.show', compact('article'));
        }

        public function create() {
            return view('articles.create');
        }

        public function store(Request $request) {
            // Validación
            $request->validate([
                'title' => 'required|min:3',
                'body'  => 'required|min:10',
                'date'  => 'required|date',
            ]);
        
            // Crear artículo
            $article = new Article();
            $article->title = $request->title;
            $article->body  = $request->body;
            $article->date  = $request->date;
            $article->user_id = 1; // Como pide el ejercicio
            $article->save();

            // Redirigir con mensaje
            return redirect()->route('articles.index')->with('success', 'Artículo creado correctamente.');
        }
    }