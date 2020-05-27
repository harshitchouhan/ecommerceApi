<?php

namespace App\Http\Controllers\Admin\Orders;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = ['oid', 'ocustomername', 'ocid', 'oemail', 'oaddressline1', 'oaddressline2', 'ocity', 'ostate', 'ozipcode', 'ostatus', 'ophone', 'oalternatephone', 'odiscountid', 'odiscountvalue', 'ototalprice', 'oshippingprice', 'oshippingid', 'oshippingcode', 'ograndtotal', 'opaymenttype', 'opaymentrequest', 'opaymentresponse', 'opaymentstatus', 'opaymentauthroized', 'oisgifted'];
}
