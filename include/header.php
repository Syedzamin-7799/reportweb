<?php
// Start session and handle any routing if necessary
session_start();

// Include additional PHP files if needed
// include 'some-file.php';

// Basic routing example (change as per your needs)
$page = isset($_GET['page']) ? $_GET['page'] : 'index';

// Use a switch-case or other routing mechanism to include different parts
switch ($page) {
    case 'about':
        // Include or process content for 'about' page
        break;
    case 'services':
        // Include or process content for 'services' page
        break;
    case 'contact':
        // Include or process content for 'contact' page
        break;
    default:
        // Default to 'index' or any other default page
        break;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BoatHinsight</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="imgfinal/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    
    <style>
        /* Preloader styles */
        .preloader {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa; /* Light background */
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 9999; /* Ensure the preloader is above all elements */
        }

        .typewriter h1 {
            color: #D81324; /* Text color red */
            overflow: hidden; /* Ensures the text stays within the bounds */
            border-right: .15em solid red; /* The cursor effect */
            white-space: nowrap; /* Keeps the text on a single line */
            margin: 0 auto; /* Centering */
            letter-spacing: .15em; /* Spacing between letters */
            animation: typing 3.5s steps(30, end), blink-caret .75s step-end infinite;
        }

        /* Typewriter animation */
        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        /* Cursor blink animation */
        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: red; }
        }

        /* Fade out effect for preloader */
        .fade-out {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease-out, visibility 0.5s ease-out;
        }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="typewriter">
            <h1>BoatHinsight</h1>
        </div> 
    </div> 

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <div class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="imgfinal/boathInsight.png" alt="" href="index.php">
        </div>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="#ABOUT" class="nav-item nav-link">About</a>
                <a href="#SERVICES" class="nav-item nav-link">Services</a>
                <a href="#CONTACT" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Bootstrap and JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Preloader removal after page load -->
    <script>
        window.addEventListener('load', () => {
            // Wait for the page to completely load
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.classList.add('fade-out'); // Fade out the preloader
            }, 4000); // Adjust this time based on animation duration
        });
    </script>

</body>

</html>
