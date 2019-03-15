<?php include '../templates/header.php';
require_once('../config.php');
session_start();
$admin = $_SESSION['admin'];

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
                                    <option value="<?php echo $user['id']; ?>"><?php echo $user['name'];?></option>
                            <?php }}?>            
                        </select>
                    </div>
                </div>
            </div>
            <hr />
</div>

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
        $user_id = $_POST['user'];
        $start_date = "'".$_POST['start']." 00:00:00'";
        $end_date = "'".$_POST['end']." 23:59:59'";      
            
        if(isset($submit) && $_POST['start'] != null && $_POST['end'] != null){
            if(isset($user_id)){ 
                $user_name = DBModel::read("SELECT u.name FROM users u WHERE u.id = $user_id",null);
                if( $_POST['start'] !== NULL){
                    if( $_POST['end'] !== NULL ){
                        echo "end is set";
                        $amount = DBModel::read("SELECT SUM(o.amount) FROM orders o WHERE o.user_id = $user_id and DATE(`date`) BETWEEN $start_date
                        AND $end_date ",null);
                        ?> 
                        <tr>
                            <th> <?php echo $user_name[0]['name']; ?> </th>
                                <td> <?php 
                                    foreach ($amount as $element){
                                    echo $element[0];
                                     } ?>
                                </td>
                             </th>
                        </tr>
                        <?php
                    } else {
                        $amount = DBModel::read("SELECT SUM(o.amount) FROM orders o WHERE o.user_id = $user_id and DATE(`date`) >= $start_date ",null);
                        echo $amount;
                        echo gettype($amount);
                        echo "end is not set";
                        ?> 
                        <tr>
                            <th> <?php echo $user_name[0]['name']; ?> </th>
                                <td> <?php 
                                    foreach ($amount as $element){
                                    echo $element[0];
                                     } ?>
                                </td>
                             </th>
                        </tr>
                        <?php                        
                    }
                }
            }
        }else { 
            foreach ($users as $user){ ?>
                <tr> 
                    <th> <?php echo $user['name']; 
                            $user_id = $user['id']; ?> </th> 
                      <td> <?php $amount = DBModel::read("SELECT SUM(o.amount) FROM orders o WHERE o.user_id = $user_id",null);
                                foreach ($amount as $element){
                                    echo $element[0];
                                }?>
                        </td>
                    </th>
                </tr>
            <?php }} ?>          
        </tbody>
    </table>
</div>
</body>
</form>

</html> 

