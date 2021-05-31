<?php 

class Human{

	public $height = null;
	public $size = null;
	public $firstname = null;
	public $lastname = null;
	private $password = null;
	protected $username = null;


	private function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;


	}



	protected function createUser($username, $password){

			$auth_human = new Human($username, $password);

			// /return $auth_human;
			$username = $auth_human->getUsername();

			$user = [];

			$user['username'] = $username;
			$user['password'] = '';

			return $user;
			

	}

	protected function destroyUser($username, $password){

	}

	private function getUsername(){
		return $this->username;
	}

}