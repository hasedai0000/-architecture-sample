<?php

namespace App\Adapters;

use App\Eloquent\EloquentItem;
use App\Interface\GetItemPort;

class GetItemAdapters implements GetItemPort
{
  public function find(int $itemId): EloquentItem
  {
    return EloquentItem::find($itemId)->get();
  }
}
