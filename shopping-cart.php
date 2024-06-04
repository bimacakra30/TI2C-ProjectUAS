<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - Thrift Shop</title>
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/icon/logo.png" rel="shortcut icon">
    <style>
        .navbar {
            padding: 0px;
        }

        .navbar-nav .nav-item {
            margin-right: 20px;
        }

        .container {
            padding: 15px;
        }

        .cart-list {
            list-style-type: none;
            padding: 0;
        }

        .cart-item {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
        }

        .checkout-form {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .checkout-form input,
        .checkout-form button {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border-radius: 4px;
        }

        .checkout-form button {
            background-color: gray;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .checkout-form button:hover {
            background-color: #333;
        }
    </style>
    <script>
        function loadCart() {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let cartList = document.getElementById('cart-list');
            cartList.innerHTML = '';
            cart.forEach((item, index) => {
                let li = document.createElement('li');
                li.className = 'cart-item';
                li.innerHTML = `
                    <h3>${item.name}</h3>
                    <p>Category: ${item.category}</p>
                    <input type="number" min="1" value="${item.quantity}" onchange="updateQuantity(${index}, this.value)">
                    <button onclick="removeFromCart(${index})">Remove</button>
                `;
                cartList.appendChild(li);
            });
        }

        function updateQuantity(index, quantity) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart[index].quantity = parseInt(quantity);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        function removeFromCart(index) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.splice(index, 1);
            localStorage.setItem('cart', JSON.stringify(cart));
            loadCart();
        }

        function loadUserData() {
            let user = JSON.parse(localStorage.getItem('user'));
            if (user) {
                document.getElementById('name').value = user.name;
                document.getElementById('email').value = user.email;
                document.getElementById('address').value = user.address;
            }
        }

        function checkout(event) {
            event.preventDefault();
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            if (cart.length === 0) {
                alert('Your cart is empty!');
                return;
            }

            let name = document.getElementById('name').value;
            let email = document.getElementById('email').value;
            let address = document.getElementById('address').value;

            let userData = {
                name: name,
                email: email,
                address: address,
                cart: cart
            };

            fetch('checkout.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(userData)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Order placed successfully! Check your email for details payment');
                        localStorage.setItem('cart', JSON.stringify([]));
                        loadCart();
                    } else {
                        alert('Failed to place order.');
                    }
                })
                .catch(error => console.error('Error:', error));
        }

        window.onload = function() {
            loadCart();
            loadUserData();
        };
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="jaket.php">Jaket</a>
                            <a class="dropdown-item" href="baju.php">Baju</a>
                            <a class="dropdown-item" href="sepatu.php">Sepatu</a>
                            <a class="dropdown-item" href="celana.php">Celana</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shopping-cart.php">Shopping Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Shopping Cart</h2>
        <ul id="cart-list" class="cart-list">
        </ul>
        <div class="checkout-form">
            <h3>Checkout</h3>
            <form onsubmit="checkout(event)">
                <input type="text" id="name" name="name" placeholder="Your Name" class="form-control" required>
                <input type="email" id="email" name="email" placeholder="Your Email" class="form-control" required>
                <input type="text" id="address" name="address" placeholder="Your Address" class="form-control" required>
                <button type="submit" class="btn btn-primary">Place Order</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>