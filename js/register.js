function myFunction() {
  var x = document.getElementById("Pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

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


function reFunction() {
  var x = document.getElementById("rePass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function cheakpassword() {
  if (document.getElementById("Pass").value != document.getElementById("rePass").value) {
    alert("Passwords Are mismatched");
    return false;
  }
  else {
    return true;
  }
}

function enablebutton() {
  if (document.getElementById("policy").checked) {
    document.getElementById("registerbtn").disabled = false;
  }
  else {
    document.getElementById("registerbtn").disabled = true;
  }

}

function success() {
  alert("Register Successfully")
  window.location = './login.php'
}