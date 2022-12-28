<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class PerfilDTO
{
	private int $id;
	private string $nombre;
	private int $estado;
	private array $permisos;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): PerfilDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getNombre(): string
	{
		return $this->nombre;
	}


	public function setNombre(string $nombre): PerfilDTO
	{
		$this->nombre = $nombre;
		return $this;
	}


	public function getEstado(): int
	{
		return $this->estado;
	}


	public function setEstado(int $estado): PerfilDTO
	{
		$this->estado = $estado;
		return $this;
	}


	public function getPermisos(): array
	{
		return $this->permisos;
	}


	public function setPermisos(array $permisos): PerfilDTO
	{
		$this->permisos = $permisos;
		return $this;
	}
}
