<?php
    session_start();

    $email = $_SESSION["login"]; 
    if($email == NULL){
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <!-- <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css"> -->
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- logout -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="doctor-data.php" class="nav-link">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>
                                    Doctor
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="patient-data.php" class="nav-link">
                                <i class="nav-icon fas fa-procedures"></i>
                                <p>
                                    Patient
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="appointment-data.php" class="nav-link active">
                                <i class="nav-icon fas fa-calendar-check"></i>
                                <p>
                                    Appointment
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="fa fa-sign-out" style="font-size:26px"></i>
                                <p>
                                    Log Out
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Appointment</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item">Doctor</li>
                                <li class="breadcrumb-item active">Patient</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Appointment Table</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>phone</th>
                                                <th>Doctor</th>
                                                <th>Gender</th>
                                                <th>Email</th>
                                                <th>DOB</th>
                                                <th>Appo. Date</th>
                                                <th>State</th>
                                                <th>City</th>
                                                <!-- <th>Message</th> -->
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                      include "config.php";
                                                      $query = " select * from appointment";
                                                      $result = mysqli_query($conn, $query);
                                                      $no=1;
                                                      while ($data = mysqli_fetch_row($result)) {
                                                          ?>
                                            <tr id="<?php echo $data[0]; ?>">
                                                <td><?php echo $no ?></td>
                                                <td data-target="name"><?php echo $data[1]; ?></td>
                                                <td data-target="phone"><?php echo $data[2]; ?></td>
                                                <td data-target="DoctorName"><?php echo $data[3]; ?></td>
                                                <td data-target="gender"><?php echo $data[4]; ?></td>
                                                <td data-target="email"><?php echo $data[5]; ?></td>
                                                <td data-target="dob"><?php echo $data[6]; ?></td>
                                                <td data-target="appo"><?php echo $data[7]; ?></td>
                                                <td data-target="state_input"><?php echo $data[8]; ?></td>
                                                <td data-target="district_input"><?php echo $data[9]; ?></td>
                                                <!-- <td data-target="msg"><?php echo $data[10]; ?></td> -->

                                                <td>
                                                    <div style="display:flex;justify-content: center;">
                                                        <a href="#" data-role="update"
                                                            data-id="<?php echo $data[0]; ?>">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div style="display:flex;justify-content: center;">
                                                        <a href="#" data-role="delete"
                                                            data-id="<?php echo $data[0]; ?>">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php
                                                            $no++;
                                                              }
                                                              ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->

                                <!-- update Modal start -->
                                <div class="modal fade" id="myModal">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Edit Details</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form id="" name="register-form" class="row mb-0" action="update.php"
                                                    method="post">

                                                    <div class="col-12 form-group">
                                                        <label for="name">Name:</label>
                                                        <input type="hidden" name="id" id="userid">
                                                        <input type="text" id="name" name="name" class="form-control"
                                                            required>
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="gender">Gender: &nbsp;</label>
                                                        <input type="radio" name="gender" value="Male" id="gender"
                                                            checked>Male
                                                        &nbsp;
                                                        <input type="radio" name="gender" value="Female"
                                                            id="gender">Female
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="">Doctor's Name:</label>
                                                        <?php
                                                            require "config.php";
                                                            $qry = "SELECT * FROM doctor_master";
                                                            $result = mysqli_query($conn, $qry);
                                                                ?>
                                                        <select class="form-control not-dark required"
                                                            name="DoctorName" id="DoctorName">
                                                            <?php
                                                        while($row = mysqli_fetch_row($result)){
                                                            ?>
                                                            <option><?php echo $row[1]; ?></option>
                                                            <?php
                                                        }
                                                        ?>
                                                        </select>
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="register-form-phone">Phone:</label>
                                                        <input type="text" id="phone" name="phone" class="form-control"
                                                            required>
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <label for="register-form-email">Email Address:</label>
                                                        <input type="text" id="email" name="email" class="form-control"
                                                            required>
                                                    </div>

                                                    <div class="col form-group">
                                                        <label for="template-medical-dob">Date of Birth:</label>
                                                        <input type="date" id="dob" name="dob"
                                                            class="form-control not-dark required">
                                                    </div>

                                                    <div class="col form-group">
                                                        <label for="template-medical-appoint-date">Appointment
                                                            Date:</label>
                                                        <input type="datetime-local" id="appointment_date"
                                                            name="appo" class="form-control not-dark required">
                                                    </div>

                                                    <div class="col-6 form-group">
                                                        <label for="">Select Your State:</label>
                                                        <select id="state_input" name="state_input"
                                                            class="form-control not-dark required"></select>
                                                    </div>
                                                    <div class="col-6 form-group">
                                                        <label for="">Select Your City:</label>
                                                        <select name="district_input" id="district_input"
                                                            class="form-control not-dark required"></select>
                                                    </div>

                                                    <div class="col-12 form-group">
                                                        <button type="submit" class="btn btn-primary btn-block"
                                                            id="update" name="edit" value="">Update</button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- update model end -->

                                  <!-- delete modal start-->
                                  <div class="modal fade" id="delModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="delete.php" method="post">
                                                    <p>Are you sure delete this record?</p>
                                                    <input type="hidden" name="id" value="" id="userid" />
                                                    <div class="row">
                                                        <div class="col-3 model-footer">
                                                            <button type="submit" class="btn btn-primary btn-block"
                                                                id="delete" name="delete">delete</button>
                                                        </div>
                                                        <!-- /.col -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- delete modal end -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4>-->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTable & Plugins -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <!-- <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- for state & city -->
    <script src="dist/js/state_district.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- bootstrap 5.3.3 js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Page specific script -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        // show the data in modal
        $(document).on('click', 'a[data-role=update]', function() {
            var id = $(this).data("id");
            var name = $('#' + id).children('td[data-target=name]').text();
            var phone = $('#' + id).children('td[data-target=phone]').text();
            var DoctorName = $('#' + id).children('td[data-target=DoctorName]').text();
            var gender = $('#' + id).children('td[data-target=gender]').text();
            var email = $('#' + id).children('td[data-target=email]').text();
            var dob = $('#' + id).children('td[data-target=dob]').text();
            var appo = $('#' + id).children('td[data-target=appo]').text();
            var state_input = $('#' + id).children('td[data-target=state_input]').text();
            var district_input = $('#' + id).children('td[data-target=district_input]').text();
            // var msg = $('#' + id).children('td[data-target=msg]').text();

            //var gender = $('#' + id).children('td[data-target=gender]').text();

            $('#userid').val(id);
            $('#name').val(name);
            $('#phone').val(phone);
            $('#DoctorName').val(DoctorName);
            $('#gender').val(gender);
            $('#email').val(email);
            $('#dob').val(dob);
            $('#appo').val(appo);
            $('#state_input').val(state_input);
            $('#district_input').val(district_input);
            // $('#msg').val(msg);
            $('#myModal').modal('toggle');
            //$('#gender').val(gender);
        });
        // get data & update data in database
        $('#update').click(function() {
            var id = $('#userid').val();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var DoctorName = $('#DoctorName').val();
            var gender = $('#gender').val();
            var email = $('#email').val();
            var dob = $('#dob').val();
            var appo = $('#appo').val();
            var state_input = $('#state_input').val();
            var district_input = $('#district_input').val();


            $.ajax({
                url: 'update.php',
                method: 'POST',
                data: {
                    id: id,
                    name: name,
                    phone: phone,
                    DoctorName:DoctorName,
                    gender: gender,
                    email: email,
                    dob:dob,
                    appo:appo,
                    state_input:state_input,
                    district_input:district_input
                },
                success: function(response) {
                    console.log(response);
                }
            })
        });
    });

     // delete modal
     $(document).ready(function() {
        $(document).on('click', 'a[data-role=delete]', function() {
            var id = $(this).data("id");

            $('#userid').val(id);
            $('#delModal').modal('toggle');
        });
       
        // confirm delete
        $('#delete').click(function() {
            var id = $('#userid').val();
            $.ajax({
                url: "appointment_del.php",
                type: "post",
                data: {
                    'id': id
                },
                success: function(response) {
                    console.log(responce);
                    // alert("Data Deleted Successfully!");
                }
            })
        });

    });
    </script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
</body>

</html>