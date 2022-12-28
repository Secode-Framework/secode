<?php

/**
 * This file is auto-generated.
 */

declare(strict_types=1);

namespace App\Mapper;

class EmpresaDTO
{
	private int $id;
	private string $direccion;
	private string $email;
	private string $nombreComercial;
	private string $razonSocial;
	private string $ruc;
	private string $telefono;
	private int $ubigeoId;
	private RepresentanteDTO $representante;
	private int $servidorId;


	public function getId(): int
	{
		return $this->id;
	}


	public function setId(int $id): EmpresaDTO
	{
		$this->id = $id;
		return $this;
	}


	public function getDireccion(): string
	{
		return $this->direccion;
	}


	public function setDireccion(string $direccion): EmpresaDTO
	{
		$this->direccion = $direccion;
		return $this;
	}


	public function getEmail(): string
	{
		return $this->email;
	}


	public function setEmail(string $email): EmpresaDTO
	{
		$this->email = $email;
		return $this;
	}


	public function getNombreComercial(): string
	{
		return $this->nombreComercial;
	}


	public function setNombreComercial(string $nombreComercial): EmpresaDTO
	{
		$this->nombreComercial = $nombreComercial;
		return $this;
	}


	public function getRazonSocial(): string
	{
		return $this->razonSocial;
	}


	public function setRazonSocial(string $razonSocial): EmpresaDTO
	{
		$this->razonSocial = $razonSocial;
		return $this;
	}


	public function getRuc(): string
	{
		return $this->ruc;
	}


	public function setRuc(string $ruc): EmpresaDTO
	{
		$this->ruc = $ruc;
		return $this;
	}


	public function getTelefono(): string
	{
		return $this->telefono;
	}


	public function setTelefono(string $telefono): EmpresaDTO
	{
		$this->telefono = $telefono;
		return $this;
	}


	public function getUbigeoId(): int
	{
		return $this->ubigeoId;
	}


	public function setUbigeoId(int $ubigeoId): EmpresaDTO
	{
		$this->ubigeoId = $ubigeoId;
		return $this;
	}


	public function getRepresentante(): RepresentanteDTO
	{
		return $this->representante;
	}


	public function setRepresentante(RepresentanteDTO $representante): EmpresaDTO
	{
		$this->representante = $representante;
		return $this;
	}


	public function getServidorId(): int
	{
		return $this->servidorId;
	}


	public function setServidorId(int $servidorId): EmpresaDTO
	{
		$this->servidorId = $servidorId;
		return $this;
	}
}
