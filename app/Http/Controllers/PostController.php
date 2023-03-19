<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PostController extends Controller
{
    public function index(Post $post)
    {
        $posts = Post::whereIn('user_id',Auth::user()->followees()->pluck('id'))->latest()->get();
        return view('posts/index')->with(['posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }

    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
        return view('/posts/create');
    }

    public function store(Post $post, Request $request)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
        
        
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($image_url);  //画像のURLを画面に表示

        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
        
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    

    public function search(Request $request,Post $post)
    {

         /* テーブルから全てのレコードを取得する */
           


        /* キーワードから検索処理 */
        $keyword = $request->input('keyword');
        if(!empty($keyword)) {//$keyword　が空ではない場合、検索処理を実行します
            $posts=$post->where('id', 'LIKE', "%{$keyword}%")->get();

        }

        return view('posts/index')->with(['posts' => $posts]);

    }
    
    //フォロー機能
    public function follow(User $user)
    {
        //フォローする側の
        $followee=auth()->user();
        $followee->followees()->attach($user->id);
        return redirect('/');
    }
    
}
