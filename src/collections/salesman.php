<?php

class SalesmanCollection extends DefaultCollection
{
	public function add($data)
	{
		$this->collection[] = new SalesmanEntity($data);
	}

	public function getSalaryMean()
	{
		$total = 0;

		foreach ($this->collection as $item) {
			$total += $item->getSalary();
		}

		return $total / $this->count();
	}

	public function getByName($name)
	{
		foreach ($this->collection as $item) {
			if ($item->getName() == $name) {
				return $item;
			}
		}

		return null;
	}
}
