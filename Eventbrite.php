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

require_once __DIR__ . '/HttpClient.php';

class Eventbrite
{
    private $client;

    /**
     * Eventbrite constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->client = new HttpClient($config['personal_token']);
    }

    /**
     * @return HttpClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param $path api uri
     * @param array $expand
     * @return array|mixed
     */
    public function get($path, $expand = array())
    {
        return $this->client->get($path, $expand);
    }

    /**
     * @param $path
     * @param array $data
     * @return array|mixed
     */
    public function post($path, $data = array())
    {
        return $this->client->post($path, $data);
    }

    /**
     * @param $path
     * @param array $data
     * @return array|mixed
     */
    public function delete($path, $data = array())
    {
        return $this->client->delete($path, $data);
    }

    /**
     * @param $path
     * @param $body
     * @param $expand
     * @param string $httpMethod
     * @return array|mixed
     */
    public function request($path, $body, $expand, $httpMethod = 'GET')
    {
        return $this->client->request($path, $body, $expand, $httpMethod);
    }

    /**
     * get profile current user
     * @return array|mixed
     */
    public function getProfile()
    {
        return $this->get('/users/me/');
    }

    /**
     * create a event
     * https://www.eventbrite.com/developer/v3/endpoints/events/#ebapi-post-events
     * @param $event
     * @Example $event = [
        "event.name.html" => "Test Event 01",
        "event.description.html" => "Test Event 01",
        "event.start.timezone" => "America/Chicago",
        "event.start.utc" => "2017-07-10T18:00:00Z", // format Y-m-d\TH:i:s\Z
        "event.end.timezone" => "America/Chicago",
        "event.end.utc" => "2017-07-10T20:00:00Z", // format Y-m-d\TH:i:s\Z
        "event.currency" => "USD",
       ];
     * @return array|mixed
     */
    public function createEvent($event)
    {
        return $this->post('/events/', $event);
    }

    /**
     * get detail a event
     * @param $eventId
     * @return array|mixed
     */
    public function getEvent($eventId)
    {
        return $this->get('/events/' . $eventId . '/');
    }

    /**
     * Publishes an event
     * @param $eventId
     * @return array|mixed
     */
    public function publishEvent($eventId)
    {
        return $this->post('/events/' . $eventId . '/publish/');
    }

    /**
     * get all attendees of event
     * @param $eventId
     * @return array|mixed
     */
    public function getAttendees($eventId)
    {
        echo $path = '/events/' . $eventId . '/attendees/';
        return $this->get($path);
    }
}