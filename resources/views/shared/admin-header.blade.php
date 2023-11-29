<div class="wrapper">
    <div class="top_navbar">
        <div class="logo">
            <a href="/users" class="acdLogo"><img src="images/acdcare_logo.png" alt="acd logo1" class="rounded-circle" id="acdLogo"></a>
            <p>Mediscan</p>
            <a href="/users"><img src="/images/acdcare_logo.png" alt="acd logo2" class="rounded-circle" id="acdLogo2"></a>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-md-1" style="padding: 0px;">
            <div>{{session('role')}}</div>
                <div class="clinicstaff-avatar mt-1">
                    <img src="/images/Nurse_icon.jpg" alt="nurse-icon" id="nurse-icon" class="rounded-circle">
                    <div class="avatar-content">
                        <a href="/logout">Log Out</a>
                    </div>
                </div>
            </div>      
        </div>
</div>
