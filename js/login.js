var d = new Date();
var date = d.getDate();
var month = d.getMonth()+1;
var year = d.getFullYear();
var da = date+"/"+month+"/"+year; 
document.write(da);



function psFunction() {
  var x = document.getElementById("Pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

