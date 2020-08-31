<x-backend>
	<form action="">
        <div class="main-content" id="panel">
   

    <div class="container-fluid mt-5">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Transportations</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.hotel.index')}}" class="plusBtn" style="color: black;" >
                  <i class="icofont-home"></i>
                </a>
                </div>
              </div>
            </div>
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
          <div class="row">      
           <div style="padding-left: 40px;">
              <label for="price">Type:</label>
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
          

          <button class="btn-success" style="border: none;">Add</button>
          </div>
        </div>
       </div>
      </div>
    </div>
  </form>
</x-backend>