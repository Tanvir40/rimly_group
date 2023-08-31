@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
        <div class="card my-2">
            <div class="card-body">
                <div style="overflow: hidden;">
                    <h3 class="float-left">Navbar List</h3>
                </div>
                <hr>

                @if(Session::has("success"))
                <div class="alert alert-success">{{Session::get("success")}}</div>
                @endif
                @if(Session::has("Deleted"))
                <div class="alert alert-success">{{Session::get("Deleted")}}</div>
                @endif
                

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($navlist as $key=>$nav)
                        
                   
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$nav->name}}</td>
                            <td>{{$nav->link}}</td>
                            <td>
                            <a href="{{url('edit_nav' , $nav->id)}}">
                                <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                            </a>
                            <a href="{{route('nav.delete' , $nav->id)}}">
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
  </section>

@include("backend.Inc.Footer")

