        <div id="nav-side" class="col-md-2 hidden side-navbar">
            <div class="nav-logo">
				<img src="{{asset('ui/backend/assets/img/Mercy_Hospital_St._Louis_Logo.png')}}" alt="">
			</div>
			<div class="side-nav-item">
				<p>{{Auth::user()->user_type}}</p>
                <ul class="">
					<li><a href="">Home</a></li>
					@if(Auth::user()->user_type == 'admin')
					<li><a href="">add Doctor</a></li>
					<li><a href="">Add session</a></li>
					@endif
					@if(Auth::user()->user_type == 'patient')
					<li><a href="">make appointment</a></li>
					<li><a href="">Find Consultant</a></li>
					@endif
					<li><a href="">About Us</a></li>
				</ul>
            </div> 
        </div>