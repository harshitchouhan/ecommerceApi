<?php

namespace App\Http\Controllers\Admin\OrderCart;

use App\Http\Controllers\Admin\OrderCart\Requests\OrderCartStoreRequest;
use App\Http\Controllers\Admin\OrderCart\Requests\OrderCartUpdateRequest;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;

class OrderCartController extends ApiController
{
    public function __construct()
    {
        $this->middleware('transformInput:'. OrderCartTransformer::class)->only(['store', 'update']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orderCarts = new OrderCart();
        return $this->showAll($orderCarts->getAllOrderCarts());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderCartStoreRequest $request)
    {
        $orderCart = new OrderCart();
        $newOrderCart = $orderCart->storeOrderCart(request());
        return $this->showOne($newOrderCart);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orderCart = new OrderCart();
        return $this->showOne($orderCart->getOrderCart($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OrderCartUpdateRequest $request, $id)
    {
        $orderCart = new OrderCart();
        $updatedOrderCart = $orderCart->updateOrderCart(request(), $id);

        if(!$updatedOrderCart) {
            return $this->errorResponse('You need to specify different value to update', 422);
        }

        return $this->showOne($updatedOrderCart);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orderCart = new OrderCart();
        $deletedOrderCart = $orderCart->deleteOrderCart($id);
        return $this->showOne($deletedOrderCart);
    }
}
