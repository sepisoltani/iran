<?php

namespace Sepisoltani\Iran\Repositories\Country;

use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Country;

interface CountryRepositoryInterface
{
    public function all(): Collection;

    public function all_approved(): Collection;

    public function find($id): Country;
}
