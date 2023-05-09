<?php
require("handlers/db.php");
$userId=$_GET['userId'];
require("handlers/get-user-data.php");
require("inc/header.php");


?>


    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>Edit User</h1>
            <form action="handlers/edit-user.php" method="POST">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?=$userData['name']; ?>" class="form-control" id="name" value="Nama saya Pisyek" placeholder="Enter name">
                    <input type="hidden" name="userId" value="<?=$userData['id']; ?>" class="form-control" id="name" value="Nama saya Pisyek" placeholder="Enter name">

                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="email" value="<?=$userData['email']; ?>" class="form-control" id="name" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="name">status</label>
                    <select name="" id=""> 
                        <option value="1"> pending </option> 
                        <option value="2"> active </option> 

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>

<?php require("inc/footer.php"); ?>