<?php 
    require_once "controller/read-controller.php";
    require_once "inc/header.php";
?>
            <h1 class="section__h1">Crud Operation Read List</h1>
            <div class="btn-add ">
                <button><a href="create.php">Add List</a></button>
            </div>
            <table class="section__table">  
                <thead>
                    <tr>
                        <th>Company</th>
                        <th>email</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Actions</th>
                    </tr>   
                </thead>  
                <tbody>
                <?php foreach($result as $item): ?>
                <tr>
                    <td><?php echo strtoupper($item->company);  ?></td>
                    <td><?php echo $item->email;  ?></td>
                    <td><?php echo $item->phone;  ?></td>
                    <td><?php echo strtoupper($item->country);  ?></td>
                    <td class="buttons">
                        <button class="button edit"><a href="edit.php?id=<?php echo $item->id ?>">Edit</a></button>
                        <button class="button delete"><a href="delete.php?id=<?php echo $item->id ?>">Delete</a></button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>                  
            </table>
<?php require_once "inc/footer.php"; ?>     