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

class EventbriteBase
{
    protected $client;

    /**
     * Eventbrite constructor.
     * @param $client HttpClient
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * @param $path string api uri
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
}