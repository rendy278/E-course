<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300&family=Montserrat:wght@400;500;600;700;800;900&family=Playfair+Display:wght@600&family=Poppins:wght@500&family=Sacramento&family=Work+Sans:ital,wght@0,400;1,300&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
</head>

<body>
    <nav>
        <div class="container">
            <div class="nav__container">
                <a class="logo" href="education.html"><i class="uil uil-blogger-alt"></i>RumahJawir.</a>
                <ul class="nav__menu">
                    <li>
                        <a href="education.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="courses.html">Courses</a>
                    </li>
                    <li>
                        <a href="#" onclick="scrollToSmoothly(document.querySelector('nav').offsetTop, 400)">Contact</a>
                    </li>
                    <li>
                        <a href="https://github.com/rendy278/E-course"><svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 24 24"
                                id="github" width="30px" height="30px">
                                <path fill="#000000"
                                    d="M12,2.2467A10.00042,10.00042,0,0,0,8.83752,21.73419c.5.08752.6875-.21247.6875-.475,0-.23749-.01251-1.025-.01251-1.86249C7,19.85919,6.35,18.78423,6.15,18.22173A3.636,3.636,0,0,0,5.125,16.8092c-.35-.1875-.85-.65-.01251-.66248A2.00117,2.00117,0,0,1,6.65,17.17169a2.13742,2.13742,0,0,0,2.91248.825A2.10376,2.10376,0,0,1,10.2,16.65923c-2.225-.25-4.55-1.11254-4.55-4.9375a3.89187,3.89187,0,0,1,1.025-2.6875,3.59373,3.59373,0,0,1,.1-2.65s.83747-.26251,2.75,1.025a9.42747,9.42747,0,0,1,5,0c1.91248-1.3,2.75-1.025,2.75-1.025a3.59323,3.59323,0,0,1,.1,2.65,3.869,3.869,0,0,1,1.025,2.6875c0,3.83747-2.33752,4.6875-4.5625,4.9375a2.36814,2.36814,0,0,1,.675,1.85c0,1.33752-.01251,2.41248-.01251,2.75,0,.26251.1875.575.6875.475A10.0053,10.0053,0,0,0,12,2.2467Z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
                <button id="open-menu-btn">
                    <i class="uil uil-bars"> </i>
                </button>
                <button id="close-menu-button">
                    <i class="uil uil-multiply"></i>
                </button>
            </div>
        </div>
    </nav>
    <section class="form_content" id="contact">
        <div class="container">
            <div class="form">
                <div class="contact-info">
                    <h3 class="title_left">Ayo daftarkan dirimu di RumahJawir</h3>
                    <br>
                    <h5 class="txt">RumahJawir adalah tempat belajar yang <span class="ketik"></span></h5>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                        dolorum adipisci recusandae praesentium dicta!
                    </p>

                    <div class="info">
                        <div class="information">
                            <img src="location-point.svg" class="icon" alt="" />
                            <p>Jakarta Barat</p>
                        </div>
                        <div class="information">
                            <img src="envelope-check.svg" class="icon" alt="" />
                            <p>kepolaumautauaja@gmail.com</p>
                        </div>
                        <div class="information">
                            <img src="incoming-call.svg" class="icon" alt="" />
                            <p>+62-831-2289-5534</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons">
                            <a href="#">
                                <i class="uil uil-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="uil uil-whatsapp"></i>
                            </a>
                            <a href="#">
                                <i class="uil uil-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="uil uil-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <span class="circle one"></span>
                    <span class="circle two"></span>

                    <form action="contact.php" autocomplete="" onsubmit="notif()" method="post">
                        <h3 class="title">Contact us</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input" />
                            <label for="">Name</label>
                            <span>Name</span>
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input" />
                            <label for="">Email</label>
                            <span>Email</span>
                        </div>
                        <div class="input-container">
                            <input type="number" name="phone" class="input" />
                            <label for="">Phone</label>
                            <span>Phone</span>
                        </div>
                        <div class="input-container">
                            <input type="text" name="address" class="input" />
                            <label for="">Address</label>
                            <span>Address</span>
                        </div>
                        <div class="input-container">
                            <input type="date" name="date" class="input" />
                            <label for="">Date</label>
                            <span>Date</span>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input"></textarea>
                            <label for="">Message</label>
                            <span>Message</span>
                        </div>
                        <input type="submit" value="Submit" class="btn" name="sendd"></input>
                    </form>
                </div>
            </div>
                <?php
            if(isset($_POST['sendd'])){
                $nama = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $date = $_POST['date'];
                $message = $_POST['message'];
            }
            if(isset($_POST['sendd'])){
                echo "<table border=1>";
                echo "<th colspan='2'>TERIMA KASIH TELAH MENDAFTAR</th>";
                echo "<tr><td>NAMA :</td><td>$nama</td></tr>";
                echo "<tr><td>EMAIL :</td><td>$email</td></tr>";
                echo "<tr><td>PHONE :</td><td>$phone</td></tr>";
                echo "<tr><td>ADDRESS :</td><td>$address</td></tr>";
                echo "<tr><td>DATE :</td><td>$date</td></tr>";
                echo "<tr><td>MESSAGE :</td><td>$message</td></tr>";
                echo "</table>";
            }
            ?>
        </div>
    </section>
    <footer>
        <div class="container footer__container">
            <div class="footer__1">
                <a href="education.html" class="footer__logo">
                    <h4><i class="uil uil-blogger-alt"></i>RumahJawir</h4>
                </a>
                <p>
                    Tempat belajar yang <span><br /></span>menyenangkan
                </p>
            </div>

            <div class="footer__2">
                <h4>Permalink</h4>
                <ul class="permalinks">
                    <li>
                        <a href="education.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="courses.html">Courses</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="footer__2">
                <h4>Website made by</h4>
                <ul class="permalinks">
                    <li>
                        <i class="uil uil-html5-alt"> HTML</i>
                    </li>
                    <li>
                        <i class="uil uil-css3-simple"> CSS</i>
                    </li>
                    <li>
                        <i class="uil uil-java-script"> JAVASCRIPT</i>
                    </li>
                    <li>
                        <i>$ PHP</i>
                    </li>
                </ul>
            </div>

            <div class="footer__4">
                <h4>Contact Us</h4>
                <div>
                    <p>+62-831-2289-5534</p>
                    <p>kepolaumautauaja@gmail.com</p>
                </div>
                <ul class="footer__Socials">
                    <li>
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="uil uil-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__copy-right">
            <small>CopyRight &copy; RumahJawir</small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="contact.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                clickable: true,
            },
        });
    </script>

</body>

</html>
