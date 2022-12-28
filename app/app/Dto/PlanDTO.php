<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class PlanDTO
{
	private int $id;
	private string $nombre;
	private string $codigo;
	private int $tipo;
	private string $descripcion;
	private array $aplicaciones;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): PlanDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getNombre(): string
	{
		return $this->nombre;
	}


	public function setNombre(string $nombre): PlanDTO
	{
		$this->nombre = $nombre;
		return $this;
	}


	public function getCodigo(): string
	{
		return $this->codigo;
	}


	public function setCodigo(string $codigo): PlanDTO
	{
		$this->codigo = $codigo;
		return $this;
	}


	public function getTipo(): int
	{
		return $this->tipo;
	}


	public function setTipo(int $tipo): PlanDTO
	{
		$this->tipo = $tipo;
		return $this;
	}


	public function getDescripcion(): string
	{
		return $this->descripcion;
	}


	public function setDescripcion(string $descripcion): PlanDTO
	{
		$this->descripcion = $descripcion;
		return $this;
	}


	public function getAplicaciones(): array
	{
		return $this->aplicaciones;
	}


	public function setAplicaciones(array $aplicaciones): PlanDTO
	{
		$this->aplicaciones = $aplicaciones;
		return $this;
	}
}
