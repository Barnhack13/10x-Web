<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Icon Tap-->
    <link rel="icon" href="#" />

    <!-- Bootstrap core CSS -->
    <title>LIST PRODUCTS</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/dataTables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <!--script src="js/jquery-3.2.1.slim.min.js"></script-->
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--script src="datatables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="datatables/DataTables-1.10.21/js/dataTables.bootstrap4.js"></script>
    <script src="datatables/DataTables-1.10.21/js/dataTables.bootstrap.js"></script-->


</head>

<body style="background: #ADD8E6">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">10 X</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company.php">COMPANY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="products.php">PRODUCT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="contact.php">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main" class="content-marketing">
        <div class="container marketing" style="margin-top: 120px;margin-bottom:120px">
            <form action="search_products.php" method="get" class="form-inline mt-2 mt-md-0">
                <h1><svg class="bi bi-bag-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor">
                        <path
                            d="M1 4h14v10a2 2 0 01-2 2H3a2 2 0 01-2-2V4zm7-2.5A2.5 2.5 0 005.5 4h-1a3.5 3.5 0 117 0h-1A2.5 2.5 0 008 1.5z" />
                    </svg> PRODUCTS LIST </h1>
            </form>
            <div class="table-responsive col-sm-12" style="padding-left:0; padding-right:0; background:#E0FFFF">
                <!--table id="table_products" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%"-->
                <table id="table_products" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>PHOTO</th>
                            <th>PRICE</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>PHOTO</th>
                            <th>PRICE</th>
                        </tr>
                    </tfoot>
                    <!--tbody>
                    </tbody-->
                </table>
            </div>
        </div><!-- /.container -->
        <hr class="featurette-divider">
    </main>

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="datatables/DataTables-1.10.21/js/jquery.dataTables.js"></script>
    <script src="datatables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="js/lists.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
</body>

</html>