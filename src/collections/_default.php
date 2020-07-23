<?php

class DefaultCollection
{
	protected $collection;

	public function __construct()
	{
		$this->collection = [];
	}

	public function count()
	{
		return count($this->collection);
	}

	public function getItem($index)
	{
		return $this->collection[$index] ?? null;
	}
}
