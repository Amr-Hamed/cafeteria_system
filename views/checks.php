<?php include '../templates/header.php';
require_once('../config.php');
$users = DBModel::read("SELECT u.* FROM users u WHERE u.admin = 0",null);
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="container-fluid     ">
    <div style="padding: 3%">
        <h1 style="text-align: center">Checks</h1>
    </div>

    <!-- Start And End Dates of Orders -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-auto">
                <label class="labelDate">Start Date</label>
                <input type="date" name="start" id="start" class="Date">
            </div>
            <div class="col-md-auto">
                <label class="labelDate">End Date</label>
                <input type="date" name="end" id="end" class="Date">
            </div>
            <div class="col-md-auto">
                <Button onclick="" value="filter" class="btn btn-info" name="submit">Filter</Button>
            </div>
        </div>
    </div>

    <!-- users dropdown list -->

    </div>
        <div class="col-sm-7 " style="float:left">
            <div class="add-to-user">
                <div class="form-group row">
                    <label for="user" class="col-md-3 col-form-label text-md-center">
                        <h3>Users</h3>
                    </label>
                    <div class="col-md-8">
                        <select name="user" style="width: 100%;padding-top:2%;margin-top:2%">
                            <option selected>
                            <?php if(isset($_POST['submit'])){
                                $userSelected = $_POST['user'];
                                echo $userSelected;
                            }
                            ?>
                            </option>
                             <?php if(isset($users)) {
                                 foreach ($users as $user) {?>
                                    <option value="<?php echo $user['name']; ?>"><?php echo $user['name'];?></option>
                            <?php }}?>            
                        </select>
                    </div>
                </div>
            </div>
            <hr />
</div>
<!-- <?php 
// $test = 1;
// $targetUser = DBModel::read("SELECT u.* FROM users u WHERE u.id = $test ",null);
// if(isset($targetUser)){
//     // echo gettype($targetUser);
//     foreach ($targetUser as $tuser){
//         echo $tuser['name'];
//     }
//     // echo $targetUser[0].['name'];
// }else { echo "false";}
?> -->


<!-- Users Table  -->

<div style="width: 80%; margin: auto">
    <table class="table table-striped table-success ">
        <thead>
            <tr>
                <th scope="col" class="Date">Name</th>
                <th scope="col" class="Date">Total</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        $submit = $_POST['submit'];
        // $user = $_POST['user'];
        $user = "amr";
        $user_id = DBModel::read("SELECT u.id FROM users u WHERE u.name = $user ",null);
        echo $user_id[0]['id'];
        echo gettype($user_id);
        // $amount = DBModel::read("SELECT SUM(o.amount) FROM orders o WHERE u.user_id = $user_id",null);
        // echo $user_id[0] . " i" . $amount['amount'];
        // echo gettype($amount) . " echo " . gettype($user_id);
        // echo $user;
        // foreach ($user_id as $elment)
        // {
        //     echo $elment['id'];
        // }
        if(isset($submit)){
            if(isset($user)){ 
                echo "<tr> 
                        <th> $user </tr> 
                      </tr>";
            }
        }
            // <tr>
            //     <th scope="row">Hesham</th>
            //     <td>110</td>
            // </tr>

            // <tr>
            //     <th scope="row">Hesham Again</th>
            //     <td>200</td>
            // </tr>
            // <tr>
            //     <th scope="row">Hesham Again ++ </th>
            //     <td>245</td>
            // </tr>
            ?>
        </tbody>
    </table>
</div>
</body>
</form>

</html> 