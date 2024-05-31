<?php include('header.php'); ?>
<link rel="stylesheet" href="<?= base_url('public/assets/css/about.css') ?>">
<link rel="stylesheet" href="<?= base_url('public/assets/css/courses.css') ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .cart-table {
        border: 2px solid #000;
        padding: 20px;
        border-radius: 10px;
        overflow: auto;
        background: linear-gradient(135deg, #f6d365 0%, #fda085 100%); /* Gradient background */
        padding-top: 30px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add some shadow */
    }

    .cart-table table {
        width: 100%;
    }

    .cart-table th,
    .cart-table td {
        padding: 10px;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for table cells */
    }

    .cart-table th {
        background-color: rgba(255, 255, 255, 0.9);
        font-weight: bold;
    }

    .cart-table .btn-danger {
        padding: 5px 10px;
    }

    .btn-sm {
        font-size: 20px;
    }

    .container {
        padding-bottom: 30px;
        padding-top: 30px;
    }

    .text-center {
        text-align: center;
    }

    .cart-table .delete-item {
        cursor: pointer;
        color: red;
    }
    .but{
        margin-top:30px;
    }
</style>

<div class="container">
    <h2 class="text-center">Your Cart</h2>
    <div class="cart-table">
        <table class="table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Price</th>
                    <th>Session</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="cart-items">
                <?php if (!empty($cart_items)): ?>
                    <?php foreach ($cart_items as $item): ?>
                        <tr data-id="<?= $item['id'] ?>">
                            <td><?= esc($item['course_name']) ?></td>
                            <td><?= esc($item['price']) ?></td>
                            <td><?= esc($item['session']) ?></td>
                            <td><?= esc($item['duration']) ?></td>
                            <td>
                                <i class="fas fa-trash delete-item"></i>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No items in cart</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div class="text-center">
        <button class="btn btn-primary but">Checkout</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-item').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const row = btn.closest('tr');
                row.remove();
                updateCartCount();
            });
        });

        function updateCartCount() {
            const cartCount = document.getElementById('cart-count');
            const cartItems = document.querySelectorAll('#cart-items tr');
            cartCount.textContent = cartItems.length;
        }

        updateCartCount();
    });
</script>

<?php include('footer.php'); ?>
