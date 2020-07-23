<?php

class Parser
{
	function run()
	{
		$files = glob('data/in/*.dat');

		foreach ($files as $file) {
			$salesmans = new SalesmanCollection;
			$customers = new CustomerCollection;
			$sales = new SaleCollection;

			$info = pathinfo($file);

			print('Parsing '.$info['basename'].'...'."\n");

			$content = file_get_contents($file);
			$lines = explode("\n", $content);

			foreach ($lines as $line) {
				if (empty($line)) {
					continue;
				}

				list($entity, $data) = explode(',', $line, 2);

				switch ($entity) {
					case '001':
						$salesmans->add($data);
						break;
					case '002':
						$customers->add($data);
						break;
					case '003':
						$sales->add($data);
						break;
				}
			}

			$output = [];
			$output[] = 'Customers quantity: '.$customers->count();
			$output[] = 'Salesmans quantity: '.$salesmans->count();
			$output[] = 'Salesmans salary mean: '.$salesmans->getSalaryMean();
			$output[] = 'Most expensive sale ID: '.$sales->getMostExpensiveSaleID();
			$output[] = 'Worst salesman: '.$salesmans->getByName($sales->getWorstSalesmanID());
			$output = implode("\n", $output);
			$out = 'data/out/'.$info['filename'].'.done.'.$info['extension'];

			file_put_contents($out, $output);
		}

		print('Done.'."\n");
	}
}
