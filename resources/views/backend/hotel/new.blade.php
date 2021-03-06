<x-backend>   
 
  
        <div class="main-content" id="panel">
   

    <div class="container-fluid mt--6">
      
      <div class="row" style="margin-top: 180px">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">New Hotels</h3>
                </div>
                <div class="col text-right tableIcon">
                 <a href="{{route('backside.hotel.index')}}" class="plusBtn" style="color: black;" >
                  <i class="icofont-home"></i>  
                </a>
                </div>
              </div>
            </div>
            <form action="{{route('backside.hotel.store')}}" method="post" enctype="multipart/form-data">
              @csrf 
            <div class="row">      
           <div style="padding-left: 40px;">
              <label for="name">Name:</label>
               <input name="name" class="form-control" type="text" style="display: inline-block;">
               <div class="text-danger form-control-feedback">
              {{$errors->first('name')}}
              </div>    
           </div>            
          </div>

           <div class="row">      
           <div style="padding-left: 40px;">
              <label for="price">Price:</label>
               <input name="price" class="form-control" type="text" style="display: inline-block;">
               <div class="text-danger form-control-feedback">
                  {{$errors->first('price')}}
              </div>    
           </div>            
          </div>
          <br>
          <div class="row">      
           <div style="padding-left: 40px;">
              <label for="photo">Photo:</label>
               <input type="file" name="photo">
               <div class="text-danger form-control-feedback">
                  {{$errors->first('photo')}}
              </div>    
           </div>            
          </div>
          

          <button type="submit" class="btn btn-success mx-3 my-5" style="border: none;">Add</button>
          </div>
        </div>
       
      </div>
    </div>
  </div>

</form>
</x-backend>