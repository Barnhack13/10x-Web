<?php 
    include("./tools/register.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--Icon Tap-->
    <link rel="icon" href="images/icon.png" />

    <!-- Bootstrap core CSS -->
    <title>CONTACTS LIST</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="datatables/dataTables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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
        <div class="container marketing" style="margin-top:120px; margin-bottom:120px">
            <form action="search_products.php" method="get" class="form-inline mt-2 mt-md-0">
                <h1 style="margin-bottom: 50px">
                <svg class="bi bi-person-square" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg> CONTACTS LIST </h1>
            </form>
        <div class="row" style="margin-bottom: 45px">
		<div id="cuadro2" class="col-sm-12 col-md-12 col-lg-12 ocultar">
			<form class="form-horizontal" action="contact.php" method="POST">
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">NAME</label>
					<div class="col-sm-8"><input id="name" name="name" type="text" class="form-control"  autofocus></div>				
				</div>
				<div class="form-group">
					<label for="last name" class="col-sm-2 control-label">LAST NAME</label>
					<div class="col-sm-8"><input id="last name" name="last name" type="text" class="form-control" ></div>
				</div>
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-8"><input id="id" name="id" type="text" class="form-control" maxlength="15" ></div>
                </div>
                <div class="form-group">
					<label for="telephone" class="col-sm-2 control-label">TELEPHONE</label>
					<div class="col-sm-8"><input id="telephone" name="telephone" type="text" class="form-control" maxlength="15" ></div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-8">
						<input id="btn_save" name="btn_save" type="submit" class="btn btn-primary" value="Save">
					</div>
				</div>
			</form>
		</div>
	</div>
            <div class="table-responsive col-sm-12" style="padding-left:0; padding-right:0; background:#E0FFFF">
                <table id="table_contacts" class="table table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>CONTACT_ID</th>
                            <th>NAME</th>
                            <th>LAST NAME</th>
                            <th>TELEPHONE</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
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