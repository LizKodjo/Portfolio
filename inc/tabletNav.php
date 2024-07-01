<div class="container tabletNavbar">
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
                <a href="https://github.com/LizKodjo/Portfolio.git" target="_blank"><i
                        class="fa-brands fa-github"></i></a>
            </div>
            <div id="tabMain">
                <button class="openbtn" onclick="openNav()">
                    <span><i class="fa-solid fa-bars tabletOpen"></i></span>
                </button>
            </div>
        </div>