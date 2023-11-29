@extends('layout.admin-patientR-master')

@section('title')
    Reports
@stop

@section('content')
<style>
    #graphs hr{
        margin-top: 3px;
    }
    #graphs .card{
        background-color: #FFFFFF;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
    } 
    #graphs #year .col{
        background-color: #FFFFFF;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 20px;
        border-radius: 5px;
    }
    #graphs #month .col{
        background-color: #FFFFFF;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 20px;
        border-radius: 5px;
    }
    #graphs #week .col{
        background-color: #FFFFFF;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 20px;
        border-radius: 5px;
    }
    #graphs #day .col{
        background-color: #FFFFFF;
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        padding: 20px;
        border-radius: 5px;
    }
</style>

<!-- HEADING -->
<div class="main-container">
    <div class="row mb-1" id="hlthdash-header">
        <div class="col-md-11" style="margin: auto; padding: 0px;">
            <div class="col-md-5 mt-5">
                <h5>Census Reports</h5>
            </div>
            <div class="col-md-6"></div>  
            <hr>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha512-HCG6Vbdg4S+6MkKlMJAm5EHJDeTZskUdUMTb8zNcUKoYNDteUQ0Zig30fvD9IXnRv7Y0X4/grKCnNoQ21nF2Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   
<!-- <script src="./../../../../../public/js/canvasjs.min.js"></script> -->
<!-- GRAPHS CONTENT -->
<div class="main-container" id="graphs">

    <!-- NAV TABS -->
    <div class="col-md-11" style="margin: auto; padding: 0px;">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="day-tab" data-bs-toggle="tab" data-bs-target="#day" type="button" role="tab" aria-controls="day" aria-selected="false">DAY</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week" type="button" role="tab" aria-controls="week" aria-selected="false">WEEK</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab" aria-controls="month" aria-selected="true">MONTH</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="year-tab" data-bs-toggle="tab" data-bs-target="#year" type="button" role="tab" aria-controls="year" aria-selected="false">YEAR</button>
            </li>
            <div class="col"></div>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="print-tab" data-bs-toggle="tab" data-bs-target="#print" type="button" role="tab" aria-controls="print" aria-selected="false">PRINT</button>
            </li>
        </ul>
    </div>

    <!-- TABS CONTENT -->
    <div class="tab-content" id="myTabContent">        
        <!-- DAY TAB -->
        <div class="tab-pane fade" id="day" role="tabpanel" aria-labelledby="day-tab"><br>
            <div class="row mb-4">
                <!-- <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>Patient School Department Chart</h5><hr>
                    </div>
                    <div class="col">
                        <h5>Patient School Year Level Chart</h5><hr>
                    </div>
                </div> -->
                <div class="col-md">
                    <div class="card patientDay">
                        <div class="card-header">
                            <h5>Patient Chart</h5><hr>
                        </div>
                        <div class="card-body">
                            <div id="day-chart" style="height: 500px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- WEEK TAB -->
        <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab"><br>
            <div class="row mb-4">
                <div class="col-md">
                    <div class="card patientWeek">
                        <div class="card-header">
                            <h5></h5><hr>
                        </div>
                        <div class="card-body">
                            <p style="font-size: 50px; text-align: center;">in progress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- MONTH TAB -->
        <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab"><br>
            <div class="row">
                <!-- <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>Patient School Department Chart</h5><hr>
                    </div>
                    <div class="col">
                        <h5>Patient School Year Level Chart</h5><hr>
                    </div>
                </div> -->
                <div class="col-md">
                    <div class="card patientMonth">
                        <div class="card-header">
                            <h5>Patient Chart</h5><hr>
                        </div>
                        <div id="month-chart" style="height: 500px; width: 100%;"></div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- YEAR TAB -->
        <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab"><br>
            <div class="row mb-4">
                <div class="col-md-7">
                </div>
                <div class="col-md">
                    <div class="card patientYear">
                        <div class="card-header">
                            <h5>Patient Chart</h5><hr>
                        </div>
                        <div class="card-body">
                        <p style="font-size: 50px; text-align: center;">in progress</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{url('js/canvasjs.min.js')}}"></script>
<script>
    window.onload = function() {
        let users = <?php echo $users?>;
        let department = <?php echo $department ?>;
        let transaction = <?php echo $transaction ?>;
        let userMap = {}

        for (let i = 0; i < users.length; i++) {
            if (!userMap[users[i].id]) {
                userMap[users[i].id] = users[i].department_id
            }
        }

        // rendering the graph for day start here
        let dayChartLabel = {
            '12 AM': 0,
            '01 AM': 0,
            '02 AM': 0,
            '03 AM': 0,
            '04 AM': 0,
            '05 AM': 0,
            '06 AM': 0,
            '07 AM': 0,
            '08 AM': 0,
            '09 AM': 0,
            '10 AM': 0,
            '11 AM': 0,
            '12 PM': 0,
            '01 PM': 0,
            '02 PM': 0,
            '03 PM': 0,
            '04 PM': 0,
            '05 PM': 0,
            '06 PM': 0,
            '07 PM': 0,
            '08 PM': 0,
            '09 PM': 0,
            '10 PM': 0,
            '11 PM': 0
        }


        for (let x = 0; x < transaction.length; x++) {
            console.log(transaction[x].stamp.split(':'))
            let dayId = transaction[x].stamp.split(':')[0] + ' ' + transaction[x].stamp.split(':')[3]
   
            if (dayId) {
                dayChartLabel[dayId] = dayChartLabel[dayId] + 1;
            }
        }

        console.log(dayChartLabel)

        let dayLabel = new CanvasJS.Chart("day-chart", {
            animationEnabled: true,
            title: {
                text: "Daily Report"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "- ##\"\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                    {y: dayChartLabel['12 AM'], label: '12 AM'},
                    {y: dayChartLabel['01 AM'], label: '01 AM'},
                    {y: dayChartLabel['02 AM'], label: '02 AM'},
                    {y: dayChartLabel['03 AM'], label: '03 AM'},
                    {y: dayChartLabel['04 AM'], label: '04 AM'},
                    {y: dayChartLabel['05 AM'], label: '05 AM'},
                    {y: dayChartLabel['06 AM'], label: '06 AM'},
                    {y: dayChartLabel['07 AM'], label: '07 AM'},
                    {y: dayChartLabel['08 AM'], label: '08 AM'},
                    {y: dayChartLabel['09 AM'], label: '09 AM'},
                    {y: dayChartLabel['10 AM'], label: '10 AM'},
                    {y: dayChartLabel['11 AM'], label: '11 AM'},
                    {y: dayChartLabel['12 PM'], label: '12 PM'},
                    {y: dayChartLabel['01 PM'], label: '01 PM'},
                    {y: dayChartLabel['02 PM'], label: '02 PM'},
                    {y: dayChartLabel['03 PM'], label: '03 PM'},
                    {y: dayChartLabel['04 PM'], label: '04 PM'},
                    {y: dayChartLabel['05 PM'], label: '05 PM'},
                    {y: dayChartLabel['06 PM'], label: '06 PM'},
                    {y: dayChartLabel['07 PM'], label: '07 PM'},
                    {y: dayChartLabel['08 PM'], label: '08 PM'},
                    {y: dayChartLabel['09 PM'], label: '09 PM'},
                    {y: dayChartLabel['10 PM'], label: '10 PM'},
                    {y: dayChartLabel['11 PM'], label: '11 PM'}
                ]
            }]
        });
        
        dayLabel.render();
        // rendering the graph for day end here

        // rendering the graph for month start here
        let monthChartLabel = {
            1: 0,
            2: 0,
            3: 0
        }

        for (let x = 0; x < transaction.length; x++) {
            let dept_id = userMap[transaction[x].id_number];
            
            if (dept_id) {
                monthChartLabel[dept_id] = monthChartLabel[dept_id] + 1;
            }
        }

        let month_chart = new CanvasJS.Chart("month-chart", {
            animationEnabled: true,
            title: {
                text: "Monthly Report"
            },
            data: [{
                type: "pie",
                startAngle: 240,
                yValueFormatString: "##0.00\"%\"",
                indexLabel: "{label} {y}",
                dataPoints: [
                    {y: monthChartLabel[1], label: "Elementary"},
                    {y: monthChartLabel[2], label: "Senior High School"},
                    {y: monthChartLabel[3], label: "College"}
                ]
            }]
        });
        
        month_chart.render();
        // rendering the graph for month end here

    }
</script>

@stop
