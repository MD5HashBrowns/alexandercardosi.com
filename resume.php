<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php include 'favicon.php'; ?>
    <title>Resume | Alexander Cardosi</title>
    <?php include 'assets.php'; ?>
  </head>
  <body>
    <?php include 'nav.php'; ?>
    <main>
      <div id="resume-wrapper">
        <div class="resume">
          <h1>Resume</h1>
          <hr>
          <h2>Objective</h2>
          <p class="indent"><i>To pursue a career in web design</i></p>
          <h2>Education</h2>
          <section class="indent">
            <h3>Computer Animation and Web Design, Center for Technology</h3>
            <ul>
              <li>Proficient in using 3D modeling tools</li>
              <li>Workflow management</li>
              <li>Knowledge in CSS/HTML/JS</li>
            </ul>
          </section>
          <section class="indent">
            <h3>College Courses</h3>
            <ul>
              <li>Python Programming, Community College of Vermont</li>
              <li>Web Development, Community College of Vermont</li>
            </ul>
          </section>
          <section class="indent">
            <h3>Pre-Tech 2 Program, Center for Technology, Essex</h3>
            <ul>
              <li>Explored technical career possibilities in relation to future career</li>
            </ul>
          </section>
          <h2>Experience</h2>
          <section class="indent">
            <h3>CTE Community Service Learning Days: Photo Restorations</h3>
            <p class="indent"><strong>Duties:</strong> Restore images to their best possible quality.</p>
            <p class="indent"><strong>Supervisor:</strong> Mr Cronin</p>
          </section>
          <section class="indent">
            <h3>Presidential Campaign Helping</h3>
            <p class="indent"><strong>Duties:</strong> Hold up signs, and call numbers asking for votes.</p>
          </section>
          <h2>Achievements</h2>
          <section class="indent">
            <h3>SkillsUSA State Competition</h3>
            <p class="indent"><i>Competed in Vermont state SkillsUSA competition for web design, finished in first place.</i></p>
          </section>
          <section class="indent">
            <h3>SkillsUSA National Competition</h3>
            <p class="indent"><i>Competed in nation-wide SkillsUSA competition for web design, finished in first place.</i></p>
          </section>
          <section class="indent">
            <h3>Community Service</h3>
            <p class="indent"><i>Participated in Community Service Learning Days</i></p>
          </section>
          <section class="indent">
            <h3>National Technical Honor Society</h3>
            <p class="indent"><i>Member of the National Technical Honor Society</i></p>
          </section>
          <section id="last-resume" class="indent">
            <h3>Certified Web Designer Associate (CWDSA)</h3>
            <img  src="img/webprofessionals-thumb.jpg" alt="Certified Web Designer Associate Certificate" id="light-button">
          </section>

          <div class="lightbox">
            <img src="about:blank" id="lightbox-image" alt="Certified Web Designer Associate Certificate">
          </div>

        </div>

      </div>
    </main>
    <?php include 'footer.php' ?>
    <script src="js/lightbox.js"></script>
  </body>
</html>
