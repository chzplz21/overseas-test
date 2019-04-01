//Handles toggle down for hotel container
var ModalObject = function() {

    var requestButtons = document.getElementsByClassName("requestButton");
    
    
    this.bindFunctions = function() {
        for (let button of requestButtons) {
          button.addEventListener('click', this.showModal.bind(this), false);
        }

    }
    
    this.showModal = function(event) {
        this.ParentContainer = HandlingEvents.getClosest(event.target, ".singleRoomParent");
        var modal =  this.ParentContainer.querySelector('.modalWrapper');
        modal.style.display = "block";
        this.submittedForm = this.ParentContainer.querySelector('.modalForm');
        var modalSubmitButton = this.ParentContainer.querySelector('.modalSubmit');
        modalSubmitButton.addEventListener('click', this.submitModal.bind(this), false);

        
    }


    this.submitModal = function(event) {

        var arr = new FormData(this.submittedForm);
        
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
        console.log(this.ParentContainer);
        var modal =  this.ParentContainer.querySelector('.modalWrapper');
        console.log(modal);
        this.thankyou.style.display= "none";
        modal.style.display = "none";
    }



 



   this.init = function() {
        this.bindFunctions();
    };
 
}

