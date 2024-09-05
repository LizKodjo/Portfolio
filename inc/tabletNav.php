<div class="container tabletNavbar">

    <!-- <div class="container newtabHamburger"> -->
    <!--  -->
    <!-- <button class="tabHamburger">
        <div class="bar"></div>
    </button> -->


    <div id="tabSidebar" class="tabNavbar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">X</a>
        <!-- <div class="box tabLogo">
                    <a href="index.html" class="logoText">EK</a>
                </div> -->
        <!-- <a href="index.html">EK</a> -->
        <a href="<?= $aboutPage; ?>" onclick="closeNav()">About Me</a>
        <a href="<?= $projectSection; ?>" onclick="closeNav()">My Portfolio</a>
        <a href="<?= $codePage; ?>" onclick="closeNav()">Coding Examples</a>
        <a href="<?= $scsPage; ?>" onclick="closeNav()">SCS</a>
        <a href="<?= $contactSection; ?>" onclick="closeNav()">Contact Me</a>
        <div class="tabSocial">
            <a href="https://github.com/LizKodjo/Portfolio.git" target="_blank"><i class="fa-brands fa-github"></i></a>
            <a href="https://www.linkedin.com/in/elizabeth-kodjo/" target="_blank"><i
                    class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
    <div id="tabMain">
        <!-- <nav class="newBurgerBtn">
            <div class="hamburger-menu openbtn">
                <div class="ham-bar bar-top"></div>
                <div class="ham-bar bar-mid"></div>
                <div class="ham-bar bar-bottom"></div>
            </div>
        </nav> -->
        <button class="openbtn" onclick="openNav()">
            <span><i class="fa-solid fa-bars tabletOpen"></i></span>
        </button>
    </div>

    <!-- <button class="tabHamburger">
        <div class="bar"></div>
    </button> -->
</div>