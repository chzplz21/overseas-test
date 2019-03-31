function HandlingEvents(hotelContainer, listenedElement, revealedElement, ajaxURL) {
    
    this.listenedElement= document.getElementsByClassName(listenedElement);
    this.hotelContainer = hotelContainer;
    this.revealedElement = revealedElement;
    this.ajaxURL = ajaxURL;
    
}


HandlingEvents.prototype.bindFunctions = function() {
    for (let button of this.listenedElement) {
      button.addEventListener('click', this.makeRequest.bind(this), false);
    }
} 


HandlingEvents.prototype.showHidden = function(BladeHTML) {
    var hiddenDiv = this.hotelContainer.querySelector(this.revealedElement);
    hiddenDiv.innerHTML = BladeHTML;  
}


HandlingEvents.prototype.makeRequest = function(event) {
    var ParentContainer = event.target.parentNode;
    var elementID = ParentContainer.dataset.id;
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

