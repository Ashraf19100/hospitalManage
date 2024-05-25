
var nav_btn= document.querySelector(".nav-bar button");
var profile_btn=document.querySelector(".user-icon .btn");
var show_profile=document.querySelector(".show_profile");
var hide_profile=document.querySelector(".hide_profile");

profile_btn.addEventListener('click', function(details){
  if(document.getElementById("nav-item").classList.contains('hidden-drop')){
    document.getElementById("nav-item").classList.remove('hidden-drop');
    document.getElementById("nav-item").classList.add('show');
  }else{
    document.getElementById("nav-item").classList.add('hidden-drop');
    document.getElementById("nav-item").classList.remove('show');
  }
})

nav_btn.addEventListener('click', function(details){
  if(document.getElementById("nav-side").classList.contains('hidden')){
    document.getElementById("nav-side").classList.remove('hidden');
    document.getElementById("nav-side").classList.add('show');
  }else{
    document.getElementById("nav-side").classList.add('hidden');
    document.getElementById("nav-side").classList.remove('show');
  }
})
show_profile.addEventListener('click', function(details){
  if(document.getElementById("profile_body").classList.contains('hidden')){
    document.getElementById("profile_body").classList.remove('hidden');
    document.getElementById("profile_body").classList.add('show_profile');
    document.getElementById("nav-item").classList.add('hidden-drop');
    document.getElementById("nav-item").classList.remove('show');
    document.getElementById("nav-side").classList.add('hidden');
    document.getElementById("nav-side").classList.remove('show');
    document.querySelector(".profile_section").style.width="100%";
    document.querySelector(".profile_section").style.height="100%";
    document.querySelector(".profile_details").style.display="initial";
  }
})
hide_profile.addEventListener('click', function(details){
  if(document.getElementById("profile_body").classList.contains('show_profile')){
    document.getElementById("profile_body").classList.add('hidden');
    document.getElementById("profile_body").classList.remove('show_profile');
    document.querySelector(".profile_section").style.width="0%";
    document.querySelector(".profile_section").style.height="0%";
    document.querySelector(".profile_details").style.display="none";
  }
})
