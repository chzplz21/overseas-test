//Handles toggle down for hotel container
var HotelContainerTwo = function(hotelContainer, listenedElement, revealedElement, ajaxURL) {
    HandlingEvents.call(this, hotelContainer, listenedElement, revealedElement, ajaxURL);

}

HotelContainerTwo.prototype = new HandlingEvents();

HotelContainerTwo.prototype.setParentElement = function (event) {
    this.hotelContainer = event.target.parentNode;
    var elementID = this.hotelContainer.dataset.id;
    this.makeRequest(elementID);
};


HotelContainerTwo.prototype.instantiateNext = function() {
    var rooms = new roomObject(this.hotelContainer, "detailsButton",  ".roomFull", "/overseas-test/getRoomDetails");
      //console.log(rooms.name);
      rooms.init(); 
}
