<?php

namespace Sepisoltani\Iran\Repositories\City;

use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\City;

interface CityRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;

    public function all_approved(): Collection;

    public function find($id): City;
}
