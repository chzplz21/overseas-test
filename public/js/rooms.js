 //Handles toggle down for hotel container
 var roomObject = function(hotelContainer, listenedElement, revealedElement, ajaxURL) {
    HandlingEvents.call(this, hotelContainer, listenedElement, revealedElement, ajaxURL);

}

roomObject.prototype = new HandlingEvents();

roomObject.prototype.setParentElement = function (event) {
    var ParentContainer = event.target.parentNode;
    var elementID = ParentContainer.dataset.id;
    this.makeRequest(elementID);
};


HandlingEvents.prototype.instantiateNext = function(event) {}



