@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Navbar Update</h3>
          </div>
          <hr>

            @if(Session::has("success"))
              <div class="alert alert-success">{{Session::get("success")}}</div>
            @endif


            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                
                  <ul class="list-unstyled">
                    <li class="list-item">**{{$error}}</li>
                  </ul>
                @endforeach
              </div>
            @endif

            <form method="post" action="{{Route('nav.update')}}" enctype="multipart/form-data">
              @csrf

            <input type="hidden" name="id"  value="{{$navlist->id}}">
              <div class="form-group">
                <label for="name">*Navbar name</label>
                <input type="text" name="name" id="name" value="{{$navlist->name}}" class="form-control" placeholder="Example about">
              </div>

              <div class="form-group">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" value="{{$navlist->link}}" class="form-control" placeholder="Example httts:/example.com/about">
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
  </section>

@include("backend.Inc.Footer")

