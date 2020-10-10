<?php

namespace Sepisoltani\Iran\Tests\Feature\Province;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Sepisoltani\Iran\Facades\Iran;
use Sepisoltani\Iran\Models\Province;
use Sepisoltani\Iran\Tests\TestCase;

class ProvinceTest extends TestCase
{
    use RefreshDatabase;

    private Province $province;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('init:iran');

        $this->province = Province::find(24);
        $this->province->approved = 0;
        $this->province->save();
    }

    public function test_get_all_provinces()
    {

        $provincesCollection = Iran::get_provinces();
        $needle = [
            'id' => 24,
            'name' => 'گلستان',
            'en_name' => 'Golestan',
            'area_code' => '17',
            'lat' => '35.7699815',
            'lng' => '51.456538',
            'approved' => '0',
        ];
        $this->assertTrue($provincesCollection instanceof Collection);
        $this->assertIsArray($provincesCollection->toArray());
        $this->assertTrue(in_array($needle, $provincesCollection->toArray()));
    }

    public function test_get_all_approved_provinces()
    {


        $needle = [
            'id' => 24,
            'name' => 'گلستان',
            'en_name' => 'Golestan',
            'area_code' => '17',
            'lat' => '35.7699815',
            'lng' => '51.456538',
            'approved' => '1',
        ];

        $approved_provinces = Iran::get_approved_provinces();
        $this->assertTrue($approved_provinces instanceof Collection);
        $this->assertIsArray($approved_provinces->toArray());
        $this->assertFalse(in_array($needle, $approved_provinces->toArray()));
    }

    public function test_find_province_by_id()
    {
        $province = Iran::find_province(24);
        $this->assertIsObject($province);
        $this->assertTrue($province instanceof Province);
    }
}
