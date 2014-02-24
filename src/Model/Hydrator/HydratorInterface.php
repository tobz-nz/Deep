<?php

namespace rsanchez\Deep\Model\Hydrator;

use Illuminate\Database\Eloquent\Collection;

interface HydratorInterface
{
    public function preload(Collection $collection);

    public function hydrate(Collection $collection);
}