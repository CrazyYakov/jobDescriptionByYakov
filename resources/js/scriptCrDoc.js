function checkRector() { 
     for (let index = 0; index <3; index++) {
         if(document.getElementById("exampleRadios"+index).checked == true){
            var element = document.getElementById("exampleRadios"+index).addEventListener('change', function(){
                if (this.checked) {
                    return lab = this.parentNode.textContent;
                    
                }
            })
         }
         
     }
}
                