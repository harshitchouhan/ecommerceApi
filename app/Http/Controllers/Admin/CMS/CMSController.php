<?php

namespace App\Http\Controllers\Admin\CMS;

use App\Http\Controllers\Admin\CMS\Requests\CMSStoreRequest;
use App\Http\Controllers\Admin\CMS\Requests\CMSUpdateRequest;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class CMSController extends ApiController
{
    public function __construct()
    {
        $this->middleware('transformInput:'. CMSTransformer::class)->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CMS = new cms();
        return $this->showAll($CMS->getAllCMS());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CMSStoreRequest $request)
    {
        $CMS = new cms();
        $newCMS = $CMS->storeCMS(request());
        return $this->showOne($newCMS);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $CMS = new cms();
        return $this->showOne($CMS->getCMS($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CMSUpdateRequest $request, $id)
    {
        $CMS = new cms();
        $updatedCMS = $CMS->updateCMS(request(), $id);

        if(!$updatedCMS) {
            return $this->errorResponse('You need to specify different value to update', 422);
        }

        return $this->showOne($updatedCMS);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $CMS = new cms();
        $deletedCMS = $CMS->deleteCMS($id);
        return $this->showOne($deletedCMS);
    }
}
