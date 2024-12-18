<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />


    <link rel="icon" type="image/png" sizes="32x32" href="../../Public/img/favicon-32x32.png">

    <link rel="stylesheet" href="../../Public/css/style.css">

    <title>PHP - Sign Up</title>
</head>

<body>
    <main class="d-flex align-items-center justify-content-center">
        <div class="px-4 rounded-3 formcss text-white">

            <h2 class="text-white fw-bolder py-3 mb-3 text-center">
                Sign Up
            </h2>
            <form action="../Controllers/AddUserController.php" method="POST">
                <div class="row">

                    <div class="mb-3 col">
                        <input type="text"
                            class="form-control rounded-pill border-info border-opacity-25 input-form text-white"
                            name="first_name" placeholder="First Name">
                    </div>
                    <div class="mb-3 col">
                        <input type="text"
                            class="form-control rounded-pill border-info border-opacity-25 input-form text-white"
                            name="last_name" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 col">
                    <input type="text"
                        class="form-control rounded-pill border-info border-opacity-25 input-form text-white"
                        name="user_name" placeholder="User Name">
                </div>

                <div class="mb-3 col">
                    <input type="email"
                        class="form-control rounded-pill border-info border-opacity-25 input-form text-white"
                        name="email" placeholder="Email address">
                </div>

                <div class="mb-3">
                    <input type="password"
                        class="form-control rounded-pill border-info border-opacity-25 input-form text-white"
                        name="passwd" placeholder="Password">
                </div>
                <div class="mb-3 px-2">
                    <p class="text-white">Already have an account? <strong> <a href="home.php" class="text-white">Log
                                in </a></strong> </p>
                </div>

                <div class="mb-3 px-2">
                    <div class="d-flex align-self-center justify-content-center gap-2">
                        <?php 
                            if (isset($_SESSION['response'])) {
                                include_once('Templates/alert.php');
                            } unset($_SESSION['response'])
                        ?>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold">Submit</button>
                </div>
            </form>

        </div>

    </main>

    <?php include_once('Templates/footer.php');?>