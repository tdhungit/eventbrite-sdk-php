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
     * @return array|mixed
     */
    public function getProfile()
    {
        return $this->get('/users/me/');
    }
}