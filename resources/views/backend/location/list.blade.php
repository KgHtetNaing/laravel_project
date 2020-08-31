<x-backend>
  <!-- main body -->
  <div class="main-content" id="panel">
   

    <div class="container-fluid mt-5">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Locations</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.location.create')}}" class="plusBtn" style="color: black;" >
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
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Type</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Pyin Oo Lwin
                    </th>
                    <td>
                      60000
                    </td>
                    <td>
                      Mountain
                    </td>
                    <td>
                      <img src="" alt="location photo">
                    </td>
                    <td>
                      <a href="#" class="table-icon linkIcon"><i class="icofont-info"></i></a>
                      <a href="{{route('backside.location.edit',1)}}" class="table-icon linkIcon"><i class="icofont-settings-alt"></i></a>
                      <a href="#" class="table-icon linkIcon"><i class="icofont-ui-delete"></i></a>
                    </td>
                  </tr>                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
      </div>
      <!-- Footer -->
      
    </div>
  </div>
    </div>
  </div>
</x-backend>