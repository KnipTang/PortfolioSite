<?php
session_start();
$_SESSION['form_loaded_time'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="HeaderFooterMargin.js" defer></script>
    <script src="emailSubmit.js" defer></script>
    <script src="highlightActiveLink.js" defer></script>
    <script src="scollArrowDesc.js" defer></script>
    <!-- <script src="restartGIF.js" defer></script> -->
    <!-- <script src="TitlesMax3Lines.js" defer></script> -->

    <title>Portfolio</title>
</head>
<body class="site-section">
    <div class="header">
      <ul class="header-links">
          <li><a href="#home" class="nav-link">ARNE OLEMANS</a></li>
          <li><a href="#about" class="nav-link">ABOUT ME</a></li>
          <li><a href="#projects" class="nav-link">PROJECTS</a></li>
          <li><a href="#contact" class="nav-link">CONTACT</a></li>
      </ul>
    </div>

    <div class="site-body">

        <div class="site-body-Intro" id="home">
          <h1>ENGINE DEVELOPER</h1>
          <img src="images/BigPF_Pic.jpg" alt="">
        </div>

        <div class="site-body-AboutMe site-section" id="about">
          <p>I am <b>Arne Olemans</b>, I always dreamed of <b>world domination</b>, but my mother refused to fund those dreams. So I became a <b>curious</b> and <b>driven</b> individual with a lifelong passion for exploring technology and the world around me. From a young age, I've been fascinated by <b>software</b> and <b>technology</b>, starting with my early days of tinkering with Nintendo games and the family desktop PC. This curiosity has fueled my journey into understanding and creating within the software developent space with a special intrest in <b>Game Engine Development!</b></p>
          <div class="cv-container">
            <div class="button-container">
              <a href="CV/CV-Arne_OlemansV2.3.pdf" target="_blank">
                <button class="cv-button">
                  <img src="Symboles/SymbCV.png" alt="Symbol" class="button-icon"> CV
                </button>
              </a>
            </div>
            <!-- <div class="button-container">
              <a href="CV/CV-Arne_Olemans.pdf" target="_blank">
                <button class="cv-button">
                  <img src="Symboles/SymbCV.png" alt="Symbol" class="button-icon"> CV - UK/USA
                </button>
              </a>
            </div> -->
          </div>
        </div>

        <hr width="100%" size="2" class="site-section" id="projects">

        <div class="site-body-Projects">
            <ul class="projects-Title">
              <li>MY</li>
              <li>AMAZING</li>
              <li>PROJECTS</li>
              <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/202" target="_blank">[202]</a></li>
            </ul>
          <div class="projects">
            <div class="bigProjects">
              <div class="project-big">
                <div class="projectBig-main projectBig-main-one">
                  <img src="images/Projects/Project_GameEngine.jpg" alt="Cinque Terre" class="projectBig-img" width="600" height="400">
                  <a href="https://github.com/KnipTang/KnipTang-Engine" target="_blank" class="clickable-overlay"></a>
                  <a href="https://github.com/KnipTang/KnipTang-Engine" target="_blank"><img src="Symboles/SymbGitHub.png" alt="Symbol" class="project-github-icon project-github-icon-left"></a>
                </div>
                  <div class="projectBig-desc">
                    <div class="projectBig-Title"><b>KnipTang-Engine</b> - Custom C++ Game-Engine | <b id="project-type">Solo Project</b> | <b id="project-type">Jan 2024 - June 2024</b></div>
                    <div class="projectBig-Text">
                        <div class="projectBig-TextSkills">
                          <b class="projectBig-TestSkills-title">Used Skills</b>
                          <br>
                          <ul>
                            <li>C++</li>
                            <li>Github</li>
                            <li>Self-made AABB<br>collision system</li>
                            <li>SDL</li>
                            <li>GLM</li>
                            <li>XInput</li>
                            <li>SDL_Mixer</li>
                            <li>ImGui</li>
                            <li>SteamWorks</li>
                            <li>Visual Studio</li>
                          </ul>

                        </div>
                        <div class="projectBig-TextDesc">
                        The first game engine I ever made from scratch.
                        <br>
                        <br>
                        The creation of this game engine took my engineering, C++, and programming skills to a whole new level.                    
                        <br>
                        <br>
                        I learned so much about all kinds of different technical fields and concepts. It opened the world of all varying kinds of gameplay patterns and which ones are best to use in what situations and others you should better avoid.                    
                        <br>
                        <br>
                        All the different techniques on how you could optimize and be capable of rendering and controlling all sorts of massive infastructors within your applications. Those patterns refueled the passion I had for programming, in the same way excitement I had when I first started out programming.
                        Besides that, this project also taught me the crucial importance of good coding habits and practices, when working with a large code base that will keep increasing in size like this one did.                 
                        <br>
                        <br>
                        After finishing this engine I realized how much easier it has become for me to grasp concepts and tools in different game engines. Understanding the ins and outs of how game engines get developed greatly shifted my perception of game development overall.
                        <br>
                        <br>
                        I can say with certainty that developing this engine has been the most significant learning experience I had in my journey as a software engineer.
                        <br>
                        <br>
                        If you want to find more information about the technical aspects of this project feel free to visit my <a href="https://github.com/KnipTang/KnipTang-Engine" target="_blank">Github readme paper</a> associated with this project.
                      </div>    
                    </div>    
                  </div>
                  <div class="project-arrow project-arrow-down">&#x25BC;</div> <!-- Down Arrow -->
              </div>
              <div class="project-big">
                <div class="projectBig-main projectBig-main-two">
                  <img src="images/Projects/FlappyBird_Gif.gif" id="FlappyBird-gif" class="projectBig-img" alt="Cinque Terre" width="600" height="400">
                  <a href="https://github.com/KnipTang/FlappyBird-Genetic_Algorithm" target="_blank" class="clickable-overlay"></a>
                  <a href="https://github.com/KnipTang/FlappyBird-Genetic_Algorithm" target="_blank"><img src="Symboles/SymbGitHub.png" alt="Symbol" class="project-github-icon project-github-icon-right"></a>
                </div>
                <div class="projectBig-desc projectBig-desc-Second">
                  <!-- <img class="float-right" src="images/Projects/FlappyBird_Gif.gif" alt="flappy bird genertic algorithm gif"> -->
                  <div class="projectBig-Title"><b>Genetic algorithm</b> perfectly plays Flappy Bird with a <b>Neural Network</b> | <b id="project-type">Solo Project</b> | <b id="project-type">Sep 2023 - Dec 2023</b></div>
                  <div class="projectBig-Text">
                    <div class="projectBig-TextSkills">
                      <b class="projectBig-TestSkills-title">Used Skills</b>
                      <br>
                      <ul>
                        <li>C#</li>
                        <li>Unity</li>
                        <li>Github</li>
                        <li>Visual Studio</li>
                      </ul>
                    </div>
                    <div class="projectBig-TextDesc">     
                    This project was my introduction to neural network programming. 
                    <br>
                    <br>
                    When I came up with the idea to develop this project I had no clue where to start. I knew that there would be a lot of new concepts I needed to grasp to successfully complete this project. 
                    <br>
                    <br>
                    Besides all the technical concepts, the development of this project taught me something way more valuable. It taught me one of the most important thinking patterns I have learned about programming,
                    <br>
                    When trying to find solutions for problems you encounter while developing big or even small projects, it's of the highest importance to keep breaking down your problem into smaller pieces. Keep doing this until what seemed to be a gigantic unsolvable problem gets converted into lots of small easily solvable problems that have 9/10 times easy solutions.
                    <br>
                    <br>
                    If you want to find more information about the technical aspects of this project feel free to visit my <a href="https://github.com/KnipTang/FlappyBird-Genetic_Algorithm" target="_blank">Github readme paper</a> associated with this project.
                  </div>
                  </div>
                  </div>
                <div class="project-arrow project-arrow-down">&#x25BC;</div> <!-- Down Arrow -->
              </div>
              <div class="project-big">
                <div class="projectBig-main projectBig-main-one">
                  <video class="projectBig-img projectBig-video" width="320" height="240" controls="controls" loop autoplay muted>
                      <source src="images/Projects/Project_FormFrenzy.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                  </video>
                <div class="play-button"></div>
                  <!-- <img src="images/Projects/Project_FormFrenzy.mp4" alt="Cinque Terre" class="projectBig-img" width="600" height="400"> -->
                  <!-- <a href="https://lars-maes.itch.io/group06project" target="_blank" class="clickable-overlay"></a> -->
                  <a href="https://lars-maes.itch.io/group06project" target="_blank"><img src="Symboles/itch-io-brands-solid.svg" alt="Symbol" class="project-github-icon project-github-icon-left-up"></a>
                  <!-- <iframe width="600" height="400" id="project-video" src="https://www.youtube.com/embed/i8GtI_XY5JU" title="Form Frenzy Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
                </div>
                <div class="projectBig-desc">
                  <div class="projectBig-Title"><b>Form Frenzy</b> - Two-Player Party Co-Op form matcher - Programmer & Game Designer - Unity <img class="text-symbols" src="Symboles/unity-brands-solid.svg" alt=""> | <b id="project-type">Team Project</b> | <b id="project-type">Jan 2024 - June 2024</b></div>
                  <div class="projectBig-Text">
                    <div class="projectBig-TextSkills">
                      <b class="projectBig-TestSkills-title">Used Skills</b>
                      <br>
                      <ul>
                        <li>C#</li>
                        <li>Unity</li>
                        <li>Perforce</li>
                        <li>Visual Studio</li>
                      </ul>
                    </div>
                    <div class="projectBig-TextDesc">                  
                  Form Frenzy… The first project I would develop in a group setting.
                  <br>
                  <br>
                  The creation of this piece allowed me to experience the full-length process of developing an indie game title. From brainstorming in panic when all our ideas fell apart after a closer look at them, to scrapping all of them, starting over, and combining our ideas like real team players!
                  <br>
                  <br>
                  Besides teaching me a large amount about what makes a game stick and how to avoid implementing game-breaking features, the most important lesson I gained while developing Form Frenzy was without a doubt the aspects of the group dynamic that came with it. It taught me about the importance of open, direct communication, the highs and lows of working with others, and the groundbreaking upper hand you can gain when you're not alone to steer the ball in the right direction when it starts rolling.
                  <br>
                  <br>
                  Overall I can state that it was a mind-altering adventure working with this team. I will take the achievements I gained with me for the rest of my career, in as well as outside of the industry.
                  <br>
                  <br>
                  If you want to read more about the process of developing this project, you can read <a href="https://lars-maes.itch.io/group06project">the DevLogs on our itch.io page.</a>
                </div>
                </div>
                </div>

                <div class="project-arrow project-arrow-down">&#x25BC;</div> <!-- Down Arrow -->
              </div>
            </div>
            <div class="smallProjects">
              <div class="project-responsive">
              <div class="project">
                  <a href="https://github.com/KnipTang/Vulkan-2D_Engine" target="_blank">
                    <img src="images/Projects/Project_Vulkan.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                      <!-- <img src="Symboles/SymbGitHub.png" alt="Symbol" class="project-github-icon project-github-icon-right"> -->
                    <div class="desc">2D <b>Vulkan</b> Engine <br><b id="project-type">Solo Project</b></div>
                  </a>
                </div>
              </div>
              <div class="project-responsive">
                <!-- <div class="project" id="clickedd"> -->
                <div class="project">
                  <a href="https://kniptang.itch.io/ride-of-giri" target="_blank">
                    <img src="images/Projects/Project_RideOfGiri.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>Ride Of Giri</b> - Unwrap group GameJam project <br><b id="project-type">Team Project</b></div>
                </div>
                </a>
              </div>
              <div class="project-responsive">
                <div class="project">
                  <a href="https://github.com/KnipTang/Webcam_Face_Detection_Blur" target="_blank">
                    <img src="images/Projects/Project_OpenCV.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>BlurMePls</b> In-Real-Time webcam face detection blur - <b>OpenCV</b> <br><b id="project-type">Solo Project</b></div>
                </div>
                </a>
              </div>
              <div class="project-responsive site-section">
                <div class="project">
                  <a href="https://github.com/KnipTang/GameEngine_Pengo" target="_blank">
                    <img src="images/Projects/Project_Pengo.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>Pengo SEGA 1982</b> - Remake of Pengo made in my own Game-Engine(KnipTang-Engine) <br><b id="project-type">Solo Project</b></div>
                </div>
                </a>
              </div>
              <div class="project-responsive">
                <div class="project">
                  <a href="https://github.com/KnipTang/ReVengine" target="_blank">
                    <img src="images/Projects/Project_ReVengine.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>ReVengine</b> - FPS focussed DirectX11 C++ custom Game-Engine <br><i><b>Work in Progress</b></i> <br><b id="project-type">Solo Project</b></div>
                </div>
                </a>
              </div>
              <div class="project-responsive">
                <div class="project">
                  <a href="https://github.com/KnipTang/AI_BehaviourTrees_NPC" target="_blank">
                    <img src="images/Projects/Project_AIBehaviourTreeNPC.jpg" class="project-img" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>Behaviour Tree</b> - AI for realistic NPC behaviour in a city environment <br><i><b>Work in Progress</b></i> <br><b id="project-type">Solo Project</b></div>
                </div>
                </a>
              </div>
              <!--
              <div class="project-responsive site-section">
                <div class="project">
                  <a href="https://github.com/KnipTang/DirectX_Rasterizer" target="_blank">
                    <img src="images/Projects/Project_DirectX.jpg" alt="Cinque Terre" width="600" height="400">
                  <div class="desc"><b>Rasterizer</b> - DirectX</div>
                </div>
                </a>
              </div>
              -->
            </div>
          </div>
        </div>
          
          <hr width="100%" size="2" id="contact">

          <div class="site-body-Contact">
            <p>Contact Me!</p>
            
          <form id="contactForm" action="send_email.php" method="POST" class="contact-form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="10" required></textarea>

            <input type="text" name="contact_honeypot" id="contact_honeypot" style="display:none;">

            
            <button type="submit" data-debug-message="Stop trying to enable it you fack head, dead is dead :pp">Send Message!</button>
          </form>
         <!-- <div id="responseMessage"></div> -->
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="footer-CV cv-container">
        <div class="button-container">
          <a href="CV/CV-Arne_OlemansV2.3.pdf" target="_blank">
            <button class="cv-button">
              <img src="Symboles/SymbCV.png" alt="Symbol" class="button-icon"> CV
            </button>
          </a>
        </div>
        <!-- <div class="button-container cv-UK">
          <a href="CV/CV-Arne_Olemans.pdf" target="_blank">
            <button class="cv-button">
              <img src="Symboles/SymbCV.png" alt="Symbol" class="button-icon"> CV - UK/USA
            </button>
          </a>
        </div> -->
      </div>
      <div class="footer-Contact">
        <p><a href="mailto:arne.olemans@outlook.com">arne.olemans@outlook.com</a></p>
      </div>
      <ul class="footer-Links">
        <li><a href="https://github.com/KnipTang" target="_blank"><img src="Symboles/SymbGitHub.png" alt="Symbol" class="button-icon"></a></li>
        <li><a href="https://www.linkedin.com/in/arne-olemans-5b0a03253/" target="_blank"><img src="Symboles/SymbLinkedIn.png" alt="Symbol" class="button-icon"></a></li>
      </ul>
    </div>
</body>
</html>