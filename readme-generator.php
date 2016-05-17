<?php

$ruleset = file_get_contents('Ruleset.md');

echo <<<EOF
# PHP Semantic Versioning Checker Rules

The following documents all the rules currently checked by the [PHP Semantic Versioning Checker](https://github.com/tomzx/php-semver-checker).
EOF;

echo PHP_EOL.PHP_EOL;

echo preg_replace_callback('/(?<code>V\d+) \| (?<level>[^ ]+) \| (?<rule>.*)/', function ($match) {
	return '[' . $match['code'] . '](Ruleset/' . $match['code'] . '.md) | ' . $match['level'] . ' | ' . $match['rule'];
}, $ruleset);
