<?php

$files = glob('src/*/*.php');
$files[] = 'src/parser.php';

foreach ($files as $file) {
	require_once($file);
}
