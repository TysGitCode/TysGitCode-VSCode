<?php
// Include the database connection
include 'connect.php';

// Function to fetch content from the database
function fetchContent($tableName) {
    global $conn;

    $content = '';

    $sql = "SELECT * FROM $tableName";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $content = isset($row['content']) ? $row['content'] : '';
        }
    } else {
        echo "Error executing query: " . $conn->error;
    }

    return $content;
}

// Fetch content for each section
$aboutMeMainText = fetchContent('aboutmemain');
$aboutMeFamily = fetchContent('family');
$communicationContent = fetchContent('communication');
$curriculum1Content = fetchContent('curriculum1');
$curriculum2Content = fetchContent('curriculum2');
$curriculum3Content = fetchContent('curriculum3');
$curriculum4Content = fetchContent('curriculum4');
$curriculum5Content = fetchContent('curriculum5');
$educationContent = fetchContent('education');
$experienceContent = fetchContent('experience');
$hobbiesContent = fetchContent('hobbies');
$homework1Content = fetchContent('homework1');
$homework2Content = fetchContent('homework2');
$management1Content = fetchContent('management1');
$management2Content = fetchContent('management2');
$management3Content = fetchContent('management3');
$managementcont1Content = fetchContent('managementcont1');
$managementcont2Content = fetchContent('managementcont2');
$managementcont3Content = fetchContent('managementcont3');
$note1Content = fetchContent('note1');
$note2Content = fetchContent('note2');
$note3Content = fetchContent('note3');
$recognitionContent = fetchContent('recognition');

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Mrs. Mitchell's Class</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="main.css" />
  <link rel="icon" href="./favicon.ico" type="image/x-icon" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

<!-- Landing Page Content-->
  <header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mrs. Mitchell's Class</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item menu-item-1" href="#">Home</a></li>
                  <li><a class="dropdown-item menu-item-2"href="#about">About</a></li>
                  <li><a class="dropdown-item menu-item-3"href="#schedule">Schedule</a></li>
                  <li><a class="dropdown-item menu-item-4"href="#homework">Homework</a></li>
                  <li><a class="dropdown-item menu-item-5"href="#curriculum">Curriculum</a></li>
                  <li><a class="dropdown-item menu-item-6"href="#classroomManagement">Classroom Management</a></li>
                  <li><a class="dropdown-item menu-item-7"href="#communication">Communication</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item menu-item-8" href="https://www.calhanschool.org/">Calhan School Website</a></li>
                </ul>
            </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true"></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
  </header>

  <!-- Landing Page Content -->
  <div id="home" class="page">
    <section class="landingPageGrid">
      <div class="landingTitleBox">
        <h1 class="landingTitle">
          <span style="color: #e5b002"> Welcome</span> to Mrs. Mitchell's Class
        </h1>
        <div class="paperPlaneIMG">
          <img src="Images/paperPlaneIMG.png" alt="">
        </div>
      </div>
    </section>
  </div>

  <!-- About Me Page Content -->
  <div id="about" class="page">
    <section class="header">
    </section>
    <div class="aboutMeBackground">
      <section class="aboutMePageGrid">
        <div class="shadowBoxAboutMeIMG"></div>
        <div class="aboutMePageGridText2 shadowBoxAboutMe">
          <h2 class="text-center aboutMeTitle">About Me</h2>
          <p class="aboutMeMainTxt">
            <?php echo $aboutMeMainText; ?>
          </p>
        </div>
      </section>
    </div>
  </div>
<!--About Me Page Content-->

<!--About Family-->

<section class="aboutMePageGridFamily" data-bg-color="linear-gradient(45deg, #cbe38f, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)">

  <div class="aboutMePageGridText2Left shadowBoxAboutMeFamily">
    <h2 class="text-center">Family</h2>
    <p class="text-center text-bold">
    <?php echo $aboutMeFamily; ?>
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGRight">
  </div>
</section>
<!--About Family-->

<!--About Hobbies-->

<section class="aboutmePageGridHobbies" data-bg-color="linear-gradient(45deg, #fd95ce, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)">
  <div class="shadowBoxAboutMeIMGLeft">
  </div>
  <div class="aboutMePageGridText2Right shadowBoxAboutMeHobbies">
    <h2 class="text-center">Hobbies</h2>
    <p class="text-center">
    <?php echo $hobbiesContent; ?>
    </p>
  </div>
</section>
<!--About Hobbies-->

<!--About Education-->

<section class="aboutmePageGridEducation" data-bg-color="linear-gradient(45deg, #266cb4, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)">
  <div class="aboutMePageGridText2Left shadowBoxAboutMeEducation">
    <h2 class="text-center">Education</h2>
    <p class="text-center">
    <?php echo $educationContent; ?>
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGRight">
  </div>
</section>
<!--About Education-->

<!--About Other-->
<section class="aboutmePageGridOther" data-bg-color="linear-gradient(45deg, #f96a49, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8)">
  <div class="aboutMePageGridText2Left shadowBoxAboutMeOther">
    <h2 class="text-center">Other Involvement and Recognition</h2>
    <p class="text-center">
    <?php echo $recognitionContent; ?>
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGLeft">
  </div>
</section>
<!--About Other-->

<!--Schedule Content-->
  
<div id="schedule">
<section class="docPageBackgroundScheduleGrid" data-bg-color="linear-gradient(45deg, #d3c365, rgba(255, 255, 255, 0.8), white">
  <div class="scheduleNoteLeft">
    <img src="Images/NoteLeft.png" alt="">
    <p class="note1Content">
    <?php echo $note1Content; ?>
    </p>
  </div>
  <div class="scheduleNoteMiddle">
    <img src="Images/NoteMiddle.png" alt="">
    <p class="note2Content">
    <?php echo $note2Content; ?>
    </p>
  </div>
  <div class="scheduleNoteRight">
    <img src="Images/NoteRight.png" alt="">
    <p class="note3Content">
    <?php echo $note3Content; ?>
    </p>
  </div>
  <div class="scheduleGridTitle">
    <h2 class="text-center">Schedule</h2>
  </div>
</section>
</div>
<!--Schedule Content-->

<!--Homework Content-->

<div id="homework">
  <section class="docPageBackground docPageHomeworkGrid" data-bg-color="linear-gradient(45deg, #f96a49, rgba(255, 255, 255, 0.8), #98c2b4">
    <div class="shadowBoxDocHomeworkLeft">
      <p>
      <?php echo $homework1Content; ?>
      </p>
    </div>
    <div class="homeworkTitle">
      <h2 class="text-center">Homework</h2>
      <p class="text-center">
      </p>
    </div>
    <div class="shadowBoxDocHomeworkRight">
      <p>
      <?php echo $homework2Content; ?>
      </p>
    </div>
  </section>
</div>
<!--Homework Content-->

<!--Curriculum Content-->

<div id="curriculum">
  <section class="docPageBackground docPageCurriculumGrid" data-bg-color="linear-gradient(45deg, #98c2b4, white, #fd95ce">
    <div class="shadowBoxDocCurriculumLeft1">
      <p>
      <?php echo $curriculum1Content; ?>
      </p>
    </div>
    <div class="shadowBoxDocCurriculumLeft2">
      <p>
      <?php echo $curriculum2Content; ?>
      </p>
    </div>
    <div class="curriculumTitle">
      <h2 class="text-center">Curriculum</h2>
      <p class="text-center">
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight1">
      <p>
      <?php echo $curriculum3Content; ?>
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight2">
      <p>
      <?php echo $curriculum4Content; ?>
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight3">
      <p>
      <?php echo $curriculum5Content; ?>
      </p>
    </div>
  </section>
</div>
<!--Curriculum Content-->

<!--Classroommgmt Content-->

<div id="classroomManagement">
  <section class="docPageBackground docPageClassroomManagementGrid" data-bg-color="linear-gradient(45deg, #48bdc6, white, #f4cf74">
    <div class="shadowBoxDocClassroomManagement1">
      <h2 class="text-center classroomTitle">
        Classroom Management
      </h2>
      <p>
      <?php echo $management1Content; ?>
      </p>
    </div>
    <div class="shadowBoxDocClassroomManagement2">
      <p>
      <?php echo $management2Content; ?>
      </p>
    </div>
    <div class="shadowBoxDocClassroomManagement3">
      <p>
      <?php echo $management3Content; ?>
      </p>
    </div>
  </section>
</div>

<section class="docPageBackground docPageClassroomManagementContinued" data-bg-color="linear-gradient(45deg, #98c2b4, white, #266cb4">
  <div class="shadowBoxDocClassroomManagementContinued1">
    <h2 class="text-center managementContinuedTitle">Classroom Management Continued
    </h2>
    <p>
    <?php echo $managementcont1Content; ?>
    </p>
  </div>
  <div class="shadowBoxDocClassroomManagementContinued2">
    <p>
    <?php echo $managementcont2Content; ?>
    </p>
  </div>
  <div class="shadowBoxDocClassroomManagementContinued3">
    <p>
    <?php echo $managementcont3Content; ?>
    </p>
  </div>
</section>
<!--Classroommgmt Content-->

<!--Communication Content-->

<div id="communication">
  <section class="docPageBackground docPageCommunicationGrid" data-bg-color="linear-gradient(45deg, #cbe38f, white, white">
    <div class="shadowBoxDocCommunication">
      <p>
      <?php echo $communicationContent; ?>
      </p>
    </div>
    <div class="communicationTitle">
      <h2 class="text-center">Communication</h2>
    </div>
  </section>
</body>
</div>
<!--Communication Content-->


  <!-- Script to load next section's content on scroll -->
<!-- JavaScript for Transition Activation -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Get all elements with the "page-transition" class
    const transitionElements = document.querySelectorAll(".page-transition");

    // Add event listener to update the class when a link is clicked
    document.addEventListener("click", function (event) {
      if (event.target.tagName === "A" && event.target.getAttribute("href").charAt(0) === "#") {
        event.preventDefault(); // Prevent the default link behavior
        const targetId = event.target.getAttribute("href").substring(1);
        // Add "active" class to the target element
        document.getElementById(targetId).classList.add("active");
        // Remove "active" class from all other elements after a short delay
        setTimeout(function () {
          transitionElements.forEach(function (element) {
            if (element.id !== targetId) {
              element.classList.remove("active");
            }
          });
        }, 100); // Adjust the delay as needed
      }
    });
  });
</script>

<!-- Add this script at the end of your HTML, just before </body> -->
<script>
  window.addEventListener('scroll', function() {
    var navbar = document.querySelector('nav.navbar');
    var sections = document.querySelectorAll('section'); // Adjust this selector based on your HTML structure
    var offset = 50; // Adjust the offset as needed (in pixels)

    sections.forEach(function(section) {
      var sectionTop = section.offsetTop - offset;
      var sectionBottom = sectionTop + section.offsetHeight;

      if (window.scrollY >= sectionTop && window.scrollY <= sectionBottom) {
        // Apply the new background color based on the section's data-bg-color attribute
        var bgColor = section.getAttribute('data-bg-color');
        navbar.style.background = bgColor;
      }
    });
  });
</script>
  
</body>
</html>
