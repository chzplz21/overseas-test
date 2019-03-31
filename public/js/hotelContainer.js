
 //Handles toggle down for hotel container
 var  hotelProto = function() {

    this.showAvailableButtons = document.getElementsByClassName('showAvailable');
    this.hotelContainer;

    this.bindFunctions = function() {

      for (let button of this.showAvailableButtons) {
          button.addEventListener('click', this.requestForRooms.bind(this), false);
      }
    
    }


    //Displays hidden area, the rooms details
    this.showHidden = function(roomsHTML) {
      var hiddenDiv = this.hotelContainer.querySelector('.roomsContainer');
      hiddenDiv.innerHTML = roomsHTML;
     
      
      var rooms = new roomObject(this.hotelContainer, "detailsButton",  ".roomFull", "/overseas-test/getRoomDetails");
      //console.log(rooms.name);
      rooms.init(); 
      
      
    }

 

    //this refers to the hotelProto object
    //event.target refers to the clicked button
    this.requestForRooms = function(event) {
      
      this.hotelContainer = event.target.parentNode;
      var hotelID = this.hotelContainer.dataset.hotelid;
      
      $.ajax({
        type: 'GET', 
        url : "/overseas-test/getRooms", 
        context: this,
        data: {
          id: hotelID
        },
        success : function (roomsTemplate) {
            roomsHTML = roomsTemplate.html;
            this.showHidden( roomsHTML);
        },
        error : function(request,error)
        {
            console.log(error);
        }
      });
      
    }


    this.init = function() {
      this.bindFunctions();

    };

   

}