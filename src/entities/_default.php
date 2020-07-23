<?php

class DefaultEntity
{
	public function sanitize($data)
	{
		$white = [
			' ',
			'%08',
			'%09',
			'%0A',
			'%0D',
			'%7F',
			'%81',
			'%8D',
			'%8F',
			'%90',
			'%9D',
			'%A0',
			'%AD',
			'%C2',
			'%C2%90',
			'%C2%A0',
			'%C2%AD',
			'%C5%8D',
		];

		$data = urlencode($data);

		$data = str_replace($white, '', $data);

		return $data;
	}
}
