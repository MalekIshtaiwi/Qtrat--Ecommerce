<?php

require_once 'models/PublicModels/Cart.php';
require_once 'controllers/Controller.php';
class CartController extends Controller {
    private $cartModel;

    public function __construct() {
        $this->cartModel = new Cart();
    
    
    if (!isset($_SESSION['userId'])) {
        $_SESSION['userId'] = 9999;  
    }
    
    $user_id = $_SESSION['userId']; 
}


    public function index()
    {   
        
    
        
        $user_id = isset($_SESSION['userId']) ? $_SESSION['userId'] : 9999;
    
        
        $cart = $this->model('cart');
        $cartItems = $cart->getCartItems($user_id); 
    
        
        $this->render('public.cart.cart', [
            'pageTitle' => 'All cartItems',
            'cartItems' => $cartItems
        ]);
    }
    

    public function update($id) {
        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['cart_id'], $_POST['quantity'])) {
            $user_id = $_SESSION['userId'] ?? 1;  
            $cart_id = $_POST['cart_id'];
            $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT) ?? 1;
    
            if ($quantity > 0) {  
                $this->cartModel->updateQuantity($cart_id, $quantity);
            }
    
            header("Location: /cart");
            exit; 
        }
    }
    
    
    

public function destroy($id)
{
    $cart = $this->model('cart');

    if ($cart->delete($id)) { 
        $cartItems = $cart->getCartItems($_SESSION['userId']);

        
        $this->render('public.cart.cart', [
            'title' => 'Cart Items',
            'cartItems' => $cartItems
        ]);
    } else {
        echo "Failed to delete item!";
    }
}


}




?>