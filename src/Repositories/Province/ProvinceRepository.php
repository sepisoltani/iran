<?php


namespace Sepisoltani\Iran\Repositories\Province;


use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Province;

class ProvinceRepository implements ProvinceRepositoryInterface
{
    /**
     * @var Province
     */
    private Province $model;

    /**
     * ProvinceRepository constructor.
     * @param Province $province
     */
    public function __construct(Province $province)
    {
        $this->model = $province;
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

    public function find($id): Province
    {
        return $this->model->find($id);
    }
}
