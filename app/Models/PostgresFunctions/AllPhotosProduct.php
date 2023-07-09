<?php

namespace App\Models\PostgresFunctions;

use CodeIgniter\Model;

class AllPhotosProduct extends Model {

    public function getAllIdPhotoForProduct($product_id) {
        $query = $this->db->query('SELECT * FROM all_photos_product( ? )', [$product_id]);

        $results = array();

        foreach ($query->getResult() as $row) {
            $results[] = $row -> photo_name;
        }

        return $results;
    }

}
