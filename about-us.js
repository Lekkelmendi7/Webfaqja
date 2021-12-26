function ValidateTextBox() {
    if (document.getElementById("txtName").value=="") {
        alert("Ju lutem jepni me shume shpjegime rreth sherbimit tone!");
        return false;
      }
    else{
    var str= document.getElementById("txtName").value;
    alert("Ju sapo keni dhene pergjigjje, falimenderit!");
    }
    
    function clearElements(){
      document.getElementById("txtName").value='';
    }
  }
