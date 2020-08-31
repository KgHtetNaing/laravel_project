<x-backend>
   

    <div class="container-fluid mt-5">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Available Hotels</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.hotel.create')}}" class="plusBtn" style="color: black;" >
                  <i class="icofont-plus-circle"></i>
                </a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Hotel </th>
                    <th scope="col">Hotel Photo </th>
                    

                    

                    <th scope="col">Price</th>
                    
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <td scope="col">Hotel Name </td>          
                    <td  scope="col"><img src="" alt="hotel photo"> </td>          
                      <td>3000</td>
                      <td>
                      
                      <a href="{{route('backside.hotel.edit',1)}}" class="table-icon linkIcon"><i class="icofont-settings-alt"></i></a>
                      <a href="#" class="table-icon linkIcon"><i class="icofont-ui-delete"></i></a>
                      </td>    
                </tbody>
              </table>
            </div>
          </div>

          
        </div>
       
    </div>
  </div>
</x-backend>       