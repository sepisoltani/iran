<?php

namespace Sepisoltani\Iran;

use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\City;
use Sepisoltani\Iran\Models\Country;
use Sepisoltani\Iran\Models\Province;
use Sepisoltani\Iran\Repositories\City\CityRepositoryInterface;
use Sepisoltani\Iran\Repositories\Country\CountryRepositoryInterface;
use Sepisoltani\Iran\Repositories\Province\ProvinceRepositoryInterface;

class Iran
{
    /**
     * @var ProvinceRepositoryInterface
     * @var CityRepositoryInterface
     * @var CountryRepositoryInterface
     */
    private ProvinceRepositoryInterface $provinceRepository;
    private CityRepositoryInterface $cityRepository;
    private CountryRepositoryInterface $countryRepository;

    /**
     * Iran constructor.
     *
     * @param ProvinceRepositoryInterface $provinceRepository
     * @param CityRepositoryInterface     $cityRepository
     * @param CountryRepositoryInterface  $countryRepository
     */
    public function __construct(ProvinceRepositoryInterface $provinceRepository, CityRepositoryInterface $cityRepository, CountryRepositoryInterface $countryRepository)
    {
        $this->provinceRepository = $provinceRepository;
        $this->cityRepository = $cityRepository;
        $this->countryRepository = $countryRepository;
    }

    /**
     * @return Collection
     */
    public function get_approved_provinces(): Collection
    {
        return $this->provinceRepository->all_approved();
    }

    /**
     * @return Collection
     */
    public function get_provinces(): Collection
    {
        return $this->provinceRepository->all();
    }

    /**
     * @param $id
     *
     * @return Province
     */
    public function find_province($id): Province
    {
        return $this->provinceRepository->find($id);
    }

    /**
     * @return Collection
     */
    public function get_approved_countries(): Collection
    {
        return $this->countryRepository->all_approved();
    }

    /**
     * @return Collection
     */
    public function get_countries(): Collection
    {
        return $this->countryRepository->all();
    }

    /**
     * @param $id
     *
     * @return Country
     */
    public function find_country($id): Country
    {
        return $this->countryRepository->find($id);
    }

    /**
     * @return Collection
     */
    public function get_approved_cities(): Collection
    {
        return $this->cityRepository->all_approved();
    }

    /**
     * @return Collection
     */
    public function get_cities(): Collection
    {
        return $this->cityRepository->all();
    }

    /**
     * @param $id
     *
     * @return City
     */
    public function find_city($id): City
    {
        return $this->cityRepository->find($id);
    }
}
