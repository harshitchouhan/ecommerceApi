<?php

namespace App\Http\Controllers\Admin\Products;

use App\Traits\ImageUpload;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ImageUpload;
    protected $fillable = ['pid', 'pcode', 'pbrandid', 'pcategoryId', 'pname', 'pdescription', 'psellerId', 'pwholesaleprice', 'pretailprice', 'psaleprice', 'pstatus', 'pimage1', 'pimage2', 'pimage3', 'pimage4', 'pimage5', 'pvideo', 'pmetatitle', 'pmetakeyword', 'pmetadescription', 'prelatedproducts'];

    protected $primaryKey = "pid";


    public $transformer = ProductTransformer::class;

    public function getAllProducts()
    {
        $products = Product::all();
        return $products;
    }

    public function getProduct($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function storeProduct($request)
    {
        $data = $request->all();

        if ($request->has('image1')) {
            $filePath = $this->getImage($request, 'image1', $request->pname, 'products', 1);
            $data['pimage1'] = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('image2')) {
            $filePath = $this->getImage($request, 'image2', $request->pname, 'products', 2);
            $data['pimage2'] = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('image3')) {
            $filePath = $this->getImage($request, 'image3', $request->pname, 'products', 3);
            $data['pimage3'] = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('image4')) {
            $filePath = $this->getImage($request, 'image4', $request->pname, 'products', 4);
            $data['pimage4'] = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('image5')) {
            $filePath = $this->getImage($request, 'image5', $request->pname, 'products', 5);
            $data['pimage5'] = 'http://ecommerce.test/app/public/' . $filePath;
        }

        $data['pvideo'] = 'video-1.mp4';
        $data['prelatedProdcuts'] = '0';

        $product = Product::create($data);
        return $product;
    }

    public function updateProduct($request, $id)
    {

        $product = $this->getProduct($id);

        if ($request->has('pcode')) {
            $product->pcode = $request->pcode;
        }

        if ($request->has('pbrandid')) {
            $product->pbrandid = $request->pbrandid;
        }

        if ($request->has('pcategoryid')) {
            $product->pcategoryid = $request->pcategoryid;
        }

        if ($request->has('pname')) {
            $product->pname = $request->pname;
        }

        if ($request->has('pdescription')) {
            $product->pdescription = $request->pdescription;
        }

        if ($request->has('psellerid')) {
            $product->psellerid = $request->psellerid;
        }

        if ($request->has('pwholesaleprice')) {
            $product->pwholesaleprice = $request->pwholesaleprice;
        }

        if ($request->has('pretailprice')) {
            $product->pretailprice = $request->pretailprice;
        }

        if ($request->has('psaleprice')) {
            $product->psaleprice = $request->psaleprice;
        }

        if ($request->has('pstatus')) {
            $product->pstatus = $request->pstatus;
        }

        if ($request->has('pimage1')) {
            $filePath = $this->getImage($request, 'image1', $request->pname, 'products', 1);
            $product->pimage1 = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('pimage2')) {
            $filePath = $this->getImage($request, 'image2', $request->pname, 'products', 2);
            $product->pimage2 = 'http://ecommerce.test/app/public/' . $filePath;
        }

        if ($request->has('pimage3')) {
            $filePath = $this->getImage($request, 'image3', $request->pname, 'products', 3);
            $product->pimage3 = 'http://ecommerce.test/app/public/' . $filePath;        }

        if ($request->has('pimage4')) {
            $filePath = $this->getImage($request, 'image4', $request->pname, 'products', 4);
            $product->pimage4 = 'http://ecommerce.test/app/public/' . $filePath;        }

        if ($request->has('pimage5')) {
            $filePath = $this->getImage($request, 'image5', $request->pname, 'products', 5);
            $product->pimage5 = 'http://ecommerce.test/app/public/' . $filePath;        }

        if ($request->has('pvideo')) {
            $product->pvideo = $request->pvideo;
        }

        if ($request->has('pmetatitle')) {
            $product->pmetatitle = $request->pmetatitle;
        }

        if ($request->has('pmetakeyword')) {
            $product->pmetakeyword = $request->pmetakeyword;
        }

        if ($request->has('pmetadescription')) {
            $product->pmetadescription = $request->pmetadescription;
        }

        if ($request->has('prelatedProducts')) {
            $product->prelatedProducts = $request->prelatedProducts;
        }

        if (!$product->isDirty()) {
            return false;
        }

        $product->save();
        return $product;
    }

    public function deleteProduct($id)
    {
        $product = $this->getProduct($id);
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $product->pimage1));
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $product->pimage2));
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $product->pimage3));
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $product->pimage4));
        $this->imageDelete(str_replace('http://ecommerce.test/app/public', '', $product->pimage5));
        $product->delete();
        return $product;
    }
}
