//Handles toggle down for hotel container
var ModalObject = function() {

    var requestButtons = document.getElementsByClassName("requestButton");
    
    this.bindFunctions = function() {
        for (let button of requestButtons) {
          button.addEventListener('click', this.showModal.bind(this), false);
        }

    }
    
    this.showModal = function(event) {
        event.stopPropagation()
        console.log("modal")
        this.ParentContainer = HandlingEvents.getClosest(event.target, ".singleRoomParent");
        this.hotelContainer = HandlingEvents.getClosest(event.target, ".hotelContainer");
        this.hotelID =  this.hotelContainer.dataset.id;   
      
        this.modal =  this.ParentContainer.querySelector('.modalWrapper');
        this.modal.style.display =  this.modal.style.display === 'none' ? 'block' : 'none';
        this.submittedForm = this.ParentContainer.querySelector('.modalForm');
      
        this.submittedForm.style.display = "block";
        this.formCancel();
        var modalSubmitButton = this.ParentContainer.querySelector('.modalSubmit');
        modalSubmitButton.addEventListener('click', this.submitModal.bind(this), false);

        
    }

    this.formCancel = function() {
        var modalCancel = this.submittedForm.querySelector('.modalCancel');
  
        modalCancel.addEventListener('click', function() {
            this.modal.style.display = 'none';
        }.bind(this), false);

    }




    this.submitModal = function(event) {

        var arr = new FormData(this.submittedForm);
        arr.append("hotel_id", this.hotelID);
        
        
        $.ajax({
            type: 'POST', 
            context: this,
            url : "/overseas-test/selectRoom",
            processData: false,
            contentType: false, 
            data: arr,
            success : function () {
               this.ShowThankYou();
             
            },
            error : function(request,error)
            {
                console.log(error);
            }
          });
          
    }

    this.ShowThankYou = function() {
        this.thankyou = this.ParentContainer.querySelector('.thankyou');
        this.submittedForm.style.display = "none";
        this.thankyou.style.display = "block";
        var closeButton = this.thankyou.querySelector(".close");
        closeButton.addEventListener('click', this.backToNormal.bind(this), false);

    }


    this.backToNormal = function() {
     
        var modal =  this.ParentContainer.querySelector('.modalWrapper');
        this.thankyou.style.display= "none";
        modal.style.display = "none";
    }



 



   this.init = function() {
        this.bindFunctions();
    };
 
}

