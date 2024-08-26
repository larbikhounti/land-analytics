<?php

namespace Tests\Feature;

use App\Models\LandingPage;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LandingPagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_landing_page_can_be_created(): void
    {
        $user = User::factory()->create();

        $page = new LandingPage();
        $page->url = fake()->url();
        $page->name = fake()->name();
        $page->user_id = $user->id;
        $page->ad_id = fake()->randomLetter();
        $page->save();

        $this->assertModelExists($page);
    }

    public function test_landing_page_can_be_updated(): void
    {
        $landingPage = LandingPage::factory()->for(User::factory()->state([
            'name' => 'Jessica Archer',
        ]))->create();


        $landingPage->url = fake()->url();
        $landingPage->name = fake()->name();
        $landingPage->ad_id = fake()->numberBetween(1,10000);
        $result = $landingPage->update();

        $this->assertTrue($result);

    }

    public function test_landing_page_can_be_deleted(): void
    {
        $landingPage = LandingPage::factory()->for(User::factory()->state([
            'name' => 'Jessica Archer',
        ]))->create();


        $landingPage->delete();

        $this->assertModelMissing($landingPage);

    }
}
