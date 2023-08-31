@section("title","About Us")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Create page</h3>
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

            <form method="post" action="{{Route('pageupdate.page_update')}}" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label for="title">*Page title</label>
                <input type="hidden" name="id" value="{{$page->id}}">
                <input type="text" name="title" id="title" value="{{$page->title}}" class="form-control" placeholder="Page title">
              </div>

              <div class="form-group">
                <label for="slug">Slug</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">{{url('/')}}/</span>
                  </div>
                  <input type="text" name="slug" id="slug" value="{{$page->slug}}" class="form-control" placeholder="slug">
                </div>
              </div>

              <div class="form-group">
                <label for="description">Page Body</label>
                <textarea name="description">{{$page->description}}</textarea>
                <script>
                  CKEDITOR.replace('description');
                </script>
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

