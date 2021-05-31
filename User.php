<?php 
require "Human.php";

class User extends Human{


	public function __construct(){

	}

	public function registerUser($username, $password){

		//manipulations before passing data to createUser() method


		$user = $this->createUser($username, $password);

		return $user;

	}






}



$user = new User;

$user = $user->registerUser('jamesuser', 'password');

echo $user['username'];



