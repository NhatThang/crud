<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function getAllPosts() {
        $posts = DB::table('posts')->get();
        return view('crud.posts', compact('posts'));
    }

    public function addPost() {
        return view('crud.add-post');
    }

    public function addPostSubmit(Request $request) {

        $validateData = $request->validate([
            'tittle' => 'required|unique:posts|min:5|max:200',
            'body' => 'required|min:5|max:200',
        ]);

        // DB::table('posts')->insert([
        //     'tittle' => $request->tittle,
        //     'body' => $request->body
        // ]);
        DB::table('posts')->insert($validateData);
        return redirect()->route('post.add')->with('post_created', 'Post has been created successfully.');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id', $id)->first();
        return view('crud.single-post', compact('post'));
    }

    public function deletePost($id){
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted', 'Post has been deleted successfully!');
    }

    public function editPost($id){
        $edit_post = DB::table('posts')->where('id', $id)->first();
        return view('crud.edit-post', compact('edit_post'));
    }

    public function updatePost(Request $request) {
        $validateData = $request->validate([
            'tittle' => 'required|unique:posts|min:5|max:100',
            'body' => 'required|min:5|max:100'
        ]);
        if($validateData) {
            // DB::table('posts')->where('id', $request->id)->update([
            //     'tittle' => $request->tittle,
            //     'body' => $request->body
            // ]);
            DB::table('posts')->where('id', $request->id)->update($validateData);
            return back()->with('post_updated', 'Post has been updated successfully!');
        }
    }
}
