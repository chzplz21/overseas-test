

function HandlingEvents(listenedElement, revealedElement, ajaxURL, searchedForElement) {
    
    this.listenedElement= document.getElementsByClassName(listenedElement);
    this.revealedElement = revealedElement;
    this.searchedForElement = searchedForElement;
    this.ajaxURL = ajaxURL;

   //Static method 
    HandlingEvents.getClosest = function(elem, selector) {
      while(elem !== document) {
        if (elem.matches(selector)) {
            return elem;
        }
        elem = elem.parentNode

      }
    }
 
}


HandlingEvents.prototype.bindFunctions = function() {
  for (let button of this.listenedElement) {
    button.addEventListener('click', function(event) {
      this.setParentElement(event, this.ajaxURL, this.showHidden);
      this.setParentElement(event, "logClick", this.finishLog);
    }.bind(this), false);
    
  }
} 

HandlingEvents.prototype.setParentElement = function (event, requestURL, callBack) {
  this.ParentContainer = HandlingEvents.getClosest(event.target, this.searchedForElement);
  var elementID =  this.ParentContainer.dataset.id;   
  this.makeRequest(elementID, requestURL, callBack);  
 
};



HandlingEvents.prototype.makeRequest = function(elementID, requestURL, callBack) {
    
   var callBackFunction = callBack.bind(this);
   
    $.ajax({
      type: 'GET', 
      context: this,
      url : requestURL, 
      data: {
        id: elementID
      },
      success : function (result) {

        callBackFunction( result);
 
      },
      error : function(request,error)
      {
          console.log(error);
      }
    });
    
}



  HandlingEvents.prototype.showHidden = function(BladeTemplate) {
   
    var BladeHTML = BladeTemplate.html;
    var hiddenDiv =  this.ParentContainer.querySelector(this.revealedElement);
    hiddenDiv.innerHTML = BladeHTML; 
    this.InstantiateNext();
    
  }


  //logs a click for show/available, or details
  HandlingEvents.prototype.finishLog = function(event) {
    
  }



HandlingEvents.prototype.init = function() {
    
    this.bindFunctions();
};

