@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Add new Team Member</h3>
          </div>
          <hr>

        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
          <div class="row">
            <div class="col-md-6 m-auto">

              <form method="POST" class="my-4" action="{{url('/update/team/')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden"  name="id" value="{{$teams->id}}">
                <div class="mb-3 mb-2">
                  <label for="image" class="form-label">Select Image</label>
                  <input type="file" class="form-control mb-2" id="image" aria-describedby="emailHelp" name="image" accept="image/*">
                  <img src="{{asset('backend/img/team')}}/{{$teams->image}}" width="60">
                  <small class="form-text">* Image size 1920x550 px.</small>
                </div>

                <div class="mb-3 mb-2">
                  <label for="name" class="form-label">Member Name</label>
                  <input type="text" class="form-control"  name="name" value="{{$teams->name}}">
                    @error('name')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="name" class="form-label">Member Position</label>
                  <input type="text" class="form-control"  name="position" value="{{$teams->position}}">
                    @error('position')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="mb-3 mb-2">
                  <label for="name" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desp">{{$teams->desp}}</textarea>
                    @error('desp')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Member</button>

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