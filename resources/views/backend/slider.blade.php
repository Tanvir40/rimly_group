@section("title","Admin Panel")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Add new slider</h3>
          </div>
          <hr>

          @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $key)
                   {{$key}}
              @endforeach
            </div>
          @endif
              
          @if(Session::has("image_sucess"))
             <div class="alert alert-success">
                {{Session::get("image_sucess")}}
            </div>
          @endif

          <div class="row">
            <div class="col-md-6 m-auto">

              <form method="post" class="my-4" action="{{Route('sliderupload.slider_upload')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label for="image" class="form-label">Select Image</label>
                  <input type="file" class="form-control" id="image" aria-describedby="emailHelp" name="image" accept="image/*">
                  <small class="form-text">* Image size 1920x600 px.</small>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>

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

