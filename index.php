
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="slides.css" />
    <title>my-portifolio</title>
  </head>
  <body>
<div class="container">
      <ul>
         <li><a class="active"href="Homepage.html">Home</a></li>
         <li><a href="my_skills.php">About</a></li>
         <li><a href="contacts1.php">Contact1</a></li>
          <li><a href="skills.php">Skills</a></li>
      </ul>
      </div>
      <br
    <h1></h1><img src="edward.jpg" width="100" height="150"/></h1>
    <h1>EDWARD LOLANI</h1>
    <p>I am a student at Mzuzu University</p>
    <p>Pursuing a Bechelors degree in ICT</p>
       <br>
        <script>
   let today = new Date();
   let hourNow =
   today.getHours();
   let greeting;

   if (hourNow >= 0 && hourNow < 12){
       greeting = 'Good morning!';
   } else if (hourNow >= 12 && hourNow < 18 ){
       greeting = 'Good afternoon!';
   }
   else{
       greeting = 'Good evening!';
   }
   document.write('<hr1>' + greeting + '</h1>');
</script>
    <div class="content">
      <div class="slides">
        <div class="slide_content 1">
          <h1 class="show"><img src="webjava.jpg" width="300" height="450" /> </h1>
        </div>
        <div class="slide_content 2">
           <h1 class="show"><img src="web-project.jpg" width="300" height="450" /> </h1>
        </div>
        <div class="slide_content 2">
          <h1 class="show"><img src="web-project2.jpg" width="300" height="450" /> </h1>
        </div>
        <div class="slide_content 4">
          <h1 class="show"><img src="project_1.jpg" width="300" height="450" /></h1>
        </div>
      </div>
    </div>
    <li><a href="edward_lolani.html">click me to view project</a></li>
  </body>
</html>



