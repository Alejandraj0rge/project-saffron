<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Tasks;
use Illuminate\Foundation\Testing\RefreshDatabase;
use League\CommonMark\Block\Renderer\ThematicBreakRenderer;

class TasksTest extends TestCase
{
    use RefreshDatabase;

    private $baseApiRoute = 'api/tasks';

    /** @test */
    public function can_create_tasks()
    {
        $this->withoutExceptionHandling();

        $sampleData = [
            'title' => 'Alejandratest',
            'content' => 'fireworkstest',
        ];

        // try {
        //     $response = $this->post('api/tasks', $sampleData);
        // } catch(\Illuminate\Validation\ValidationException $e) {
        //     dd($e->errors());
        // }

        $response = $this->post($this->baseApiRoute, $sampleData);
        
        $response->assertStatus(201);
        $response = $response->json();
      
        $task = $response['data'];

        $this->assertCount(1, Tasks::all());
        // $Task = Tasks::first();

        $this->assertEquals($sampleData['title'], $task['title']);
        $this->assertEquals($sampleData['content'], $task['content']);
    }

    /** @test */

    public function list_of_all_tasks()
    {
        $this->withoutExceptionHandling();

        factory(Tasks::class, 3)->create();

        $response = $this->get($this->baseApiRoute);
        $response->assertOk();

        $response = $response->json();
        $tasks = $response['data'];

        $this->assertCount(3, $tasks);

        foreach(Tasks::all() as $task) {
            $responseTask = collect($tasks)->firstWhere('id', $task->id);

            $this->assertEquals($task->title, $responseTask['title']);
            $this->assertEquals($task->content, $responseTask['content']);

            // foreach ($tasks as $responseTask) {
            //     if($responseTask['id'] == $task->id) {
            //         $this->assertEquals($task->title, $responseTask['title']);
            //         $this->assertEquals($task->content, $responseTask['content']);
            //     }
            // }
            
        }
    }

    /** @test */

    public function updates_a_task()
    {
        $this->withoutExceptionHandling();
        
        $task = factory(Tasks::class)->create();

        $sampleData = [
            'title' => 'Alejandratest',
            'content' => 'fireworks',
        ];

        $response = $this->put("{$this->baseApiRoute}/$task->id", $sampleData)->assertOk();
        $response = $response->json();
        $task->refresh();

        $this->assertEquals($task->title, $sampleData['title']);
        $this->assertEquals($task->content, $sampleData['content']);
    }
}
