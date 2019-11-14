<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Dunder Mifflin offers superior paper products at afforable prices. Call today, 1-800-PAPER">

        <title>Dunder Mifflin Inc.</title>

        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/animate.css">
        <link rel="stylesheet" href="../assets/css/profile.css">
        <link rel="stylesheet" href="../assets/css/media-queries.css">
        <link rel="stylesheet" href="../assets/css/carousel.css">

        <!-- Favicon and touch icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/ico/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../assets/ico/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/ico/favicon-16x16.png">
        <link rel="manifest" href="../assets/ico/site.webmanifest">
        <link rel="mask-icon" href="../assets/ico/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="../assets/ico/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body id="body">
        <!-- Navbar -->
        <nav class="navbar navbar-dark fixed-top navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="profile.php">Dunder Mifflin Inc.</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="orders.php">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="products.php">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="clients.php">Clients</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="vendors.php">Vendors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="branches.php">Branches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link scroll-link" href="profile.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <button onclick="location.href='index.php';" class="btn btn-primary">
                                Logout
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="main-content">
            <div class="container">
                <div class="row mr-auto pl-4">
                    <div class="col-12 pb-2">
                        <div class="d-flex wow fadeInLeft">
                            <h5>Welcome, Michael!</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4">
                        <div class="d-flex wow fadeIn">
                            <h3>Profile Overview</h3>
                            <div class="table-responsive-lg pt-4">
                                <table class="table table-borderless table-striped table-dark table-hover">
                                    <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>D.O.B.</th>
                                            <th>Branch Name</th>
                                            <th>Branch Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Michael</td>
                                            <td>Scott</td>
                                            <td>2489893467</td>
                                            <td>m.scott@gmail.com</td>
                                            <td>10/09/87</td>
                                            <td>Scranton Branch</td>
                                            <td>2488889231</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-4 wow fadeInUp">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#searchProfile">
                            Search
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProfile">
                            Add
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProfile">
                            Edit
                        </button>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteProfile">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Search Profile Modal -->
        <div class="modal fade" id="searchProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Search Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="profile.php" class="was-validated">
                                <div class="form-group">
                                    <label>Filter&nbsp;Type:</label>
                                    <select name="filter" class="custom-select mb-3" required>
                                        <option selected></option>
                                        <option value="color">Employee ID</option>
                                        <option value="code">First Name</option>
                                        <option value="code">Last Name</option>
                                        <option value="type">Agent ID</option>
                                        <option value="weight">Branch ID</option>
                                        <option value="size">DOB</option>
                                    </select>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="input">Value:</label>
                                    <input type="text" class="form-control" id="input" placeholder="Enter Value" name="input" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Edit Profile Modal -->
        <div class="modal fade" id="editProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="profile.php" class="was-validated">
                                <div class="form-group">
                                    <label for="empID">Employee&nbsp;ID:</label>
                                    <input type="text" class="form-control" id="empID" placeholder="Enter employee ID" name="empID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="branchID">Branch&nbsp;ID:</label>
                                    <input type="number" class="form-control" id="branchID" placeholder="Enter branch ID" name="branchID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                <label>Branch:</label>
                                <select name="filter" class="custom-select mb-3">
                                    <option selected></option>
                                    <option value="code">Scranton</option>
                                    <option value="code">Akron</option>
                                    <option value="type">Albany</option>
                                    <option value="weight">Nashua</option>
                                    <option value="size">Rochester</option>
                                    <option value="color">Utica</option>
                                    <option value="color">Syracuse</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empFname">First&nbsp;Name:</label>
                                    <input type="text" class="form-control" id="empFname" placeholder="Enter first name" name="empFname">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empLname">Last&nbsp;Name:</label>
                                    <input type="text" class="form-control" id="empLname" placeholder="Enter last name" name="empLname">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPhone">Phone:</label>
                                    <input type="tel" class="form-control" id="empPhone" placeholder="Format: 123-456-7890" name="empPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empEmail">Email:</label>
                                    <input type="email" class="form-control" id="empEmail" placeholder="Enter email address" name="empEmail">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPwd">Password:</label>
                                    <input type="password" class="form-control" id="empPwd" placeholder="Enter password" name="empPwd">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empDOB">Date&nbsp;of&nbsp;Birth:</label>
                                    <input type="date" class="form-control" id="empDOB" placeholder="Enter DOB" name="empDOB">
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Add Profile Modal -->
        <div class="modal fade" id="addProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="profile.php" class="was-validated">
                                <div class="form-group">
                                <label>Branch:</label>
                                <select name="filter" class="custom-select mb-3" required>
                                    <option selected></option>
                                    <option value="code">Scranton</option>
                                    <option value="code">Akron</option>
                                    <option value="type">Albany</option>
                                    <option value="weight">Nashua</option>
                                    <option value="size">Rochester</option>
                                    <option value="color">Utica</option>
                                    <option value="color">Syracuse</option>
                                </select>
                                <div class="valid-feedback">Valid.</div>
                                <div class="invalid-feedback">Please select an item in the list.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empFname">First&nbsp;Name:</label>
                                    <input type="text" class="form-control" id="empFname" placeholder="Enter first name" name="empFname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empLname">Last&nbsp;Name:</label>
                                    <input type="text" class="form-control" id="empLname" placeholder="Enter last name" name="empLname" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPhone">Phone:</label>
                                    <input type="tel" class="form-control" id="empPhone" placeholder="Format: 123-456-7890" name="empPhone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empEmail">Email:</label>
                                    <input type="email" class="form-control" id="empEmail" placeholder="Enter email address" name="empEmail" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empPwd">Password:</label>
                                    <input type="password" class="form-control" id="empPwd" placeholder="Enter password" name="empPwd" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="empDOB">Date&nbsp;of&nbsp;Birth:</label>
                                    <input type="date" class="form-control" id="empDOB" placeholder="Enter DOB" name="empDOB" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
                
        <!-- Delete Profile Modal -->
        <div class="modal fade" id="deleteProfile">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Employee Profile</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="container mt-3">
                            <form action="profile.php" class="was-validated">
                                <div class="form-group">
                                    <label for="empID">Employee&nbsp;ID:</label>
                                    <input type="number" class="form-control" id="empID" placeholder="Enter employee ID" name="empID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <div class="form-group">
                                    <label for="branchID">Branch&nbsp;ID:</label>
                                    <input type="number" class="form-control" id="branchID" placeholder="Enter branch ID" name="branchID" required>
                                    <div class="valid-feedback">Valid.</div>
                                    <div class="invalid-feedback">Please fill out this field.</div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="page-footer bg-dark text-white text-center pb-2" style="border-top: solid 2px; border-color: black;">  
            <div class="container">
                <div class="row">
                    <div class="col-12 pb-2 pt-4">
                        <a href="http://www.facebook.com/" title="Facebook"><i class="fab fa-facebook-square"></i></a>
                        <a href="http://www.instagram.com/" title="Instagram"><i class="fab fa-instagram pl-4 pr-4"></i></a>
                        <a href="http://www.twitter.com/" title="Twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pb-2">
                        <div class="copy"> 
                            <p>&copy; Copyright 2019 Dunder Mifflin Inc.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Javascript -->
        <script src="../assets/js/jquery-3.3.1.min.js"></script>
        <script src="../assets/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
        
    </body>
</html>