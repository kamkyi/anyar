<?php

namespace App\Repositories\Backend\Flower;

use App\Repositories\BaseRepository;
use App\Models\Flower\Flower;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
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
    /**
     * create flower data
     */
    public function create(Array $data){
        return DB::transaction(function () use ($data) {
             $this->model->create([
                'price' => $data['price'],
                'type' => $data['type'],
                'color' => $data['color']
             ]);
        });
    }
}