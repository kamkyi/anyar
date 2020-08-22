<?php

namespace App\Repositories\Backend\Flower;

use App\Repositories\BaseRepository;
use App\Models\Flower\Flower;
use Yajra\Datatables\Datatables;

/**
 * Class FlowerRepository.
 */
class FlowerRepository extends BaseRepository{

    protected $flower;
    /**
     * Class FlowerRepository constructor
     */
    public function __construct(Flower $flower){
        $this->flower = $flower;
    }

    public function getAllFlowerDatatable(){
        return Datatables::of($this->flower::query())->make(true);
    }
}