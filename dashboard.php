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
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Food & Drink</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Transportation</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Personal Care</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Shopping</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Salary</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

                                <div class="info-box-content">
                                    <span class="info-box-text">Invesment</span>
                                    <span class="info-box-number">
                                        10
                                        <small>%</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card card-info">
                                <div class="card-header">
                                    <h3 class="card-title">Line Chart</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="lineChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card card-success">
                                <div class="card-header">
                                    <h3 class="card-title">Bar Chart</h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <!-- <button type="button" class="btn btn-tool" data-card-widget="remove">
                                            <i class="fas fa-times"></i>
                                        </button> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="chart">
                                        <canvas id="barChart" style="
                                            min-height: 250px;
                                            height: 250px;
                                            max-height: 250px;
                                            max-width: 100%;
                                            ">
                                        </canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
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

        var areaChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    pointRadius: false,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        display: false,
                    }
                }],
                yAxes: [{
                    gridLines: {
                        display: false,
                    }
                }]
            }
        }

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
        var lineChartOptions = $.extend(true, {}, areaChartOptions)
        var lineChartData = $.extend(true, {}, areaChartData)
        lineChartData.datasets[0].fill = false;
        lineChartData.datasets[1].fill = false;
        lineChartOptions.datasetFill = false

        var lineChart = new Chart(lineChartCanvas, {
            type: 'line',
            data: lineChartData,
            options: lineChartOptions
        })

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChartData = $.extend(true, {}, areaChartData);
        var temp0 = areaChartData.datasets[0];
        var temp1 = areaChartData.datasets[1];
        barChartData.datasets[0] = temp1;
        barChartData.datasets[1] = temp0;

        var barChartOptions = {
            responsive: true,
            maintainAspectRatio: false,
            datasetFill: false,
        };

        new Chart(barChartCanvas, {
            type: "bar",
            data: barChartData,
            options: barChartOptions,
        });

        /* initialize the external events
         -----------------------------------------------------------------*/
        // function ini_events(ele) {
        //     ele.each(function() {
        //         // create an Event Object (https://fullcalendar.io/docs/event-object)
        //         // it doesn't need to have a start or end
        //         var eventObject = {
        //             title: $.trim($(this).text()), // use the element's text as the event title
        //         };

        //         // store the Event Object in the DOM element so we can get to it later
        //         $(this).data("eventObject", eventObject);

        //         // make the event draggable using jQuery UI
        //         $(this).draggable({
        //             zIndex: 1070,
        //             revert: true, // will cause the event to go back to its
        //             revertDuration: 0, //  original position after the drag
        //         });
        //     });
        // }

        // ini_events($("#external-events div.external-event"));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        // var containerEl = document.getElementById("external-events");
        // var checkbox = document.getElementById("drop-remove");
        var calendarEl = document.getElementById("calendar");

        // initialize the external events
        // -----------------------------------------------------------------

        // new Draggable(containerEl, {
        //     itemSelector: ".external-event",
        //     eventData: function(eventEl) {
        //         return {
        //             title: eventEl.innerText,
        //             backgroundColor: window
        //                 .getComputedStyle(eventEl, null)
        //                 .getPropertyValue("background-color"),
        //             borderColor: window
        //                 .getComputedStyle(eventEl, null)
        //                 .getPropertyValue("background-color"),
        //             textColor: window
        //                 .getComputedStyle(eventEl, null)
        //                 .getPropertyValue("color"),
        //         };
        //     },
        // });

        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay",
            },
            themeSystem: "bootstrap",
            //Random default events
            events: [{
                    title: "All Day Event",
                    start: new Date(y, m, 1),
                    backgroundColor: "#f56954", //red
                    borderColor: "#f56954", //red
                    allDay: true,
                },
                {
                    title: "Long Event",
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: "#f39c12", //yellow
                    borderColor: "#f39c12", //yellow
                },
                {
                    title: "Meeting",
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: "#0073b7", //Blue
                    borderColor: "#0073b7", //Blue
                },
                {
                    title: "Lunch",
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    backgroundColor: "#00c0ef", //Info (aqua)
                    borderColor: "#00c0ef", //Info (aqua)
                },
                {
                    title: "Birthday Party",
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: "#00a65a", //Success (green)
                    borderColor: "#00a65a", //Success (green)
                },
                {
                    title: "Click for Google",
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: "https://www.google.com/",
                    backgroundColor: "#3c8dbc", //Primary (light-blue)
                    borderColor: "#3c8dbc", //Primary (light-blue)
                },
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            },
        });

        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        // var currColor = "#3c8dbc"; //Red by default
        // // Color chooser button
        // $("#color-chooser > li > a").click(function(e) {
        //     e.preventDefault();
        //     // Save color
        //     currColor = $(this).css("color");
        //     // Add color effect to button
        //     $("#add-new-event").css({
        //         "background-color": currColor,
        //         "border-color": currColor,
        //     });
        // });
        // $("#add-new-event").click(function(e) {
        //     e.preventDefault();
        //     // Get value and make sure it is not null
        //     var val = $("#new-event").val();
        //     if (val.length == 0) {
        //         return;
        //     }

        //     // Create events
        //     var event = $("<div />");
        //     event
        //         .css({
        //             "background-color": currColor,
        //             "border-color": currColor,
        //             color: "#fff",
        //         })
        //         .addClass("external-event");
        //     event.text(val);
        //     $("#external-events").prepend(event);

        //     // Add draggable funtionality
        //     ini_events(event);

        //     // Remove event from text input
        //     $("#new-event").val("");
        // });
    });
</script>

</html>