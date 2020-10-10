<?php

namespace Sepisoltani\Iran\Repositories\Country;

use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Country;

class CountryRepository implements CountryRepositoryInterface
{
    /**
     * @var Country
     */
    private Country $model;

    /**
     * CountryRepository constructor.
     *
     * @param Country $country
     */
    public function __construct(Country $country)
    {
        $this->model = $country;
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

    public function find($id): Country
    {
        return $this->model->find($id);
    }
}
