
@extends('layout.admin-patientR-master')

@section('title')
Consultation Schedules
@stop



@section('content')
<style>
    .add-data{
        position:fixed;
        width:60px;
        height:60px;
        bottom:40px; 
        right:40px;
        background-color: #006dff;
        color: #ffffff;
        border-radius:50px;
        text-align:center;
        box-shadow: 2px 2px 3px #999;
        
    }
    .add-data i{
        margin-top:22px;
    }
    #hlthdash-header hr{
        margin-top: 0px;
    }
    #hlthdash-subhead a{
        color: #0266ea;
    }
    #hlthdash-subhead i{
        color: #1067d8;
        font-size: 22px;
    }
</style>

<!-- HEADING -->
<div class="main-container">
    <div class="row mb-1" id="hlthdash-header">
        <div class="col-md-11" style="margin: auto; padding: 0px;">
            <div class="col-md-5 mt-5">
                <h5>Schedules Pending</h5>
            </div>
            <div class="col-md-6"></div>  
            <hr>
        </div>
    </div>
</div>
                


@stop



