<?php

namespace App\Http\Controllers\Admin\ProductAttribute;

use App\Traits\ImageUpload;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use ImageUpload;
    protected $fillable = ['paid', 'paname', 'pavalue', 'padetail', 'pafilter', 'pastatus', 'paimage', 'pacategory'];

    protected $primaryKey = "paid";

    public $transformer = ProductAttributeTransformer::class;

    public function getAllProductAttributes()
    {
        $productAttributes = ProductAttribute::all();
        return $productAttributes;
    }

    public function getProductAttribute($id)
    {
        $productAttributes = ProductAttribute::findOrFail($id);
        return $productAttributes;
    }

    public function storeProductAttribute($request)
    {
        $data = $request->all();

        if ($request->has('image')) {
            $filePath = $this->getImage($request, 'image', $request->paname, 'productAttributes');
            $data['paimage'] = 'http://ecommerce.test/app/public' . $filePath;
        }

        $data['pastatus'] = '0';

        $productAttribute = ProductAttribute::create($data);
        return $productAttribute;
    }

    public function updateProductAttribute($request, $id)
    {
        $productAttribute = $this->getProductAttribute($id);

        if ($request->has('paname')) {
            $productAttribute->paname = $request->paname;
        }

        if ($request->has('pavalue')) {
            $productAttribute->pavalue = $request->pavalue;
        }

        if ($request->has('padetail')) {
            $productAttribute->padetail = $request->padetail;
        }

        if ($request->has('pafilter')) {
            $productAttribute->pafilter = $request->pafilter;
        }

        if ($request->has('pastatus')) {
            $productAttribute->pastatus = $request->pastatus;
        }

        if ($request->has('paimage')) {
            $filePath = $this->getImage($request, 'image', $request->paname, 'productAttributes');
            $data['paimage'] = 'http://ecommerce.test/app/public' . $filePath;
        }

        if ($request->has('pacategory')) {
            $productAttribute->pacategory = $request->pacategory;
        }

        if (!$productAttribute->isDirty()) {
            return false;
        }

        $productAttribute->save();
        return $productAttribute;
    }

    public function deleteProductAttribute($id)
    {
        $productAttribute = $this->getProductAttribute($id);
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $productAttribute->paimage));
        $productAttribute->delete();
        return $productAttribute;
    }
}
