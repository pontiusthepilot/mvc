<?php

class home extends Controller
{
	public function index($name = 'Arthur', $mood = 'Happy')
	{
		$user = $this->model('user', 'mood');

		$user->name = $name;
		$user->mood = $mood;

		$this->view('home/home', [
			'name' => $user->name,
			'mood' => $user->mood
		]);
	}
}
