<?php

use App\Eloquent\EloquentItem;
use App\Interface\GetItemPort;

final class GetItem
{
  /**
   * @var GetItemPort
   */
  private $getItemPort;

  public function __construct(GetItemPort $getItemPort)
  {
    $this->getItemPort = $getItemPort;
  }

  public function execute(int $itemId): EloquentItem
  {
    return $this->getItemPort->find($itemId);
  }
}
