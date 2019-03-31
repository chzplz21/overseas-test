 //Handles toggle down for hotel container
 var roomObject = function(hotelContainer, listenedElement, revealedElement, ajaxURL) {
    HandlingEvents.call(this, hotelContainer, listenedElement, revealedElement, ajaxURL);
    console.log(this.hotelContainer);
}

roomObject.prototype = new HandlingEvents();
console.log(roomObject.prototype);

/*
roomObject.prototype = Object.create(HandlingEvents.prototype);
roomObject.prototype.constructor = roomObject;
*/