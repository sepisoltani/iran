<?php


namespace Sepisoltani\Iran\Repositories\Country;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Database\Eloquent\Collection;
use Sepisoltani\Iran\Models\Country;


class CachingCountryRepository implements CountryRepositoryInterface
{
    /**
     * @var CountryRepository
     * @var Cache
     * @var string
     * @var int
     */
    protected CountryRepository $repository;
    protected Cache $cache;
    protected string $tag_name;
    protected int $time;

    /**
     * CachingCountryRepository constructor.
     * @param CountryRepository $repository
     * @param Cache $cache
     */
    public function __construct(CountryRepository $repository, Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
        $this->tag_name = config('iran.cache_tags.countries');
        $this->time = config('iran.cache_times.countries');
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
            return $this->repository->all();
        });
    }

    /**
     * @param $id
     * @return Country
     */

    public function find($id): Country
    {
        return $this->cache->tags($this->tag_name)->remember("find-$id", $this->time, function () use ($id) {
            return $this->repository->find($id);
        });
    }
}
