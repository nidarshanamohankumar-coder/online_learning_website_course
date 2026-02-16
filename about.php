<?php include("header.php");
?>
<link rel="stylesheet" href="about.css">
<title>About-Us</title>
<!-- SLIDER SECTION -->

<section class="hero-slider">

  <div class="slide active" style="background-image: url('images/i1.jpg');"></div>
  <div class="slide" style="background-image: url('images/i2.jpg');"></div>
  <div class="slide" style="background-image: url('images/i3.jpg');"></div>
  <div class="slide" style="background-image: url('images/i4.jpg');"></div>

  <div class="hero-content">
      <p style="font-weight:bold;text-transform:uppercase;letter-spacing:2px;font-size:35px">About Akshayam 360</p>
      <p>where ideas turn into innovation and students turn into professionals</p>
    </div>

</section>

<main>
<div class="about-container">

  <!-- Our Beginning -->
  <section class="about-block left">
    <h2>Our Beginning</h2>
    <p>
       It all began on August 13, with the launch of Akshayam 360 – IT Hub.
            Our mission is to empower students with industry-relevant technical
            skills through practical learning and real-world exposure.
    </p>
  </section>

  <!-- Industry Collaborations -->
  <section class="about-section">
    <h2 class="section-title">INDUSTRY COLLABORATIONS</h2>

    <div class="about-container timeline-container">

      <div class="timeline-line"></div>

      <div class="about-block left">
        <h3>GTN Infotech</h3>
        <p>
         It all began on August 13, with the launch of Akshayam 360 – IT Hub.
            Our mission is to empower students with industry-relevant technical
            skills through practical learning and real-world exposure.
        </p>
      </div>

      <div class="about-block right">
        <h3>Kanavu Startup Village</h3>
        <p>
          Kanavu Startup Village provided Full Stack Development training.
              Students learned frontend technologies like HTML, CSS, JavaScript,
              and React, along with backend development using Python. This training
              enabled students to independently design and develop complete
              websites.
        </p>
      </div>

      <div class="about-block left">
        <h3>Poeage Technologies</h3>
        <p>
          Poeage Technologies trained students in website development using
              Flutter. The sessions focused on widgets, UI design, and building
              modern, responsive, and cross-platform web applications.
        </p>
      </div>

      <div class="about-block right">
        <h3>Genie Magnet</h3>
        <p>
         Genie Magnet provided comprehensive Digital Marketing training.
              Students learned key skills such as content writing, video editing, 
              social media marketing,and online branding strategies.
              This training empowered students to create engaging digital content,
              promote brands effectively across platforms, and manage complete digital marketing campaigns independently.
        </p>
      </div>

    </div>
  </section>

  <!-- Mission -->
  <section class="about-block right">
    <h2>Our Mission</h2>
    <p>
       To bridge the gap between academic learning and industry requirements
                by providing hands-on training, expert mentorship, and real-world
                project experience.
    </p>
  </section>

</div>

<div>
 
    <section class="video-feature-wrapper">
      <div class="video-box" style="background-image: url('images/e3.png');">
          <div class="experience-badge">
              <div class="badge-icon">🏆</div>
              <div class="badge-text">
                  <h3>1 YEAR OF</h3>
                  <p>EXPERIENCE</p>
              </div>
          </div>
          
          <div class="video-card">
            <p class="tour-label">College Tour</p>
            
            <div class="play-btn-wrapper" onclick="openVideo()">
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="play-button">▶</div>
            </div>

            <h4>Intro Institute Video</h4>
            <p>Take a tour of our Institute</p>
          </div>

          <div id="videoModal" class="video-modal" onclick="closeVideo()">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <iframe id="videoPlayer" width="100%" height="450" src="" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
      </div>
    </section>

   <div class="carousel-container">
      <div class="carousel-track">
        <div class="carousel-slide">
          <img src="images/kanavu.jpeg" alt="Kanavu startup villeage">
        </div>
        <div class="carousel-slide">
          <img src="images/gtn.jpeg" alt="GTN info solution" style="height:131px">
        </div>
        <div class="carousel-slide">
          <img src="images/genie.png" alt="Genie Magnet"style="height:131px">
        </div>
        <div class="carousel-slide">
          <img src="images/bluez.jpeg" alt="Bluez infomatic">
        </div>
        <div class="carousel-slide">
          <img src="images/poeage.jpeg" alt="Poeage" style="height:131px">
        </div>
                    

        <div class="carousel-slide">
          <img src="images/kanavu.jpeg" alt="Kanavu startup villeage">
        </div>
        <div class="carousel-slide">
          <img src="images/gtn.jpeg" alt="GTN info solution" style="height:131px">
        </div>
        <div class="carousel-slide">
          <img src="images/genie.png" alt="Genie Magnet"style="height:131px">
        </div>
        <div class="carousel-slide">
          <img src="images/bluez.jpeg" alt="Bluez infomatic">
        </div>
        <div class="carousel-slide">
          <img src="images/poeage.jpeg" alt="Poeage" style="height:131px">
        </div>
      </div>   
    </div>
</div>
</main>
<script>
  function openVideo() {
    const modal = document.getElementById("videoModal");
    const player = document.getElementById("videoPlayer");
    
    // Replace the URL below with your actual video link
    // Adding ?autoplay=1 makes it start immediately
    player.src = "https://www.youtube.com/embed/TMEX-IXqhUI";
    
    modal.style.display = "flex";
}

function closeVideo() {
    const modal = document.getElementById("videoModal");
    const player = document.getElementById("videoPlayer");
    
    modal.style.display = "none";
    player.src = ""; // Stop video when closing
}
document.addEventListener("DOMContentLoaded", function () {

  let slides = document.querySelectorAll(".slide");
  let current = 0;

  function changeSlide() {
    slides[current].classList.remove("active");
    current = (current + 1) % slides.length;
    slides[current].classList.add("active");
  }

  setInterval(changeSlide, 6000); // 6 seconds (test first)
});
</script>
<?php include "footer.php"; ?>