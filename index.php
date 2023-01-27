<?php
require_once('./config/database.php');
require_once('./config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web Developer, Backend Engineer, Blogger, Youtuber">
    <title>BLOGGER</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
</head>
<body>
    <div class="app">
        <div class="header" id="top">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/img/logo/shark-logo.jpg" alt="logo">
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
        <div class="row">
            <div class="col-3">
                <div class="sidebar">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="dropdown">Tutorial<button class="icon">&rsaquo;</button>
                            <ul class="dropdown-content">
                                <li><a href="tutorial.html">PHP</a></li>
                                <li><a href="tutorial.html">Node</a></li>
                                <li><a href="tutorial.html">Python</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.html">Login</a></li>
                    </ul>
                    <hr class="divider">
                    <div class="motivasi">
                        <h3>Motivasi:</h3> 
                        <p>Jangan pernah berhenti untuk terus belajar menjadi lebih baik lagi</p>
                        <h3>Semboyan:</h3> 
                        <p>Jogo Diri, Jogo Ati</p>
                    </div>
                </div>
                 
            </div>
            <div class="col-9">
                <div class="content">
                    <div class="row">
                        <div class="col-8">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Home</li>
                                </ol>
                            </nav>
                            <div class="hero">
                                <h1>Home</h1>
                                <p>Salam kenal dari husni selaku <strong>author</strong> situs ini. Semoga hari - hari anda diselimuti dengan penuh warna keindahan. Disini merangkum banyak materi pemrograman di mulai dari dasar hingga tingkat lanjutan. Apa yang kami bagikan semoga bisa menjadi ilmu yang bermanfaat dan bisa disalurkan kembali kepada mereka yang membutuhkan akan dunia pengkodean atau pemrogaman.</p>
                            </div>
                            <h1>Latest Post</h1>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#">
                                        <div class="card">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/C_Hello_World_Program.png" alt="">
                                            <h4>Hello World #PHP</h4>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                                        </div>
            
                                    </a>           
                                    
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div class="card">
                                                <img src="https://images.interestingengineering.com/images/FEBRUARY/programming_languages5.jpg" alt="">
                                                <h4>Hello World #NODE</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#">
                                        <div class="card">
                                                <img src="https://miro.medium.com/max/1024/1*KzqSk2ixY2KpWMuiw4U9Wg.png" alt="">
                                                <h4>Hello World #PYTHON</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    
                                                    
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#">
                                        <div class="card">
                                                <img src="https://miro.medium.com/max/1024/1*KzqSk2ixY2KpWMuiw4U9Wg.png" alt="">
                                                <h4>Hello World #Java</h4>
                                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    
                                                    
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="category-post">
                                <h2>Category</h2>
                                <p><a href="#">PHP</a></p>
                                <p><a href="#">Node</a></p>
                                <p><a href="#">Python</a></p>
                                <p><a href="#">Java</a></p>
                            </div> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="social">
                <span><a href="https://facebook.com" target="_blank">Facebook</a></span>
                <span><a href="https://instagram.com" target="_blank">Instagram</a></span>
                <span><a href="https://youtube.com" target="_blank">Youtube</a></span>
            </div>
            <div class="copyright">
                <span>&copy;Copyright - 2023. All Rights Reserved</span>
            </div>
        </div>
        <div id="back-to-top">
            <img src="assets/img/icon/arrow-24.png" alt="curly-arrow">
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>
</html>