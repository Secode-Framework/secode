<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class UserLoginDTO
{
	private string $username;
	private string $password;


	public function getUsername(): string
	{
		return $this->username;
	}


	public function setUsername(string $username): UserLoginDTO
	{
		$this->username = $username;
		return $this;
	}


	public function getPassword(): string
	{
		return $this->password;
	}


	public function setPassword(string $password): UserLoginDTO
	{
		$this->password = $password;
		return $this;
	}
}
