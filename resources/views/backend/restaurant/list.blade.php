<x-backend>

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Available Restaurant</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.restaurant.create')}}" class="btn btn-outline-primary" style="color: black;" >
                  <i class="icofont-plus-circle"></i>
                </a>
                </div>
              </div>
            </div>

            @if(session('successMsg')!=NULL)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  <strong> New Restaurant</strong> 

                                  {{session('successMsg')}}

                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                            </div>
                            @endif
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No </th>
                    <th scope="col">Name </th>
                    <th scope="col"> Photo </th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @php $i=1; @endphp

                    @foreach($restaurants as $restaurant)

                    @php

                        $id = $restaurant->id;
                        $name = $restaurant->name;
                        $price = $restaurant->price;
                        $photo = $restaurant->photo;


                    @endphp
                    <tr>
                    <th scope="col">{{($i++)}} </th>
                    <th scope="col">{{($name)}} </th>          
                    <th scope="col"><img src="{{asset($photo)}}" class="img-fluid" style="width: 70px;" alt="hotel photo"> </th>
                    <th scope="col">{{($price)}}KS</th>
                    <th>
                      
                      <a href="{{route('backside.restaurant.edit',$id)}}" class="table-icon linkIcon"><i class="icofont-settings-alt"></i></a>
                      <form action="{{ route('backside.restaurant.destroy',$id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?')">

                        @csrf
                        @method('DELETE')

                        <button class="btn btn-outline-none" type="submit"> 
                         <i class="icofont-ui-delete"></i>
                        </button>

                      </form>
                    </th>         
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>

          
        </div>
       
  </div>
     
 </div>
</x-backend>