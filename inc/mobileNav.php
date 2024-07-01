<div class="container newMobBar">
    <span><i onclick=showSideBar() class="fa-solid fa-bars menuBtn"></i></span>

    <!-- Mobile navbar -->
    <nav class="mobnavbar">
        <div class="box">
            <a href="index.php">EK</a>
            <!-- <h2>EK</h2> -->
        </div>

        <span><i onclick="hideSidebar()" class="fa-solid fa-xmark closeMenu"></i></span>

        <ul class="mobnav__links">

            <li class="mobnav__item" onclick="hideSidebar()"><a href="<?= $aboutPage; ?>" class="mobnav__link">About Me</a></li>
            <li class="mobnav__item" onclick="hideSidebar()"><a href="<?= $projectSection; ?>" class="mobnav__link">My
                    Portfolio</a></li>
            <li class="mobnav__item" onclick="hideSidebar()"><a href="<?= $codePage; ?>" class="mobnav__link">Coding Examples</a></li>
            <li class="mobnav__item" onclick="hideSidebar()"><a href="<?= $scsPage; ?>" class="mobnav__link">SCS</a></li>
            <li class="mobnav__item" onclick="hideSidebar()"><a href="<?= $contactSection; ?>" class="mobnav__link">Contact
                    Me</a>
            </li>

        </ul>
        <a href="https://github.com/LizKodjo/Portfolio.git" target="_blank"><i
                class="fa-brands fa-github"></i></a>
    </nav>
</div>