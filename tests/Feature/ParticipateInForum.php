<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ParticipateInForum extends TestCase
{
    
    /**@ test */
    public function an_authencticated_user_may_participate_in_forum_threads(){
    	//given that we have an authencticated user
    	$user =factory('App\User')->create();

    	$this->be($user);

    	//and an existing thread
    	$thread =factory('App\Create')->create();

    	//when the user add a thread to a reply
    	$reply=factory('App\Reply')->create();

    	$this->post('/threads/'.$thread->id.'/replies',$reply->toArray());
    	
    	//then their reply should be visible on the page

    }
}
