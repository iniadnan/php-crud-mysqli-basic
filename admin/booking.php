<?php
require "./templates/header.php"
    ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php include './templates/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include './templates/nav.php'; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Bookings</h1>

                    <div class="py-5 px-5 bg-white table-responsive">
                        <table class="table table-striped table-hover">
                        <?php
                        // MEMBUAT PERINTAH QUERY JOIN 3 TABLE
                        $sql = "SELECT bookings.id, bookings.status, tickets.flight_id, tickets.price, tickets.from_destination, tickets.to_destination, tickets.date_flight, tickets.time_flight, tickets.time_arrived, users.name, users.email FROM bookings INNER JOIN tickets ON bookings.ticket_flight = tickets.flight_id INNER JOIN users ON bookings.user_email = users.email WHERE bookings.status = 'pending'";
                        $result = mysqli_query($CONNECTION, $sql);
                        ?>
                            <thead>
                                <tr>
                                    <th scope="col">Booking ID</th>
                                    <th scope="col">Flight ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">From Destination</th>
                                    <th scope="col">To Destination</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // MELAKUKAN LOOPING DATA YANG TADI DIAMBIL
                                while ($row = mysqli_fetch_array($result)) { ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['flight_id'] ?></td>
                                        <td><?php echo $row['name'] ?></td>
                                        <td><?php echo $row['from_destination'] ?></td>
                                        <td><?php echo $row['to_destination'] ?></td>
                                        <td><?php echo $row['date_flight'] ?></td>
                                        <td><?php echo $row['status'] ?></td>
                                        <td class='d-inline-flex'>
                                            <form action='../systems/bookings/decline_booking.php' method='POST'>
                                                <input type='hidden' name='email' value='<?php echo $row["email"]; ?>' />
                                                <input type='hidden' name='flight_id' value='<?php echo $row["flight_id"]; ?>' />
                                                <input type='hidden' name='id' value='<?php echo $row["id"]; ?>' />
                                                <input type='hidden' name='total' value='<?php echo $row["price"]; ?>' />
                                                <button type='submit' name='submit' class='d-inline-flex justify-content-center align-items-center bg-danger text-white' style='height: 32px; width: 32px; border: none'>
                                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                                                        <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                                                    </svg>
                                                </button>
                                            </form>
                                            <form action='../systems/bookings/accept_booking.php' method='POST'>
                                                <input type='hidden' name='email' value='<?php echo $row["email"]; ?>' />
                                                <input type='hidden' name='flight_id' value='<?php echo $row["flight_id"]; ?>' />
                                                <input type='hidden' name='id' value='<?php echo $row["id"]; ?>' />
                                                <input type='hidden' name='total' value='<?php echo $row["price"]; ?>' />
                                                <button type='submit' name='submit' class='d-inline-flex justify-content-center align-items-center bg-success text-white ml-3' style='height: 32px; width: 32px; border: none'>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                                </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                    </table>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../systems/admin/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>