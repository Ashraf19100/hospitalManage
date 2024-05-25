            <div class="col nav-bar d-flex align-item-center justify-content-between">
				<button><img src="{{asset('ui/backend/assets/img/navbar-icon.png')}}" alt=""></button>
				<div class="user-icon">
					<div class="btn"><img class="profile-photo" src="{{asset('ui/backend/assets/img/profile.jpg')}}" alt=""><span>{{Auth::user()->name}}</span><img src="{{asset('ui/backend/assets/img/drop-icon.png')}}" alt=""></div>
					<div id="nav-item"class="nav-item hidden-drop">
						<div class="profile d-flex align-item-center justify-content-between">
							<img src="{{asset('ui/backend/assets/img/profile.jpg')}}" alt="">
							<div><p>{{Auth::user()->name}}</p><p>{{Auth::user()->email}}</p></div>
						</div>
						<ul class="align-item-center justify-content-center">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li class="show_profile"><a>profile</a></li>
							<li><form method="POST" action="{{ route('logout') }}">
                            @csrf
							<button class="btn" type="submit">logout</button>
                            
                        </form></li>
	
						</ul>
					</div>
				</div>
				
			</div>