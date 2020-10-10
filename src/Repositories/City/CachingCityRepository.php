<?php

namespace Sepisoltani\Iran\Repositories\City;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\City;

class CachingCityRepository implements CityRepositoryInterface
{
    /**
     * @var CityRepository
     * @var Cache
     * @var string
     * @var int
     */
    protected CityRepository $repository;
    protected Cache $cache;
    protected string $tag_name;
    protected int $time;

    /**
     * CachingCityRepository constructor.
     *
     * @param CityRepository $repository
     * @param Cache          $cache
     */
    public function __construct(CityRepository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
        $this->tag_name = config('iran.cache_tags.cities');
        $this->time = config('iran.cache_times.cities');
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->cache->tags($this->tag_name)->remember('all', $this->time, function () {
            return $this->repository->all();
        });
    }

    /**
     * @return Collection
     */
    public function all_approved(): Collection
    {
        return $this->cache->tags($this->tag_name)->remember('all-approved', $this->time, function () {
            return $this->repository->all_approved();
        });
    }

    /**
     * @param $id
     *
     * @return City
     */
    public function find($id): City
    {
        return $this->cache->tags($this->tag_name)->remember("find-$id", $this->time, function () use ($id) {
            return $this->repository->find($id);
        });
    }
}
