 
<div class="sidebar">
            <div class="logo">
                <img src="{{asset('images/admin.png')}}" height="100">
                <div>
                    <h2>Admin</h2>
                    <p>@if(session('name'))
                        {{session('name')}}
                        @else
                        {{"admin"}}
                        @endif
                    </p>
                </div>
            </div>
            <div class="buttons">
                <a href="{{url('/')}}/dashboard"><i class="fa-solid fa-house"></i> &nbsp;&nbsp;&nbsp;&nbsp;Dashboard</a>
                <!-- <a href="{{url('/')}}/addplan"><i class="fa-solid fa-square-plus"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Plan</a> -->
                <!-- <a href="{{url('/')}}/addmember"><i class="fa-solid fa-user-plus"></i> &nbsp;&nbsp;&nbsp;&nbsp;Add Member</a> -->
                <!-- <a href="{{url('/')}}/addtrainer"><i class="fa-solid fa-person-circle-plus"></i> &nbsp;&nbsp;&nbsp;&nbsp;Add Trainer</a> -->
                <!-- <a href="{{url('/')}}/addequipment"><i class="fa-solid fa-calendar-plus"></i> &nbsp;&nbsp;&nbsp;&nbsp;Add Equipments</a> -->
                <a href="{{url('/')}}/plans"><i class="fa-solid fa-landmark"></i>&nbsp;&nbsp;&nbsp;&nbsp;Plans</a>
                <a href="{{url('/')}}/members"><i class="fa-solid fa-users"></i> &nbsp;&nbsp;&nbsp;&nbsp;Members</a>
                <a href="{{url('/')}}/trainers"><i class="fa-solid fa-person-harassing"></i> &nbsp;&nbsp;&nbsp;&nbsp;Trainers</a>
                <a href="{{url('/')}}/equipments"><i class="fa-solid fa-dumbbell"></i> &nbsp;&nbsp;&nbsp;&nbsp;Equipments</a>
                <a href="{{url('/')}}/contactinfo"><i class="fa-solid fa-dumbbell"></i> &nbsp;&nbsp;&nbsp;&nbsp;Contacts</a>
                <a href="{{url('/')}}/collabinfo"><i class="fa-solid fa-dumbbell"></i> &nbsp;&nbsp;&nbsp;&nbsp;Collaborations</a>
                <!-- <a href="{{url('/')}}/collection"><i class="fa-solid fa-indian-rupee-sign"></i>&nbsp;&nbsp;&nbsp;&nbsp;Total Collection</a> -->
                <a href="{{url('/')}}/report"><i class="fa-solid fa-flag"></i> &nbsp;&nbsp;&nbsp;&nbsp;Report</a>
                <a href="{{url('/')}}/logout"><i class="fa-solid fa-right-from-bracket"></i> &nbsp;&nbsp;&nbsp;&nbsp;Sign Out</a>
            </div>
        </div>
 