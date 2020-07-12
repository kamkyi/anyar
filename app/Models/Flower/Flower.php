<?php

namespace App\Models\Flower;

use Illuminate\Database\Eloquent\Model;
use App\Models\Flower\Traits\Relationship\FlowerRelationship;

class Flower extends Model
{
    use FlowerRelationship;
}
