
 //Handles toggle down for hotel container
 var  hotelProto = function() {

    this.showAvailableButtons = document.getElementsByClassName('showAvailable');


    this.bindFunctions = function() {
      
      for (let button of this.showAvailableButtons) {
          button.addEventListener('click', this.requestForRooms, false);
      }
    
    }

    //Displays hidden area, the rooms details
    this.showHidden = function() {
      console.log('boo');
      /*
        var container = this.parentNode;
        var hiddenDiv = container.querySelector('.roomsContainer');
        hiddenDiv.style.display = 'block'; 
        hiddenDiv.innerHTML = roomsTemplate;
        */
    }

 
    //jquery ajax requests rooms in hotel
    this.requestForRooms = function() {
      console.log(this);
      /*
      $.ajax({
        type: 'GET', 
        url : "/overseas-test/getRooms", 
        data: {
          id: 3
        },
        success : function (roomsTemplate) {

           
        }
    });
    */
    }


    

    

    this.init = function() {
      this.bindFunctions();

    };

   

}