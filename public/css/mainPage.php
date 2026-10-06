<?php include 'bootsrap.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
</head>

<body>

    <!-- =========================
         NAVBAR
    ========================== -->
    <header>

        <nav class="navbar navbar-expand-lg" style="background-color:#e3f2fd;">

            <div class="container-fluid">

                <!-- Mobile menu button -->
                <button
                    class="navbar-toggler ms-auto"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav w-100 align-items-lg-center">

                        <!-- Home -->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>

                        <!-- Cart -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart</a>
                        </li>

                        <!-- Search -->
                        <li class="nav-item mx-lg-auto my-2 my-lg-0">

                            <form class="d-flex" role="search">

                                <input
                                    class="form-control"
                                    type="search"
                                    placeholder="Search"
                                    aria-label="Search"
                                    style="width: 220px;">

                            </form>

                        </li>

                        <!-- Login -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>

                        <!-- Sign in -->
                        <li class="nav-item">
                            <a class="nav-link" href="css/registration.php">Sign in</a>
                        </li>

                    </ul>

                </div>

            </div>

        </nav>

    </header>


    <!-- =========================
         MAIN CONTENT
    ========================== -->

    <main>

        <!-- Welcome section -->
        <section class="container py-5">

            <div class="text-center mb-5">

                <h1>Welcome to Our Store</h1>

                <p class="text-muted">
                    Discover our latest electronic products.
                </p>

            </div>


            <!-- Product section -->
            <div class="container">

                <h2 class="mb-4">Featured Products</h2>

                <div class="row g-4">

                    <!-- Product 1 -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/300x200"
                                class="card-img-top"
                                alt="Product">

                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title">
                                    Smartphone
                                </h5>

                                <p class="card-text text-muted">
                                    Latest smartphone with powerful performance.
                                </p>

                                <h6 class="mb-3">
                                    $799
                                </h6>

                                <a href="#" class="btn btn-primary mt-auto">
                                    Add to cart
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Product 2 -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/300x200"
                                class="card-img-top"
                                alt="Product">

                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title">
                                    Laptop
                                </h5>

                                <p class="card-text text-muted">
                                    Powerful laptop suitable for work and study.
                                </p>

                                <h6 class="mb-3">
                                    $999
                                </h6>

                                <a href="#" class="btn btn-primary mt-auto">
                                    Add to cart
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Product 3 -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/300x200"
                                class="card-img-top"
                                alt="Product">

                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title">
                                    Headphones
                                </h5>

                                <p class="card-text text-muted">
                                    High-quality wireless headphones.
                                </p>

                                <h6 class="mb-3">
                                    $149
                                </h6>

                                <a href="#" class="btn btn-primary mt-auto">
                                    Add to cart
                                </a>

                            </div>

                        </div>

                    </div>


                    <!-- Product 4 -->
                    <div class="col-12 col-sm-6 col-lg-3">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/300x200"
                                class="card-img-top"
                                alt="Product">

                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title">
                                    Smart Watch
                                </h5>

                                <p class="card-text text-muted">
                                    Smart watch with health and fitness features.
                                </p>

                                <h6 class="mb-3">
                                    $199
                                </h6>

                                <a href="#" class="btn btn-primary mt-auto">
                                    Add to cart
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <!-- =========================
         FOOTER
    ========================== -->

    <?php include 'footer.php'; ?>


</body>

</html>