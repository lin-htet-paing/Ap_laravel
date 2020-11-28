<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\storePostRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::orderBy('id', 'desc')->get();
        return view('home', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequest $request)
    {
        // $post = new Post();
        // $post->name = $request->name;
        // $post->description = $request->description;
				// $post->save();
				Post::create([
					'name' => $request->name,
					'description' => $request->description
				]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     * I used route model binding
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('showDetail', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     * I used route model binding
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     * I used route model binding.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePostRequest $request, Post $post)
    {
        // $post->name = $request->name;
        // $post->description = $request->description;
				// $post->save();
				
				$post->update([
					'name' => $request->name,
					'description' => $request->description
				]);

        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     * I used route model bindng.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/posts');
    }
}
