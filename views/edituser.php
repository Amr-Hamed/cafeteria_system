<?php include '../templates/header.php'; 
require_once('../config.php');
session_start();
$admin = $_SESSION['admin'];

// Getting this user with id sent in query string to populate the form with already existed data
if(isset($_GET["id"])){
    $id=$_GET["id"];
    $user =  DBModel::read("SELECT * FROM users WHERE id= $id",PDO::FETCH_CLASS,'Users');
}

// Submitting edit user form data then redirection to users page
if(isset($_POST["uSubmit"]) && isset($_POST["full-name"]) && isset($_POST["email-address"]) && isset($_POST["password"])  && isset($_POST["roomNumber"]) && isset($_POST["permanent-address"])){
    $newUser = new Users();
    $newUser->id=$user->id;
    $newUser->name=$_POST['full-name'];
    $newUser->email=$_POST['email-address'];
    $newUser->password=$_POST['password'];
    $newUser->room=$_POST['roomNumber'];
    $newUser->ext=$_POST['permanent-address'];
    $newUser->admin=$user->admin;

    if(($_FILES["profile_pics"]['tmp_name'])!=null){

        $im='data:image/jpeg;base64,'.base64_encode(file_get_contents($_FILES["profile_pics"]['tmp_name']));
        $newUser->picture=$im;
    }
    else{
        $newUser->picture=$user->picture;
    }
    $newUser->save();
     header('Location:users.php');
}



?>

<div class="container adduser">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        </div>
    <div class="modal-body">
        <div class="modal-body">
                    <form name="my-form" onsubmit="" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                            <div class="col-md-6">
                                <input type="text" id="full_name" class="form-control" name="full-name" value="<?php echo $user->name;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" id="email_address" class="form-control" name="email-address" value="<?php echo $user->email;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" value="<?php echo $user->password;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" value="<?php echo $user->password;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-right">Room Number</label>
                            <div class="col-md-6">
                                <input type="number" id="room_number" class="form-control" name="roomNumber" value="<?php echo $user->room;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ext" class="col-md-4 col-form-label text-md-right">EXT.</label>
                            <div class="col-md-6">
                                <input type="number" id="ext" class="form-control" name="permanent-address" value="<?php echo $user->ext;?>" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profile_pics" class="col-md-4 col-form-label text-md-right">User Picture
                            <div class="col-md-6">
                                <input type="file" name="profile_pics" class="btn" accept="image/*">
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-success" name="uSubmit">Submit Changes</button>
                            <a class="btn btn-info" href="/views/users.php">Back</a>
                        </div>
                    </form>
        </div>
    </div>
    </div>
</div>