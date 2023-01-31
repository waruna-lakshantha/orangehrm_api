<?php
use PHPUnit\Framework\TestCase;

class UserTableTest extends PHPUnit_Framework_TestCase
{

    private $http;
    private $url;

    public function setUp()
    {
        $this->http = new GuzzleHttp\Client([
            'headers' => [ 'Content-Type' => 'application/json' ]
        ]); 
        
        $this->url = 'http://ohrmapi:8089/backend_dev.php/api/auth.json';
    }    

    public function testLoginSuccess()
    {        
        $response = $this->http->post($this->url,
            ['body' => json_encode(
                [
                    'token' => 'hrm_api',
                    'user_name' => 'waruna',
                    'password' => 'Waruna123'
                ]
            )]
        );

        //Unit Test : Successful login
        $this->assertEquals(200, $response->getStatusCode());

        $data = json_decode($response->getBody(), true);

        //Unit Test : Access of employee data for a logged-in use
        $this->assertArrayHasKey('user_name', $data[0]);
        $this->assertArrayHasKey('id', $data[0]);  
        $this->assertArrayHasKey('first_name', $data[0]);
        $this->assertArrayHasKey('last_name', $data[0]);  
        $this->assertArrayHasKey('address', $data[0]);   
    }

    public function testLoginFail()
    {
        $response = $this->http->post($this->url,
            ['body' => json_encode(
                [
                    'token' => 'hrm_api',
                    'user_name' => 'waruna1',
                    'password' => 'Waruna123'
                ]
            )]
        );

        //Unit Test : Failed login
        $this->assertEquals(404, $response->getStatusCode());

        //Unit Test : Failed login Message
        $data = json_decode($response->getBody(), true);
        $this->assertArrayHasKey('message', $data['error']);
        $this->assertEquals('invalid username or password.', $data['error']['message']);
    }    

    public function tearDown() {
        $this->http = null;
    }  
}