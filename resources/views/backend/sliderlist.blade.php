@section("title","Admin Panel")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Add slider list</h3>
          </div>
          <hr>

        @if(isset($slider))

          <table class="table">
              <tbody>
                <tr>
                  <th width="20%">#SL</th>
                  <th width="50%">#Image</th>
                  <th width="30%">#Action</th>
                </tr>

      @php
        $i = 1;
      @endphp

      @foreach($slider as $data)


    
                <tr>

                    <td>{{$i++}}</td>
                    <td><img src="{{$data->name}}" width="80"></td>

                    <td>
                      <a href="{{url('sliderup', $data->id)}}">
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                      </a>
                      <a href="{{url('sliderdel', $data->id)}}">
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
                      </a>
                    </td>

                  </tr>


      @endforeach

            </tbody>

          </table>

          @else
            <h4 class="text-center">Data not found!</h4>
          @endif





          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
  </section>

@include("backend.Inc.Footer")

