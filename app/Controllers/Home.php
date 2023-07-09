<?php

namespace App\Controllers;

use App\Models\PostgresTables\Craftsman;
use App\Models\PostgresTables\Category;
use App\Models\PostgresTables\Customer;
use App\Models\PostgresTables\Admin;
use App\Models\PostgresTables\Genre;
use App\Models\PostgresTables\HeartReaction;
use App\Models\PostgresTables\ProductEye;
use App\Models\PostgresTables\Product;
use App\Models\PostgresViews\ProductCategoryGenre;

class Home extends BaseController {

    protected $category;
    protected $genre;
    protected $craftsman;
    protected $customer;
    protected $admin;
    protected $productCategoryGenre;
    protected $product;
    protected $heartReaction;
    protected $productEye;

    public function __construct() {
        helper('session');
    }

    public function index() {
        return view('ClientSide/sign-in');
    }



    public function searchProductWithtJs(){
        $this -> product = new Product();
        $data['allProducts'] = $this -> product -> getAllProducts(null);
        return view('ClientSide/JsonDataProduct.php',$data);
    }

    public function updateHeartForProduct() {
        $customerId = session()->get('customerId');
        $productId = $this -> request -> getGet('productId');
        $this -> heartReaction = new HeartReaction($customerId, $productId);
        $this -> heartReaction -> makeProductBeReacted();
        return $this -> index();
    }

    public function makeProductView() {

        $customerId = session()->get('customerId');
        $productId = $this -> request -> getGet('productId');
        $this -> productEye = new ProductEye($customerId, $productId);
        $this -> productEye -> makeProductView();
        return view('ClientSide/ProductDetails');
    }

    public function login() {

        $this -> customer = new Customer();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        
        if ($this -> customer ->isExistingCustomer($email, $password) == 0) {
            return view('ClientSide/sign-in');
        }
        else {
            session()->set('customerId', $this -> customer ->isExistingCustomer($email, $password));
            return view('ClientSide/Home');
        }
    }

    public function logOut() {
        session() ->remove('customerId');
        session()->destroy();
        return view('ClientSide/Home');
    }


    public function signUp() {
        $this -> customer = new Customer();
        $name = $this -> request -> getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $insertId = $this -> customer -> insertCustomer($name, $email, $password, "1234567890", "2022-05-12", "Any ee", "12143dse3", 1);

        if ($insertId > 0 ) {
            session() -> set('customerId', $insertId);
            return $this -> index();
        }

        return view('ClientSide/SignUp');
    }

    public function craftsmenList() {
        $this->craftsman = new Craftsman();
        $data['craftsmen'] = $this -> craftsman -> getAllCrafstman();
        return view('Craftsmen.php', $data);
    }
    

    public function data(){
        $this -> product = new Product();
        $this -> category = new Category();
        $categories = $this -> category -> getAllCategory();
        $data['datachart'] = $this -> product -> getDataDashboard($categories);
        // $vaovao = array(
        //     'period' => '2010-09-08 00:00:00',
        //     'Pottery' => 23,
        //     'Weaving' => 32,
        //     'Jewelry' => 56,
        //     'Sculpture' => 24,
        //     'Basketry' => 34
        // );
        // $tsyvaovao = array(
        //     'period' => '2010-10-08 00:00:00',
        //     'Pottery' => 23,
        //     'Weaving' => 32,
        //     'Jewelry' => 56,
        //     'Sculpture' => 24,
        //     'Basketry' => 34
        // );
        // $data['datachart'] = [$vaovao,$tsyvaovao];
        return view('ClientSide/DataDashboard.php',$data);
    }

}
