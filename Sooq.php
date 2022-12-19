<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                background: #eee;
            }
            input[type="number"]{
                padding: 0 5px;
                width: 150px;
            }
            @media only screen and (max-width:800px) and (min-width:400px){
                input[type="number"],[type="submit"]{
                        width: fit-content;
                    }
            }
                @media only screen and (max-width: 400px) and (min-width: 300px) {
                    input[type="number"],[type="submit"]{
                        width: 80px;
                        font-size: 12px;
                    }
                    input[type="number"]{
                        padding: 1.5px;
                    }
                }
            
        </style>
    <title>Sooq</title>
</head>
<body>
    <header>
        <div class="logo display-5 text-center p-5">Brand Name</div>
    </header>
    <div class="container col-sm-4 col-md-8 col-lg8 col-xl-8 col-xxl-8">
        <div class="alert alert-success alert-dismissible fade show text-center">
            <button type="button" class="btn btn-close" data-dismiss="alert"></button>
            <?php
                if($_SERVER["REQUEST_METHOD"]=="GET"){
                    @$note = $_REQUEST['note'];
                    echo "<strong>";
                    echo $note;
                    echo "</strong>";
                }
            ?>
        </div>
    </div>
    <section>
        <div class="container p-5  d-flex justify-content-center">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                    <form action="order.php" method="get">
                        <div class="card ">
                            <img src="#" alt="" >
                            <div class="card-body">
                                <h5 class="card-title">Title</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta cum quis neque delectus itaque error ipsum sequi ullam! Amet eaque rerum voluptas ex quidem tempora libero itaque modi cupiditate non?</p>
                                <p class="fw-bold">Price : 7JD</p>
                                <input type="number" name="quantity" placeholder="Quantity" min="1"><br>
                                <input type="submit" name="submit" value="Order Now" class="btn btn-primary my-2">


                                <input type="hidden" name="id" value="1">
                                <input type="hidden" name="title" value="Hody">
                                <input type="hidden" name="price" value="7JD">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>