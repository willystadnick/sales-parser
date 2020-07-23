<?php

class ItemCollection extends DefaultCollection
{
	public function add($data)
	{
		$this->collection[] = new ItemEntity($data);
	}

	public function getTotal()
	{
		$total = 0;

		foreach ($this->collection as $item) {
			$total += $item->getTotal();
		}

		return $total;
	}
}
