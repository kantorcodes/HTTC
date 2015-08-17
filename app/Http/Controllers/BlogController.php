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

	public function show(){

	}
}