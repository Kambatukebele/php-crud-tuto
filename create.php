<?php 
    require_once "controller/create-controller.php"; 
    require_once "inc/header.php"; 
?>
            <h1 class="section__h1">Create List</h1>
            <form action="" method="POST">
                <div class="input">
                    <label for="company">Company</label>
                    <input type="text" name="company" placeholder="Enter your company here">
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your Email here">
                </div>
                <div class="input">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" placeholder="Enter your phone here">
                </div>
                <div class="input">
                    <label for="country">Country</label>
                    <input type="text" name="country" placeholder="Enter your country here">
                </div>
                <div class="save-btn">
                    <button type="submit">Save list</button>
                </div>
            </form>
<?php require_once "inc/footer.php"; ?>    