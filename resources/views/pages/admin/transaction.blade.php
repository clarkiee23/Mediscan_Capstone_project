
@extends('layout.admin-patientR-master')

@section('title')
Transaction
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

<div class="main-container">
    <div class="row mb-1" id="hlthdash-header">
        <div class="col-md-11" style="margin: auto; padding: 0px;">
            <div class="col-md-5 mt-5">
                <h5>Transaction</h5>
            </div>
            <div class="col-md-6"></div>  
            <!-- <hr> -->
        </div>
    </div>


<div class="row">
    <div class="col-md-11 health-data">
        <!-- TAB BUTTON FOR = Create_Patient | Update_Patient -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <!-- STUDENT -->
            <li class="nav-item" role="presentation">
                <button 
                    class="nav-link active" id="student-tab" 
                    name="student-tab" data-bs-toggle="tab" 
                    data-bs-target="#student" type="button" 
                    role="tab" aria-controls="student" 
                    aria-selected="true">Student
                </button>
            </li>
            <!-- EMPLOYEE -->
            <li class="nav-item" role="presentation">
                <button 
                    class="nav-link" id="employee-tab" 
                    name="employee-tab" data-bs-toggle="tab" 
                    data-bs-target="#employee" type="button" 
                    role="tab" aria-controls="employee" 
                    aria-selected="false">Employee
                </button>
            </li>
        </ul>

    <!-- STUDENT TAB CONTENT -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="student" role="tabpanel" aria-labelledby="student-tab"><br>
            <table id="hlt-student" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">ID Number</th>
                        <th class="bg-primary text-white">First name</th>
                        <th class="bg-primary text-white">Middle name</th>
                        <th class="bg-primary text-white">Last name</th>
                        <th class="bg-primary text-white">Sex</th>
                        <th class="bg-primary text-white">Position</th>
                        <th class="bg-primary text-white">date log</th>                                                                            
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        @foreach($user->transaction as $transactionn)
                            @if($user->position->position == 'Student')
                                <tr>
                                    <td>{{$user->id_number}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->middle_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->sex->sex}}</td>
                                    <td>{{$user->position->position}}</td>
                                    <td>{{$transactionn->created_at}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- EMPLOYEE TAB CONTENT -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="employee" role="tabpanel" aria-labelledby="employee-tab"><br>
            <table id="hlt-employee" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">ID Number</th>
                        <th class="bg-primary text-white">First name</th>
                        <th class="bg-primary text-white">Middle name</th>
                        <th class="bg-primary text-white">Last name</th>
                        <th class="bg-primary text-white">Suffix</th>
                        <th class="bg-primary text-white">Sex</th>
                        <th class="bg-primary text-white">Position</th>
                        <th class="bg-primary text-white">date log</th>                                                                                
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                        @foreach($user->transaction as $transactionn)
                            @if($user->position->position == 'Employee')
                                <tr>
                                    <td>{{$user->id_number}}</td>
                                    <td>{{$user->first_name}}</td>
                                    <td>{{$user->middle_name}}</td>
                                    <td>{{$user->last_name}}</td>
                                    <td>{{$user->suffix}}</td>
                                    <td>{{$user->sex->sex}}</td>
                                    <td>{{$user->position->position}}</td>
                                    <td>{{$transactionn->created_at}}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    </div>
</div>

</div>


@stop



