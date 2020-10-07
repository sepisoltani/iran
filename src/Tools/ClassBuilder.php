<?php


namespace Sepisoltani\Iran\Tools;
use Sepisoltani\Iran\Iran;
use Sepisoltani\Iran\Models\City;
use Sepisoltani\Iran\Models\Country;
use Sepisoltani\Iran\Models\Province;
use Sepisoltani\Iran\Repositories\City\CachingCityRepository;
use Sepisoltani\Iran\Repositories\City\CityRepository;
use Sepisoltani\Iran\Repositories\Country\CachingCountryRepository;
use Sepisoltani\Iran\Repositories\Country\CountryRepository;
use Sepisoltani\Iran\Repositories\Province\CachingProvinceRepository;
use Sepisoltani\Iran\Repositories\Province\ProvinceRepository;

class ClassBuilder
{
    /**
     * @return Iran
     */
    public static function build(): Iran
    {
        $config = config('iran.use_cache');
        if (!$config) {
            $provinceRepository = new ProvinceRepository(new Province());
            $cityRepository = new CityRepository(new City());
            $countryRepository = new CountryRepository(new Country());
        } else {
            $provinceRepository = new CachingProvinceRepository(new ProvinceRepository(new Province()), app('cache.store'));
            $cityRepository = new CachingCityRepository(new CityRepository(new City()), app('cache.store'));
            $countryRepository = new CachingCountryRepository(new CountryRepository(new Country()), app('cache.store'));
        }
        return new Iran($provinceRepository, $cityRepository, $countryRepository);
    }
}
