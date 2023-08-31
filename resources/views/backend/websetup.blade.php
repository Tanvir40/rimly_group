@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Website profile</h3>
            
          </div>
          <hr>

            @if(Session::has("success_insert"))
              <div class="alert alert-success">{{Session::get("success_insert")}}</div>
            @endif

            @if(Session::has("success_update"))
              <div class="alert alert-success">{{Session::get("success_update")}}</div>
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

            <form method="post" action="{{Route('websetupinsert.websetup_insert')}}" enctype="multipart/form-data">
              @csrf

              <div class="row">
                
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">*Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="@if(isset($websetup->email)){{$websetup->email}}@endif" placeholder="Email address">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone">*Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="@if(isset($websetup->phone)){{$websetup->phone}}@endif" placeholder="Phone nubmer">
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label for="address">*Address</label>
                    <input type="text" name="address" id="address" class="form-control" value="@if(isset($websetup->address)){{$websetup->address}}@endif" placeholder="Type your address">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fb">Facebook</label>
                    <input type="text" name="fb" id="fb" class="form-control" value="@if(isset($websetup->fb)){{$websetup->fb}}@endif" placeholder="Type facebook link">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="tw">Twitter</label>
                    <input type="text" name="tw" id="tw" class="form-control" value="@if(isset($websetup->tw)){{$websetup->tw}}@endif" placeholder="Type twitter link">
                  </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                      <label for="ins">Instagram</label>
                      <input type="text" name="ins" id="ins" class="form-control" value="@if(isset($websetup->ins)){{$websetup->ins}}@endif" placeholder="Type instagram link">
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lin">Linkedin</label>
                    <input type="text" name="ldin" id="lin" class="form-control" value="@if(isset($websetup->ldin)){{$websetup->ldin}}@endif" placeholder="Type linkedin link">
                  </div>
                </div>


                <div class="col-md-4">
                  <div class="form-group">
                    <label for="description">*Sort Description</label>
                    <textarea name="description" rows="2" class="form-control" id="description" placeholder="Type your sort description">@if(isset($websetup->description)){{$websetup->description}}@endif</textarea>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="icon">*Website Icon</label>
                    <input type="file" name="icon" id="icon" class="form-control-file">
                    <small>Image size must be 180x180 pix</small>
                  </div>
                </div>

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

