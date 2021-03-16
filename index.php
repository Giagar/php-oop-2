<?php 

class Product {
    private $product_id;
    private $category;
    protected $price;
    protected $quantity_in_store;
    protected $expedition_time;
    private $prime_available;
    protected $description;
    protected $reviews = []; // not in construct
    protected $tags = [];
    private $weight;
    protected $weight_delivery;
    protected $dimensions_delivery;

    public function __construct(int $product_id, string $category, float $price, int $quantity_in_store, int $expedition_time, bool $prime_available, string $description, array $tags, float $weight, float $weight_delivery, $dimensions_delivery)
    {
        $this->product_id = $product_id;
        $this->category = $category;
        $this->price = $price;
        $this->quantity_in_store = $quantity_in_store;
        $this->expedition_time = $expedition_time;
        $this->prime_available = $prime_available;
        $this->description = $description;
        $this->tags = $tags;
        $this->weight = $weight;
        $this->weight_delivery = $weight_delivery;
        $this->dimensions_delivery = $dimensions_delivery;
    }


    // product_id
    public function get_productId() {
        return $this->product_id;
    }

    // category
    public function get_category() {
        return $this->category;
    }

    public function set_category($newCategory) {
        $this->category = $newCategory;
    }

    // price
    public function get_price() {
        return $this->price;
    }

    public function set_price($newPrice) {
        $this->price = $newPrice;
    }

    
    // quantity_in_store
    public function get_quantityInStore() {
        return $this->quantity_in_store;
    }
    
    public function set_quantityInStore($newQuantity_in_store) {
        $this->quantity_in_store = $newQuantity_in_store;
    }
    
    // expedition_time
    public function get_expedition_time() {
        return $this->expedition_time;
    }

    public function set_expedition_time($newexpedition_time) {
        $this->expedition_time = $newexpedition_time;
    }
    
    // primeAvailable
    public function get_primeAvailable() {
        return $this->primeAvailable;
    }

    public function set_primeAvailable($newprimeAvailable) {
        $this->primeAvailable = $newprimeAvailable;
    }
    
    // description
    public function get_description() {
        return $this->description;
    }

    public function set_description($newdescription) {
        $this->description = $newdescription;
    }
    
    // reviews
    public function get_reviews() {
        return $this->reviews;
    }

    public function set_reviews($newreviews) {
        $this->reviews[] = $newreviews;
    }

    // tags
    public function get_tags() {
        return $this->tags;
    }

    public function set_tags($newtags) {
        $this->tags[] = $newtags;
    }

    // tags
    public function get_tags() {
        return $this->tags;
    }

    public function set_tags($newtags) {
        $this->tags[] = $newtags;
    }

    // weight
    public function get_weight() {
        return $this->weight;
    }

    public function set_weight($newweight) {
        $this->weight = $newweight;
    }

    // weight_delivery
    public function get_weight_delivery() {
        return $this->weight_delivery;
    }

    public function set_weight_delivery($newweight_delivery) {
        $this->weight_delivery = $newweight_delivery;
    }

    // dimensions_delivery
    public function get_dimensions_delivery() {
        return $this->dimensions_delivery;
    }

    public function set_dimensions_delivery($newdimensions_delivery) {
        $this->dimensions_delivery = $newdimensions_delivery;
    }
    
}   

class Tech extends Product {
    private int $height;
    private int $width;
    private int $length;
    private int $weight;
    private string $subCategory;

    // height
    public function get_height() {
        return $this->height;
    }

    public function set_height($newheight) {
        $this->height = $newheight;
    }

    // width
    public function get_width() {
        return $this->width;
    }

    public function set_width($newwidth) {
        $this->width = $newwidth;
    }

    // length
    public function get_length() {
        return $this->length;
    }

    public function set_length($newlength) {
        $this->length = $newlength;
    }

    // weight
    public function get_weight() {
        return $this->weight;
    }

    public function set_weight($newweight) {
        $this->weight = $newweight;
    }

    // subCategory
    public function get_subCategory() {
        return $this->subCategory;
    }

    public function set_subCategory($newsubCategory) {
        $this->subCategory = $newsubCategory;
    }

}

class Food {
    private $expiration_date;
    private $genre;

    // expiration_date
    public function get_expiration_date() {
        return $this->expiration_date;
    }

    public function set_expiration_date($newexpiration_date) {
        $this->expiration_date = $newexpiration_date;
    }

    // genre
    public function get_genre() {
        return $this->genre;
    }

    public function set_genre($newgenre) {
        $this->genre = $newgenre;
    }
}

class User {
    private int $id;
    private string $name;
    private string $surname;
    private int $age;
    private $username;
    private $password;
    private $email;
    private $address;
    protected $cart = [];
    protected $payment_methods = [];

    public function __construct($id, $name, $surname, $age, $username, $password, $email, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->address = $address;
    }

    // id 
    public function get_id() {
        return $this->id;
    }

    // name
    public function get_name() {
        return $this->name;
    }

    public function set_name($newName) {
        $this->name = $newName;
    }

    // surname
    public function get_surname() {
        return $this->surname;
    }

    public function set_surname($newsurname) {
        $this->surname = $newsurname;
    }

    // age
    public function get_age() {
        return $this->age;
    }

    public function set_age($newage) {
        $this->age = $newage;
    }

    // password
    public function get_password() {
        return $this->password;
    }

    public function set_password($newpassword) {
        $this->password = $newpassword;
    }

    // username
    public function get_username() {
        return $this->username;
    }

    public function set_username($newusername) {
        $this->username = $newusername;
    }

    // email
    public function get_email() {
        return $this->email;
    }

    public function set_email($newemail) {
        $this->email = $newemail;
    }

    // address
    public function get_address() {
        return $this->address;
    }

    public function set_address($newaddress) {
        $this->address = $newaddress;
    }

    // cart
    public function get_cart() {
        return $this->cart;
    }

    public function set_cart($newItem) {
        $this->cart[] = $newItem;
    }

    // payment_methods
    public function get_payment_methods() {
        return $this->payment_methods;
    }

    public function set_payment_methods($newpayment_method) {
        $this->payment_methods[] = $newpayment_method;
    }

}

class StandardUser extends User {

}

class PrimeUser extends User {
    protected int $expedition_time;


    // expedition_time
    public function get_expedition_time() {
        return $this->expedition_time;
    }

    public function set_expedition_time($newexpedition_time) {
        $this->expedition_time = $newexpedition_time;
    }

}