@extends('layout.user-master')

@section('title')
Consultation record
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
                <h5>Consultation-records</h5>    
            </div>
            <div class="col-md-6"></div>  
            <!-- <hr> -->
        </div>
    </div>
</div>

<!-- SCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" integrity="sha512-HCG6Vbdg4S+6MkKlMJAm5EHJDeTZskUdUMTb8zNcUKoYNDteUQ0Zig30fvD9IXnRv7Y0X4/grKCnNoQ21nF2Qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>   

<!-- GRAPHS CONTENT -->
<div class="main-container" id="graphs">

    <!-- NAV TABS -->
    <div class="col-md-11" style="margin: auto; padding: 0px;">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="day-tab" data-bs-toggle="tab" data-bs-target="#day" type="button" role="tab" aria-controls="day" aria-selected="true">DAY</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="week-tab" data-bs-toggle="tab" data-bs-target="#week" type="button" role="tab" aria-controls="week" aria-selected="false">WEEK</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="month-tab" data-bs-toggle="tab" data-bs-target="#month" type="button" role="tab" aria-controls="month" aria-selected="false">MONTH</button>
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
        <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab"><br>
            <div class="row mb-4">
                <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>My Consultation Chart</h5><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- WEEK TAB -->
        <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="week-tab"><br>
            <div class="row mb-4">
                <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>My Consultation Chart</h5><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- MONTH TAB -->
        <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="month-tab"><br>
            <div class="row mb-4">
                <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>My Consultation Chart</h5><hr>
                    </div>
                </div>
            </div>
        </div>
        <!-- YEAR TAB -->
        <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab"><br>
            <div class="row mb-4">
                <div class="col-md-7">
                    <div class="col mb-3">
                        <h5>My Consultation Chart</h5><hr>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>


@stop