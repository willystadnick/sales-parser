<?php

class SalesmanEntity extends DefaultEntity
{
	private $CPF;
	private $name;
	private $salary;

	public function __construct($data)
	{
		list($CPF, $name, $salary) = explode(',', $data);
		$this->CPF = (int) $this->sanitize($CPF);
		$this->name = (string) $this->sanitize($name);
		$this->salary = (float) $this->sanitize($salary);
	}

	public function getCPF()
	{
		return $this->CPF;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public function __toString()
	{
		return $this->CPF.','.$this->name.','.$this->salary;
	}
}
