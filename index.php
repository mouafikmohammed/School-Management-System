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
          <h4 style='text-align:center'>Mohammed Mouafik</h4>
        </div>
        <div class="tab">
          <div class="tablinks" id='defaultOpen' onclick="openTab(event,'dashboard_top')">
            <i class='fas fa-tachometer-alt'></i>
            <span class="tooltip">Dashboard</span>
            <h4>Dashboard</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'teacher_top')">
            <i class='fas fa-chalkboard-teacher'></i>
            <span class="tooltip">Teacher</span>
            <h4>Teacher</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'student')">
            <i class='fas fa-user'></i>
            <span class="tooltip">Student</span>
            <h4>Student</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'parent')">
            <i class='fas fa-user'></i>
            <span class="tooltip">Parent</span>
            <h4>Parent</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'schedule')">
            <i class='fas fa-clock'></i>
            <span class="tooltip">Schedule</span>
            <h4>Schedule</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'admin')">
            <i class='fas fa-chart-bar'></i>
            <span class="tooltip">Admin</span>
            <h4>Admin</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'library')">
            <i class='fas fa-folder-open'></i>
            <span class="tooltip">Library</span>
            <h4>Library</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'media')">
            <i class='fas fa-video'></i>
            <span class="tooltip">Media</span>
            <h4>Media</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'expenses')">
            <i class='fas fa-money-check-alt'></i>
            <span class="tooltip">Expenses</span>
            <h4>Expenses</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'hotel')">
            <i class='fas fa-hotel'></i>
            <span class="tooltip">Hotel</span>
            <h4>Hotel</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'transport')">
            <i class='fas fa-car'></i>
            <span class="tooltip">Transport</span>
            <h4>Transport</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'exam')">
            <i class='fas fa-graduation-cap'></i>
            <span class="tooltip">Exam</span>
            <h4>Exam</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'events')">
            <i class='fas fa-clock'></i>
            <span class="tooltip">Events</span>
            <h4>Events</h4>
          </div>
          <div class="tablinks" onclick="openTab(event,'map')">
            <i class='fas fa-map-marker-alt'></i>
            <span class="tooltip">Map</span>
            <h4>Map</h4>
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
        <div id="teacher_top" class='tabcontent'>
          <h2>taecher content</h2>
        </div>
        <div id="student" class='tabcontent'>
          <h2>Student content</h2>
        </div>
        <div id="parent" class='tabcontent'>
          <h2>Parent content</h2>
        </div>
        <div id="schedule" class='tabcontent'>
          <h2>Schedule content</h2>
        </div>
        <div id="admin" class='tabcontent'>
          <h2>Admin content</h2>
        </div>
        <div id="library" class='tabcontent'>
          <h2>Library content</h2>
        </div>
        <div id="media" class='tabcontent'>
          <h2>Media content</h2>
        </div>
        <div id="expenses" class='tabcontent'>
          <h2>Expenses content</h2>
        </div>
        <div id="hotel" class='tabcontent'>
          <h2>Hotel content</h2>
        </div>
        <div id="transport" class='tabcontent'>
          <h2>Transport content</h2>
        </div>
        <div id="exam" class='tabcontent'>
          <h2>Exam content</h2>
        </div>
        <div id="events" class='tabcontent'>
          <h2>Events content</h2>
        </div>
        <div id="map" class='tabcontent'>
          <h2>Map content</h2>
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