// var d = new Date();
// var date = d.getDate();
// var month = d.getMonth()+1;
// var year = d.getFullYear();
// var da = date+"/"+month+"/"+year; 
// document.write(da);


function checkAccess() {
  var x = document.getElementById("noAccess");
  var y = document.getElementById("login");
  var z = document.getElementById("portal");

  let user = getCookie('user')
  if (user !== undefined && user !== null && user.length > 0) {
    y.style.display = 'display'
    x.style.display = 'none'

    window.location = '../index.php'
    if (JSON.parse(user).user_type === "2") {
      z.style.display = 'display'
    }
    else{
      z.style.display = 'none'
  }
    // checkUserType()
  }
  else {
    y.style.display = 'none'
    x.style.display = 'display'
    z.style.display = 'none'
  }

}


function getCookie(name) {
  // Split cookie string and get all individual name=value pairs in an array
  var cookieArr = document.cookie.split(";");

  // Loop through the array elements
  for (var i = 0; i < cookieArr.length; i++) {
    var cookiePair = cookieArr[i].split("=");

    /* Removing whitespace at the beginning of the cookie name
    and compare it with the given string */
    if (name == cookiePair[0].trim()) {
      // Decode the cookie value and return
      return decodeURIComponent(cookiePair[1]);
    }
  }

  // Return null if not found
  return null;
}


function psFunction() {
  var x = document.getElementById("Pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

