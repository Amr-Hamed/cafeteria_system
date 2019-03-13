<?php include '../templates/header.php'; ?>
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

    <div class="btn-group">
        <button type="button" class="btn Date dropdown-toggle btn-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Users
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" id="">Hesham</a>
            <a class="dropdown-item" id="">Hamada</a>
        </div>
    </div>
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
            <tr>
                <th scope="row">Hesham</th>
                <td>110</td>
            </tr>

            <tr>
                <th scope="row">Hesham Again</th>
                <td>200</td>
            </tr>
            <tr>
                <th scope="row">Hesham Again ++ </th>
                <td>245</td>
            </tr>
        </tbody>
    </table>
</div>
</body>

</html> 