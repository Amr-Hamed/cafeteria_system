<?php include '../templates/userHeader.php'; ?>
<div class="container-fluid     ">
    <div style="padding: 3%">
        <h1 style="text-align: center">My Orders</h1>
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


    <hr>
<!-- Users Table  -->

<div style="width: 80%; margin: auto; padding-top: 2%;">
    <table class="table table-striped table-info " style="text-align:center">
        <thead>
            <tr>
                <th scope="col" class="Date">Order Date</th>
                <th scope="col" class="Date">Status</th>
                <th scope="col" class="Date">Amount</th>
                <th scope="col" class="Date">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row" >15-3-2019 <span>10:30 AM</span> </th>
                <td class="btn-warning">Processing</td>
                <td>65 EGP</td>
                <td>  <button type="button" class="btn btn-danger">Cancel Order</button> </td>
            </tr>

            <tr>
            <th scope="row" >15-3-2019 <span>10:30 AM</span> </th>
                <td class="btn-success">Out For Delivery</td>
                <td>76 EGP</td>
                <td> - </td>
            </tr>
            <tr>
            <th scope="row" >15-3-2019 <span>10:30 AM</span> </th>
                <td class="btn-secondary">Done</td>
                <td>45 EGP</td>
                <td> - </td>
            </tr>
        </tbody>
    </table>
</div>
</body>

</html> 