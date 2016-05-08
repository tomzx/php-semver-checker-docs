<?php

$rules = file_get_contents('README.md');

$pattern = '/^\[(?<code>.+)\].* \| (?<level>.+) \| \*?(?<rule>.+?)\*?$/m';
if (preg_match_all($pattern, $rules, $matches)) {
	for ($i = 0; $i < count($matches[0]); ++$i) {
		$code = trim($matches['code'][$i]);
		$level = trim($matches['level'][$i]);
		$rule = trim($matches['rule'][$i]);

		$filename = 'Ruleset/'.$code.'.md';

		if (file_exists($filename)) {
			$content = file_get_contents($filename);
		} else {
			$content = file_get_contents('Ruleset/VXXX - Template.md');
		}

		$content = preg_replace('/# V\S{3} - .*/', '# '.$code.' - '.$rule, $content);
		$content = preg_replace('/Code: .*/', 'Code: '.$code, $content);
		$content = preg_replace('/Level: .*/', 'Level: '.$level, $content);
		$content = preg_replace('/Rule: .*/', 'Rule: '.$rule, $content);

		file_put_contents($filename, $content);
	}
}
