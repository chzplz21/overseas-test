var testingClicks = function() {

    this.init = function() {
        var showAvailable = document.getElementsByClassName("showAvailable");
        
        showAvailable = showAvailable[2];
        
        var event = new CustomEvent("click");
        
        // Dispatch/Trigger/Fire the event
        showAvailable.dispatchEvent(event);
        var hotelContainer = showAvailable.parentNode;
        var roomsContainer = hotelContainer.querySelector('.roomsContainer');

        waitForElement(".detailsButton", function() {
        
            var detailsButton = roomsContainer.querySelector(".detailsButton");
            var event = new CustomEvent("click");
            detailsButton.dispatchEvent(event);
      
        });
       
    }



    function waitForElement(elementId, callBack){
        window.setTimeout(function(){
          var element = document.querySelector(elementId);
          if(element){
            callBack(elementId, element);
          }else{
            waitForElement(elementId, callBack);
          }
        },500)
      }
    
  

}



  








