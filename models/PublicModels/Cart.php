<?php
require_once 'models/Model.php';

class Cart extends Model
{
    public function __construct()
    {
        parent::__construct('cart');
    }

    public function getCartItems($user_id)
    {
        $stmt = $this->db->prepare("
SELECT 
    p.product_name, 
    p.product_price, 
    p.product_img_url, 
    c.quantity
FROM cart c
JOIN products p ON c.product_id = p.id
WHERE c.user_id = :user_id;

        ");


        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }



    public function addToCart($user_id, $product_id, $quantity = 1)
    {
        try {

            $existingItem = $this->query(
                "SELECT * FROM cart WHERE user_id = :user_id AND product_id = :product_id",
                ['user_id' => $user_id, 'product_id' => $product_id],
                false
            );

            if ($existingItem) {
                // تحديث الكمية إذا كان العنصر موجودًا
                $newQuantity = $existingItem['quantity'] + $quantity;
                return $this->query(
                    "UPDATE cart SET quantity = :quantity WHERE id = :id",
                    ['quantity' => $newQuantity, 'id' => $existingItem['id']]
                );
            }

            // إضافة عنصر جديد إلى السلة إذا لم يكن موجودًا
            return $this->query(
                "INSERT INTO cart (user_id, product_id, quantity) VALUES (:user_id, :product_id, :quantity)",
                ['user_id' => $user_id, 'product_id' => $product_id, 'quantity' => $quantity]
            );
        } catch (PDOException $e) {
            error_log("Database error in addToCart(): " . $e->getMessage());
            return false;
        }
    }


    // دالة لحذف عنصر من سلة التسوق
    public function removeFromCart($user_id, $product_id)
    {
        try {
            return $this->deleteByWhere(['user_id' => $user_id, 'product_id' => $product_id]);
        } catch (PDOException $e) {
            error_log("Database error in removeFromCart(): " . $e->getMessage());
            return false;
        }
    }

    // دالة لحساب إجمالي قيمة سلة التسوق
    public function getTotal($user_id)
    {
        try {
            $stmt = $this->db->prepare("
                SELECT SUM(products.product_price * cart.quantity) as total 
                FROM cart 
                INNER JOIN products ON cart.product_id = products.id 
                WHERE cart.user_id = :user_id
            ");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['total'] ? $result['total'] : 0;
        } catch (PDOException $e) {
            error_log("Database error in getTotal(): " . $e->getMessage());
            return 0;
        }
    }
}
