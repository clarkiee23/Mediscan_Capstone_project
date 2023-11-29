@extends('layout.admin-patientR-master')

@section('title')
Dashboard
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
        text-align: left;
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

    .mb3 .form-label {
        text-align: left;
    }
</style>

<!-- HEADING -->
<div class="main-container">
    <div class="row mb-1" id="hlthdash-header">
        <div class="col-md-11" style="margin: auto; padding: 0px;">
            <div class="col-md-5 mt-5">
                <h5>Dashboard</h5>    
            </div>
            <div class="col-md-6"></div>  
            <!-- <hr> -->
        </div>
    </div>


<!-- MAIN CONTENTS -->
<div class="row">
    <div class="col-md-11 health-data">

    <!-- TAB BUTTON FOR = Create_Patient | Update_Patient -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <!-- CREATE PATIENT -->
        <li class="nav-item" role="presentation">
            <button 
                class="nav-link active" id="Create_Patient-tab" 
                name="Create_Patient-tab" data-bs-toggle="tab" 
                data-bs-target="#Create_Patient" type="button" 
                role="tab" aria-controls="Create_Patient" 
                aria-selected="true">Create_Patient
            </button>
        <!-- UPDATE PATIENT -->
        </li>
        <li class="nav-item" role="presentation">
            <button 
                class="nav-link" id="Update_Patient-tab" 
                name="Update_Patient-tab" data-bs-toggle="tab" 
                data-bs-target="#Update_Patient" type="button" 
                role="tab" aria-controls="Update_Patient" 
                aria-selected="false">Update_Patient
            </button>
        </li>
    </ul>

    <!-- CREATE PATIEN TAB CONTENT -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="Create_Patient" role="tabpanel" aria-labelledby="Create_Patient-tab"><br>
            <table id="hlt-Create_Patient" class="table table-hover" style="width:100%">

                <div class="container-fluid">
                    <div class="row">
                        <div class="card align-items-center text-bg-primary" style="width: 20rem;">
                            <img src="images/acdcare_logo.png" class="card-img-top" id="create_user_id" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Create Patient</h5>
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn" style="margin-left: 20px;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Register
                                        </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Patient</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-bg-light mb-3" tabindex="-1">
                                        <form action="/save-user" method="POST">
                                            @csrf

                                            <div class="row g-4">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label class="form-label"><b>ID</b></label>
                                                        <input type="int" class="form-control" id="exampleInputEmail1" name="id_number" aria-describedby="emailHelp">
                                                    </div>
                                                </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>First Name</b></label>
                                                    <input type="name" class="form-control" id="exampleInputEmail1" name="fname" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>Middle Name<b></label>
                                                    <input type="name" class="form-control" id="exampleInputEmail1" name="mname" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>Last Name</b></label>
                                                    <input type="name" class="form-control" id="exampleInputEmail1" name="lname" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>Suffix</b></label>
                                                    <input type="name" class="form-control" id="exampleInputEmail1" name="suffix" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <div class="form-group input-group-sm">
                                                        <label for="role" class="form-label"><b>Sex</b></label>
                                                            <select class="form-control" id="exampleInputEmail1" name="sex" aria-describedby="emailHelp">
                                                            <option selected>-- Select --</option>
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label for="role" class="form-label"><b>Position</b></label>
                                                    <select class="form-control" id="exampleInputEmail1" name="position" aria-describedby="emailHelp">
                                                        <option selected>-- Select --</option>
                                                        <option value="1">Student</option>
                                                        <option value="2">Employee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label for="role" class="form-label"><b>Year Level</b></label>
                                                    <select class="form-control" id="exampleInputEmail1" name="position" aria-describedby="emailHelp">
                                                        <option selected>-- Select --</option>
                                                        <option value="1">Grade School</option>
                                                        <option value="2">Junior High School</option>
                                                        <option value="3">Senior High School</option>
                                                        <option value="4">College</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label for="role" class="form-label"><b>Department</b></label>
                                                    <select class="form-control" id="exampleInputEmail1" name="position" aria-describedby="emailHelp">
                                                        <option selected>-- Select --</option>
                                                        <option value="1">Elementary Department</option>
                                                        <option value="2">Senior High Department</option>
                                                        <option value="3">College Department</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>Username</b></label>
                                                    <input type="name" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp">
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label"><b>Password</b></label>
                                                    <input type="password" class="form-control" name="password" id="exampleInputPasswor d1">
                                                </div>
                                            </div>

                                            </div>
                                            <!-- <div class="mb-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div> -->
                                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" type="button" class="btn btn-primary">Submit</button>
                                            </div>

                                        </form>
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </table>
        </div>
    </div>


    <!-- UPDATE PATIENT TAB CONTENT-->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="Update_Patient" role="tabpanel" aria-labelledby="Update_Patient-tab"><br>
            <table id="hlt-Update_Patient" class="table table-hover" style="width:100%">
                <thead>
                    <tr>
                        <th class="bg-primary text-white">ID Number</th>
                        <th class="bg-primary text-white">First name</th>
                        <th class="bg-primary text-white">Middle name</th>
                        <th class="bg-primary text-white">Last name</th>
                        <th class="bg-primary text-white">Suffix</th>
                        <th class="bg-primary text-white">Sex</th>
                        <th class="bg-primary text-white">Action</th>                                                                               
                    </tr>
                </thead>
            <tbody>
            @foreach($users as $user)
            @if($user->username != 'admin')
                <tr>
                    <td>{{ $user->id_number }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->middle_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->suffix }}</td>
                    <td>{{ $user->sex->sex }}</td>
                        
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#DeleteModal" onclick="openDeleteModal({{ $user }})">
                            Delete
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UpdateModal" onclick="openModal({{ $user }})">
                            Change
                        </button>
                    </td>

                        <!-- Modal -->
                        <div class="modal fade" id="UpdateModal" tabindex="-1" aria-labelledby="UpdateModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="UpdateModalLabel">Update Patient</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <div class="modal-body">
                                    <form action="/update-user" method="POST">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <input type="hidden" id="id" name="id" class="form-control" placeholder="ID Number" aria-label="ID Number">
                                            </div>

                                            <div class="col-md-12">
                                                <input type="text" id="id_number" name="id_number" class="form-control" placeholder="ID Number" aria-label="ID Number">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First name" aria-label="First name">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" id="middle_name" name="middle_name" class="form-control" placeholder="Middle name" aria-label="Middle name">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" id="suffix" name="suffix" class="form-control" placeholder="Suffix" aria-label="Suffix">
                                            </div>
                                            <!-- <div class="col-md-6">
                                            <label class="visually-hidden" for="sex">Preference</label>
                                                <select class="form-select" id="sex">
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                </select>
                                            </div> -->

                                        </div>
                                    </form>
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="DeleteModalLabel">Are you sure to delete this user?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                <!-- <div class="modal-body">
                                    
                                </div> -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" onclick="deleteUser()">Delete</button>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </td>
                </tr>
            @endif
            @endforeach
            </tbody>
            </table>
        </div>
    </div>

    </div>
</div>

</div>

<!-- SCRIPT -->
<script>
    let userId = null

    function openModal(data) {
        document.getElementById('id').value = data.id
        document.getElementById('id_number').value = data.id_number
        document.getElementById('first_name').value = data.first_name
        document.getElementById('last_name').value = data.last_name
        document.getElementById('middle_name').value = data.middle_name
        document.getElementById('suffix').value = data.suffix
        document.getElementById('sex').value = data.sex
    }

    function openDeleteModal(data) {
        userId = data.id
    }

    function deleteUser() {
        let data = { type: 'get', item: userId }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })

        $.ajax({
            type: 'GET',
            url: '/delete-user',
            data: data,
            success: function(response) {
                location.reload();
            },
            error: function(response) {
                console.log(response.message)
            }
        });
    }
</script>

@stop