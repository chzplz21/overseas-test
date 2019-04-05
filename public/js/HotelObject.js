//Handles toggle down for hotel container
var HotelObject = function(listenedElement, revealedElement, ajaxURL, searchedForElement) {
    HandlingEvents.call(this, listenedElement, revealedElement, ajaxURL, searchedForElement);
    this.colorStars();
}

HotelObject.prototype = new HandlingEvents();


HotelObject.prototype.InstantiateNext = function() {


    var rooms = new RoomObject("detailsButton",  ".roomFull", "getRoomDetails", ".singleRoomParent");
    rooms.init(); 

    var modal = new ModalObject();
    modal.init();

}


HotelObject.prototype.colorStars = function() {
   var starHolders = document.getElementsByClassName("starHolder");
   for (let starHolder of starHolders) {
    let starAmount =starHolder.dataset.id;
    this.addColor(starHolder, starAmount);

   }
   
}

HotelObject.prototype.addColor = function(starHolder, starAmount) {
    var children = starHolder.getElementsByTagName("span");
    
    for (let i = 0; i<starAmount; i++) {
        children[i].className += " checked";
    }

    
}
