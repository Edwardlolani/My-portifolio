<!DOCTYPE html>
<html>
<head>
<title>Contact Form Validation</title>
<script>         function validateForm() {
     var name = document.forms["contactForm"]["name"].value;
     var email = document.forms["contactForm"]["email"].value;
      var phone = document.forms["contactForm"]["phone"].value;
       if (name == "" || email == "" || phone == "" ||message =="") {
           alert("Please fill in all the fields");
           return false;
                    }
           var phoneBook = /^\d{10}$/;
           if (!phone.match(phoneBook)) {
                alert("Please enter a valid phone number");
                return false;
                       }
                var emailbook = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
                 if (!email.match(emailBook)) {
                     alert("Please enter a valid email address");
                     return false;
                       }
                        }
                         </script>
</script>

   <style type="text/css">
     body{
 text-align:center;
 width:100%;
 margin:0 auto;
 padding:0px;
 font-family:helvetica;
 background-color:#1B5527;
}

#wrapper{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}

#cform{
 background-color:white;
 width:450px;
 padding:20px;
 box-sizing:border-box;
 margin-left:270px;
 box-shadow:0px 0px 10px 0px #3B170B;
}

#cform p{
    text-align:center;
 margin:0px;
 color:#3C6186;
}

#cform h1{
 text-align:center;
 margin:0px;
 color:#1B5527;
 font-size:30px;
 margin-bottom:40px;
 text-decoration:underline;
}

#cform td{
 margin:10px;
 color:#1B5527;
 font-weight:bold;
}

#cform input[type="text"]{
 width:250px;
 height:35px;
 padding-left:5px;
}

#cform textarea{
 width:250px;
 height:70px;
 padding-left:5px;
}

#cform input[type="submit"]{
 background-color:#1B5527;
 color:white;
 border:none;
 border-bottom:5px solid #7CB832;
 width:150px;
 height:45px;
 border-radius:2px;
}

   </style>
                        <div id="cform">
                         </head>
                         <body>
                         <h1>Contact Form</h1>
                         <form action = "process.php" method = "POST"name="contactForm" onsubmit="return validateForm()">
                         <label for="name">Name:</label>
                          <input type="text" id="name" name="name"><br><br>
                          <label for="email">Email:</label>
                          <input type="text" id="email" name="email"><br><br>
                          <label for="phone">Phone:</label>
                          <input type="text" id="phone" name="phone"><br><br>
                          <label for="message">Message:</label>
                          <input type="text" id="message" name="message"><br><br>
                           <input type="submit" value="Submit">
                            </form>
                            </body>
                            </html>