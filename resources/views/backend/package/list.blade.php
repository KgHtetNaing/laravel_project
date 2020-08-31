<x-backend>

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Packages</h3>
                </div>
                
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Code No</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">
                      Code No
                    </th>
                   
                    <td>
                    	<a href="{{route('backside.package.edit',1)}}" class="table-icon linkIcon"><i class="icofont-settings-alt"></i></a>
                      <a href="#" class="table-icon linkIcon"><i class="icofont-tick-mark"></i></a>
                      
                      <a href="#" class="table-icon linkIcon"><i class="icofont-ui-delete"></i></a>
                    </td>
                  </tr>                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
       
  </div>
  </div>

</x-backend>