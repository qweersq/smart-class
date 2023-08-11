@extends('layout.topsideBar')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-landmark"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Kelas</span>
                            <span class="info-box-number">{{ $kelas_count }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-database"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Data Sensor</span>
                            <span class="info-box-number">{{ $sensor_count }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>

                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">User Count</span>
                            <span class="info-box-number">{{ $users_count }}</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title">
                        <i class="fas fa-th mr-1"></i>
                        Graph
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
                    <canvas class="chart" id="graphChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-footer -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="far fa-chart-bar"></i>
                                Current Data
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="circle-wrap">
                                    <div class="circle">
                                        <div class="mask full-1">
                                            <div class="fill-1"style="background-color: #00c0ef"></div>
                                        </div>
                                        <div class="mask half" >
                                            <div class="fill-1"style="background-color: #00c0ef"></div>
                                        </div>
                                        <div class="inside-circle"> {{ $data->temperature }} 
                                        </div>
                                        <div class="labelCircle">Temperature</div>
                                    </div>
                                </div>
                                <div class="circle-wrap">
                                    <div class="circle">
                                        <div class="mask full-1">
                                            <div class="fill-1"style="background-color: #39CCCC"></div>
                                        </div>
                                        <div class="mask half">
                                            <div class="fill-1"style="background-color: #39CCCC"></div>
                                        </div>
                                        <div class="inside-circle"> {{ $data->humidity }} 
                                        </div>
                                        <div class="labelCircle">Humidity</div>
                                    </div>
                                </div>
                                <div class="circle-wrap">
                                    <div class="circle">
                                        <div class="mask full-1">
                                            <div class="fill-1"style="background-color: #ede15c;"></div>
                                        </div>
                                        <div class="mask half">
                                            <div class="fill-1"style="background-color: #ede15c;"></div>
                                        </div>
                                        <div class="inside-circle"> {{ $data->projector }}
                                        </div>
                                        <div class="labelCircle">Projector</div>
                                    </div>
                                </div>
                                {{-- <div class="col-12 col-md-4 text-center">
                                    <input type="text" class="knob" data-readonly="true"
                                        value="{{ $data->temperature }}" data-width="125" data-height="125"
                                        data-fgColor="#00c0ef">

                                    <div class="knob-label">Temperature</div>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value="{{ $data->humidity }}"
                                        data-width="125" data-height="125" data-fgColor="#39CCCC">

                                    <div class="knob-label">Humidity</div>
                                </div>
                                <div class="col-12 col-md-4 text-center">
                                    <input type="text" class="knob" data-readonly="true" value=".200"
                                        data-width="125" data-height="125" data-fgColor="#39CCCC"
                                        style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;">
                                    <div class="knob-label">Projector</div>
                                </div> --}}

                                <!-- ./col -->
                            </div>

                            <!-- /.row -->
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">RFID</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>RFID</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rfid as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->rfid_number }}</td>
                                            <td>{{ $item->user }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $rfid->links() }}
                        </div>

                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery Knob -->
        <script src="{{ asset('AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('AdminLTE//plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script>
            //get data from controller to javascript
            var projector = {!! json_encode($projector) !!};
            var humidity = {!! json_encode($humidity) !!};
            var temperature = {!! json_encode($temperature) !!};

            //copy array data to new array
            var projectorArray = [];
            for (var i = projector.length - 1; i >= 0; i--) {
                projectorArray.push(projector[i].projector);
            }

            var humidityArray = [];
            for (var i = humidity.length - 1; i >= 0; i--) {
                humidityArray.push(humidity[i].humidity);
            }

            var temperatureArray = [];
            for (var i = temperature.length - 1; i >= 0; i--) {
                temperatureArray.push(temperature[i].temperature);
            }

            var timeArray = [];
            for (var i = temperature.length - 1; i >= 0; i--) {
                var date = new Date(temperature[i].created_at);
                var time = date.getDate() + "/" + date.getMonth() + "/" + date.getFullYear() + " " + date.getHours() + ":" +
                    date.getMinutes() + ":" + date.getSeconds();
                timeArray.push(time);
            }



            // Get context with jQuery - using jQuery's .get() method.
            var lineChartCanvasPh = $('#graphChart').get(0).getContext('2d')

            var lineChartDataPh = {
                labels: timeArray,
                datasets: [{
                        label: 'Projector',
                        fill: false,
                        tension: 0,
                        backgroundColor: '#fca903',
                        borderColor: '#fca903',
                        pointRadius: true,
                        hoverRadius: 8,
                        borderWidth: 3,
                        data: projectorArray
                    },
                    {
                        label: 'Humidity',
                        fill: false,
                        tension: 0,
                        backgroundColor: '#39CCCC',
                        borderColor: '#39CCCC',
                        pointRadius: true,
                        hoverRadius: 8,
                        borderWidth: 3,
                        data: humidityArray
                    },
                    {
                        label: 'Temperature',
                        fill: false,
                        tension: 0,
                        backgroundColor: '#007bff',
                        borderColor: '#007bff',
                        pointRadius: true,
                        hoverRadius: 8,
                        borderWidth: 3,
                        data: temperatureArray
                    }
                ]
            }

            var lineChartOptions = {
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
                },
            }

            // This will get the first returned node in the jQuery collection.
            new Chart(lineChartCanvasPh, {
                type: 'line',
                data: lineChartDataPh,
                options: lineChartOptions
            })
        </script>
        <script>
            $(function() {
                /* jQueryKnob */

                $('.knob').knob({
                    draw: function() {

                        // "tron" case
                        if (this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv) // Angle
                                ,
                                sa = this.startAngle // Previous start angle
                                ,
                                sat = this.startAngle // Start angle
                                ,
                                ea // Previous end angle
                                ,
                                eat = sat + a // End angle
                                ,
                                r = true

                            this.g.lineWidth = this.lineWidth

                            this.o.cursor &&
                                (sat = eat - 0.3) &&
                                (eat = eat + 0.3)

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.value)
                                this.o.cursor &&
                                    (sa = ea - 0.3) &&
                                    (ea = ea + 0.3)
                                this.g.beginPath()
                                this.g.strokeStyle = this.previousColor
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                                this.g.stroke()
                            }

                            this.g.beginPath()
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                            this.g.stroke()

                            this.g.lineWidth = 2
                            this.g.beginPath()
                            this.g.strokeStyle = this.o.fgColor
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth *
                                2 / 3, 0, 2 * Math.PI, false)
                            this.g.stroke()

                            return false
                        }
                    }
                })
                /* END JQUERY KNOB */

                //INITIALIZE SPARKLINE CHARTS
                var sparkline1 = new Sparkline($('#sparkline-1')[0], {
                    width: 240,
                    height: 70,
                    lineColor: '#92c1dc',
                    endColor: '#92c1dc'
                })
                var sparkline2 = new Sparkline($('#sparkline-2')[0], {
                    width: 240,
                    height: 70,
                    lineColor: '#f56954',
                    endColor: '#f56954'
                })
                var sparkline3 = new Sparkline($('#sparkline-3')[0], {
                    width: 240,
                    height: 70,
                    dotRadius: 1000,
                    lineColor: '#3af221',
                    endColor: '#3af221'
                })


            })
        </script>
    @endsection
