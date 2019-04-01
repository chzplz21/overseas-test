var testingClicks = function() {

    this.roomsContainer

    this.init = function() {
        var showAvailable = document.getElementsByClassName("showAvailable");
        showAvailable = showAvailable[2];
        var event = new CustomEvent("click");
        // Dispatch/Trigger/Fire the event
        showAvailable.dispatchEvent(event);
        var hotelContainer = showAvailable.parentNode;
        this.roomsContainer = hotelContainer.querySelector('.roomsContainer');
         
    }

    this.callWait = function(element, callBack) {
      
      var that = this;
      waitForElement(element, function() {
          var Button = that.roomsContainer.querySelector(element);
          var event = new CustomEvent("click");
          Button.dispatchEvent(event);
          callBack();
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


    this.AddFormValues = function() {
      var form = this.roomsContainer.querySelector(".modalForm");
      form.querySelector(".name").value = "Jimbo";
      form.querySelector(".email").value = "jimboslice@aol.com";
      form.querySelector(".creditCard").value = "Visa";
      form.querySelector(".creditCardNumber").value = 134567;
      var subButton = form.querySelector(".modalSubmit");
      var event = new CustomEvent("click");
      subButton.dispatchEvent(event);

      

    }
    
  

}



  








