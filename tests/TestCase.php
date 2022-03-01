<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use App\Models\User;
use App\Models\BlogPost;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function user()
    {
        return factory(User::class)->create();
    }

    protected function blogPost()
    {
        return factory(BlogPost::class)->create([
            'user_id' => $this->user()->id
        ]);
    }
}