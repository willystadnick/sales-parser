<?php

class SaleCollection extends DefaultCollection
{
	public function add($data)
	{
		$this->collection[] = new SaleEntity($data);
	}

	public function getMostExpensiveSaleID()
	{
		$id = null;
		$total = 0;

		foreach ($this->collection as $item) {
			if ($item->getTotal() > $total) {
				$id = $item->getSaleID();
				$total = $item->getTotal();
			}
		}

		return $id;
	}

	public function getWorstSalesmanID()
	{
		$salesmanID = null;
		$total = PHP_FLOAT_MAX;

		foreach ($this->collection as $item) {
			if ($item->getTotal() < $total) {
				$salesmanID = $item->getSalesmanID();
				$total = $item->getTotal();
			}
		}

		return $salesmanID;
	}
}
