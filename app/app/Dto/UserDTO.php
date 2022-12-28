<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class UserDTO
{
	private int $id;
	private string $username;
	private string $password;
	private int $estado;
	private int $perfilId;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): UserDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getUsername(): string
	{
		return $this->username;
	}


	public function setUsername(string $username): UserDTO
	{
		$this->username = $username;
		return $this;
	}


	public function getPassword(): string
	{
		return $this->password;
	}


	public function setPassword(string $password): UserDTO
	{
		$this->password = $password;
		return $this;
	}


	public function getEstado(): int
	{
		return $this->estado;
	}


	public function setEstado(int $estado): UserDTO
	{
		$this->estado = $estado;
		return $this;
	}


	public function getPerfilId(): int
	{
		return $this->perfilId;
	}


	public function setPerfilId(int $perfilId): UserDTO
	{
		$this->perfilId = $perfilId;
		return $this;
	}
}
