<?php

$files = glob('data/in/*.dat');

foreach ($files as $file) {
	$info = pathinfo($file);
	print('Parsing '.$info['basename'].'...'."\n");
	$out = 'data/out/'.$info['filename'].'.done.'.$info['extension'];
	$content = file_get_contents($file);
	file_put_contents($out, $content);
}

print('Done.'."\n");
