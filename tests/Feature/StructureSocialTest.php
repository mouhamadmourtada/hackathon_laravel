<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\StructureSocial;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StructureSocialTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/structureSocials';
    protected string $tableName = 'structureSocials';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateStructureSocial(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = StructureSocial::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllStructureSocialsSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        StructureSocial::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(StructureSocial::find(rand(1, 5))->name);
    }

    public function testViewAllStructureSocialsByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        StructureSocial::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateStructureSocialValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewStructureSocialData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        StructureSocial::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(StructureSocial::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateStructureSocial(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        StructureSocial::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteStructureSocial(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        StructureSocial::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, StructureSocial::count());
    }
    
}
