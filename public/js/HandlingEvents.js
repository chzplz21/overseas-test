function HandlingEvents(hotelContainer, listenedElement, revealedElement, ajaxURL) {
    
    this.listenedElement= document.getElementsByClassName(listenedElement);
    this.hotelContainer = hotelContainer;
    this.revealedElement = revealedElement;
    this.ajaxURL = ajaxURL;
    
}

//"abstract" methods
HandlingEvents.prototype.setParent= function(event) {}
HandlingEvents.prototype.instantiateNext= function(event) {}

HandlingEvents.prototype.bindFunctions = function() {
    for (let button of this.listenedElement) {
    
      button.addEventListener('click', this.setParentElement.bind(this), false);
    }
} 


HandlingEvents.prototype.showHidden = function(BladeHTML) {
    var hiddenDiv = this.hotelContainer.querySelector(this.revealedElement);
    hiddenDiv.innerHTML = BladeHTML; 
    this.instantiateNext(); 
}


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


HandlingEvents.prototype.init = function() {
    this.bindFunctions();
};

