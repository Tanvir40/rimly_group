<section class="container-fluid">
  <div class="row">
    <div class="col-md-2 bg-dark paddingHeight">
      <div id="accordian">
        <ul class="list-unstyled side-menu my-3">
                
              <li class="p-1"><a href="{{url('/admin')}}"><i class="fa fa-tachometer"></i>Dashboard</a>
              </li>

              <li class="p-1"><a href="#select-1" data-toggle="collapse"><i class="fa fa-th-large"></i>Slider</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "slideradd" || Request::path() == "sliderlist"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-1" data-parent="#accordian">
                    <li><a href="{{url('/slideradd')}}">Add slider</a></li>
                    <li><a href="{{url('/sliderlist')}}">Slider list</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-5" data-toggle="collapse"><i class="fa fa-meetup"></i>Banner section</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "bannersection"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-5" data-parent="#accordian">
                    <li><a href="{{url('/bannersection')}}">Banner</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-3" data-toggle="collapse"><i class="fa fa-podcast"></i>Navbar</a>
                  <ul class="collapse <?php 

                    $file = pathinfo(Request::path());

              
                  if(Request::path() == "createnavbar" || Request::path() == "subcreatenavbar" || Request::path() == "nav_list" || Request::path() == "subnav_list" || $file['dirname'] == "edit_nav"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-3" data-parent="#accordian">
                    <li><a href="{{url('/createnavbar')}}">New nav</a></li>
                    <li><a href="{{url('/nav_list')}}">Nav list</a></li>
                    <li><a href="{{url('/subcreatenavbar')}}">New sub-nav</a></li>
                    <li><a href="{{url('/subnav_list')}}">Nav sub-list</a></li>
                  </ul>
              </li>


              <li class="p-1"><a href="#select-4" data-toggle="collapse"><i class="fa fa-american-sign-language-interpreting"></i>Pages</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "pagecreate" || Request::path() == "pagelist"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-4" data-parent="#accordian">
                    <li><a href="{{url('/pagecreate')}}">New page</a></li>
                    <li><a href="{{url('/pagelist')}}">Page list</a></li>
                  </ul>
              </li>



              <li class="p-1"><a href="{{url('/websetup')}}"><i class="fa fa-tachometer"></i>Web setup</a>
              </li>

              


              

              <li class="p-1"><a href="#select-2" data-toggle="collapse"><i class="fa fa-wheelchair-alt"></i>Our Brands</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "ourBrands" || Request::path() == "brandlist"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-2" data-parent="#accordian">
                    <li><a href="{{url('/ourBrands')}}">Add brand</a></li>
                    <li><a href="{{url('/brandlist')}}">Brand list</a></li>
                  </ul>
              </li>

              <li class="p-1"><a href="#select-6" data-toggle="collapse"><i class="fa fa-user"></i>Our team</a>
                  <ul class="collapse <?php 
                  if(Request::path() == "add_team" || Request::path() == "teams"){
                    echo "show";
                  }
                ?> list-unstyled ml-4" id="select-6" data-parent="#accordian">
                    <li><a href="{{url('add_team')}}">Add team</a></li>
                    <li><a href="{{url('teams')}}">Team list</a></li>
                  </ul>
              </li>
              <li class="p-1"><a href="#select-10" data-toggle="collapse"><i class="fa fa-users"></i>Our Clients</a>
                  <ul class="collapse <?php 

                  if(Request::path() == "add_clients" || Request::path() == "clients_list"){
                    echo "show";
                  }

                ?> list-unstyled ml-4" id="select-10" data-parent="#accordian">
                    <li><a href="{{url('/add_clients')}}">Add clients</a></li>
                    <li><a href="{{url('/clients_list')}}">Clients list</a></li>
                  </ul>
              </li>


              <li class="p-1"><a href="{{url('/aboutus')}}"><i class="fa fa-tachometer"></i>About Us</a>
              </li>

              <li class="p-1"><a href="#select-7" data-toggle="collapse"><i class="fa fa-info"></i>Contact us</a>
                  <ul class="collapse <?php 
                  if(Request::path() == "view_contact"){
                    echo "show";
                  }
                ?> list-unstyled ml-4" id="select-7" data-parent="#accordian">
                    <li><a href="{{url('view_contact')}}">View contact</a></li>
                  </ul>
              </li>


              

              <li class="p-1"><a href="#select-15" data-toggle="collapse"><i class="fa fa-sign-out"></i>Logout</a>
                  <ul class="collapse list-unstyled ml-4" id="select-15" data-parent="#accordian">
                    <li><a href="{{url('/logout')}}">Logout</a></li>
                  </ul>
              </li>


        </ul>
      </div>
  </div>