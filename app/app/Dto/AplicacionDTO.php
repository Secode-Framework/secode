<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class AplicacionDTO
{
	private int $id;
	private string $nombre;
	private string $codigo;
	private int $tipo;
	private string $descripcion;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): AplicacionDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getNombre(): string
	{
		return $this->nombre;
	}


	public function setNombre(string $nombre): AplicacionDTO
	{
		$this->nombre = $nombre;
		return $this;
	}


	public function getCodigo(): string
	{
		return $this->codigo;
	}


	public function setCodigo(string $codigo): AplicacionDTO
	{
		$this->codigo = $codigo;
		return $this;
	}


	public function getTipo(): int
	{
		return $this->tipo;
	}


	public function setTipo(int $tipo): AplicacionDTO
	{
		$this->tipo = $tipo;
		return $this;
	}


	public function getDescripcion(): string
	{
		return $this->descripcion;
	}


	public function setDescripcion(string $descripcion): AplicacionDTO
	{
		$this->descripcion = $descripcion;
		return $this;
	}
}
