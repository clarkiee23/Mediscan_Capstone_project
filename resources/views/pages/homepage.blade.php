@extends('layout.home_master')

@section('title')
    MEDISCAN
@stop

@section('content')

<style>
    input[type='text']:focus{
        box-shadow: 0 0 0 0.25rem rgb(255 255 255 / 25%);
    }
    .clock {
        position: absolute;
        top: 15%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        color: #000000;
        font-size: 60px;
        font-family: Orbitron;
        letter-spacing: 7px;
    
    }
</style>


<!-- SCANNER CARD -->
<div class="landingpage">
    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
    <div class="container">
        <form class="pos-style" action="{{route('home')}}" method="post">
        @csrf
        @method('post')
        <div class="card-header">
            <img src="images/acdcare_logo.png" alt="acd logo" class="rounded-circle" id="acdLogo"><br>
        </div>

        <div class="form-group">
            <input tabindex="-1" style="text-align: center; border: 0px;" type="text" name="barcode" id="barcode" class="form-control" autofocus="true"> 
        </div>


        <!-- barcode handle -->


        <!-- SHOW DATA REGISTERED IN TABLE -->

            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID NUMBER</th>
                        <th>COMPLETE NAME</th>
                    </tr>
                </thead>

                <tbody>            
                    <tr>
                        <td id="id_number"></td>
                        <td id="full_name"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>


<!-- AJAX SCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    let timestamp = null
    function showTime(){
        let date = new Date();
        let h = date.getHours(); // 0 - 23
        let m = date.getMinutes(); // 0 - 59
        let s = date.getSeconds(); // 0 - 59
        let session = "AM";
        
        if(h == 0){
            h = 12;
        }
        
        if(h > 12){
            h = h - 12;
            session = "PM";
        }
        
        h = (h < 10) ? "0" + h : h;
        m = (m < 10) ? "0" + m : m;
        s = (s < 10) ? "0" + s : s;
        
        let time = h + ":" + m + ":" + s + " " + session;
        document.getElementById("MyClockDisplay").innerText = time;
        document.getElementById("MyClockDisplay").textContent = time;
        timestamp = h + ":" + m + ":" + s + ":" + session;

        setTimeout(showTime, 1000);
        
    }

    showTime();
</script>

<script>
    let running = true;
    let texValue = '';
    
    function getUser() {
        if (running) {
            running = false;

            let data = { type: 'get', item: texValue, time: timestamp }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                type: 'GET',
                url: '/get-user',
                data: data,
                success: function(response) {
                    // console.log(response)
                    document.getElementById('id_number').innerHTML = response.id_number;
                    document.getElementById('full_name').innerHTML = response.first_name + ' ' + response.last_name;
                    document.getElementById('barcode').innerHTML = '';
                    document.getElementById('barcode').value = '';

                    setTimeout(() => {
                        location.reload();
                    }, 2000)
                },
                error: function(response) {
                    alert(response.message)
                }
            });
        }
    }

    // document.getElementById("barcode").autofocus;
    
    document.getElementById('barcode').addEventListener('input',function(e){
    let value = document.getElementById('barcode').value;

    texValue = value;
    
    setTimeout(() => {
        getUser()
    }, 3000)
        
    }, true);

</script>
@stop