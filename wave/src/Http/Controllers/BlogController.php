<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use Wave\Post;
use Wave\Category;

class BlogController extends \App\Http\Controllers\Controller
{
    public function index(){
    	
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        $categories = Category::all();

        $seo = [

            'title'         => 'Tin tức của nha khoa Lucci',
            'description'   => 'Tin tin của Nha khoa Lucci, Lucci dental',
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];

    	return view('themes.tailwind.lucci.news.index', compact('posts', 'categories', 'seo'));
    }

    public function category($slug){
        
        $category = Category::where('slug', '=', $slug)->firstOrFail();
        $posts = $category->posts()->orderBy('created_at', 'DESC')->paginate(6);
        $categories = Category::all();

        return view('theme::blog.index', compact('posts', 'category', 'categories', 'seo'));
    }

    public function detail($slug){

    	$post = Post::where('slug', '=', $slug)->firstOrFail();

        $seo = [
            'title' => $post->seo_title ? $post->seo_title : $post->title,
            'description' => $post->meta_description  ? $this->truncate($post->meta_description, 135, true) : $this->truncate($post->excerpt, 135, true),
            'image'         => asset('storage/'.$post->image),
            'type'          => 'website'
        ];

    	return view('themes.tailwind.lucci.news.detail', compact('post', 'seo'));
    }

    function truncate($text, $maxlength, $dots = true) {
        if(strlen($text) > $maxlength) {
            if ( $dots ) return substr($text, 0, ($maxlength - 4)) . ' ...';
            else return substr($text, 0, ($maxlength - 4));
        } else {
            return $text;
        }
    
    }
}
