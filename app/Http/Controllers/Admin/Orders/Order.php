<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['oid', 'ocustomername', 'ocid', 'oemail', 'oaddressline1', 'oaddressline2', 'ocity', 'ostate', 'ozipcode', 'ostatus', 'ophone', 'oalternatephone', 'odiscountid', 'odiscountvalue', 'ototalprice', 'oshippingprice', 'oshippingid', 'oshippingcode', 'ograndtotal', 'opaymenttype', 'opaymentrequest', 'opaymentresponse', 'opaymentstatus', 'opaymentauthroized', 'oisgifted'];

    protected $primaryKey = "oid";

    public $transformer = OrderTransformer::class;

    public function getAllOrders()
    {
        $orders = Order::all();
        return $orders;
    }

    public function getOrder($id)
    {
        $order = Order::findOrFail($id);
        return $order;
    }

    public function storeOrder($request)
    {
        $data = $request->all();
        $data['oisgifted'] = 0;

        $order = Order::create($data);
        return $order;
    }

    public function updateOrder($request, $id)
    {
        $order = $this->getOrder($id);

        if ($request->has('ocustomername')) {
            $order->ocustomername = $request->ocustomername;
        }

        if ($request->has('ocid')) {
            $order->ocid = $request->ocid;
        }

        if ($request->has('oemail')) {
            $order->oemail = $request->oemail;
        }

        if ($request->has('oaddressline1')) {
            $order->oaddressline1 = $request->oaddressline1;
        }

        if ($request->has('oaddressline2')) {
            $order->oaddressline2 = $request->dtype;
        }

        if ($request->has('ocity')) {
            $order->ocity = $request->ocity;
        }

        if ($request->has('ostate')) {
            $order->ostate = $request->ostate;
        }

        if ($request->has('ozipcode')) {
            $order->ozipcode = $request->ozipcode;
        }

        if ($request->has('ostatus')) {
            $order->ostatus = $request->ostatus;
        }

        if ($request->has('ophone')) {
            $order->ophone = $request->ophone;
        }

        if ($request->has('oalternatephone')) {
            $order->oalternatephone = $request->oalternatephone;
        }

        if ($request->has('odiscountid')) {
            $order->odiscountid = $request->odiscountid;
        }

        if ($request->has('odiscountvalue')) {
            $order->odiscountvalue = $request->odiscountvalue;
        }

        if ($request->has('ototalprice')) {
            $order->ototalprice = $request->ototalprice;
        }

        if ($request->has('oshippingprice')) {
            $order->oshippingprice = $request->oshippingprice;
        }

        if ($request->has('oshippingid')) {
            $order->oshippingid = $request->oshippingid;
        }

        if ($request->has('oshippingcode')) {
            $order->oshippingcode = $request->oshippingcode;
        }

        if ($request->has('ograndtotal')) {
            $order->ograndtotal = $request->ograndtotal;
        }

        if ($request->has('opaymenttype')) {
            $order->opaymenttype = $request->opaymenttype;
        }

        if ($request->has('opaymentrequest')) {
            $order->opaymentrequest = $request->opaymentrequest;
        }

        if ($request->has('opaymentresponse')) {
            $order->opaymentresponse = $request->opaymentresponse;
        }

        if ($request->has('opaymentstatus')) {
            $order->opaymentstatus = $request->opaymentstatus;
        }

        if ($request->has('opaymentauthroized')) {
            $order->opaymentauthroized = $request->opaymentauthroized;
        }

        if ($request->has('oisgifted')) {
            $order->oisgifted = $request->oisgifted;
        }

        if (!$order->isDirty()) {
            return false;
        }

        $order->save();
        return $order;
    }

    public function deleteOrder($id)
    {
        $order = $this->getOrder($id);
        $order->delete();
        return $order;
    }
}
