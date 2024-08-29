<!-- add_category_form.php -->
<?php include('./adminPartials/adminHeader.php'); ?>

<div class="adminPage flex">
    <?php include('./adminPartials/sideMenu.php'); ?>

    <div class="mainBody">
        <div class="topSection flex">
            <div class="title">
                <span><strong>Hershey's Groceries</strong> Dashboard</span>
            </div>

            <?php include('./adminPartials/headerAdminAccount.php'); ?>
        </div>

        <div class="mainBodyContentContainer">
            <h2>Add New Category</h2>
            <form action="add_category.php" method="POST">
                <label for="category_name">Category Name:</label><br>
                <input type="text" id="category_name" name="category_name" required><br><br>

                <!-- Add fields for product association, e.g., checkboxes or select -->
                <label>Select Products to Associate:</label><br>
                <?php
                // Example: Fetch products from your database and display as checkboxes
                $sql_products = "SELECT * FROM food";
                $result_products = mysqli_query($conn, $sql_products);
                if (mysqli_num_rows($result_products) > 0) {
                    while ($row = mysqli_fetch_assoc($result_products)) {
                        echo '<input type="checkbox" name="products[]" value="' . $row['id'] . '"> ' . $row['food_name'] . '<br>';
                    }
                } else {
                    echo 'No products found.';
                }
                ?>

                <br><br>
                <button class="btn" type="submit">Add Category</button>
            </form>
        </div>

        <?php include('./adminPartials/adminFooter.php'); ?>
    </div>
</div>
