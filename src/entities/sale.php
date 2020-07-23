<?php

class SaleEntity extends DefaultEntity
{
	private $saleID;
	private $items;
	private $salesmanID;

	public function __construct($data)
	{
		list($saleID, $rest) = explode(',[', $data);
		list($items, $salesmanID) = explode('],', $rest);
		$this->saleID = (int) $this->sanitize($saleID);
		$this->items = new ItemCollection;
		$items = explode(',', $items);
		foreach ($items as $item) {
			$this->items->add($item);
		}
		$this->salesmanID = (string) $this->sanitize($salesmanID);
	}

	public function getSaleID()
	{
		return $this->saleID;
	}

	public function getItems()
	{
		return $this->items;
	}

	public function getSalesmanID()
	{
		return $this->salesmanID;
	}

	public function getTotal()
	{
		return $this->items->getTotal();
	}
}
