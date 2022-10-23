function logOut() {
    var txt;
    if (confirm("Are You Sure, \n Do You Want To Logout?")) {
      delete_cookie('user')
      window.location.reload()

    }
  }

  function delete_cookie(name) {
    document.cookie = name +'=; Path=/;';
  }

  function onDeleteSuccess(){
     alert("Deleted Success")
     delete_cookie('user')
     window.location.reload()
  }