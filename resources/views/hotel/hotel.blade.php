<div class = "hotelContainer border" data-id= "hotel-{{$hotel->id}}">
        <div class = "container">
              <div class = "row hotelRow">
                      
                <div class = "imageContain col-md-3">
                      <img class = "hotelImage" src="/overseas-test/public/images/{{$hotel->img}}.jpg">
                </div>
                
                <div class = "col-md-6">
                    <p><span class = "hotelName">{{$hotel->name}}</span> | 
                    <div class = "starHolder" id = "starContainer" data-id= "{{$hotel->stars}}">
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                      <span class="fa fa-star"></span>
                    </div>
                  </p>                  
                    <p>{{$hotel->street}}, {{$hotel->city}} {{$hotel->country}}</p>
                    <button class = "btn showAvailable">Rooms/Availability</button>
                </div>
                <div class = "col-md-3">
                  
                   <div class = "priceBox">
                       Starting at <br>
                       <span class = "hotelPrice">
                       <span class= "usdPrice"> USD </span>{{$hotel->price}}
                       </span>
                   </div>
                </div>
        
        
              </div>  
        </div>
        
        
        <div class = "container roomsContainer">
                   
              
        </div>

</div>