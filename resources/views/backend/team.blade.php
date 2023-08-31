@section('title' , 'Our Team')
@include('backend.Inc.Header')
@include('backend.Inc.Sidebar')


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">All Team List</h3>
          </div>
            @if(session('updated'))
                <div class="alert alert-success">
                {{session('updated')}}
                </div>                
            @endif
             @if (session('delete'))
                <div class="alert alert-success">
                {{session('delete')}}
                </div>                
            @endif
          <hr>

          <table class="table table-striped">
              <tbody>
                <tr>
                  <th width="20%">#SL</th>
                  <th width="20%">#Image</th>
                  <th width="20%">#Name</th>
                  <th width="20%">#Position</th>
                  <th width="20%">#Action</th>
                </tr>

      @foreach($teams as $key=> $team)
                <tr>

                    <td>{{$key+1}}</td>
                    <td><img src="{{asset('backend/img/team')}}/{{$team->image}}" width="60"></td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->position}}</td>
                    <td>
                      <a href="{{route('edit.teams',$team->id)}}">
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                      </a>
                      <a href="{{route('teams.delete' , $team->id)}}">
                        <button class="btn btn-danger" type="button" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
                        </a>
                    </td>

                  </tr>


      @endforeach

            </tbody>

          </table>

        





          </div>
      </div>
        </div>

      </div>
    </div>
      </div>
    </div>
</section

@include('backend.Inc.Footer')