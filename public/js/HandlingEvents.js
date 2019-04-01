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
    button.addEventListener('click', this.setParentElement.bind(this), false);
  }
} 



HandlingEvents.prototype.setParentElement = function (event) {
  this.ParentContainer = HandlingEvents.getClosest(event.target, this.searchedForElement);
  var elementID =  this.ParentContainer.dataset.id;
  this.makeRequest(elementID);
 
};



HandlingEvents.prototype.makeRequest = function(elementID) {
   
    $.ajax({
      type: 'GET', 
      context: this,
      url : this.ajaxURL, 
      data: {
        id: elementID
      },
      success : function (BladeTemplate) {
        var BladeHTML = BladeTemplate.html;
    
        this.showHidden( BladeHTML);
      },
      error : function(request,error)
      {
          console.log(error);
      }
    });

  }



  HandlingEvents.prototype.showHidden = function(BladeHTML) {
    var hiddenDiv =  this.ParentContainer.querySelector(this.revealedElement);
    hiddenDiv.innerHTML = BladeHTML; 
    this.InstantiateNext();
  }



HandlingEvents.prototype.init = function() {
    this.bindFunctions();
};

