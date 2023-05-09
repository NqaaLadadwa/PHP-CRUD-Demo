<?php
require("handlers/db.php");
require("handlers/search-user.php");
require("inc/header.php");
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
                    <th scope="col">action</th>
<th/>

                    </tr>
                </thead>
                <tbody>
<?php
    //here we go to delete page and نمرر parameter 
    //strtotime convert string to time 
//index is a proparities for foreach that give me a chance to give a correct id
//ican sent more than one parametrers by &
 /*sent data in get way in search*/
foreach($userData as $index=>$users){?>


    <tr>
    <td><?=$index+1;?></td>
    <td><?=$users[1];?></td>
    <td><?=$users[2];?></td>
    <td><?php
    if($users[3]==1){?>
    <span class="btn btn-info">not active</span> 
    <?php } else{?>
    <span class="btn btn-success">active</span> 
    <?php }
    ?></td>
    <td><?=date('j M Y',strtotime($users[4]));?></td>
    <td><a href="handlers/delete.php?userId=<?= $users[0];?>"class="btn btn-danger">delete</a></td>
    <td><a href="edit.php?userId=<?= $users[0];?>"class="btn btn-secondary">Edit</a></td>

    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </main>
      
    <?php
require("inc/footer.php");

?>