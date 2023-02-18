<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blogImage' => 'required'
        ]);

        $image = $request->file('blogImage');
        // dd($image);
        if ($image) {
            $imageName = Str::random(50) . '.' . $image->getClientOriginalExtension();
    
            $image->storeAs('public', $imageName);

            $slug = Str::slug($request->title, '-');
    
            Post::create([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'image_path' => $imageName,
                'user_id' => Auth::user()->id
            ]);
    
            return redirect()->route('blogs.index')->with('success', 'Blog created successfully');
        } else {
            return redirect()->route('blogs.create')->with('error', 'Something is wrong !!');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        // dd($post);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'blogImage' => 'required'
        ]);

        $updatedPost = Post::findOrFail($id);

        $image = $request->file('blogImage');
        if ($image) {
            $imageName = Str::random(50) . '.' . $image->getClientOriginalExtension();
    
            $image->storeAs('public', $imageName);

            $slug = Str::slug($request->title, '-');
    
            $updatedPost->update([
                'title' => $request->title,
                'slug' => $slug,
                'description' => $request->description,
                'image_path' => $imageName,
                'user_id' => Auth::user()->id
            ]);
    
            return redirect('blogs/' . $slug)->with('success', 'Blog updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something is wrong !!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deletedPost = Post::findOrFail($id);
        $deletedPost->delete();
        
        return redirect()->route('blogs.index')->with('success', 'Blog deleted successfully');
    }
}
