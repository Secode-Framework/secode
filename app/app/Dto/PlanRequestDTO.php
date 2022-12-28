<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class PlanRequestDTO
{
	private int $id;
	private string $nombre;
	private string $codigo;
	private int $tipo;
	private string $descripcion;
	private array $aplicacionIds;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): PlanRequestDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getNombre(): string
	{
		return $this->nombre;
	}


	public function setNombre(string $nombre): PlanRequestDTO
	{
		$this->nombre = $nombre;
		return $this;
	}


	public function getCodigo(): string
	{
		return $this->codigo;
	}


	public function setCodigo(string $codigo): PlanRequestDTO
	{
		$this->codigo = $codigo;
		return $this;
	}


	public function getTipo(): int
	{
		return $this->tipo;
	}


	public function setTipo(int $tipo): PlanRequestDTO
	{
		$this->tipo = $tipo;
		return $this;
	}


	public function getDescripcion(): string
	{
		return $this->descripcion;
	}


	public function setDescripcion(string $descripcion): PlanRequestDTO
	{
		$this->descripcion = $descripcion;
		return $this;
	}


	public function getAplicacionIds(): array
	{
		return $this->aplicacionIds;
	}


	public function setAplicacionIds(array $aplicacionIds): PlanRequestDTO
	{
		$this->aplicacionIds = $aplicacionIds;
		return $this;
	}
}
