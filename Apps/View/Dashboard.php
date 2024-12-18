<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />

    <link rel="icon" type="image/png" sizes="32x32" href="../../Public/img/favicon-32x32.png">

    <link rel="stylesheet" href="../../Public/css/style.css">

    <title>PHP - Dashboard</title>

</head>

<body class="bg-dark">
    <!-- Sidebar for desktop -->
    <div class="sidebar d-none d-md-block">
        <!-- Logo -->
        <div class="logo">
            <div class="logo-icon">
                <img src="../../Public/img/logo2.png" alt="Logo" class="d-inline-block align-text-top">
            </div>

        </div>

        <!-- User Profile -->
        <div class="row justify-content-center user-profile d-flex align-items-center">

            <img src="../../Public/img/default-avatar.png" alt="User Avatar" class="user-avatar">

            <div class="text-white d-flex align-items-center flex-column gap-1">
                <div class="fw-medium">
                    <?php echo $user['user_name']?>
                </div>

                <?php 
                switch ($user['active']) {
                case 1: 
                    echo '<span class="badge rounded-pill text-bg-success">Active</span>';
                    break;
                case 2:
                    echo '<span class="badge rounded-pill text-bg-danger">Inactive</span>';
                    break;
                }
                ?>
                <small class="text-white-50">
                    <?php 
                       echo $user['email'];
                    ?>
                </small>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="nav flex-column" id="sidebarNav">
            <a href="#" class="nav-link active">
                <i class="bi bi-grid"></i>
                Dashboard
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-bar-chart"></i>
                Statistics
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-people"></i>
                Customers
            </a>
            <a href="#" class="nav-link">
                <i class="bi bi-gear"></i>
                Settings
            </a>
        </nav>
        <div class="d-flex justify-content-center mt-4">
            <a href="../Controllers/LogoutController.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <!-- Mobile Header -->
    <header class="mobile-header ">
        <div class="logo">
            <div class="logo-icon">
                <img src="../../Public/img/logo2.png" alt="Logo" class="d-inline-block align-text-top">
            </div>
        </div>

        <button class="hamburger-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
            aria-controls="sidebar">
            <i class="bi bi-list"></i>
        </button>
    </header>

    <!-- Offcanvas Sidebar for mobile -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="sidebarLabel">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- User Profile -->
            <div class="row justify-content-center user-profile d-flex align-items-center gap-3">

                <img src="../../Public/img/default-avatar.png" alt="User Avatar" class="user-avatar">

                <div class="text-white d-flex align-items-center flex-column gap-3">
                    <div class="fw-medium">
                        <?php echo $user['user_name']?>
                    </div>

                    <?php 
                switch ($user['active']) {
                case 1: 
                    echo '<span class="badge rounded-pill text-bg-success">Active</span>';
                    break;
                case 2:
                    echo '<span class="badge rounded-pill text-bg-danger">Inactive</span>';
                    break;
                }
                ?>
                    <small class="text-white-50">
                        <?php 
                       echo $user['email'];
                    ?>
                    </small>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="nav flex-column" id="offcanvasNav">
                <!-- Nav items will be cloned here by JavaScript -->
            </nav>
            <div class="d-flex justify-content-center mt-4">
                <a href="../Controllers/LogoutController.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Your dashboard content goes here -->
        <h1 class="text-white">Dashboard Content</h1>
        <p class="text-white-50">This is where your main content would go.</p>

        <?php 
             echo '<p class="text-white-50">
             User created in: ' . $user['register'] . '</p>';
        ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../Public/js/index.js"></script>

</body>

</html>