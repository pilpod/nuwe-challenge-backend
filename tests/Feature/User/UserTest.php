<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\AcademicRecord;
use App\Models\WorkExperience;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_be_create_in_database()
    {
        User::factory()->create();

        $this->assertDatabaseCount('users', 1);
    }

    public function test_user_can_store_his_academic_record()
    {
        $user = User::factory()->create();

        $data = [
            'degree' => 'FP',
            'school' => 'Alguna',
            'country' => 'Spain',
            'month_start' => '12',
            'year_start' => '2020',
            'month_end' => '01',
            'year_end' => '2021',
            'user_id' => $user->id,
        ];

        $this->actingAs($user)
            ->post('/user/' . $user->id . '/academic-record', $data);

        $this->assertDatabaseCount('academic_records', 1);
        $this->assertDatabaseHas('academic_records', $data);

    }

    public function test_user_can_access_to_his_academic_record()
    {
        $user = User::factory()->create();
        $records = AcademicRecord::factory(2)->create([
            'user_id' => $user->id,
        ]);

        $response = $user->academicRecords()->get();
            
        $this->assertEquals($response[0]->degree, $records[0]->degree);
        $this->assertEquals($response[1]->degree, $records[1]->degree);
    }

    public function test_user_can_store_his_work_experience()
    {
        $user = User::factory()->create();

        $data = [
            'position' => 'Team Leader',
            'organization_name' => 'Alguna',
            'organization_activity' => 'I+D',
            'description' => 'Some information about me',
            'month_start' => '12',
            'year_start' => '2020',
            'month_end' => '01',
            'year_end' => '2021',
            'user_id' => $user->id,
        ];

        $this->actingAs($user)
            ->post('/user/' . $user->id . '/work-experience', $data);

        $this->assertDatabaseCount('work_experiences', 1);
        $this->assertDatabaseHas('work_experiences', $data);
    }

    public function test_user_can_list_his_work_experience()
    {
        $user = User::factory()->create();
        $works = WorkExperience::factory(2)->create([
            'user_id' => $user->id,
        ]);

        $response = $user->workExperiences()->get();
            
        $this->assertEquals($response[0]->position, $works[0]->position);
        $this->assertEquals($response[1]->position, $works[1]->position);
    }

}
