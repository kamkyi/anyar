<?php

namespace App\Models\FlowerImage;

use Illuminate\Database\Eloquent\Model;
use App\Models\FlowerImage\Traits\Relationship\FlowerImageRelationship;

class FlowerImage extends Model
{
    use FlowerImageRelationship;
}
