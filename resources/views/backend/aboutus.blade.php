@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">About Us</h3>
            
          </div>
          <hr>

            @if(Session::has("success_insert"))
              <div class="alert alert-success">{{Session::get("success_insert")}}</div>
            @endif

            @if(Session::has("success_update"))
              <div class="alert alert-success">{{Session::get("success_update")}}</div>
            @endif

            <form method="post" action="{{Route('about.about_insert')}}">
              @csrf
              <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" rows="8" class="form-control" required id="description" placeholder="Type your description">@if(isset($aboutus->description)){{$aboutus->description}}@endif</textarea>
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

