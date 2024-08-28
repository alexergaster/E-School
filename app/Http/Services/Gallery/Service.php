<?php

namespace App\Http\Services\Gallery;

use Illuminate\Support\Collection;

class Service
{
    public function index(Collection $galleries): Collection
    {
        $totalItems = $galleries->count();
        $partSize = floor($totalItems / 3);
        $remainder = $totalItems % 3;

        $part1 = $galleries->slice(0, $partSize + ($remainder > 0 ? 1 : 0))->values();
        $part2 = $galleries->slice($part1->count(), $partSize + ($remainder > 1 ? 1 : 0))->values();
        $part3 = $galleries->slice($part1->count() + $part2->count())->values();

        return collect([$part1, $part2, $part3]);
    }
}
