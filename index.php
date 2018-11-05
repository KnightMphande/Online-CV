<!-- Knight B. Mphande
Online-CV Project -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Online CV</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"  >
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/personal.css">
</head>

<body bgcolor="#E6E6FA">
<?php //include 'functions.php';?>
  <!-- Navigation bar -->
  <nav class="navbar is-link is-fixed-top">
    <div class="navbar-brand">
      <div class="navbar-burger burger" data-target="navbar">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="navbar" class="navbar-menu">
      <div class="navbar-end">
        <a class="navbar-item" href="#about">
          <span class="icon">
            <i class="fas fa-info"></i>
          </span>
          <span>About</span>
        </a>
        <a class="navbar-item" href="#education">
          <span class="icon">
            <i class="fas fa-bars"></i> 
          </span>
          <span>Education</span>
        </a>
        <a class="navbar-item" href="#resume">
          <span class="icon">
            <i class="fas fa-file-alt"></i>
          </span>
          <span>Resume</span>
        </a>
        <a class="navbar-item" href="#portfolio">
          <span class="icon">
            <i class="fas fa-th-list"></i>
          </span>
          <span>Portfolio</span>
        </a>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <section class="hero is-link is-fullheight is-fullheight-with-navbar">
    <div class="hero-body">
      <div class="container">Hello! I'm
        <h1 class="title is-1">
        Knight B. Mphande
        </h1>
        <h2 class="subtitle is-3">
          Full-Stack Web Developer
        </h2>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="section-heading">
      <h3 class="title is-2">About Me</h3>
      <div class="container">

        <p>
          I am a full stack junior web developer with experience in PHP, jQuery and C++; 
          and I am currently a student at CodeSpace
        </p>
        <p>
        I care deeply about creating world-class, useful 
        and beautiful products that help people and make a difference. 
        My approarch to problem solving involves a thorough collection and analysis of data 
        about a specific problem before implimenting a solution. 
        User experience comes first and is central to everything I do.
        </p>
      </div>
    </div>

    
      <div class="column">

      <div class="column">
        <!-- Skills -->
        <div class="card">
          <div class="card-content skills-content">
            <h3 class="title is-4">Skills</h3>
            <div class="content">

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>PHP:</strong>
                      <br>
                      <progress class="progress is-primary" value="90" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>git:</strong>
                      <br>
                      <progress class="progress is-primary" value="55" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>C++:</strong>
                      <br>
                      <progress class="progress is-primary" value="75" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>Databases</strong>
                      <br>
                      <progress class="progress is-primary" value="66" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>

              <article class="media">
                <div class="media-content">
                  <div class="content">
                    <p>
                      <strong>HTML5/CSS3</strong>
                      <br>
                      <progress class="progress is-primary" value="90" max="100"></progress>
                    </p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Education -->
  <section class="section" id="education">
    <div class="section-heading">
      <h3 class="title is-2">Education</h3>
    </div>
    <div class="container">
      <div class="columns">
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">CodeSpace, Cape Town</h4>
              Learn how to make front-end using html.
              Web designing
            </div>
          </div>
        </div>
        <div class="column">
          <div class="box">
            <div class="content">
              <h4 class="title is-5">University of Witwatersrand (Wits) [2015 – 2017]</h4>
              Bachelor of Science in Engineering BSc (Electrical)
            </div>
          </div>
        </div>
      </div>

      <div class="columns">
            <div class="column">
            <div class="box">
                <div class="content">
                <h4 class="title is-5">Education Alive School [2007 – 2014]</h4>
                National Senior Certificate/Matric
                </div>
            </div>
            </div>
      </div>
    </div>
  </section>

  <!-- Resume -->
  <section class="section" id="resume">
    <div class="section-heading">
      <h3 class="title is-2">Resume</h3>
      <h4 class="subtitle is-5">More about my past</h4>
      <a href="Curriculum_Vitae_Knight Mphande.pdf" 
          class="button is-link is-medium">
        <span class="icon">
          <i class="fas fa-file-alt"></i>
        </span>
        <span>Download My Resume</span>
      </a>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="section" id="portfolio">
    <div class="container">
      <div class="section-heading">
        <h3 class="title is-2">Portfolio</h3>
        <h4 class="subtitle is-5">My latest works</h4>
      </div>
      <br>

      <div class="container portfolio-container">
        <div class="columns">
          <div class="column is-4">

            <!-- marvel quiz -->
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <span>Quiz </span>
                  <span class="is-pulled-right">
                    <a href="https://github.com/KnightMphande/quiz3">
                    </a>
                  </span>
                </p>
              </header>
              <div class="card-content">
                <figure class="image">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCw4h1SOc6FCe40R2jz0UMJqGeZ4kuVaN3277FMSetL7wYxGBb">
                </figure>
              </div>
              <footer class="card-footer">
                <a href="https://github.com/KnightMphande/quiz3" class="card-footer-item">Preview</a>
                <!-- <a href="https://github.com/KnightMphande" class="card-footer-item">Preview</a> -->

              </footer>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  
  <div class="columns is-height">
      <div class="column">

        <!-- Contact -->
        <div class="card">
          <div class="card-content">
            <h3 class="title is-4">Contact details</h3>

            <div class="content">
              <table class="table-profile">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>076 705 6000</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>sibusiso.mpande@gmail.com</td>
                </tr>
              </table>
            </div>
            <br>
            <div class="button is-centered">
              <a href="https://github.com/KnightMphande" class="link to-profile">Github</a>
              <a href="https://www.linkedin.com/in/knight-mphande-361683152/" class="link to-profile">LinkedIn</a>
            </div>
          </div>
        </div>
      </div>

</body>

</html>