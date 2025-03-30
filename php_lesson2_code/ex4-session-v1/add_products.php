<?php
    session_start();
    include "Product.php";
    include "Order.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ex 4-Add Products</title>
    <link rel="stylesheet" href="site.css">
</head>
<body>
<?php
    if(isset($_POST['btn_submit_order'])){ // Post from add_order.php
        $name = sanatize_input($_POST['name']); // Clean data
        $order = new Order($name); // Create order
        $_SESSION['order'] = serialize($order); // Put order into session
    }
    if(isset($_POST['btn_add_products'])){ // Post from this page, add_products.php
        //var_dump($_POST['name']);
        $name = sanatize_input($_POST['name']); // Clean data
        if(strlen($name)>0) {
            $price = sanatize_input($_POST['price']); // Clean data
            $product = new Product($name, $price); // Create Product
            $order = unserialize($_SESSION['order']); // Get order from session
            $order->addProduct($product); // Add product to order
            $_SESSION['order'] = serialize($order); // Put order back into session
        }
    }
?>
<a href="../outline.php">Back to menu</a>
<h2>Ex 4 - Add Product</h2>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="name">Product Name</label>
    <input type="text" id="name" name="name">
    <label for="price">Price</label>
    <input type="text" id="price" name="price">
    <input type="submit" name="btn_add_products" value="Add Product">
</form>
<?php
    $order = unserialize($_SESSION['order']); // Pull order object out of session and display some order info
    echo "<h3>Order Status</h3>";
    echo "<ul>";
    echo "<li>Customer Name: " . $order->getCustomerName() .
        ", Num Products: " . $order->getNumberOfProducts() . "</li>";
    echo "<li>Total Cost: " . sprintf("$%.2f", $order->totalCost()) . "</li>";

    // If a postback to this page, show products
    if(isset($_POST['btn_add_products'])) {
        echo "<li> Products";
        echo "<ol>";
        for ($i = 0; $i < $order->getNumberOfProducts(); $i++) {
            $product = $order->getProduct($i);
            echo "<li> Name: " . $product->getName() .
                ", Price: " . sprintf("$%.2f", $product->getPrice()) . "</li>";
        }
        echo "</ol>";
        echo "</li>";
    }
    echo "</ul>";
?>

</body>
</html>

<?php
    function sanatize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>