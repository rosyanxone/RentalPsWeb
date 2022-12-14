<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Web Icon -->
    <title>Pixel: Rental Ps</title>
    <link rel="shortcut icon" href="img/background/logo-p.png">
    
    <!-- Link Font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/213e56f9ea368890b9d2da0577e49dab?family=Zona+Pro" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.cdnfonts.com/css/segoe-ui-4?styles=18006,18004" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/style-mobile.css">
</head>
<body>
    <!-- HEADER -->
    <header id="home">
        <!-- navbar -->
        <nav class="mode-bg">
            <div class="logo">
                <a href="index.html" class="mode-text">
                    PIXEL
                </a>
            </div>

            <ul>
                <li><a class="mode-text" href="rent.php">Rent</a></li>
                <li><a class="mode-text" href="index.html#about">About Us</a></li>
                <li><a class="mode-text" href="#contact">Contact Us</a></li>
            </ul>
            <div>
                <input type="checkbox" class="checkbox" id="chk"/>
                <label class="label" for="chk">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                    <div class="ball"></div>
                </label>
            </div>

            <div class="menu-toggle">
                <input type="checkbox" id="menTog"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!-- end navbar -->
    </header>
    <!-- END HEADER -->
    

    <!-- MAIN CONTENT -->
    <section>
        <!-- price list -->
        <div class="price-container">
            <h3>Price List</h3>
            <div class="price-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope='col'>No</th>
                            <th scope='col'>Brand</th>
                            <th scope='col'>Type</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>P/week</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope='row'>1</td>
                            <td>Playstation</td>
                            <td>Ps 3</td>
                            <td>Rp.7000/day</td>
                            <td><b>Rp.39900/week</td>
                        </tr>
                        <tr>
                            <td scope='row'>2</td>
                            <td>Playstation</td>
                            <td>Ps 4</td>
                            <td>Rp.10000/day</td>
                            <td><b>Rp.64900/week</td>
                        </tr>
                        <tr>
                            <td scope='row'>3</td>
                            <td>Playstation</td>
                            <td>Ps 5</td>
                            <td>Rp.12000/day</td>
                            <td><b>Rp.79900/week</td>
                        </tr>
                        <tr>
                            <td scope='row'>4</td>
                            <td>Xbox</td>
                            <td>Xbox One</td>
                            <td>Rp.9000/day</td>
                            <td><b>Rp.59900/week</td>
                        </tr>
                        <tr>
                            <td scope='row'>5</td>
                            <td>Xbox</td>
                            <td>Xbox One X</td>
                            <td>Rp.11000/day</td>
                            <td><b>Rp.69900/week</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- end price list -->
        
        <!-- form -->
        <div class="form-container">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L40,170.7C80,181,160,203,240,192C320,181,400,139,480,133.3C560,128,640,160,720,160C800,160,880,128,960,133.3C1040,139,1120,181,1200,170.7C1280,160,1360,96,1400,64L1440,32L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path></svg>
            <div class="form-rental" id="formulir">
                <h3>Rent Form</h3>
                <form method="POST" action="struck.php">
                    <label for="">Nama <em>&#x2a;</em></label>
                    <input class="inputan" type="text" name="nama" required>
                    
                    <div class="radio-console">                        
                        <label for="">Choose Console <em>&#x2a;</em></label>
                        <div class="console-type">
                            <label class="console ps" for="console">
                                <input type="radio" checked="checked" name="console" class="radio" value="Playstation" id="" onclick="onLoad()">
                                <div>Playstation</div>
                            </label>
                            <label class="console xbox" for="console">
                                <input type="radio" name="console" class="radio" value="Xbox" id="" onclick="onLoad2()">
                                <div>Xbox</div>
                            </label>
                        </div>
                        
                        <div class="console-type group">
                            <label for="">Type:</label>
                            <div id="group1" class="show console-group">
                                <select name="ps">
                                    <option value="Ps 3">Ps 3</option>
                                    <option value="Ps 4">Ps 4</option>
                                    <option value="Ps 5">Ps 5</option>
                                </select>
                            </div>
                            
                            <div id="group2" class="hide console-group">
                                <select name="xbox">
                                    <option value="Xbox One">Xbox One</option>
                                    <option value="Xbox One X">Xbox One X</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        
                    <label for="">Rental Duration <em>&#x2a;</em></label>
                    <input class="inputan" type="number" name="duration" placeholder="day(s)" required>

                    <label for="">Alamat <em>&#x2a;</em></label>
                    <textarea name="address" required="" rows="4"></textarea>
                    
                    <div class="success-btn submit-sec">
                        <p style="font-size: 12px;"><em>&#x2a;</em>  you may check the price above this form</p>
                        <button class="btn" name="rental" onclick="btnClick()">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end form -->
    </section>
    <!-- END MAIN CONTENT -->

    <!-- FOOTER -->
    <footer class="mode-bg">
        <div class="footer-container">
            <div class="footer-title" id="contact">
                <h2>CONTACT US</h2>
            </div>
            <div class="footer-contact-item">
                <div class="footer-item">
                    <h4>Location</h4>
                    <p>28 Jackson Blvd Ste 1020 Chicago<br>IL 60604-2340<br>Phone: +628 135 158 0524</p>
                </div>
                <div class="footer-item">
                    <h4>Find Us On</h4>
                    <div class="circle-container">
                        <!-- salah satu fitur pop up box (confirm) -->
                        <div class="circle ig">
                            <a href="https://www.instagram.com/pixel" onclick="return confirm('You will be redirected to other website.');"><img src="img/media-social/instagram.png" alt=""></a>
                        </div>
                        <div class="circle fb">
                            <a href="https://www.facebook.com/pixel" onclick="return confirm('You will be redirected to other website.');"><img src="img/media-social/facebook.png" alt=""></a>
                        </div>
                        <div class="circle wa">
                            <a href="https://www.whatsapp.com/pixel" onclick="return confirm('You will be redirected to other website.');"><img src="img/media-social/whatsapp.png" alt=""></a>
                        </div>
                        <div class="circle tw">
                            <a href="https://www.twitter.com/pixel" onclick="return confirm('You will be redirected to other website.');"><img src="img/media-social/twitter.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="copyright">?? 2022 <a href="https://instagram.com/rosyanxone/">rosyanxone</a>. All rights reserved.</div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER -->
    
    <!-- javascript -->
    <script>
        function btnClick() {
            document.location.href = "struck.php";
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="js/dark-mode.js"></script>
    <script src="js/navbar-mobile.js"></script>
    <script src="js/pop-up-box.js"></script>
    <script src="https://kit.fontawesome.com/a374d5ed26.js" crossorigin="anonymous"></script>
    <script>
        function onLoad() {
            //method for button times
            var group1 = document.getElementById("group1");
            group1.classList.remove('hide');
            group1.classList.add('show');
            
            var group2 = document.getElementById("group2");
            group2.classList.remove('show');
            group2.classList.add('hide');
            }


            function onLoad2() {
            //method for button times
            var group2 = document.getElementById("group2");
            group2.classList.remove('hide');
            group2.classList.add('show');
            
            var group1 = document.getElementById("group1");
            group1.classList.remove('show');
            group1.classList.add('hide');
            }
    </script>
</body>
</html>