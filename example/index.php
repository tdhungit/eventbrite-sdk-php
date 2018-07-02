<?php
/**
 * Created by UP5 Tech & YouAddOn.
 * Website: https://up5.vn
 * User: Jacky
 * Email: hungtran@up5.vn | jacky@youaddon.com
 * Person: tdhungit@gmail.com
 * Skype: tdhungit
 * Git: https://github.com/tdhungit
 */

require_once __DIR__ . '/../Eventbrite.php';

$config = require_once __DIR__ . '/config.php';

$eventObject = new Eventbrite($config);
$user = $eventObject->getProfile();

echo '<pre>';
print_r($user);
