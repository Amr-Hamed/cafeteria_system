<?php include '../templates/header.php'; 
require_once('../config.php');
session_start();
$admin = $_SESSION['admin'];

// Delete 
if(isset($_GET["id"])){
    $user = new Users();
    $user->id=$_GET["id"];
    $user->delete();
    header('Location:users.php');
}
if(isset($_POST["uSubmit"]) && isset($_POST["full-name"]) && isset($_POST["email-address"]) && isset($_POST["password"])  && isset($_POST["roomNumber"]) && isset($_POST["permanent-address"])  ){
    $newUser = new Users();
    $newUser->name=trim($_POST['full-name']);
    $newUser->password=trim($_POST['password']);
    $newUser->email=trim($_POST["email-address"]);
    $newUser->room=$_POST["roomNumber"];
    $newUser->ext=$_POST["permanent-address"];
    $im='data:image/jpeg;base64,'.base64_encode(file_get_contents($_FILES['profile_pics']['tmp_name']));
    $newUser->picture=$im;
    $newUser->save();
     header('Location:users.php');
}

$users = DBModel::read("SELECT * FROM users",null);

?>
<div class="container-fluid     ">
    <div style="padding: 3%">
        <h1 style="text-align: center"> Users</h1>
        <!-- <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#exampleModal">Add User</button> -->
        <form action="adduser.php">
        <button type="submit" class="btn btn-success add-btn" >Add User</button>
        </form>
    </div>
    <!-- Users Table -->
    <div style="width: 80%; margin: auto">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Room</th>
                    <th scope="col">Image</th>
                    <th scope="col">EXT.</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>    
                <?php 
                if(isset($users)){
                    foreach ($users as $user) {
                ?>
                        <tr>
                            <th scope="row"><?php echo $user['name'];?></th>
                            <td><?php echo $user['room'];?></td>
                            <td>
                                <div class="inset">
                                    <img src=<?php echo $user['picture'];?>>
                                </div>
                            </td>
                            <td><?php echo $user['ext'];?></td>
                            <td>
                                <a class="btn btn-info" href="/views/edituser.php?id=<?php echo $user['id']?>">Edit</a>
                                <a class="btn btn-info" href="/views/users.php?id=<?php echo $user['id']?>">Delete</a>
                            </td>
                        </tr>
                   <?php }} ?>
            </tbody>
        </table>
    </div>
    <!-- end of users Table -->
    <!-- add user Form  -->
</div>
<!-- Form end  -->
</body>

</html> 