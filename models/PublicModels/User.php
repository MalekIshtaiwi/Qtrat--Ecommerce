<?php
// models/User.php
require_once 'config/Database.php';

class User extends Model
{
    public function getUsers()
    {
        return null;
    }

    public function create($data)
    {
        $sql = "INSERT INTO users (first_name, last_name, email, password, phone_number, address) 
                VALUES (:first_name, :last_name, :email, :password, :phone_number, :address)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':first_name' => $data['first_name'],
            ':last_name' => $data['last_name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':phone_number' => $data['phone_number'],
            ':address' => $data['address']
        ]);
        return $this->db->lastInsertId();
    }

    public function findByEmail($email)
{
    $sql = "SELECT * FROM users WHERE email = :email";
    $stmt = $this->db->prepare($sql);
    $stmt->execute([':email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
}