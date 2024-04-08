<?php

namespace App\Action\GetItem;

use GetItem;
use Illuminate\Http\Request;

final class GetItemAction
{
  /** @var GetItem */
  private $useCase;

  /**
   * @param GetAccount $useCase
   */
  public function __construct(GetItem $useCase)
  {
    $this->useCase = $useCase;
  }

  /**
   * @param Request $request
   * @param int $itemId
   * @return \Illuminate\Http\JsonResponse
   */
  public function __invoke(Request $request, int $itemId)
  {
    $item = $this->useCase->execute($itemId);

    return response()->json([
      'item' => $item,
    ]);
  }
}
