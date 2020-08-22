<?php

namespace App\Repositories\Backend\Flower;

use App\Repositories\BaseRepository;
use App\Models\Flower\Flower;
/**
 * Class FlowerRepository.
 */
class FlowerRepository extends BaseRepository{

    /**
     * Class FlowerRepository constructor
     */
    public function __construct(Flower $flower){
        $this->model = $flower;
    }
}