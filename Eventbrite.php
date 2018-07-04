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
require_once __DIR__ . '/EventbriteBase.php';
require_once __DIR__ . '/categories/EBUsers.php';
require_once __DIR__ . '/categories/EBEvents.php';
require_once __DIR__ . '/categories/EBOrders.php';

class Eventbrite
{
    private $client;
    private $user;
    private $event;
    private $order;

    public function __construct($config)
    {
        $this->client = new HttpClient($config['personal_token']);

        $this->user = new EBUsers($this->client);
        $this->event = new EBEvents($this->client);
        $this->order = new EBOrders($this->client);
    }

    /**
     * @return HttpClient
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return EBEvents
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @return EBUsers
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return EBOrders
     */
    public function getOrder()
    {
        return $this->order;
    }


}