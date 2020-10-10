<?php

namespace Sepisoltani\Iran\Tests\Feature\Country;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Sepisoltani\Iran\Facades\Iran;
use Sepisoltani\Iran\Models\Country;
use Sepisoltani\Iran\Tests\TestCase;

class ProvinceTest extends TestCase
{
    use RefreshDatabase;

    private Country $country;

    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('init:iran');

        $this->country = Country::find(1);
        $this->country->approved = 0;
        $this->country->save();
    }

    public function test_get_all_countries()
    {
        $countriesCollection = Iran::get_countries();
        $needle = [
            'id' => 1,
            'province_id' => 1,
            'name' => 'آذرشهر',
            'en_name' => 'Azarshahr',
            'lat' => '37.75514300',
            'lng' => '45.86896300',
            'approved' => '0',
        ];
        $this->assertTrue($countriesCollection instanceof Collection);
        $this->assertIsArray($countriesCollection->toArray());
        $this->assertTrue(in_array($needle, $countriesCollection->toArray()));
    }

    public function test_get_all_approved_countries()
    {
        $needle = [
            'id' => 1,
            'province_id' => 1,
            'name' => 'آذرشهر',
            'en_name' => 'Azarshahr',
            'lat' => '37.75514300',
            'lng' => '45.86896300',
            'approved' => '1',
        ];
        $approved_countries = Iran::get_approved_countries();
        $this->assertTrue($approved_countries instanceof Collection);
        $this->assertIsArray($approved_countries->toArray());
        $this->assertFalse(in_array($needle, $approved_countries->toArray()));
    }

    public function test_find_country_by_id()
    {
        $country = Iran::find_country(1);
        $this->assertIsObject($country);
        $this->assertTrue($country instanceof Country);
    }
}
