<?php
// Include the database connection
include 'connect.php';

// Initialize $aboutMeMainText
$aboutMeMainText = '';

// Fetch data from the database
$sql = "SELECT * FROM aboutmemain";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if data is fetched successfully
    if ($result->num_rows > 0) {
        // Output data of each row
        $row = $result->fetch_assoc();
        $aboutMeMainText = isset($row['content']) ? $row['content'] : '';
    } else {
        echo "Error: No data found.";
    }
} else {
    echo "Error executing query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>My Website</title>
  <link rel="stylesheet" href="main.css" />
  <link rel="icon" href="./favicon.ico" type="image/x-icon" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>

<!-- Landing Page Content-->
  <header class="menuBox">
    <div class="menuDots">
      <img src="" alt="">
    </div>
    <div class="clickedMenu">
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
      <nav>
        <ul>
          <li class="homeLink"><a href="#home">Home</a></li>
          <li class="aboutLink"><a href="#about">About</a></li>
          <li class="scheduleLink"><a href="#schedule">Schedule</a></li>
          <li class="curriculumLink"><a href="#homework">Homework</a></li>
          <li class="homeworkLink"><a href="#curriculum">Curriculum</a></li>
          <li class="classroomManagementLink"><a href="#classroomManagement">Classroom Management</a></li>
          <li class="communicationLink"><a href="#communication">Communication</a></li>
        </ul>
      </nav>
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
      </label>
    </div>
  </header>

  <div id="home">

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
<!-- Landing Page Content-->

<!--About me Page Content-->
<div class="aboutMeBackground">
    <section class="header">
      <div class="profileSummary">
        <img src="Images/profileSummary.png" alt="" />
      </div>
      <div class="navBarBackground">
        <img src="Images/navBarBackground.png" alt="" />
      </div>
    </section>

    <div id="about">
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
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<section class="aboutMePageGridFamily">
  <div class="aboutMePageGridText2Left shadowBoxAboutMeFamily">
    <h2 class="text-center">Family</h2>
    <p class="text-center text-bold">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus sunt quas aperiam quos et non similique
      assumenda? Hic repellendus, illo inventore ea tempore non nam minus voluptatum aspernatur, sequi quis. Lorem
      ipsum dolor sit amet consectetur adipisicing elit. Quae
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGRight">
  </div>
</section>
<!--About Family-->

<!--About Hobbies-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<section class="aboutmePageGridHobbies">
  <div class="shadowBoxAboutMeIMGLeft">
  </div>
  <div class="aboutMePageGridText2Right shadowBoxAboutMeHobbies">
    <h2 class="text-center">Hobbies</h2>
    <p class="text-center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
      laboriosam magni! Distinctio modi ipsa corporis et totam dolore
      assumenda iste eveniet. Odit, officiis id iste obcaecati repellat,
    </p>
  </div>
</section>
<!--About Hobbies-->

<!--About Education-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<section class="aboutmePageGridEducation">
  <div class="aboutMePageGridText2Left shadowBoxAboutMeEducation">
    <h2 class="text-center">Education</h2>
    <p class="text-center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
      laboriosam magni! Distinctio modi ipsa corporis et totam dolore
      assumenda iste eveniet. Odit, officiis id iste obcaecati repellat,
      distinctio tenetur voluptatum dolorem facere delectus sequi eligendi?
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
      laboriosam magni! Distinctio modi ipsa corporis et totam dolore
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGRight">
  </div>
</section>
<!--About Education-->

<!--About Other-->
<section class="aboutmePageGridOther">
  <div class="aboutMePageGridText2Left shadowBoxAboutMeOther">
    <h2 class="text-center">Other Involvement and Recognition</h2>
    <p class="text-center">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas,
      laboriosam magni! Distinctio modi ipsa corporis et totam dolore
      assumenda iste eveniet. Odit, officiis id iste obcaecati repellat,
      distinctio tenetur voluptatum dolorem facere delectus sequi eligendi?
    </p>
  </div>
  <div class="shadowBoxAboutMeIMGLeft">
  </div>
</section>
<!--About Other-->

<!--Schedule Content-->
  <header class="menuBox">
    <div class="menuDots">
      <img src="" alt="">
    </div>
    <div class="clickedMenu">
      <input type="checkbox" id="nav-toggle" class="nav-toggle">
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Schedule</a></li>
          <li><a href="#">Homework</a></li>
          <li><a href="#">Curriculum</a></li>
          <li><a href="#">Classroom Management</a></li>
          <li><a href="#">Communication</a></li>
      </nav>
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
      </label>
    </div>
  </header>
  
<div id="schedule">
<section class="docPageBackgroundScheduleGrid">
  <div class="scheduleNoteLeft">
    <img src="Images/NoteLeft.png" alt="">
  </div>
  <div class="scheduleNoteMiddle">
    <img src="Images/NoteMiddle.png" alt="">
  </div>
  <div class="scheduleNoteRight">
    <img src="Images/NoteRight.png" alt="">
  </div>
  <div class="scheduleGridTitle">
    <h2 class="text-center">Schedule</h2>
  </div>
</section>
</div>
<!--Schedule Content-->

<!--Homework Content-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<div id="homework">
  <section class="docPageBackground docPageHomeworkGrid">
    <div class="shadowBoxDocHomeworkLeft">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, ut ipsam! Laboriosam quasi impedit tenetur
        veritatis illo commodi ratione corrupti aliquam? Molestiae esse eum impedit natus, facere architecto id sed?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti a repellat tenetur eos ipsum veniam
        consequuntur fugiat vel, quidem culpa fugit nisi reiciendis possimus. Atque saepe quasi quae laboriosam
        laudantium quisquam quam praesentium inventore culpa provident illum sit aperiam veritatis explicabo eum
        beatae animi, distinctio soluta mollitia, voluptatibus cupiditate. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Enim recusandae consequatur corporis fugiat corrupti fuga laboriosam! Ipsum sint ad dolor at
        in dicta modi quae, qui debitis facilis, maiores tempore aliquam? Quidem placeat perferendis provident.
        Aliquam distinctio maiores adipisci quasi natus fugiat deserunt id! Eaque libero exercitationem in temporibus
        soluta.
      </p>
    </div>
    <div class="homeworkTitle">
      <h2 class="text-center">Homework</h2>
      <p class="text-center">
      </p>
    </div>
    <div class="shadowBoxDocHomeworkRight">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde dolorum qui facilis officia ea facere rem
        consequatur consequuntur iusto eligendi iste consectetur, repellendus porro quam est excepturi vitae quidem
        dolor voluptas quia! Voluptatum exercitationem repellat distinctio, quisquam molestiae facilis blanditiis.
        Vitae quia natus unde eligendi consequatur facere ducimus ratione perferendis provident laudantium similique
        aliquid labore inventore quae dicta repellendus modi, quod nesciunt, eius iste voluptatum itaque! Ipsam, fugit
        quas. Dolorem libero commodi perferendis hic nesciunt? Lorem ipsum dolor sit amet consectetur adipisicing
        elit. Nesciunt sint in voluptates sit nostrum qui, corrupti quasi numquam rem perferendis sunt animi ducimus
        libero veritatis porro facilis molestias magnam saepe cum facere beatae et. Numquam officiis ducimus fuga sunt
        perspiciatis, voluptate assumenda rem fugiat voluptatibus minus a iste nobis est!
      </p>
    </div>
  </section>
</div>
<!--Homework Content-->

<!--Curriculum Content-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<div id="curriculum">
  <section class="docPageBackground docPageCurriculumGrid">
    <div class="shadowBoxDocCurriculumLeft1">
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste, dolorum rem dolore repellendus, debitis velit
        dignissimos eligendi at ipsa voluptatem, animi praesentium explicabo! Perferendis quis, quam officiis vel
        libero, laboriosam neque exercitationem suscipit aliquid beatae reiciendis in ullam! Quod quis esse, ipsum
        illo unde provident accusamus quae quam cum rem! Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Officiis pariatur explicabo, tempora commodi excepturi architecto odit animi maxime quae, alias quidem
        blanditiis! Est provident rem, at rerum cum aliquam quae eius quam iste facilis voluptatibus, quos veniam
        laborum quasi. Qui corrupti vel ipsam, consequatur ad quasi in. Ea architecto praesentium veniam sunt
        asperiores, molestiae expedita, similique laboriosam aspernatur impedit modi fugit tempore in? Voluptates
        inventore libero repellendus nulla sapiente consequuntur, nobis consectetur id iure? Praesentium?
      </p>
    </div>
    <div class="shadowBoxDocCurriculumLeft2">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis cupiditate doloremque culpa distinctio
        est aliquid asperiores consectetur vitae in? Beatae ab distinctio itaque optio. Sunt, quos tenetur, atque
        iusto quibusdam voluptate doloribus provident placeat alias, unde obcaecati amet soluta voluptates nobis sequi
        ea optio fugiat vero error facere debitis! Ullam?
      </p>
    </div>
    <div class="curriculumTitle">
      <h2 class="text-center">Curriculum</h2>
      <p class="text-center">
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight1">
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non omnis nostrum porro quibusdam minus tenetur.
        Quis excepturi suscipit ipsum, ipsa officiis rem nihil facere iusto porro quidem vitae ea, incidunt dicta
        repellat molestias quo accusamus, quas voluptates facilis delectus. Id ad quam eos ab quibusdam nobis alias
        perferendis ipsa ut.
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight2">
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus quibusdam sint asperiores beatae dicta,
        nesciunt tempora temporibus. Facere ab voluptates, commodi amet, debitis aliquam eligendi tempora laborum qui
        magnam fuga perspiciatis reiciendis modi culpa rerum. Veritatis vero quia officiis quae eveniet itaque
        suscipit voluptas. Ex magnam delectus nam aperiam corrupti.
      </p>
    </div>
    <div class="shadowBoxDocCurriculumRight3">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, quae. Impedit quo consequatur recusandae
        labore porro, deserunt earum ea aliquid voluptates ex voluptatibus praesentium totam nam natus debitis neque.
        Et repellendus suscipit ducimus officiis laborum nisi corporis voluptas doloremque perferendis excepturi,
        repudiandae odit. Impedit eveniet deleniti nisi magni earum ullam!
      </p>
    </div>
  </section>
</div>
<!--Curriculum Content-->

<!--Classroommgmt Content-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<div id="classroomManagement">
  <section class="docPageBackground docPageClassroomManagementGrid">
    <div class="shadowBoxDocClassroomManagement1">
      <h2 class="text-center classroomTitle">
        Classroom Management
      </h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt quia voluptate voluptatum a, accusamus
        commodi inventore est nostrum pariatur natus incidunt quis, at magnam velit debitis ipsa. Quod eos consequatur
        alias officiis odio quae. Reiciendis cum error quae ipsa similique aut facilis ad rem distinctio quod! Culpa,
        quis molestias? Inventore, molestiae. At necessitatibus molestiae nemo porro iste eum, magnam beatae. Deserunt
        ab, tempora assumenda
      </p>
    </div>
    <div class="shadowBoxDocClassroomManagement2">
      <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae tempora officiis nobis temporibus, nesciunt
        neque numquam nihil molestiae vitae voluptatibus aspernatur modi! Dolorem cum velit modi molestiae.
        Perferendis, nostrum quae! Sapiente dolor dolore ullam ducimus, eius labore sit aliquid similique, consectetur
        vitae magni fugit? Voluptatibus, officia asperiores commodi nisi accusamus vel necessitatibus corrupti eius
        quod nobis inventore consequatur rerum quas,
      </p>
    </div>
    <div class="shadowBoxDocClassroomManagement3">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas iure velit ducimus harum veniam in totam minima
        quam repellendus dicta, odit neque nesciunt voluptatem, non, fuga impedit fugit sit exercitationem qui quia et
        rerum officiis pariatur sapiente? Dolore quas itaque blanditiis, nostrum labore doloremque tempora obcaecati
        cupiditate suscipit tenetur. Perspiciatis ut debitis, quisquam, magni molestiae iste culpa explicabo
        laboriosam neque inventore unde! Fugiat
      </p>
    </div>
  </section>
</div>

<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div class="clickedMenu">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<section class="docPageBackground docPageClassroomManagementContinued">
  <div class="shadowBoxDocClassroomManagementContinued1">
    <h2 class="text-center managementContinuedTitle">Classroom Management Continued
    </h2>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla nisi cumque sunt dolor blanditiis odio et
      eveniet eius inventore error expedita eos, modi, quaerat ut vel tenetur optio alias quia eum iste, saepe ab?
      Quibusdam labore earum aliquid, iure cupiditate itaque, ex modi, illo quidem deserunt alias eaque soluta
      doloribus nam dolore vero sapiente commodi! Ducimus nesciunt fugiat cumque sit iste animi quos est. Tempora
      dolore accusamus eligendi, fugit commodi rerum sit odio eaque quis. Lorem ipsum dolor sit amet consectetur
      adipisicing elit. Fugit quas blanditiis amet natus consequatur doloribus neque? Sint amet dolores, cumque fugiat
      quisquam veritatis deleniti eius aut magni possimus adipisci sed quasi in qui placeat quis libero ipsam
      asperiores. Rem praesentium temporibus dolore, molestiae quaerat quo quia illo provident odit repudiandae quod
      quasi, accusamus ea dicta!
    </p>
  </div>
  <div class="shadowBoxDocClassroomManagementContinued2">
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia optio consectetur, quasi officiis cupiditate
      minima laborum, dolor hic labore nihil animi iste pariatur quas dignissimos dolores voluptatum. Nisi iusto est
      voluptas cupiditate commodi! Ducimus corrupti omnis ipsum soluta placeat iusto repellat ratione eum odit modi,
      delectus atque sed et deleniti unde beatae laboriosam quae a sequi, explicabo velit ab odio. Alias dicta ab
      ullam, enim rem cupiditate impedit quas, molestias vero eos, maiores nesciunt eum. Lorem ipsum dolor sit amet
      consectetur adipisicing elit. Incidunt obcaecati illum accusamus repellendus, eum placeat suscipit ad vitae
      saepe, fuga consectetur nesciunt optio cumque odio voluptatum repellat nostrum? Quam tempora suscipit, saepe
      sapiente cumque sint eius? Impedit, quo reprehenderit suscipit id aut vel nemo eligendi culpa obcaecati illo
      fugiat nostrum nobis recusandae, libero facilis sapiente.
    </p>
  </div>
  <div class="shadowBoxDocClassroomManagementContinued3">
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, quia, veritatis nemo eos libero sequi incidunt
      possimus aut numquam neque, nisi ullam cum deserunt. Accusantium doloribus, voluptatem laboriosam aspernatur aut
      magni rem sunt quam nemo architecto quidem, vel ea cupiditate. Inventore id consequuntur officia. Quidem
      voluptates sapiente dolorum. Eligendi nihil hic maxime a consectetur expedita enim, veniam alias modi
      repellendus et quam temporibus non? Laudantium ab quisquam porro molestias animi quo sequi itaque non
      praesentium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit in numquam sunt illum ratione. Fuga
      eaque nobis magni pariatur corrupti? Facere dolor numquam cum, odit voluptates nisi aliquam ad rerum quod hic
      maiores pariatur dolorem illo minus reprehenderit ab laboriosam, officiis, facilis a porro. Quis dicta
      necessitatibus unde architecto rerum a laboriosam id, repellendus corrupti.
    </p>
  </div>
</section>
<!--Classroommgmt Content-->

<!--Communication Content-->
<header class="menuBox">
  <div class="menuDots">
    <img src="" alt="">
  </div>
  <div>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Schedule</a></li>
        <li><a href="#">Homework</a></li>
        <li><a href="#">Curriculum</a></li>
        <li><a href="#">Classroom Management</a></li>
        <li><a href="#">Communication</a></li>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </div>
</header>

<div id="communication">
  <section class="docPageBackground docPageCommunicationGrid">
    <div class="shadowBoxDocCommunication">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis nihil asperiores eos magnam quos, a quod
        recusandae qui dicta mollitia sit non error officia corrupti sint, ut molestias. Amet, iusto nesciunt
        voluptate blanditiis cupiditate itaque cumque? Facilis, laborum enim. Quos ad temporibus voluptas quae nobis.
        Saepe libero cum laboriosam iusto quibusdam explicabo corporis illum reiciendis culpa natus minus praesentium
        facere nemo corrupti nulla laborum, necessitatibus totam enim dolores, deleniti labore obcaecati! Perspiciatis
        unde consectetur totam.
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
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        // Check if the user has scrolled to the bottom
        if ($(window).scrollTop() + $(window).height() == $(document).height()) {
          // Load and append the content of the next section
          // Determine the next section based on the current scroll position
          var nextSectionId = getNextSectionId();
          $.get(nextSectionId + '.html', function(data) {
            $('body').append(data);
          });
        }
      });
    });

    // Function to determine the next section based on the scroll position
    function getNextSectionId() {
      var sectionIds = ["home", "about", "schedule", "homework", "curriculum", "classroomManagement", "communication"];
      var currentScroll = $(window).scrollTop() + $(window).height();
      for (var i = 0; i < sectionIds.length; i++) {
        var sectionOffset = $('#' + sectionIds[i]).offset().top;
        if (currentScroll < sectionOffset) {
          return sectionIds[i];
        }
      }
      // Return the last section if at the bottom
      return sectionIds[sectionIds.length - 1];
    }
  </script>

</body>
</html>
