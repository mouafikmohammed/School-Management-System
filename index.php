<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
      integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk"
      crossorigin="anonymous"
    />
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <link rel="stylesheet" href="css/admin.css">
   <title>School System</title>
</head>
<body>
  <section class="admin-top">
    <div class="row">
      <div class="admin-left" id='sildeNav'>
        <div class="admin">
          <img src="images/mohammed.jpg" alt="profile picture">
          <h1 style='text-align:center'>Mohammed Mouafik</h1>
        </div>
        <div class="tab">
          <div class="tablinks" id='defaultOpen'>
            <i class='fas fa-tachometer-alt'></i>
            <span class="tooltip">Dashboard</span>
            <h4>Dashboard</h4>
          </div>
          <div class="tablinks">
            <i class='fas fa-chalkboard-teacher'></i>
            <span class="tooltip">Teacher</span>
            <h4>Teacher</h4>
          </div>
        </div>
      </div>


      <!-- right side of dashboard start here ====================================--->
      <div class="admin-right" id="admin-right">
        <div class="header">
          <div class="header-left">
            <i onclick="menuAnimation()" class="fas fa-bars"></i>
          </div>
          <div class="header-right">Test</div>
        </div>
        <div id="dashboard_top" class='tabcontent'>
          <h2>dashboard content</h2>
        </div>
        <div id="teacher _top" class='tabcontent'>
          <h2>taecher content</h2>
        </div>
      </div>
    </div>
  </section>
  <script>
    function menuAnimation() {
      var element = document.getElementById("sildeNav");
      var element1 = document.getElementById("admin-right");
      if (element && element1) {
        element.classList.toggle("navSlide");
        element1.classList.toggle("navSlide1");
      }
    }
  </script>
</body>
</html>