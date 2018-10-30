<?php
	/**
	 * Created by PhpStorm.
	 * User: splaa
	 * Date: 30.10.18
	 * Time: 19:47
	 */
	
	class User
	{
		
		public $username;
		public $email;
		
		public function getAttributes(): array
		{
			return [
				'userName' => $this->username,
				'email' => $this->email,
			];
		}
	}