<?php
require_once 'models/Product.php';
require_once 'controllers/Controller.php';
class ProductspublicController extends Controller
{

    public function index()
    {
        
        
            $product = $this->model('product');
            $products = $product->all();
            $this->render('public.productspublic.index', [
                'pageTitle' => 'All Products',
                'products' => $products
            ]);
      
      
    }

    

   

   

    public function show($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
        $this->render('public.productspublic.show', ['product' => $product]);
    }

    


}