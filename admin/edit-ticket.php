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
                    <h1 class="h3 text-gray-800">Edit Ticket</h1>

                    <main class="p-5">
                        <?php
                            $id = $_GET['id'];
                            $sql = "SELECT * FROM tickets WHERE id='$id'";
                            $result = mysqli_query($CONNECTION, $sql);
                            $ticket = mysqli_fetch_assoc($result);
                        ?>
                        <form method="POST" action="../systems/tickets/update_ticket.php" class="p-5 bg-white">
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                            <div class="col-12 mb-3">
                                <label for="vendor" class="form-label">Vendor Penerbangan</label>
                                <?php
                                    $sql = "SELECT * FROM vendors";
                                    $result = mysqli_query($CONNECTION, $sql);
                                ?>
                                <select class="form-select w-100 py-2 px-2" id="vendor" name="vendor">
                                    <?php
                                        while ($row = mysqli_fetch_array($result)) { ?>
                                        <option value="<?php echo $row['id']; ?>" <?php echo ($row['id'] == $ticket['vendor_id']) ? 'selected' : '' ?>><?php echo $row['name']; ?></option>
                                        <?php }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" id="price" value="<?php echo $ticket['price']; ?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="from_destination" class="form-label">From Destination</label>
                                <input type="text" class="form-control" name="from_destination" id="from_destination" value="<?php echo $ticket['from_destination']; ?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="to_destination" class="form-label">To Destination</label>
                                <input type="text" class="form-control" name="to_destination" id="to_destination" value="<?php echo $ticket['to_destination']; ?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="date_flight" class="form-label">Date Flight</label>
                                <input type="date" class="form-control" name="date_flight" id="date_flight" value="<?php echo $ticket['date']; ?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="time_flight" class="form-label">Time Flight</label>
                                <input type="text" class="form-control" name="time_flight" id="time_flight" value="<?php echo $ticket['time_flight']; ?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="time_arrived" class="form-label">Time Arrived</label>
                                <input type="text" class="form-control" name="time_arrived" id="time_arrived" value="<?php echo $ticket['time_arrived']; ?>">
                            </div>
                            <div class="col-12 mb-5">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select w-100 py-2 px-2" id="status" name="status">
                                    <option value="ready">Ready</option>
                                    <option value="sold">Sold Out</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </main>

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