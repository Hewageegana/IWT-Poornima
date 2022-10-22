function myFunction() {
    var x = document.getElementById("Pass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  
  
  function reFunction() {
    var x = document.getElementById("rePass");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  
  function cheakpassword(){
      if(document.getElementById("Pass").value != document.getElementById("rePass").value){
          alert("Passwords Are mismatched");
          return false;
      }
      else{
          return true;
      }
  }
  
  function enablebutton(){
      if(document.getElementById("policy").checked){
          document.getElementById("registerbtn").disabled=false;
      }
      else{
          document.getElementById("registerbtn").disabled=true;
      }
      
  }

  function success(){
    alert("Register Successfully")
    window.location = './login.php'
  }