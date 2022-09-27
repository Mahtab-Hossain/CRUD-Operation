<?php
require_once("../crud/element.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auction Site</title>
    <!-- bootstrap css file only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <!-- custom css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<main>
    <!-- heading start -->
    <div class="container text-center">
        <h1 class="py-5 bg-dark text-light rounded"> <i class="fa fa-gavel" aria-hidden="true"></i> Auction Site</h1>
    <!-- heading end -->

    <!-- input start -->
        <div class="d-flex justify-content-center">

        <!-- input form start -->
            <form action="" method="post" class="w-50">
                 <div class="pt-3">
                 <?php input_element("<i class='fas fa-id-badge'></i>","ID", "auction_id",""); ?>
                 </div>
                 <div class="pt-3">
                 <?php input_element("<i class='fas fa-gavel'></i>","Item", "auction_item",""); ?>
                 </div>

                 <div class="row pt-3">
                 <div class="col">
                 <?php input_element("<i class='fas fa-people-carry'></i>","Seller", "seller",""); ?>
                 </div>
                 <div class="col">
                 <?php input_element("<i class='fas fa-dollar-sign'></i>","Price", "item_price",""); ?>
                 </div>

                 </div>
                <!-- button start -->
                <div class="d-flex justify-content-center">
                    <?php button("btn-create","create","","Create","btn btn-outline-dark");
                    ?>
                    <?php button("btn-read","read","","Read","btn btn-outline-secondary");
                    ?>
                    <?php button("btn-update","update","","Update","btn btn-outline-warning");
                    ?>
                    <?php button("btn-delete","delete","","Delete","btn btn-outline-danger");
                    ?>
                </div>
            </form>
            <!-- input form end -->
        </div>
        <!-- input end -->

        <!-- data table start -->
        <div class="d-flex table-data">
            <table class="table table-dark">
                <thead class="thead-dark">
                    <tr>
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Seller</th>
                        <th>Price</th>
                        <th>Update</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</main>



            <!--JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>