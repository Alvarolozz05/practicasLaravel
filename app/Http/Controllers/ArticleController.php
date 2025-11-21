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
            $request->validate([
                'title' => 'required|min:3',
                'body'  => 'required|min:10',
                'date'  => 'required|date',
            ]);
        
            $article = new Article();
            $article->title = $request->title;
            $article->body  = $request->body;
            $article->date  = $request->date;
            $article->user_id = 1;
            $article->save();

            return redirect()->route('articles.index')->with('success', 'Artículo creado correctamente.');
        }

        public function destroy($id) {
            $article = Article::find($id);

            if (!$article) {
                return redirect()->route('articles.index')->with('error', 'Artículo no encontrado.');
            }

            try {
                $article->delete();
                return redirect()->route('articles.index')->with('success', 'Artículo eliminado correctamente.');
            } catch (\Exception $e) {
                return redirect()->route('articles.index')->with('error', 'Error al borrar el artículo.');
            }
        }
    }