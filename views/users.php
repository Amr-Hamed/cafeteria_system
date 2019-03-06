<?php include '../templates/header.php'; ?>
<div class="container-fluid     ">
    <div style="padding: 3%">
        <h1 style="text-align: center"> Users</h1>
        <button type="button" class="btn btn-success add-btn" data-toggle="modal" data-target="#exampleModal">Add User</button>
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
                <tr>
                    <th scope="row">Hesham</th>
                    <td>123</td>
                    <td>
                        <div class="inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>011233</td>
                    <td>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Gomaa</th>
                    <td>234</td>
                    <td>
                        <div class="inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>011233</td>
                    <td>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Khaled</th>
                    <td>345</td>
                    <td>
                        <div class="inset">
                            <img src="http://rs775.pbsrc.com/albums/yy35/PhoenyxStar/link-1.jpg~c200">
                        </div>
                    </td>
                    <td>011233</td>
                    <td>
                        <button type="button" class="btn btn-info">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- end of users Table -->

    <!-- add user Form  -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form name="my-form" onsubmit="" action="success.php" method="">
                        <div class="form-group row">
                            <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                            <div class="col-md-6">
                                <input type="text" id="full_name" class="form-control" name="full-name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                            <div class="col-md-6">
                                <input type="email" id="email_address" class="form-control" name="email-address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
                            <div class="col-md-6">
                                <input type="password" id="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="room_number" class="col-md-4 col-form-label text-md-right">Room Number</label>
                            <div class="col-md-6">
                                <input type="number" id="room_number" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ext" class="col-md-4 col-form-label text-md-right">EXT.</label>
                            <div class="col-md-6">
                                <input type="number" id="ext" class="form-control" name="permanent-address">
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
                            <button type="submit" class="btn btn-success">Add User</button>
                        </div>
                </div>
                </form>


            </div>
        </div>
    </div>
</div>

<!-- Form end  -->

</div>
</div>
</body>

</html> 