<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>URL SHORTENER</title>
    <!-- Bootstrap icons-->
    <link href="./assets/bootstrapIcon/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./assets/fontawesome-free/css/all.min.css">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/custom.css" rel="stylesheet" />
    <link href="./assets/css/styles.css" rel="stylesheet" />
</head>

<body>
    <main>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="./index.html">
                    <i class="bi-link-45deg"></i> URL Shortener
                </a>
                <div>
                    <a class="nav-link d-inline px-3 text-dark" href="./domainchecker.php"><strong>Domain Checker</strong></a>
                    <a class="btn btn-outline-primary ms-2" href="./admin.php"><i class="bi-person-circle"></i> Admin</a>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-gradient-primary-to-secondary py-5">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="text-center text-white">
                            <h1 class="mb-4 fw-bold display-5">Check Domain Name Availability</h1>
                            <div class="card shadow-lg border-0">
                                <div class="card-body p-4">
                                    <form action="" method="GET" class="mb-0">
                                        <div class="input-group input-group-lg">
                                            <input id="searchBar" class="form-control rounded-start" type="text" name="domain" placeholder="Enter domain name (e.g. example.com)" value="<?php if(isset($_GET['domain'])){ echo htmlspecialchars($_GET['domain']); } ?>">
                                            <button class="btn btn-primary rounded-end" type="submit" id="btnSearch"><i class="fa fa-search"></i> Check</button>
                                        </div>
                                    </form>
                                    <?php
                                        error_reporting(0);
                                        if(isset($_GET['domain'])) {
                                            $domain = trim($_GET['domain']);
                                            if ($domain !== '') {
                                                if (gethostbyname($domain) != $domain) {
                                                    echo "<div class='alert alert-danger mt-4 text-center'><i class='bi-x-circle-fill me-2'></i><strong>Domain Already Registered!</strong></div>";
                                                } else {
                                                    echo "<div class='alert alert-success mt-4 text-center'><i class='bi-check-circle-fill me-2'></i><strong>Hurry, your domain is available! You can register it.</strong></div>";
                                                }
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- How to Use Section -->
        <section class="features-icons bg-light text-center py-5">
            <div class="container">
                <h3 class="fw-bold mb-4 text-primary">How to Use</h3>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="features-icons-item mx-auto">
                            <div class="features-icons-icon d-flex justify-content-center align-items-center mb-3">
                                <i class="bi-window fs-1 text-primary"></i>
                            </div>
                            <h4 class="fw-semibold">Step 1</h4>
                            <p class="lead mb-0">Copy the site URL you want to shorten.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="features-icons-item mx-auto">
                            <div class="features-icons-icon d-flex justify-content-center align-items-center mb-3">
                                <i class="bi-clipboard-check fs-1 text-primary"></i>
                            </div>
                            <h4 class="fw-semibold">Step 2</h4>
                            <p class="lead mb-0">Paste the URL in the input field and click the "Go" button.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="features-icons-item mx-auto">
                            <div class="features-icons-icon d-flex justify-content-center align-items-center mb-3">
                                <i class="bi-clipboard fs-1 text-primary"></i>
                            </div>
                            <h4 class="fw-semibold">Step 3</h4>
                            <p class="lead mb-0">Click the "Copy to Clipboard" button to copy the shortened URL.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-white border-top py-4 mt-auto">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center text-lg-start mb-3 mb-lg-0">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="#!" class="text-decoration-none text-muted">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!" class="text-decoration-none text-muted">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="#!" class="text-decoration-none text-muted">Terms of Use</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="./privacy-policy.php" class="text-decoration-none text-muted">Privacy Policy</a></li>
                        </ul>
                        <p class="text-muted small mb-0">&copy; URL SHORTENER 2025. All Rights Reserved. Developed by <a href="mailto:davidfrancis@bgworldent.com" class="text-primary text-decoration-none" target="_blank">DavetheCoder</a></p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-3">
                                <a href="#!" class="text-primary"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-3">
                                <a href="#!" class="text-primary"><i class="bi-twitter fs-3"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!" class="text-primary"><i class="bi-instagram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="./assets/js/jquery-3.6.0.min.js"></script>
        <script src="./assets/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="./assets/js/script.js"></script>
    </main>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"/>
    <style type="text/css">
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ef 100%);
            min-height: 100vh;
        }
        .bg-gradient-primary-to-secondary {
            background: linear-gradient(120deg, #007bff 0%, #6c63ff 100%);
        }
        .navbar-brand, .footer a {
            transition: color 0.2s;
        }
        .navbar-brand:hover, .footer a:hover {
            color: #0056b3 !important;
        }
        .card {
            border-radius: 1rem;
        }
        .features-icons-icon {
            width: 70px;
            height: 70px;
            background: #f1f3f6;
            border-radius: 50%;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .features-icons-item h4 {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
        }
        .alert {
            font-size: 1.1rem;
        }
        @media (max-width: 767px) {
            .navbar .container, .footer .container {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</body>

</html>