<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ReviewController extends Controller
{
    public function view(){
        $posts = Post::latest()->paginate(5);
        return view('review.index',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'kepuasan' => 'required',
            'kebersihan' => 'required',
            'pesan' => 'required'
        ]);
        $request->user()->posts()->create([
            'user_id' => auth()->id(),
            'kepuasan' => $request->kepuasan,
            'kebersihan' => $request->kebersihan,
            'pesan' => $request->pesan
        ]);
        
        $request->session()->flash('success', 'Post Berhasil!');
        return back();
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $request->validate([
            'kepuasan' => 'required',
            'kebersihan' => 'required',
            'pesan' => 'required'
        ]);
        $request->user()->posts()->update([
            'user_id' => auth()->id(),
            'kepuasan' => $request->kepuasan,
            'kebersihan' => $request->kebersihan,
            'pesan' => $request->pesan
        ]);
        return redirect('/review');
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/review');
    }

    public function hasPosted(){
        // if(){

        // }
    }
}
