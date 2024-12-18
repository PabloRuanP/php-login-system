<?php 

if (isset($_SESSION['response'])) {
    if (in_array(false, $_SESSION['response'])) {
        echo '<strong class="text-danger">
                <User class="fas fa-exclamation-triangle"></i>
            </strong>
            <p class="text-danger text-center fw-bold">' . 
            $_SESSION['response']['message'] . '
            </p>';
    } else {
        echo '<strong class="text-success">
                <User class="fas fa-check-circle"></i>
            </strong>
            <p class="text-success text-center fw-bold">' . 
            $_SESSION['response']['message'] . '
            </p>';
    }
    
}

unset($_SESSION['response']);
?>