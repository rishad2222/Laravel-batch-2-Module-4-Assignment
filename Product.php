<?php 

class Product {
    // Todo: Add Propertise
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
    // Todo Initialize Propertise
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
    // Todo Add getFormattedPrice Method
        return '$' . number_format($this->price, 2);
    }

    public function showDetails() {
    // Todo Add showDetails Method
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>