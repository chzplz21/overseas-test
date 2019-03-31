
$( document ).ready(function() {
    
    /*
    var hotel = new hotelProto("", 'showAvailable', '.roomsContainer', '/overseas-test/getRooms');
    hotel.init();
*/

    var hotel = new HotelContainerTwo("", 'showAvailable', '.roomsContainer', '/overseas-test/getRooms');
    hotel.init();

    
    var clickTest = new testingClicks();
    clickTest.init();
    
 
});