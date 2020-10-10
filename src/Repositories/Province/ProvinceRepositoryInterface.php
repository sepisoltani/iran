<?php

namespace Sepisoltani\Iran\Repositories\Province;

use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Province;

interface ProvinceRepositoryInterface
{
    public function all(): Collection;

    public function all_approved(): Collection;

    public function find($id): Province;
}
