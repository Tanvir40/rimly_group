@section('title' , 'Teams')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


    <div class="col-lg-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Update Contact Info</h3>
          </div>
          <hr>

        @if(session('updated'))
            <div class="alert alert-success">
                {{session('updated')}}
            </div>
        @endif
          <div class="row">
            <div class="col-md-10 m-auto">

              <form method="POST" class="my-4" action="{{url('/update/contact/')}}">
                @csrf

                <input type="hidden"  name="id" value="{{$contact->first()->id}}">

            <div class="row">
                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Address One</label><br>
                  <input type="text" class="form-control"  name="address_one" value="{{$contact->first()->address_one}}">
                    @error('address_one')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Address Two</label><br>
                  <input type="text" class="form-control"  name="address_two" value="{{$contact->first()->address_two}}">
                    @error('address_two')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Number One</label><br>
                  <input type="text" class="form-control"  name="number_one" value="{{$contact->first()->number_one}}">
                    @error('number_one')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Number Two</label><br>
                  <input type="text" class="form-control"  name="number_two" value="{{$contact->first()->number_two}}">
                    @error('number_two')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Email One</label><br>
                  <input type="email" class="form-control"  name="email_one" value="{{$contact->first()->email_one}}">
                    @error('email_one')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Email Two</label><br>
                  <input type="email" class="form-control"  name="email_two" value="{{$contact->first()->email_two}}">
                    @error('email_two')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3 mb-2">
                  <label for="days" class="form-label">Days</label><br>
                  <input type="text" class="form-control"  name="days" value="{{$contact->first()->days}}">
                    @error('days')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>

                <div class="col-md-6 mb-3 mb-2">
                  <label for="image" class="form-label">Times</label><br>
                  <input type="text" class="form-control"  name="times" value="{{$contact->first()->times}}">
                    @error('times')
                        <strong class="text-danger">{{$message}}</strong>
                    @enderror
                </div>
            </div>

                <button type="submit" class="btn btn-primary">Update Contact Info</button>

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