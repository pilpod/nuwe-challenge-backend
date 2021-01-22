<?php

namespace Tests\Feature;

use App\Models\User;
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
    public function test_can_be_create_in_database()
    {
        User::factory()->create();

        $this->assertDatabaseCount('users', 1);
    }

    public function test_user_can_store_his_academic_record()
    {
        $user = User::factory()->create();

        $data = AcademicRecord::create([
            'degree' => 'FP',
            'school' => 'Alguna',
            'country' => 'Spain',
            'start_month' => '12',
            'start_year' => '2020',
            'end_month' => '01',
            'end_year' => '2021',
            'user_id' => $user->id,
        ]);

        $this->actingAs('$user')
            ->storeAcademicRecord();

        $this->assertDatabaseCount('academic_records', 1);
        $this->assertDatabaseHas('academic_records', $data);

    }
}
