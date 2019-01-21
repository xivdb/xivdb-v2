<?php
//
// Auto add ffxiv characters
//

// get update range
$start = isset($argv[1]) ? intval($argv[1]) : false;
if (!is_numeric($start)) {
	die('No start value, required');
}

require __DIR__ .'/../defines.php';
require __DIR__ .'/../src/misc.php';
require __DIR__ .'/../vendor/autoload.php';
require __DIR__ .'/../maintenance.php';
if (MAINTENANCE) { die('Maintenance'); }
output('XIVSync Auto Update Achievements');

// Preload XIVDB Data
require __DIR__ .'/../src/xivdb_preload.php';

// start
output('Starting update, range: %s > %s', [
	($start * AUTO_ACHIEVEMENT_MAX),
	($start * AUTO_ACHIEVEMENT_MAX) + AUTO_ACHIEVEMENT_MAX
]);
(new Sync\Tasks\TaskUpdateAchievements())->init($start);
