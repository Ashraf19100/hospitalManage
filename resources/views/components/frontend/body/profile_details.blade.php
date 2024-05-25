<div id="profile_body" class="hidden profile_section">
					<div  class="profile_body ">
						<div class="profile_details">
							<div class="profile_details_top">
								<button class="hide_profile" >x</button>
							</div>
							<div class="profile_photo">
								<img src="{{Auth::user()->image}}" alt="" style="width: 200px; height: 200px;">
                                <div class="add_photo"><a href="{{route('user.edit',Auth::user()->id)}}">+</a></div>
                                
							</div>
							<div class="profile_data">
								<p><span>user name:</span>{{Auth::user()->name}}</p>
								<p><span>user type:</span>{{Auth::user()->user_type}}</p>
								<p><span>Email:</span>{{Auth::user()->email}}</p>
							</div>
						</div>
					</div>
				</div>