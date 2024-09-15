<!-- This is how we can link to any directory or file by include function -->
<?php include "array_json_data.php";?>
<?php require "array_json_data.php";?> <!-- This is how we can link to any directory or file by include function. 'include' & 'require' are same -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon/nopsom-favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendors/css/normalize.css">
    <link rel="stylesheet" href="assets/vendors/css/grid.css">
    <link rel="stylesheet" href="assets/vendors/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/css/owl.theme.default.min.css">
    <!-- Resource CSS-->
    <link rel="stylesheet" href="assets/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/resources/css/style.css">
    <link rel="stylesheet" href="assets/resources/css/responsive.css">
    <title>PHP Programming- Foreach data</title>
</head>
<body>
    
<!-- Data loading from json data -->
 <h1 class="text-center my-5"> Foreach Data from array to view</h1>
    <section class="team">
        <div class="container my-5">
            <div class="row">

                <?php foreach($devs as $data):?> <!-- This is how we can do foreach with php. There must to have endforeach -->
                    <?php if($data['address'] == 'Shamoly' && $data['age'] >25) :?> <!-- This is how we can use if condition with php. There must to have endif -->
                        <div class="col-md-4 mb-4">
                            <div class="team_member">
                                <div class="card shadow">
                                    <img class="card-image" src="<?php echo $data['photo']; ?>" alt="" style="height: 350px; object-fit:cover;">
                                    <div class="card-body">
                                        <h2><?php echo $data['name']; ?></h2> <!-- This is how we view any data of an array -->
                                        <h4><?php echo $data['skills']; ?></h4> <!-- This is how we view any data of an array -->
                                        <p><?php echo $data['address']; ?></p> <!-- This is how we view any data of an array -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endif;?>
                <?php endforeach;?>

            </div>
        </div>
    </section>
    <!-- JS FILES -->
    <script src="assets/resources/js/jquery-3.6.0.min.js"></script>
    <script src="assets/resources/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/042b6d566d.js" crossorigin="anonymous"></script>
    <script src="assets/vendors/js/html5shiv.min.js"></script>
    <script src="assets/vendors/js/respond.min.js"></script>
    <script src="assets/vendors/js/selectivizr.js"></script>
    <script src="assets/vendors/js/owl.carousel.min.js"></script>
    <script src="assets/resources/js/main.js"></script>
</body>
</html>
