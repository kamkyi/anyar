<?php

namespace App\Models\Flower\Traits\Relationship;

use App\Models\FlowerImage\FlowerImage;

/**
 * Class FlowerRelationship.
 */
trait FlowerRelationship
{
    /**
     * get the flower's image relationship
     */
    public function images(){
        return $this->hasMany(FlowerImage::class);
    }
}
