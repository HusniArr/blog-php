<body>
    <div class="app">
        <div class="header" id="top">
            <div class="logo">
                <a href="index.html">
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
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li class="dropdown">Tutorial<button class="icon">&rsaquo;</button>
                    <ul class="dropdown-content">
                        <li><a href="tutorial.html">PHP</a></li>
                        <li><a href="tutorial.html">PYTHON</a></li>
                        <li><a href="tutorial.html">JAVA</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="login.html">Login</a></li>
            </ul>
        </div>