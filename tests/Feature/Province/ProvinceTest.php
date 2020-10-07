<?php

namespace Sepisoltani\Iran\Tests\Feature\Province;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Sepisoltani\Iran\Facades\Iran;
use Sepisoltani\Iran\Tests\TestCase;

class ProvinceTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('init:iran');
    }

    public function test_get_all_provinces()
    {
        $provincesCollection = Iran::get_provinces();

    }

    public function test_get_all_approved_provinces()
    {
        $approved_provinces = Iran::get_approved_provinces();

    }

    public function find_province()
    {
        $province = Iran::find_province(10);

    }
}
