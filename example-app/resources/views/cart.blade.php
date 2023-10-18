<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Checkout</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }
        h1 {
            font-size: 2em;
        }
        .cart-items {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
        }
        .cart-item-label {
            font-size: 1.2em;
            font-weight: bold;
        }
        .cart-item-details {
            font-size: 1em;
        }
        .checkout-button {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            font-weight: bold;
        }

/* Change nav font color to black */
nav a {
    color: #000; /* Black color */
}

body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}
header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 10px;
}
nav {
    text-align: center;
}
nav ul {
    list-style: none;
    padding: 0;
}
nav ul li {
    display: inline;
    margin-right: 20px;
}
a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}
.container {
    max-width: 960px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
    </style>
</head>
<body>
    <header>
        <h1>Cart Checkout</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="menu">Menu</a></li>
            <li><a href="contact">Contact</a></li>
            <li><a href="about">About</a></li>
            <li><a href="cart">Cart</a></li>
        </ul>
    </nav>
    <div class="cart-items">
        <ul>
            <li>
                <span class="cart-item-label">Item 1:</span>
                <p class="cart-item-details">Description of Item 1, Price: $10.00</p>
            </li>
            <li>
                <span class="cart-item-label">Item 2:</span>
                <p class="cart-item-details">Description of Item 2, Price: $15.00</p>
            </li>
            <!-- Add more cart items as needed -->

            <li>
                <span class="cart-item-label">Total:</span>
                <p class="cart-item-details">$25.00</p>
            </li>
        </ul>
        <a href="checkout" class="checkout-button">Checkout</a>
    </div>
</body>
</html>
