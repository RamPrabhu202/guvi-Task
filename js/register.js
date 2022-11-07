$(document).ready(function () {
  $("#register").click(function () {
    var id = $("#name").val();
    var password = $("#password").val();
    var repassword = $("#repassword").val();
    if (id == "" || password == "" || repassword == "") {
      alert("Please fill all fields...!!!!!!");
    } else if (password.length < 8) {
      alert("Password should atleast 8 character in length...!!!!!!");
    } else if (!password.match(repassword)) {
      alert("Your passwords don't match. Try again?");
    } else {
      $.post(
        "register.php",
        {
          userid: id,
          userpass: password
        },
        function (data) {
          if (data == "You have Successfully Registered.....") {
            $("form")[0].reset();
          }
        }
      );
    }
  });
});