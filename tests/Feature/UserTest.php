<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */

    use RefreshDatabase;
    public function test_user_can_be_created(): void
    {
        $user = User::factory()->create([
            'name' => 'テストユーザー',
            'email' => 'test@example.com',
        ]);

        $this->assertDatabaseHas('users', ['email' => 'test@example.com']);
    }
    public function test_email_must_be_unique(): void
    {
        User::factory()->create([
            'email' => 'test@example.com'
        ]);
        $this->expectException(\Illuminate\Database\QueryException::class);

        User::factory()->create([
            'email' => 'test@example.com'
        ]);
    }
}
