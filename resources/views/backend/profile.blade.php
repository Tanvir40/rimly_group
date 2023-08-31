@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Profile Update</h3>
          </div>
          <hr>

          @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $key)
                   <p>{{$key}}</p>
              @endforeach
            </div>
          @endif
              
          @if(Session::has("success_insert"))
            <div class="alert alert-success">{{Session::get("success_insert")}}</div>
          @endif

          @if(Session::has("success_update"))
            <div class="alert alert-success">{{Session::get("success_update")}}</div>
          @endif

          <div class="row">
            <div class="col-md-6 m-auto">

              <form method="POST" class="my-4" action="{{Route('profileupdate.profile_update')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3 mb-2">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" id="name" value="@if(isset($User->name)){{$User->name}}@endif" placeholder="Name" name="name">
                </div>

                <div class="mb-3 mb-2">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" id="email" value="@if(isset($User->email)){{$User->email}}@endif" placeholder="Email" name="email">
                </div>

                <div class="mb-3 mb-2">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>

              </form>

            </div>
          </div>


          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
     
</section>
@include("backend.Inc.Footer")