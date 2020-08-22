<?php

namespace App\Http\Controllers\Backend\Flower;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Flower\FlowerRepository;
use Yajra\Datatables\Datatables;

class FlowerDataTableController extends Controller
{

    protected $flowerRepo;
     /**
     * FlowerDataTableController constructor
     *
     */
    public function __construct(FlowerRepository $flowerRepo)
    {
        $this->flowerRepo = $flowerRepo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $flowers = $this->flowerRepo->all();

        return   Datatables::of($flowers)
                ->editColumn('created_at',function($flower){
                    return $flower->created_at->diffForHumans();
                })
                ->editColumn('updated_at',function($flower){
                    return $flower->updated_at->diffForHumans();
                })
                ->addColumn('actions', function ($vehicle) {
                    return view('backend.flower.partials.actions', compact('flowers'))->render();
                })
                ->rawColumns(['actions'])
                ->make();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
