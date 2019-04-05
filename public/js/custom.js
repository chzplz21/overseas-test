
$( document ).ready(function() {
    
 

    var hotel = new HotelObject('showAvailable', '.roomsContainer', '/overseas-test/getRooms', '.hotelContainer');
    hotel.init();

  //For testing
  
    var clickTest = new testingClicks();
    clickTest.init();
    
    clickTest.callWait(".detailsButton", function() {
       // clickTest.showFullDetails();
        console.log("details shown");
    });
    
    
    clickTest.callWait(".requestButton", function() {
        clickTest.AddFormValues();
    });
    


    
    
 
});