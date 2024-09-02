<?php
include("../include/sideNavigationAdmin.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../datatable/dataTable.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/navigation.css">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
    <title>Tasks</title>
    <style>
        .container-fluid {
            /* border:2px solid black;*/
            margin-left: 90px;
            overflow-x: hidden;
            /* Disable horizontal scrolling */
            padding-left: 35px;
            background-color: #fff;
        }

        .container {
            /* border: 2px solid red; /* Optional: Border for reference */
            width: 100%;
            /* Allow container to adapt */
        }

        .container>.row {
            width: 100%;
            /* Make all rows take up 100% of the container width */
        }

        .height10 {
            height: 10px;
        }

        .mtop10 {
            margin-top: 10px;
        }

        .modal-label {
            position: relative;
            top: 7px
        }

        .row {
            width: auto;
        }

        .btn-success {
            width: 90px;
            height: 30px;
        }

        .btn-mywarning {
            width: 80px;
            height: 30px;
            margin-left: 30px;
            margin-bottom: 5px;
        }

        .btn-mydanger {
            width: 80px;
            height: 30px;
            margin-left: 30px;
        }

        .notified-modal {}

        .table-alignment {
            /* border: 2px solid green; /* Optional: Border for reference */
            width: 100%;
        }

        .table-content {
            /* border: 2px solid yellow;   */
        }

        .row-container {
            /*border:3px solid black;*/
        }

        th {
            align-items: center;
        }

        /*.scrollable-table {
        width: 100%; 
        overflow-x: auto;  */
    </style>
</head>

<body style="margin-left:170px; ">
    <div class="container-fluid">
        <h3>Tasks</h3>
        <div class="container">
            <div class="row table-content">

                <div class="col-sm-10 col-sm-offset-0 table-alignment table-sm">
                    <!-- alignment ng table eto yon para ma modify-->
                    <div class="row notified-modal">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo
                                "
                                <div class='alert alert-danger alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                    " . $_SESSION['error'] . "
                                </div>
                                ";
                            unset($_SESSION['error']);
                        }
                        if (isset($_SESSION['success'])) {
                            echo
                                "
                                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                    " . $_SESSION['success'] . "
                                </div>
                                ";
                            unset($_SESSION['success']);
                        }
                        ?>
                    </div>

                    <div class="row row-container">
                        <div class="col-md-grow-1 text-right">
                            <!-- This column takes up half of the available width and aligns its content to the right -->
                            <a href="#addnew" data-toggle="modal" class="btn btn-success"><span
                                    class="glyphicon glyphicon-plus"></span> New</a>
                        </div>
                        <!-- <a href="print_pdf.php" class="btn btn-success pull-right"><span class="glyphicon glyphicon-print"></span> PDF</a> -->
                    </div>

                    <div class="height10">
                    </div>

                    <div class="row scrollable-table table-responsive">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                include_once('../config/config.php'); // Update the path to include the config.php file
                                // SQL query to retrieve data
                                $sql = "SELECT category_id, category_name, description
                                    FROM categories
                                    WHERE is_archived = 'FALSE'";


                                //use for MySQLi-OOP
                                $query = $conn->query($sql);
                                while ($row = $query->fetch_assoc()) {
                                    echo
                                        "<tr>
                                            <td>" . $row['category_id'] . "</td>
                                            <td>" . $row['category_name'] . "</td>
                                            <td>" . $row['description'] . "</td>
                                            <td>
                                                <a href='#edit_" . $row['category_id'] . "' class='btn btn-warning btn-mywarning btn-sm ' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit  </a>
                                                <a href='#delete_" . $row['category_id'] . "' class='btn btn-danger btn-mydanger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                           </td>
                                        </tr>";
                                    include('category_edit_delete_modal.php');
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('category_add_modal.php') ?>

    <script src="../jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../datatable/jquery.dataTables.min.js"></script>
    <script src="../dataTable.bootstrap.min.js"></script>
    <!-- generate datatable on our table -->
    <script>
       $(document).ready(function(){
        //inialize datatable
        $('#myTable').DataTable();

        //hide alert
        $(document).on('click', '.close', function(){
            $('.alert').hide();
        })
        $('.asset-image').click(function() {
            var imageSrc = $(this).attr('src');
            $('#largeImage').attr('src', imageSrc); // Update modal image src
            $('#imageModal').modal('show'); // Show the modal
        });
    });
    </script>
</body>

</html>