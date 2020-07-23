<?php

class CustomerEntity extends DefaultEntity
{
	private $CNPJ;
	private $name;
	private $businessArea;

	public function __construct($data)
	{
		list($CNPJ, $name, $businessArea) = explode(',', $data);
		$this->CNPJ = (int) $this->sanitize($CNPJ);
		$this->name = (string) $this->sanitize($name);
		$this->businessArea = (string) $this->sanitize($businessArea);
	}

	public function getCNPJ()
	{
		return $this->CNPJ;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getBusinessArea()
	{
		return $this->businessArea;
	}
}
