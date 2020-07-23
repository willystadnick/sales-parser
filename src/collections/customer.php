<?php

class CustomerCollection extends DefaultCollection
{
	public function add($data)
	{
		$this->collection[] = new CustomerEntity($data);
	}
}
