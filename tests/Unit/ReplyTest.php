<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReplyTest extends TestCase
{
    
    /** @test */
    function it_has_a_owner(){

    	$reply =factory('App\Reply')->create();

    	$this->assertInstanceOf('App\User',$reply->owner);
    }
}
