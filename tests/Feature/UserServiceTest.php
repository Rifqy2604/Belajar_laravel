<?php

namespace Tests\Feature;

use App\Services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private UserService $user_service;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user_service = $this->app->make(UserService::class);
    }

    public function TesLoginSuccess()
    {
        self ::assertTrue($this->user_service->login("rifqy","zain"));
    }
}
