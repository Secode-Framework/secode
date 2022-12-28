<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class ServidorDTO
{
	private int $id;
	private string $nombre;
	private string $url;
	private string $ftpHost;
	private string $ftpUser;
	private string $ftpPassword;
	private int $ftpPort;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): ServidorDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getNombre(): string
	{
		return $this->nombre;
	}


	public function setNombre(string $nombre): ServidorDTO
	{
		$this->nombre = $nombre;
		return $this;
	}


	public function getUrl(): string
	{
		return $this->url;
	}


	public function setUrl(string $url): ServidorDTO
	{
		$this->url = $url;
		return $this;
	}


	public function getFtpHost(): string
	{
		return $this->ftpHost;
	}


	public function setFtpHost(string $ftpHost): ServidorDTO
	{
		$this->ftpHost = $ftpHost;
		return $this;
	}


	public function getFtpUser(): string
	{
		return $this->ftpUser;
	}


	public function setFtpUser(string $ftpUser): ServidorDTO
	{
		$this->ftpUser = $ftpUser;
		return $this;
	}


	public function getFtpPassword(): string
	{
		return $this->ftpPassword;
	}


	public function setFtpPassword(string $ftpPassword): ServidorDTO
	{
		$this->ftpPassword = $ftpPassword;
		return $this;
	}


	public function getFtpPort(): int
	{
		return $this->ftpPort;
	}


	public function setFtpPort(int $ftpPort): ServidorDTO
	{
		$this->ftpPort = $ftpPort;
		return $this;
	}
}
