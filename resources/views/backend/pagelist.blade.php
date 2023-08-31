@section("title","Admin Panel")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">Page list</h3>
          </div>
          <hr>

        @if(isset($page))

          <table class="table">
              <tbody>
                <tr>
                  <th width="">#SL</th>
                  <th width="">#Title</th>
                  <th width="">#URL</th>
                  <th width="">#Description</th>
                  <th width="">#Action</th>
                </tr>

      @php
        $i = 1;
      @endphp

      @foreach($page as $data)


    
                <tr>

                    <td>{{$i++}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{url("/")."/dynamic/".$data->slug}}</td>


                    <td>{{substr(strip_tags(html_entity_decode(htmlspecialchars($data->description))), 0, 80)}}</td>
                    <td>
                      <a href="{{url('pageup', $data->id)}}">
                        <button class="btn btn-primary"><i class="fa fa-edit"></i></button>
                      </a>
                      <a href="{{url('pagedel', $data->id)}}">
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')"><i class="fa fa-trash"></i></button>
                      </a>
                    </td>

                  </tr>

                  <?php 

                  ?>


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

