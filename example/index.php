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

echo '<pre>';

//echo 'Current User:<br>';
//$user = $eventObject->getProfile();
//print_r($user);

//echo '<br><br>Create Event:<br>';
//$event = [
//    "event.name.html" => "Test Event 01",
//    "event.description.html" => "Test Event 01",
//    "event.start.timezone" => "America/Los_Angeles",
//    "event.start.utc" => date('Y-m-d\TH:i:s\Z', strtotime("+2 week 2 days")),
//    "event.end.timezone" => "America/Los_Angeles",
//    "event.end.utc" => date('Y-m-d\TH:i:s\Z', strtotime("+20 week 2 days")),
//    "event.currency" => "USD",
//];
//print_r($event);
//$createEvent = $eventObject->createEvent($event);
//echo '<br>Result:<br>';
//print_r($createEvent);

echo '<br><br>Get Attendees:<br>';
$attendees = $eventObject->getAttendees('47658505874');
echo '<br>Result:<br>';
print_r($attendees);
