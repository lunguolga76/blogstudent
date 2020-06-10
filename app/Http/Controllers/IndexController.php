<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    protected $message;
    protected $header;


    public function __construct(){
       $this->header = 'Hello, world!';
       $this->message = 'This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.';

   }
        public function index(){

       $articles = Article::select(['id', 'title', 'desc'])->get();
       /*dump($articles);*/
       return view('page')->with([
           'header' => $this->header,
           'message' => $this->message,
           'articles' => $articles

       ]);
   }
       public function show($id){
           $article = Article::select(['id', 'title', 'text'])->where('id',$id)->first();
           return view('article-content')->with([
               'header' => $this->header,
               'message' => $this->message,
               'article' => $article
               ]);
   }
   public function add(){
       return view('add-content')->with([
           'header' => $this->header,
           'message' => $this->message]);

   }
   public function store(Request $request){
        $this->validate($request,[
            'title'=>'required|max:255',
            'alias'=>'required|unique:articles,alias',
            'img'=>'max:255',
            'text'=>'required']);
        $data=$request->all();
        $article=new Article;
        $article->fill($data);
        $article->save();
        return redirect('/');
   }
}
