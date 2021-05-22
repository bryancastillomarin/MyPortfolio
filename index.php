<?php
    require_once 'lang/lang.php';

/*    if(isset($_POST['lang'])) {
        $lang = $_POST['lang'];
        require_once "lang/$lang.php";
    } else {
        require_once 'lang/en.php';
    }
*/
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
    <script defer>
        //gettig language from PHP
        const currentLang = "<?php echo $language; ?>" ? "<?php echo $language; ?>" : 'en';
    </script>

    <script src="js/languages.js"></script>
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
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                    width="75" height="75" viewBox="0 0 355 356"
                    preserveAspectRatio="xMidYMid meet">
                    <metadata>
                    Created by potrace 1.16, written by Peter Selinger 2001-2019
                    </metadata>
                    <g transform="translate(0.000000,356.000000) scale(0.100000,-0.100000)"
                    fill="#000000" stroke="none" class="svg">
                    <path d="M1555 3080 l-220 -441 -80 -52 c-149 -97 -262 -212 -370 -378 -157
                    -239 -235 -502 -237 -803 l-1 -141 -308 -617 -309 -618 1745 0 1745 0 -656
                    1311 c-360 722 -649 1309 -640 1306 8 -3 32 -9 52 -13 56 -10 181 -70 250
                    -119 148 -106 254 -259 345 -500 35 -94 39 -100 66 -100 27 0 28 1 26 50 -5
                    112 -35 569 -46 700 l-12 140 -31 3 c-27 3 -33 -1 -44 -30 -24 -60 -64 -117
                    -95 -134 -44 -23 -92 -15 -210 38 -120 53 -236 92 -325 108 l-66 11 -179 360
                    -180 359 -220 -440z m391 -272 c-6 -4 -36 -8 -67 -8 -53 0 -201 -26 -278 -49
                    -19 -6 -36 -9 -38 -7 -2 2 45 101 104 220 l108 216 91 -182 c62 -124 88 -185
                    80 -190z m564 -1098 c295 -589 475 -960 466 -960 -7 0 -42 -37 -77 -82 -132
                    -171 -276 -300 -410 -368 -113 -58 -325 -95 -480 -84 -268 20 -479 116 -640
                    293 -209 229 -300 577 -271 1038 6 94 21 219 33 279 20 99 32 130 131 328 61
                    121 124 237 141 258 37 47 142 126 212 160 111 56 241 88 387 96 27 2 41 -23
                    508 -958z m-1796 -792 c61 -187 158 -353 293 -497 76 -83 192 -177 266 -216
                    20 -11 37 -23 37 -27 0 -5 -234 -8 -520 -8 l-520 0 207 415 c115 228 209 415
                    209 415 1 0 14 -37 28 -82z m2435 -485 l131 -263 -375 0 c-206 0 -375 3 -375
                    8 1 4 26 23 57 42 126 79 281 244 386 411 23 37 43 66 43 65 1 0 61 -119 133
                    -263z"/>
                    <path d="M1402 1494 c21 -9 38 -24 42 -37 7 -29 7 -425 0 -454 -4 -12 -21 -28
                    -42 -37 -35 -15 -27 -16 153 -13 160 2 196 6 228 21 107 53 114 189 11 239
                    l-43 21 29 17 c71 44 80 148 17 205 -46 43 -106 54 -285 53 -141 0 -146 -1
                    -110 -15z m286 -28 c64 -33 87 -97 57 -155 -22 -44 -70 -63 -153 -59 l-67 3
                    -3 99 c-1 55 0 106 2 113 7 18 129 17 164 -1z m30 -272 c15 -11 35 -37 46 -58
                    16 -33 17 -41 5 -73 -8 -20 -26 -45 -41 -56 -30 -22 -115 -34 -173 -23 l-35 7
                    0 116 0 116 85 -5 c65 -3 92 -9 113 -24z"/>
                    <path d="M1850 1492 c20 -10 37 -27 41 -42 9 -31 11 -397 3 -438 -5 -23 -15
                    -34 -43 -45 -35 -15 -34 -15 64 -15 88 0 96 1 68 11 -18 7 -37 17 -43 23 -7 7
                    -9 81 -8 219 l3 209 106 -229 c58 -127 110 -229 115 -227 5 1 54 101 110 222
                    55 121 104 223 107 227 11 10 8 -400 -3 -417 -5 -8 -24 -20 -42 -27 -29 -10
                    -17 -11 92 -11 100 0 119 2 95 10 -57 20 -55 13 -55 268 0 255 -2 248 55 268
                    25 9 17 11 -53 9 l-84 -2 -96 -212 c-54 -117 -100 -213 -103 -213 -3 0 -51 96
                    -106 213 l-99 212 -80 2 -79 3 35 -18z"/>
                    </g>
                </svg>
            </div>
            <div class="languages flex flex-jc-se">
                <a href="" class="language">EN</a>
                <a href="" class="language">ES</a>
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
                <a href="contact" class="social__icon">
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