<body>
    <div class="app">
        <div class="header" id="top">
            <div class="logo">
                <a href="index.php">
                    <img src="<?php  BASE_URL ?>assets/img/logo/shark-logo.jpg" alt="logo">
                </a>
            </div>
            <div class="navbar">
                <div class="toggle-bar" onclick="toggleMenu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="search">
                    <form action="#">
                        <input type="text" placeholder="Search Type..." aria-placeholder="Search Type...">
                        <button>Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="menu" id="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="https://husni-resume.netlify.app" target="_blank">About</a></li>
                <li class="dropdown">Tutorial<button class="icon">&rsaquo;</button>
                    <ul class="dropdown-content">
                        <li><a href="tutorial.php">PHP</a></li>
                        <li><a href="tutorial.php">PYTHON</a></li>
                        <li><a href="tutorial.php">JAVA</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>