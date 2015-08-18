<?php namespace App\Http\Controllers;

class BlogController extends Controller{

	public $content;

	public function __construct(){
		$this->content = app('platform.content');
	}

	public function index()
	{
		$view['posts'] = $this->content->findAll();
		$view['title'] = 'The Blog';
		$view['description'] = 'Get all the news on Raelina\'s dope book';
		
		return view('pages.blog.index',$view);

	}

	public function show($slug)
	{
		$post                = $this->content->findBySlug($slug);;
		$view['post']        = $post;
		$view['title']       = $post->title;
		$view['description'] = $post->summary;
		$view['author']      = $post->author;
		$view['thumbnail']   = isset($post->file) ? $post->file : '';
		$view['isPost']      = true;

		return view('pages.blog.show',$view);

	}
}