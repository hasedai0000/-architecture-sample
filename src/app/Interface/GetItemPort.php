<?php

namespace App\Interface;

use App\Eloquent\EloquentItem;

interface GetItemPort
{
  public function find(int $itemId): EloquentItem;
}
