<?php

namespace App\Http\Controllers\Admin\OrderCart;

use Illuminate\Database\Eloquent\Model;

class OrderCart extends Model
{
    protected $fillable = ['ocid', 'ocoid', 'ocpid', 'ocpname', 'ocpcode', 'ocprice'];

    protected $primaryKey = "ocid";

    public $transformer = OrderCartTransformer::class;

    public function getAllOrderCarts()
    {
        $orderCarts = OrderCart::all();
        return $orderCarts;
    }

    public function getOrderCart($id)
    {
        $orderCart = OrderCart::findOrFail($id);
        return $orderCart;
    }

    public function storeOrderCart($request)
    {
        $data = $request->all();
        $orderCart = OrderCart::create($data);
        return $orderCart;
    }

    public function updateOrderCart($request, $id)
    {
        $orderCart = $this->getOrderCart($id);

        if ($request->has('ocoid')) {
            $orderCart->ocoid = $request->ocoid;
        }

        if ($request->has('ocpid')) {
            $orderCart->ocpid = $request->ocpid;
        }

        if ($request->has('ocpname')) {
            $orderCart->ocpname = $request->ocpname;
        }

        if ($request->has('ocpcode')) {
            $orderCart->ocpcode = $request->ocpcode;
        }

        if ($request->has('ocprice')) {
            $orderCart->ocprice = $request->ocprice;
        }

        if (!$orderCart->isDirty()) {
            return false;
        }

        $orderCart->save();
        return $orderCart;
    }

    public function deleteOrderCart($id)
    {
        $orderCart = $this->getOrderCart($id);
        $orderCart->delete();
        return $orderCart;
    }
}
