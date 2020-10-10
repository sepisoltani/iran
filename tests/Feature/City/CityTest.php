<?php

namespace Sepisoltani\Iran\Tests\Feature\City;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Sepisoltani\Iran\Models\City;
use Sepisoltani\Iran\Tests\TestCase;
use Sepisoltani\Iran\Facades\Iran;

class CityTest extends TestCase
{
    use RefreshDatabase;

    private City $city;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('init:iran');

        $this->city = City::find(1);
        $this->city->approved = 0;
        $this->city->save();
    }

    public function test_get_all_cities()
    {

        $citiesCollection = Iran::get_cities();
        $needle = [
            'id' => 1,
            'province_id' => 1,
            'country_id' => 1,
            'name' => 'آذرشهر',
            'en_name' => 'Azarshahr',
            'lat' => '37.75601290',
            'lng' => '45.95409340',
            'approved' => '0',
        ];
        $this->assertTrue($citiesCollection instanceof Collection);
        $this->assertIsArray($citiesCollection->toArray());
        $this->assertTrue(in_array($needle, $citiesCollection->toArray()));
    }

    public function test_get_all_approved_cities()
    {


        $needle = [
            'id' => 1,
            'province_id' => 1,
            'country_id' => 1,
            'name' => 'آذرشهر',
            'en_name' => 'Azarshahr',
            'lat' => '37.75601290',
            'lng' => '45.95409340',
            'approved' => '1',
        ];

        $approved_cities = Iran::get_approved_cities();
        $this->assertTrue($approved_cities instanceof Collection);
        $this->assertIsArray($approved_cities->toArray());
        $this->assertFalse(in_array($needle, $approved_cities->toArray()));
    }

    public function test_find_city_by_id()
    {
        $city = Iran::find_city(1);
        $this->assertIsObject($city);
        $this->assertTrue($city instanceof City);
    }
}
