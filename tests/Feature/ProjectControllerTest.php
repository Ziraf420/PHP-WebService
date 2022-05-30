<?php

namespace Tests\Feature;
use App\Models\Project;
use App\Models\Komentar;
use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
class ProjectControllerTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_get_all_projects()
    {
        $projects = [[
            'nama' => 'Project 1',
            'image' => 'image'
        ],
        [
            'nama' => 'Project 1',
            'image' => 'image'
        ]];

        foreach ($projects as $p) {
            Project::create($p);
        }

        $response = $this->getJson('api/projects');
        $response->assertOk()
        ->assertJsonCount(2, 'data');
    }

    public function test_show_one_project(){

        $projects = Project::create([
            'nama'=>'Project1',
            'image'=>'image'
        ]);
        
        $response = $this->getJson("api/projects/{$projects->id}");
        // dd($response);
        $response ->assertOk()
        ->assertJsonCount(1, 'data');
    }
    
    public function test_get_comments_in_a_project(){

        $project = Project::create([
            'nama'=>'Project1',
            'image'=>'image'
        ]);
        Komentar::create([
            'nama'=>'Project1',
            'komentar' => 'komentar123',
            'project_id'=> $project->id
        ]);
        
        
        $response = $this->getJson("api/list-komen/{$project->id}");
        // dd($response);
        
        $response ->assertOk()
        ->assertJsonPath('data.0.nama' ,  'Project1');
    }

    public function test_create_comment(){

        $project = Project::create([
            'nama'=>'Project1',
            'image'=>'image'
        ]);
        $response = $this->postJson("api/komen",[
            'nama'=> 'naldzy',
            'komentar'=> 'komentar321',
            'project_id'=> $project->id
        ]);
        
    // dd($response);
        
        $response->assertSuccessful()
        ->assertJsonPath('message', 'Komentar Berhasil Ditambahkan!!');
    }


}
