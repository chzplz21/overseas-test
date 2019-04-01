
$( document ).ready(function() {
    
    /*
    var hotel = new hotelProto("", 'showAvailable', '.roomsContainer', '/overseas-test/getRooms');
    hotel.init();
*/

    var hotel = new HotelObject('showAvailable', '.roomsContainer', '/overseas-test/getRooms', '.hotelContainer');
    hotel.init();

    
    var clickTest = new testingClicks();
    clickTest.init();
    clickTest.callWait(".detailsButton", function() {
        console.log("details shown");
    });
    clickTest.callWait(".requestButton", function() {
        clickTest.AddFormValues();
    });
    
 
});