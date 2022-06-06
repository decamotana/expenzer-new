<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<?php include("./includes/main-head.php") ?>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">
        <?php include("./includes/main-nav.php") ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <br />
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Wallets List
                                    </h3>
                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modal-lg" style="float: right;">Add Transaction</button>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="table-wallet" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Transaction Type</th>
                                                <th>Description</th>
                                                <th>Amount</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->


            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-md">
                    <form action="#" id="form" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Transaction Form</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control" id="type" name="type" require>
                                        <option value="">Please select</option>
                                        <option value="Food & Drink">Food & Drink</option>
                                        <option value="Transportation">Transportation</option>
                                        <option value="Personal Care">Personal Care</option>
                                        <option value="Shopping">Shopping</option>
                                        <option value="Salary">Salary</option>
                                        <option value="Invesment">Invesment</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Amount</label>
                                    <input style="display: none;" id="user_id" name="user_id" placeholder="user_id" value="<?php echo $_SESSION['id'] ?>">
                                    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" required />
                                </div>
                                <div class="form-group">
                                    <label>Textarea</label>
                                    <textarea class="form-control" rows="3" placeholder="Description ..." id="description" name="description" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                    Close
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- /.content-wrapper -->

        <?php include("./includes/main-footer.php") ?>
    </div>
    <?php include("./includes/main-scripts.php") ?>
</body>
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
    });
    $(window).on("load", function() {
        $("#table-wallet").DataTable({
            paging: true,
            ordering: true,
            info: true,
            autoWidth: false,
            responsive: true,
        });



        $('#form').submit(function(e) {
            e.preventDefault();
            let values = $('#form').serialize();
            console.log('values', values);
            $.post("php/wallet.php", values, function(data) {
                $('#modal-lg').modal('hide')
                getTable()
                toastr.success(
                    "Successfully Added"
                );
                $('#form').trigger("reset");
            })
        })

        getTable()


    });

    function getTable() {
        let id = $('#global_id').val()
        $.ajax({
            type: "POST",
            url: "php/wallet-table.php",
            data: {
                id: id
            },
            dataType: 'json',
            success: function(res) {
                // let data = JSON.parse(res);
                // console.log('res', res);
                var table = $('#table-wallet').DataTable();
                table.clear().draw();
                $.each(res, function(i, data) {
                    table.row.add([data.id, data.type, data.description, data.amount, '<button class="btn btn-danger btn-xs" onClick="myDelete(' + data.id + ')">DELETE</button>']).draw();
                });

            }
        });
    }

    function myDelete(id) {
        let delete_id = id;
        // console.log(delete_id);
        $.post("php/wallet.php", {
            delete_id: delete_id
        }, function(data) {
            getTable()
            toastr.error(
                "Successfully Deleted"
            );
        })
    }
</script>

</html>