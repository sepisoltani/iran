<?php

namespace Sepisoltani\Iran\Repositories\Province;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Province;

class CachingProvinceRepository implements ProvinceRepositoryInterface
{
    /**
     * @var ProvinceRepository
     * @var Cache
     * @var string
     * @var int
     */
    protected ProvinceRepository $repository;
    protected Cache $cache;
    protected string $tag_name;
    protected int $time;

    /**
     * CachingProvinceRepository constructor.
     *
     * @param ProvinceRepository $repository
     * @param Cache              $cache
     */
    public function __construct(ProvinceRepository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
        $this->tag_name = config('iran.cache_tags.provinces');
        $this->time = config('iran.cache_times.provinces');
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        try {
            return $this->cache->tags($this->tag_name)->remember('all', $this->time, function () {
                return $this->repository->all();
            });
        } catch (\Exception $exception) {
        }
    }

    /**
     * @return Collection
     */
    public function all_approved(): Collection
    {
        return $this->cache->tags($this->tag_name)->remember('all-approved', $this->time, function () {
            return $this->repository->all();
        });
    }

    /**
     * @param $id
     *
     * @return Province
     */
    public function find($id): Province
    {
        return $this->cache->tags($this->tag_name)->remember("find-$id", $this->time, function () use ($id) {
            return $this->repository->find($id);
        });
    }
}
