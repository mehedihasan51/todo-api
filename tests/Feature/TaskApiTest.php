<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Task;

class TaskApiTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        $data = [
            'title' => 'Test Task',
            'description' => 'This is a test task description',
        ];

        $response = $this->postJson('/api/tasks', $data);

        $response->assertStatus(201)
                 ->assertJson([
                     'title' => 'Test Task',
                     'description' => 'This is a test task description',
                     'is_completed' => false,
                 ]);

        $this->assertDatabaseHas('tasks', $data);
    }

    // Additional tests for other endpoints...
}
