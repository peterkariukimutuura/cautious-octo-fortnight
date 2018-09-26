<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReadThreadsTest extends TestCase
{

    // use DatabaseMigrations;

    public function setUp(){

        parent::setUp();

        $this->thread=factory('App\Thread')->create();
    }
    

    /** @test */
    public function a_user_can_view_all_threads()
    {

        $response = $this->get('/threads');

        $response->assertStatus(200)
        		 ->assertSee($this->thread->title);


    }

    /** @test */
    public function a_user_can_read_a_single_thread(){

        $response=$this->get('/threads/'.$this->thread->id);

        $response->assertSee($this->thread->title);
    }

    /** @test */
    public function a_user_can_read_replies_that_are_associated_with_a_thread(){

        //given we have a thread

        factory('App\Reply')->create(['thread_id'=>$this->thread->id]);

        //and that thread includes replies 

        //when we visit a thread page

        //then we should see the replies

 
    }
}
