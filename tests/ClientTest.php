<?php
use PHPUnit\Framework\TestCase;

require_once('HttpClient.php');

class ClientTest extends TestCase
{

    public function testGetCategories()
    {
        $client = new HttpClient(getenv('TOKEN'));
        $categories = $client->get_categories();

        $this->assertInternalType('array', $categories);

        $found_holiday = false;
        foreach ($categories['categories'] as &$category) {
            if ($category['short_name'] == "Holiday") {
                $found_holiday = true;
            }
        }
        $this->assertTrue($found_holiday);
    }

    public function testClient404()
    {
        $client = new HttpClient(getenv('TOKEN'));
        $event = $client->get_event(99999999999);

        $this->assertEquals($event['status_code'], 404);
        $this->assertEquals($event['error'], 'NOT_FOUND');
    }

    public function testAccessMethods()
    {
        $client = new HttpClient(getenv('TOKEN'));
        $this->assertTrue(method_exists($client, 'get_event_canned_questions'));
    }

}
