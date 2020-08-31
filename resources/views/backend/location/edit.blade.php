<x-backend>
 <div class="main-content" id="panel">
   

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 80px">
        
      </div>
       
      </div>
      <!-- Footer -->
      <div class="main-content" id="panel">
   

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Locations</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.location.index')}}" class="plusBtn" style="color: black;" >
                  <i class="icofont-home"></i>
                </a>
                </div>
              </div>
            </div>
            <form>
            <div class="row">      
           <div style="padding-left: 40px;">
              <label for="firstName">Name:</label>
               <input name="firstName" class="form-control" type="text" style="display: inline-block;">    
           </div>            
          </div>

           <div class="row">      
           <div style="padding-left: 40px;">
              <label for="price">Price:</label>
               <input name="price" class="form-control" type="text" style="display: inline-block;">    
           </div>            
          </div>
          <br>
          <div class="row">      
           <div style="padding-left: 40px;">
              <label for="photo">Photo:</label>
               <input type="file">   
           </div>            
          </div>
          <div class="row mb-3">      
           <div style="padding-left: 40px;">
              <label for="type">Type:</label>
              <select name="type" id="">
                <option value="">Forest</option>
                <option value="">Mountain</option>
              </select>   
           </div>            
          </div>

          <button type="submit" class="btn-success py-2" style="border: none;">Edit</button>
          </form>
          </div>
        </div>
       
      </div>
      <!-- Footer -->
      
    </div>
  </div>
    </div>
</x-backend>