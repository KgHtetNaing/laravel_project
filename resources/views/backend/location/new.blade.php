<x-backend>   
  <form action="{{route('backside.location.store')}}" method="POST" enctype="multipart/form-data">
    @csrf 
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
                   <a href="#" class="plusBtn" style="color: black;" >
                    <i class="icofont-home"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">      
             <div style="padding-left: 40px;">
              <label for="name_id">Name:</label>
              <input name="name" class="form-control" type="text" style="display: inline-block;" id="name_id" name="name"> 
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

         <div class="row">      
         <div style="padding-left: 40px;">
          <label for="photo_id">Photo:</label>
          <input type="file" id="photo_id" name="photo">  
          <div class="text-danger form-control-feedback">
            
            {{$errors->first('photo')}}
            

          </div> 
        </div>            
      </div>
        <br>
        <div class="row">      
             <div style="padding-left: 40px;">
              <label for="nature_id">Nature:</label>
              <input name="nature" class="form-control" type="text" style="display: inline-block;" id="nature_id" name="name"> 
              <div class="text-danger form-control-feedback">
                
                {{$errors->first('nature')}}


              </div>   
            </div>            
          </div>

        <div class="row">      
             <div style="padding-left: 40px;">
              <label for="hotel_id">Hotel:</label>
              <select class="form-control" name="hotelid">

                <option>
                  Choose One
                </option>

                @foreach($hotels as $hotel)
                <option value="{{$hotel->id}}">{{$hotel->name}}
                </option>
                @endforeach

              </select>
              <div class="text-danger form-control-feedback">
                
                {{$errors->first('hotel')}}


              </div>   
            </div>            
          </div>

          <div class="row">      
             <div style="padding-left: 40px;">
              <label for="restaurantid">Restaurant:</label>
              <select class="form-control" name="restaurantid">
                
                <option>
                  Choose One
                </option>

                @foreach($restaurants as $restaurant)
                <option value="{{$restaurant->id}}">{{$restaurant->name}}
                </option>
                @endforeach

              </select>
              <div class="text-danger form-control-feedback">
                
                {{$errors->first('restaurant')}}


              </div>   
            </div>            
          </div>

          <div class="row">      
             <div style="padding-left: 40px;">
              <label for="transportation_id">Transportation:</label>
              <select class="form-control" name="transportationid">
                
                <option>
                  Choose One
                </option>

                @foreach($transportations as $transportation)
                <option value="{{$transportation->id}}">{{$transportation->name}}
                </option>
                @endforeach

              </select>
              <div class="text-danger form-control-feedback">
                
                {{$errors->first('transportation')}}


              </div>   
            </div>            
          </div>
       
      

      <button type="submit" class="btn-success" style="border: none;">Add</button>
    </div>
  </div>
</div>
</div>
</div>
</form>
</x-backend>  