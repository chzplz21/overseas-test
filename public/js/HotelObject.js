//Handles toggle down for hotel container
var HotelObject = function(listenedElement, revealedElement, ajaxURL, searchedForElement) {
    HandlingEvents.call(this, listenedElement, revealedElement, ajaxURL, searchedForElement);

}

HotelObject.prototype = new HandlingEvents();


HotelObject.prototype.InstantiateNext = function() {
    var rooms = new RoomObject("detailsButton",  ".roomFull", "/overseas-test/getRoomDetails", ".singleRoomParent");
    rooms.init(); 

    
    var modal = new ModalObject();
    modal.init();


}
