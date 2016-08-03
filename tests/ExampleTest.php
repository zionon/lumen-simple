<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        // $this->assertEquals(
        //     $this->response->getContent(), $this->app->version()
        // );
        $this->post('register');
    }

    /**
     *
     * 
     */
    // public function testExample()
    // {
    //     $this->visit('/')->click('返回主页')->seePageIs('/');
    // }
}
