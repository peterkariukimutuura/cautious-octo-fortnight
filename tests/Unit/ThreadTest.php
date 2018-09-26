<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{
	
    /** @test */
    function a_thread_has_replies(){

    	$thread=factory('App\Thread')->create();

    	$this->assertInstanceOf('Illuminate\Database\Eloquent\Collection',$thread->replies);
    }


    /** @test */
    function a_thread_has_a_creator(){

    	$thread=factory('App\Thread')->create();

    	$this->assertInstanceOf('App\User',$thread->creator);
    }

}
