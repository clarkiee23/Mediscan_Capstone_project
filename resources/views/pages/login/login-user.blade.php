@extends('layout.master')

@section('title')
    Mediscan
@stop


@section('content')
 
<div class="front-container">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <img src="images/acdcare_logo.png" alt="acd logo" class="rounded-circle" id="acdLogo"><br>
            </div>
            <div class="card-body">          
                <form action="{{route('login')}}" method="post" id="admin-form">
                    @csrf
                    @method('post')
                    <div id="">
                        <label for=""><h5><strong>Mediscan</strong></h5></label>
                        <div class="form-group input-group-sm mt-1">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                            <!-- <span class="fas fa-user"></span> -->
                        </div>
                        <div class="form-group input-group-sm mb-3 mt-3">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                            <!-- <span class="fas fa-lock"></span> -->
                        </div>
                        <button id="btnn1">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop