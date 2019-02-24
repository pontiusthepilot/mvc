<?php
class Users extends Controller
{
	public function get($id = null)
	{
		$userModel = $this->model('user');

		if ($id) {
			$user = $userModel->find($id);
		}
		
		$this->view('users/profile', [
			'user' => $user
		]);

	}
}