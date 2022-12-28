<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class RepresentanteDTO
{
	private int $id;
	private string $direccion;
	private string $email;
	private int $estado;
	private string $numeroDocumento;
	private string $razonSocial;
	private string $telefono;
	private int $ubigeoId;
	private int $representanteId;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): RepresentanteDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getDireccion(): string
	{
		return $this->direccion;
	}


	public function setDireccion(string $direccion): RepresentanteDTO
	{
		$this->direccion = $direccion;
		return $this;
	}


	public function getEmail(): string
	{
		return $this->email;
	}


	public function setEmail(string $email): RepresentanteDTO
	{
		$this->email = $email;
		return $this;
	}


	public function getEstado(): int
	{
		return $this->estado;
	}


	public function setEstado(int $estado): RepresentanteDTO
	{
		$this->estado = $estado;
		return $this;
	}


	public function getNumeroDocumento(): string
	{
		return $this->numeroDocumento;
	}


	public function setNumeroDocumento(string $numeroDocumento): RepresentanteDTO
	{
		$this->numeroDocumento = $numeroDocumento;
		return $this;
	}


	public function getRazonSocial(): string
	{
		return $this->razonSocial;
	}


	public function setRazonSocial(string $razonSocial): RepresentanteDTO
	{
		$this->razonSocial = $razonSocial;
		return $this;
	}


	public function getTelefono(): string
	{
		return $this->telefono;
	}


	public function setTelefono(string $telefono): RepresentanteDTO
	{
		$this->telefono = $telefono;
		return $this;
	}


	public function getUbigeoId(): int
	{
		return $this->ubigeoId;
	}


	public function setUbigeoId(int $ubigeoId): RepresentanteDTO
	{
		$this->ubigeoId = $ubigeoId;
		return $this;
	}


	public function getRepresentanteId(): int
	{
		return $this->representanteId;
	}


	public function setRepresentanteId(int $representanteId): RepresentanteDTO
	{
		$this->representanteId = $representanteId;
		return $this;
	}
}
