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
                    <h1 class="h3 mb-5 text-gray-800">Tickets</h1>

                    <div class="py-5 px-5 bg-white table-responsive">
                        <a href="./add-ticket.php" class="d-inline-block py-2 px-4 bg-primary text-white mb-3">Add Ticket</a>
                        <table class="table table-striped table-hover">
                            <?php
                                // MENGAMBIL DATA DARI DATABASE DENGAN JOIN 2 TABLE
                                $sql = "SELECT tickets.id, tickets.flight_id, tickets.price, tickets.from_destination, tickets.to_destination, tickets.date_flight, tickets.time_flight, tickets.time_arrived, tickets.status, vendors.name FROM tickets INNER JOIN vendors ON tickets.vendor_id = vendors.id";
                                $result = mysqli_query($CONNECTION, $sql);
                            ?>
                            <thead>
                                <tr>
                                    <th scope="col">Flight ID</th>
                                    <th scope="col">Vendor Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">From Destination</th>
                                    <th scope="col">To Destination</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time Flight</th>
                                    <th scope="col">Time Arrived</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td>" . $row["flight_id"] . "</td>";
                                            echo "<td>" . $row["name"] . "</td>";
                                            echo "<td>" . $row["price"] . "</td>";
                                            echo "<td>" . $row["from_destination"] . "</td>";
                                            echo "<td>" . $row["to_destination"] . "</td>";
                                            echo "<td>" . $row["date_flight"] . "</td>";
                                            echo "<td>" . $row["time_flight"] . "</td>";
                                            echo "<td>" . $row["time_arrived"] . "</td>";
                                            echo "<td>" . $row["status"] . "</td>";
                                            echo "<td class='d-inline-flex'>
                                                    <a class='d-inline-flex justify-content-center align-items-center bg-warning text-white' href='edit-ticket.php?id=" . $row['id'] . "' style='height: 32px; width: 32px'>
                                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                                        </svg>
                                                    </a>
                                                    <form action='../systems/tickets/delete_ticket.php' method='POST'>
                                                        <input type='hidden' name='id' value='". $row['id'] ."' />
                                                        <button type='submit' name='submit' class='d-inline-flex justify-content-center align-items-center bg-danger text-white ml-1' style='height: 32px; width: 32px; border: none'>
                                                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                                                <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z'/>
                                                                <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z'/>
                                                            </svg>
                                                        </button>
                                                    </form>
                                                </td>";
                                    echo "</tr>";
                                    }
                                ?>
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