<?php include '../templates/header.php'; 
require_once('../config.php');
?>

<div class="container adduser">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
        </div>
    <div class="modal-body">
        <div class="modal-body">
                    <form name="my-form" onsubmit="" action="users.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                            <div class="col-md-6">
                                <input type="text" id="full_name" class="form-control" name="full-name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" id="email_address" class="form-control" name="email-address" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-right">Room Number</label>
                            <div class="col-md-6">
                                <input type="number" id="room_number" class="form-control" name="roomNumber"required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ext" class="col-md-4 col-form-label text-md-right">EXT.</label>
                            <div class="col-md-6">
                                <input type="number" id="ext" class="form-control" name="permanent-address" required>
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
                            <button type="submit" class="btn btn-success" name="uSubmit">Add User</button>
                            <a class="btn btn-info" href="/views/users.php">Back</a>
                        </div>
                    </form>
        </div>
    </div>
    </div>
</div>