@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Sub navbar create</h3>
          </div>
          <hr>

            @if(Session::has("insert_success"))
              <div class="alert alert-success">{{Session::get("insert_success")}}</div>
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

            <form method="post" action="{{Route('subnavbarinsert.subnavbar_insert')}}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="name">*Sub Nav Title</label>
                <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control" placeholder="Example: sub nabar name">
              </div>


              <div class="form-group">
                <label for="navbar_id">*Select Navbar</label>
                <select class="form-control" name="navbar_id" id="navbar_id">
                  <option value="">Select</option>
                  @if(isset($narbar))
                    @foreach($narbar as $data)
                      <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                  @endif
                </select>
              </div>

              <div class="form-group">
                <label for="link">*Link</label>
                <input type="text" name="link" id="link" value="{{old('link')}}" class="form-control" placeholder="Example: http://example.com/about">
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

