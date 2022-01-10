function triggerClick(){
    document.querySelector('#DrapImage').click();
}
function displayDrap(e){
    if(e.files[0]){
        var dreader = new FileReader();
        dreader.onload = function(e){
            document.querySelector('#DrapDisplay').setAttribute('src',e.target.result);
        }
            dreader.readAsDataURL(e.files[0]);
    
       }    
   }