<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        /* Custom Navbar Style */
        .navbar {
            background: linear-gradient(90deg, #00c6ff, #0072ff);
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #fff !important;
        }

        .nav-link {
            color: #fff !important;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #ffdd59 !important;
        }

        .dropdown-menu {
            background-color: #0072ff;
        }

        .dropdown-item {
            color: #fff !important;
        }

        .dropdown-item:hover {
            background-color: #0056b3;
        }

        /* Search Bar Customization */
        .form-control {
            border-radius: 20px;
        }

        .btn-outline-success {
            color: #fff;
            border-color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-outline-success:hover {
            background-color: #fff;
            color: #0072ff;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Gfu-ture</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbardropdown">
                                <li><a class="dropdown-item" href="view/service.php#web-design">Web Design</a></li>
                                <li><a class="dropdown-item" href="view/service.php#development">Development</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="view/service.php#consultation">Consultation</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- End Navbar -->
    <div class="container text-center mt-5">
        <h1>Welcome to Gfu-ture</h1>
        <p>This is the home page. Navigate using the menu above.</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFo2mCwDlE36KFPTrXK73UHE1bjWtEr5JJ+qza8FNfEVf3jD1iS7C2Pp3Y" crossorigin="anonymous"></script>
</body>

</html>