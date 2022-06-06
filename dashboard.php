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
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1">
                                    <i class="fas fa-utensils"></i>
                                </span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Food & Drink</span>
                                    <span class="info-box-number food_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-car-side"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Transportation</span>
                                    <span class="info-box-number tran_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-red elevation-1"><i class="fa fa-user-md"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Personal Care</span>
                                    <span class="info-box-number pers_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-orange elevation-1"><i class="fas fa-shopping-cart"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Shopping</span>
                                    <span class="info-box-number shop_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-blue elevation-1"><i class="far fa-money-bill-alt"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Salary</span>
                                    <span class="info-box-number sala_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-building"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Invesment</span>
                                    <span class="info-box-number inve_total">
                                        0
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3 class="income_total">0</h3>

                                    <p>Income</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-check-alt"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Total Amount
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3 class="expenses_total">0</h3>

                                    <p>Expenses</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-money-check-alt"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    Total Amount
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Bar chart -->
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        Statistics Chart
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="bar-chart" style="height: 300px;"></div>
                                </div>
                                <!-- /.card-body-->
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body p-0">
                                    <!-- THE CALENDAR -->
                                    <div id="calendar"></div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->

            <?php include("./includes/main-footer.php") ?>
        </div>
        <?php include("./includes/main-scripts.php") ?>
</body>
<script>
    $(function() {
        // Get context with jQuery - using jQuery's .get() method.
        getTotals()

        function getTotals() {
            let id = $('#global_id').val()
            $.ajax({
                type: "POST",
                url: "php/dashboard.php",
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(res) {
                    // console.log('res', res);
                    let food_total = res['food_total'] !== null ? res['food_total'] : 0;
                    let inve_total = res['inve_total'] !== null ? res['inve_total'] : 0;
                    let pers_total = res['pers_total'] !== null ? res['pers_total'] : 0;
                    let sala_total = res['sala_total'] !== null ? res['sala_total'] : 0;
                    let shop_total = res['shop_total'] !== null ? res['shop_total'] : 0;
                    let tran_total = res['tran_total'] !== null ? res['tran_total'] : 0;

                    $('.food_total').text(food_total);
                    $('.inve_total').text(inve_total);
                    $('.pers_total').text(pers_total);
                    $('.sala_total').text(sala_total);
                    $('.shop_total').text(shop_total);
                    $('.tran_total').text(tran_total);

                    let income = parseFloat(sala_total) + parseFloat(inve_total);
                    let expenses = parseFloat(food_total) + parseFloat(pers_total) + parseFloat(shop_total) + parseFloat(tran_total);

                    $('.income_total').text(income.toFixed(2));
                    $('.expenses_total').text(expenses.toFixed(2));

                    /* BAR CHART  */
                    var bar_data = {
                        data: [
                            [1, food_total],
                            [2, inve_total],
                            [3, pers_total],
                            [4, sala_total],
                            [5, shop_total],
                            [6, tran_total]
                        ],
                        bars: {
                            show: true
                        }
                    }
                    $.plot('#bar-chart', [bar_data], {
                        grid: {
                            borderWidth: 1,
                            borderColor: '#f3f3f3',
                            tickColor: '#f3f3f3'
                        },
                        series: {
                            bars: {
                                show: true,
                                barWidth: 0.5,
                                align: 'center',
                            },
                        },
                        colors: ['#3c8dbc'],
                        xaxis: {
                            ticks: [
                                [1, 'Food & Drink'],
                                [2, 'Transportation'],
                                [3, 'Personal Care'],
                                [4, 'Shopping'],
                                [5, 'Salary'],
                                [6, 'Invesment']
                            ]
                        }
                    })
                }
            });


        }


        getCalendar()

        function getCalendar() {
            let id = $('#global_id').val()

            $.ajax({
                type: "POST",
                url: "php/dashboard.php",
                data: {
                    calendar_id: id
                },
                dataType: 'json',
                success: function(res) {
                    let arr = [];
                    $.each(res, function(i, data) {
                        arr.push({
                            title: data['description'],
                            start: new Date(data['date']),
                            backgroundColor: "#007bff",
                            borderColor: "#007bff",
                            allDay: false,
                        })
                    })
                    console.log('calendar', arr);


                    var date = new Date();
                    var d = date.getDate(),
                        m = date.getMonth(),
                        y = date.getFullYear();
                    var Calendar = FullCalendar.Calendar;
                    var Draggable = FullCalendar.Draggable;
                    var calendarEl = document.getElementById("calendar");
                    var calendar = new Calendar(calendarEl, {
                        headerToolbar: {
                            left: "prev,next today",
                            center: "title",
                            right: "dayGridMonth,timeGridWeek,timeGridDay",
                        },
                        themeSystem: "bootstrap",
                        //Random default events
                        events: arr,
                        editable: false,
                        droppable: false, // this allows things to be dropped onto the calendar !!!
                        // drop: function(info) {
                        //     // is the "remove after drop" checkbox checked?
                        //     if (checkbox.checked) {
                        //         // if so, remove the element from the "Draggable Events" list
                        //         info.draggedEl.parentNode.removeChild(info.draggedEl);
                        //     }
                        // },
                    });

                    calendar.render();
                }
            });


        }





    });
</script>

</html>