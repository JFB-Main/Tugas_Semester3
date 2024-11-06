<?php
namespace Store;

class Product{
    function echoProduct(){
        echo "Ini produk namespace Store <br>";
    }
}

namespace Warehouse;

class Product{
    function echoProduct(){
        echo "Ini produk namespace Warehouse <br>";
    }
}
?>
<?php
    use Store\Product as Product1;
    use Warehouse\Product as Product2;

    $product1 = new Product1();
    $product2 = new Product2();

    $product1->echoProduct();
    $product2->echoProduct();
?>
