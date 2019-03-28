 //Handles toggle down for hotel container
 var  hotelContainer = (function() {

    var showAvailableButtons = document.getElementsByClassName('showAvailable');

  
    function bindFunctions() {
      for (let button of showAvailableButtons) {
          button.addEventListener('click', showHidden, false);
      }
    
    }

    //Displays hidden area, the rooms details
    function showHidden() {
        var container = this.parentNode;
        var hiddenDiv = container.querySelector('.roomsContainer');
        hiddenDiv.style.display = 'block'; 
    }

    var init = function() {
      bindFunctions();

    };

    return {
     init: init
    }

})();