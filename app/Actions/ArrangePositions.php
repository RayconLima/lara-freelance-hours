<?php

namespace App\Actions;

use Illuminate\Support\Facades\DB;

class ArrangePositions
{
  public static function run(int $id): void
  {
    DB::transaction(function () use ($id) {
      DB::update("
        with RankedProposals as (
          select id, row_number() over(order by hours asc) as p
          from proposals
          where project_id = ?
        )
        update proposals
        set position = (select p from RankedProposals where proposals.id = RankedProposals.id)
        where project_id = ?",
        [$id, $id]
      );
    });
  }
}