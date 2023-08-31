@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Banner Section</h3>
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

              <form method="POST" class="my-4" action="{{Route('bannersectionupdate.banner_section_update')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3 mb-2">
                  <label for="name" class="form-label">Banner Title</label>
                  <input type="text" class="form-control" id="name" name="name" value="@if(isset($bannersection->name)){{$bannersection->name}}@endif">
                </div>

                <div class="mb-3 mb-2">
                  <label for="Description" class="form-label">Sort Description</label>
                  <textarea class="form-control" id="Description" rows="3" name="description">@if(isset($bannersection->description)){{$bannersection->description}}@endif</textarea>
                </div>

                <div class="mb-3 mb-2">
                  <label for="image" class="form-label">Select Image</label><br>
                  <input type="file" class="form-control-file" id="image" aria-describedby="emailHelp" name="image" accept="image/*">
                    <small class="form-text">Image size 600x600 px</small>
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