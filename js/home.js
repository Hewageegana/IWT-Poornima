function checkAccess() {
    var x = document.getElementById("noAccess");
    var y = document.getElementById("login");
    // var dc = document.cookie;
    // let user = dc.getCookie("user");
    let user = document.cookie.search('user')
    console.log(user)
    if(user != undefined && user != null && user.length > 0){
        y.style.display= 'display'
        x.style.display= 'none'
    }
    else{
        y.style.display= 'none'
        x.style.display= 'display'
    }

}