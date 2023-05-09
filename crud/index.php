<?php
require("handlers/db.php");
require("handlers/get-user.php");
require("handlers/search-user.php");

require("inc/header.php");

/* 
while($userData=mysqli_fetch_assoc($sqlResult)){
    echo $userData['name'];
} 
*/
?>      
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of User</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">status</th>
                    <th scope="col">created at</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach($userData as $index=>$User) {
                           
                            
                        ?>
                        <tr>
                            <td><?= $index+1 ?></td>
                            <td><?= $User[1]; ?></td>
                            <td><?= $User[2]; ?></td>
                            <td><?php 
                            if($User[3]==1){ ?>
                               <span class="btn btn-info">pending</span>
                    
                            <?php }else{ ?>
                                <span class="btn btn-success">active</span>
                            <?php }
                            
                            
                            ?></td>
                            <td><?= date('j M Y',strtotime($User[4])); ?></td>
                            <td>
                            <a href="handlers/delete-user.php?userId=<?= $User[0];?>" class="btn btn-danger">delete</a>
                            <a href="edit.php?userId=<?= $User[0];?>" class="btn btn-primary">edit</a>

                        </td>
                            
                        </tr>
                        <?php } ?>
                    </tbody>
            </table>
        </div>
    </main>
      

<?php require("inc/footer.php"); ?>