<?php

class ItemEntity extends DefaultEntity
{
	private $ID;
	private $quantity;
	private $price;

	public function __construct($data)
	{
		list($ID, $quantity, $price) = explode('-', $data);
		$this->ID = (int) $this->sanitize($ID);
		$this->quantity = (int) $this->sanitize($quantity);
		$this->price = (float) $this->sanitize($price);
	}

	public function getID()
	{
		return $this->ID;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getTotal()
	{
		return $this->quantity * $this->price;
	}
}
