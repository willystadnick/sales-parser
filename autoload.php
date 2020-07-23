<?php

$files = glob('src/*/*.php');

foreach ($files as $file) {
	require_once($file);
}
