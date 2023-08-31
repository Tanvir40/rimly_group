@section("title","Admin Panel")
@include("backend.Inc.Header")
@include("backend.Inc.Sidebar")

<style type="text/css">
      body{
            background: #f9eeee;
      }
      .dashboard{}
      .dashboard i{font-size: 35px;}
      .dashboard p{font-size: 18px;}
      .dashboard h5{font-size: 24px;}
</style>


<div class="col-md-10">

    <div class="m-2 my-4">
      <div class="card my-2">
      <div class="card-body">
          <div style="overflow: hidden;">
            <h3 class="float-left">{{ucwords(Auth::user()->name)}}, Welcome to admin dashboard!</h3>
          </div>
          <hr>



          <div class="row mt-2 mb-4 dashboard">

                         
          
            <div class="col-md-4 my-2">
                  <div class="card">
                        <div class="card-body text-center">
                              <i class="fa fa-user-plus" aria-hidden="true"></i>
                              <p class="mt-2 mb-0">@if(isset($clint_count)){{$clint_count}}@endif</p>
                              <h5 class="m-0">Total Clint</h5>
                        </div>
                  </div>
            </div>            

            <div class="col-md-4 my-2">
                  <div class="card">
                        <div class="card-body text-center">
                              <i class="fa fa-product-hunt"></i>
                              <p class="mt-2 mb-0">@if(isset($brands_count)){{$brands_count}}@endif</p>
                              <h5 class="m-0">Total Brands</h5>
                        </div>
                  </div>
            </div>           

            <div class="col-md-4 my-2">
                  <div class="card">
                        <div class="card-body text-center">
                              <i class="fa fa-first-order" aria-hidden="true"></i>
                              <p class="mt-2 mb-0">@if(isset($teams_count)){{$teams_count}}@endif</p>
                              <h5 class="m-0">Total Team</h5>
                        </div>
                  </div>
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

