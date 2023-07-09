<?php

namespace App\Models\PostgresTables;

use CodeIgniter\Model;

class Customer extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'password', 'phone', 'date', 'address', 'bank_card'];

    public function getAllCustomers() {
        $query = $this->db->query('SELECT * FROM customer');
        return $query->getResult();
    }

    public function isExistingCustomer($email, $password) {
        $query = $this->db->query("SELECT id FROM customer WHERE email = ? AND password = ?", [$email, $password]);
        $result = $query->getResult();
        if (count($result) > 0)
            return $result[0]->id;
        else
            return 0;

    }

    public function insertCustomer($name,$email, $password, $phone, $date, $address, $bank_card){
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'phone' => $phone,
            'date' => $date,
            'address' => $address,
            'bank_card' => $bank_card,

        ];

        $this->db->table('customer')->insert($data);

        return $this->db->insertID();
    }

}
