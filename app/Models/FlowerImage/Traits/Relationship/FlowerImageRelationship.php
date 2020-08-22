<?php

namespace App\Models\FlowerImage\Traits\Relationship;

use App\Models\Flower\Flower;

/**
 * Class FlowerImageRelationship.
 */
trait FlowerImageRelationship
{
    /**
     * get flower that owns the Images
     */
    public function flower(){
        return $this->belongsTo(Flower::class);
    }
}
