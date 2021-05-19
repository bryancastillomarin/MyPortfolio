<?php
    require_once 'lang/lang.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bryan Castillo Marín</title>
    <link rel="icon" href="logo.svg" type="image/x-icon"/>


    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:wght@400;700&display=swap" rel="stylesheet">

    <!--Font awesome for icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!--Styles-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/all.min.css">

    <!--Scripts-->
    <!--Scripts to inject proyects-->
    <script src="js/projects-render.js" type="module" defer></script>
    <script src="js/projects-API.js" type="module" defer crossorigin="anonymous"></script>
    <!--Scripts to inject skills-->
    <script src="js/skills-render.js" type="module" defer></script>
    <script src="js/skills-API.js" type="module" defer crossorigin="anonymous"></script>
    <!--Script for dark mode-->
    <script src="js/darkmode.js"></script>
</head>
<body>
    <span class="darkmode">
        <i class="fas fa-cloud-moon"></i>
        <i class="fas fa-cloud-sun hidden"></i>
    </span>
    <header class="header">
        <div class="header__container flex flex-ai-c flex-jc-sb">
            <div class="logo flex flex-jc-c">
                <svg width="75" height="75" viewbox="0 0 75 75" xmlns="http://www.w3.org/2000/svg">
                    <path d="M37.5 5 L70 70 L5 70 Z" fill="none" stroke-width="3" stroke="black" class="svg" />
                    <text x="29" y="53" font-size="17" fill="black" class="svg-text">B</text>
                    <text x="38" y="53" font-size="17" fill="black" class="svg-text">M</text>
                    <text x="12" y="70" font-size="80" fill="black" class="svg-text">C</text>
                </svg>
            </div>
            <div class="languages flex flex-jc-se">
                <a href="#" class="language">EN</a>
                <a href="#" class="language">ES</a>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="main__container">
            <div class="wrapper">
                <section class="section aboutme">
                    <div class="title">
                        <span class="title-text"><?=$lang['aboutme']?></span> <!-- -- Cambiar --  -->
                    </div>
                    <div class="aboutme__photo">
                        <img src="img/photo.jpg" alt="photo" title="photo" class="aboutme__photo-img">
                    </div>
                    <div class="aboutme__description">
                        <p class="aboutme__description-text">
<!-- -- Cambiar --  -->     <?=$lang['description']?>
                        </p>
                    </div>
                </section>
                <section class="section myprojects">
                    <div class="title">
                        <span class="title-text"><?=$lang['projects']?></span> <!-- -- Cambiar --  -->
                    </div>
                    <div class="subtitle">
                        <span class="subtitle-text"><?=$lang['projects-desc']?></span> <!-- -- Cambiar --  -->
                    </div>
                    <div class="projects flex flex-ai-c flex-jc-c flex-fw-w">
                        <!--projects injected by projects-API.js-->
                    </div>
                </section>
                <section class="section myskills">
                    <div class="title">
                        <span class="title-text"><?=$lang['skills']?></span> <!-- -- Cambiar --  -->
                    </div>
                    <div class="subtitle">
                        <span class="subtitle-text"><?=$lang['skills-desc']?></span> <!-- -- Cambiar --  -->
                    </div>
                    <div class="skills flex flex-ai-c flex-jc-c flex-fw-w">
                        <!--skills injected by skills-API.js-->
                    </div>
                </section>
<!--            <section class="section myeducation">
                    <div class="title">
                        <span class="title-text">EDUCATION</span>
                    </div>
                    <div class="courses">
                        <div class="course">
                        </div>
                    </div>
                </section> -->
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="title">
            <span class="title-text"><?=$lang['contact']?></span> <!-- -- Cambiar --  -->
        </div>
        <div class="footer__container">
            <div class="social flex flex-ai-c flex-jc-se">
                <a href="#" class="social__icon">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://www.facebook.com/bryan.castillomarin/" target="_blank" class="social__icon">
                    <i class="fab fa-facebook-square"></i>
                </a>
                <a href="https://www.instagram.com/bryancastillomarin/" target="_blank" class="social__icon">
                    <i class="fab fa-instagram-square"></i>
                </a>
                <a href="https://www.linkedin.com/in/bryan-castillo-marin/" target="_blank" class="social__icon">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://github.com/bryancastillomarin" target="_blank" class="social__icon">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <div class="copyright">
<!-- -- Cambiar --  -->     <p class="copyright-text"><?=$lang['footer']?></p>
                <p class="copyright-text">Bryan Castillo Marín &copy; 2021</p>
            </div>
        </div>
    </footer>
</body>
</html>