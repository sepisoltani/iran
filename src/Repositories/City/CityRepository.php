<?php


namespace Sepisoltani\Iran\Repositories\City;


use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\City;

class CityRepository implements CityRepositoryInterface
{

    /**
     * @var City
     */
    private City $model;

    /**
     * CityRepository constructor.
     * @param City $city
     */
    public function __construct(City $city)
    {
        $this->model = $city;
    }

    /**
     * @return Collection
     */

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function all_approved(): Collection
    {
        return $this->model->where('approved', 1)->get();
    }

    public function find($id): City
    {
        return $this->model->find($id);
    }
}
