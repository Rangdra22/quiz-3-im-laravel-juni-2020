<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;
use App\Artikel;
use App\Category;

class ArtikelController extends Controller
{
    public function index(){
        // $artikel = ArtikelModel::get_all();
        // dd($artikel);
        $artikel = Artikel::all();
        return view('quiz3.artikel', compact('artikel'));
    }

    public function create(){
        $categories= Category::all();
        // dd('test');
        return view('quiz3.form_artikel', compact('categories'));
    }

    public function store(Request $request){
        // $data = $request->all();
        // unset($data["_token"]);
        // ArtikelModel::save($data);
        // return redirect('/artikel');

        // Cara Eloquent
        // $new_article = new Artikel;
        // $new_article->judul = $request["judul"];
        // $new_article->isi = $request["isi"];
        // $new_article->slug = $request["slug"];
        // $new_article->tag = $request["tag"];

        // $new_article->save();

        $new_article = Artikel::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "slug" => $request["slug"],
            "tag" => $request["tag"],
            "category_id" => $request["category_id"] 
        ]);
        
        return redirect('/artikel');
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        // dd($jawabans);
        return view('quiz3.detail_artikel', compact('artikel'));
    }

    public function edit($id, Request $request){
        $artikel = ArtikelModel::find_by_id($id);
        $categories = Category::all();
        
        return view('quiz3.edit_artikel' , compact('artikel', 'id','categories'));
    }

    public function update(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        unset($data["_method"]);
        $artikel = ArtikelModel::update($data);
        // dd($data);
        return redirect('/artikel');
    }

    public function destroy($id){
        // ArtikelModel::delete($id);
        Artikel::destroy($id);
        return redirect('/artikel');
    }

}
