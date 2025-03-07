<?php
require_once 'models/PublicModels/Shop.php';
require_once 'controllers/Controller.php';
class ShopController extends Controller
{

    public function index()
    {
        
        
            $product = $this->model('product');
            $products = $product->all();
            $this->render('public.shop.index', [
                'pageTitle' => 'All Products',
                'products' => $products
            ]);
      
      
    }

    

   

   

    public function show($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
        $this->render('public.shop.show', ['product' => $product]);
    }

    


}