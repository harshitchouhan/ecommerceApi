<?php

namespace App\Http\Controllers\Admin\Orders;

use App\Http\Controllers\Admin\Orders\Requests\OrdersStoreRequest;
use App\Http\Controllers\Admin\Orders\Requests\OrdersUpdateRequest;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class OrdersController extends ApiController
{
    public function __construct()
    {
        $this->middleware('transformInput:'. OrderTransformer::class)->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = new Order();
        return $this->showAll($orders->getAllOrders());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrdersStoreRequest $request)
    {
        $order = new Order();
        $newOrder = $order->storeOrder(request());
        return $this->showOne($newOrder);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = new Order();
        return $this->showOne($orders->getOrder($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrdersUpdateRequest $request, $id)
    {
        $order = new Order();
        $updatedOrder = $order->updateOrder(request(), $id);

        if(!$updatedOrder) {
            return $this->errorResponse('You need to specify different value to update', 422);
        }

        return $this->showOne($updatedOrder);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = new Order();
        $deletedOrder = $order->deleteOrder($id);
        return $this->showOne($deletedOrder);
    }
}
