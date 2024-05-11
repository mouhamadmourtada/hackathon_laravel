<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\TypeStructure;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TypeStructureTest extends TestCase
{
    use  RefreshDatabase;

    protected string $endpoint = '/api/typeStructures';
    protected string $tableName = 'typeStructures';

    public function setUp(): void
    {
        parent::setUp();
    }

    public function testCreateTypeStructure(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $payload = TypeStructure::factory()->make([])->toArray();

        $this->json('POST', $this->endpoint, $payload)
             ->assertStatus(201)
             ->assertSee($payload['name']);

        $this->assertDatabaseHas($this->tableName, ['id' => 1]);
    }

    public function testViewAllTypeStructuresSuccessfully(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        TypeStructure::factory(5)->create();

        $this->json('GET', $this->endpoint)
             ->assertStatus(200)
             ->assertJsonCount(5, 'data')
             ->assertSee(TypeStructure::find(rand(1, 5))->name);
    }

    public function testViewAllTypeStructuresByFooFilter(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        TypeStructure::factory(5)->create();

        $this->json('GET', $this->endpoint.'?foo=1')
             ->assertStatus(200)
             ->assertSee('foo')
             ->assertDontSee('foo');
    }

    public function testsCreateTypeStructureValidation(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        $data = [
        ];

        $this->json('post', $this->endpoint, $data)
             ->assertStatus(422);
    }

    public function testViewTypeStructureData(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        TypeStructure::factory()->create();

        $this->json('GET', $this->endpoint.'/1')
             ->assertSee(TypeStructure::first()->name)
             ->assertStatus(200);
    }

    public function testUpdateTypeStructure(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        TypeStructure::factory()->create();

        $payload = [
            'name' => 'Random'
        ];

        $this->json('PUT', $this->endpoint.'/1', $payload)
             ->assertStatus(200)
             ->assertSee($payload['name']);
    }

    public function testDeleteTypeStructure(): void
    {
        $this->markTestIncomplete('This test case needs review.');

        $this->actingAs(User::factory()->create());

        TypeStructure::factory()->create();

        $this->json('DELETE', $this->endpoint.'/1')
             ->assertStatus(204);

        $this->assertEquals(0, TypeStructure::count());
    }
    
}
