function checkAccess() {
    var x = document.getElementById("noAccess");
    var y = document.getElementById("login");
    var z = document.getElementById("portal");
    // var dc = document.cookie;
    // let user = dc.getCookie("user");

    let user = getCookie('user')
    // console.log(typeof JSON.parse(user).user_type)
    if (user != undefined && user != null && user.length > 0 && JSON.parse(user).user_type === "2") {
        z.style.display = 'display'
    } else {
        z.style.display = 'none'
        window.location = '../index.php'
    }
    if (user != undefined && user != null && user.length > 0) {
        y.style.display = 'display'
        x.style.display = 'none'
    }
    else {
        y.style.display = 'none'
        x.style.display = 'display'
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

function success() {
    alert("Saved Successfully")
    window.location = './vaccinationPortal.php'
}


function onUpdateSuccuess() {
    alert("Updated Successfully")
    window.location = './vaccinationPortal.php'
}

function onDeleteSuccess() {
    alert("Delete Success")
}

function onUpdate(vac_ID) {
    if (vac_ID !== undefined && vac_ID !== null && String(vac_ID).length > 0) {
        
        setCookie("VacID", vac_ID)
        window.location = './updateVaccination.php'
    }
}

function setCookie(cname, cvalue) {
    const d = new Date();
    d.setTime(d.getTime() + (24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}