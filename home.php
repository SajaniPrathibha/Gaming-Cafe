<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Hstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Home</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Gammers</a>
        <ul class="nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="aboutUs.php">About</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="tournement.php">Tournament</a></li>
            <li><a href="#">Book your seat</a></li>
        </ul>
        <div class="action">
            <div class="searchbx">
                <a href="#"><i class='bx bx-search'></i></a>
                <input type="text" placeholder="Search Games">
            </div>
        </div>
        <div class="toggleMenu" onclick="toggleMenu();"></div>
    </header>
    
    <!-- Home Banner-->
    <div class="banner">
        <div class="bg">
            <div class="content">
                <h2>A New Home For <br> Game Lovers</h2>
                <p>asfayuufhidgysugh asdgh</p>
                <a href="login.php" class="btn">join now</a>
            </div>
            <img src="D:\wamp\www\cafe\img\assassin3.png" alt="">
        </div>
    </div>
    <!--About-->
    <div class="about">
        <div class="contentbx">
            <h2>About Us</h2>
            <p>Assassin's Creed is an open-world, action-adventure,
                 and stealth game franchise published by Ubisoft and developed mainly by its studio Ubisoft Montreal using the game engine Anvil and its more advanced derivatives. Created by Patrice Désilets, Jade Raymond, and Corey May, the Assassin's Creed video game series depicts a fictional millennia-old struggle between the Order of Assassins, who fight for peace and free will, and the Knights Templar,
                 who desire peace through order and control
                </p>
                <a href="aboutUs.php">Read more</a>
        </div>
        <img src="D:\wamp\www\cafe\img\ab2.png">
    </div>
        <!-- games -->
    <div class="games">
        <h2>Popular Games</h2>
        <ul>
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="Action">Action</li>
            <li class="list" data-filter="Adventure">Adventure</li>
            <li class="list" data-filter="Sports">Sports</li>
            <li class="list" data-filter="Racing">Racing</li>
        </ul>
        <div class="cardbx">
            <div class="card Act" Action data-item="Action">
                <img src="D:\wamp\www\cafe\img\mk1.jpg">
                <div class="content">
                    <h4>Motel Kombat OnSlaught</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Action<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card ad" Adventure data-item="Adventure">
                <img src="D:\wamp\www\cafe\img\ac.jpg">
                <div class="content">
                    <h4>Assassin's Creed</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Adventure<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card Act" Action data-item="Action">
                <img src="D:\wamp\www\cafe\img\bm.jpg">
                <div class="content">
                    <h4>BatMan Akham Knight</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Action<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card Act" Action data-item="Action">
                <img src="D:\wamp\www\cafe\img\ij2.jpg">
                <div class="content">
                    <h4>Injustice 2</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Action<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card Act" Action data-item="Action">
                <img src="D:\wamp\www\cafe\img\sm.png">
                <div class="content">
                    <h4>Spider-Man 2</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Action<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card ad" Adventure data-item="Adventure">
                <img src="D:\wamp\www\cafe\img\cod4.jpg">
                <div class="content">
                    <h4>Call of Duty Modern Warfare</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Adventure<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card Act" Action data-item="Action">
                <img src="D:\wamp\www\cafe\img\bf.jpg">
                <div class="content">
                    <h4>BATTLEFIELD 4</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Action<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card ad" Adventure data-item="Adventure">
                <img src="D:\wamp\www\cafe\img\pp.jpg">
                <div class="content">
                    <h4>Prince of Persia Forgotten Sand</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Adventure<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card rc" Racing data-item="Racing">
                <img src="D:\wamp\www\cafe\img\nfs.jpg">
                <div class="content">
                    <h4>Need for speed Most Wanted</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Racing<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card sp" Sports data-item="Sports">
                <img src="D:\wamp\www\cafe\img\c22.jpg">
                <div class="content">
                    <h4>Cricket Ashes</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Sports<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card sp" Sports data-item="Sports">
                <img src="D:\wamp\www\cafe\img\fb.jpg">
                <div class="content">
                    <h4>football 2023</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Sports<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
            <div class="card rc" Racing data-item="Racing">
                <img src="D:\wamp\www\cafe\img\fs.jpg">
                <div class="content">
                    <h4>Forza Street</h4>
                    <div class="progress-line"><span></span></div>
                    <div class="info">
                        <p>Racing<br><span></span></p>
                        <a href="#">Info</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tournament -->
    <div class="tournaments">
        <h2>Live Tournaments</h2>
        <div class="boxbx">
            <div class="box">
                <img src="D:\wamp\www\cafe\img\dmc2.png" >
                <div class="content">
                    <h4><span>50 </span>Matches in Progress...</h4>
                    <p>I recently playing through black box's nfs with keyboard,
                         so far I only have beaten MW05 and Carbon. I have to say, 
                         this is still my personal favorite even after all this year. The control is nice,
                         </p>
                         <div class="btn">
                            <!-- <a href="#" class="watch">watch</a> -->
                            <a href="#" class="Join">Join now</a>
                         </div>
                </div>

            </div>
            <div class="box">
                <img src="D:\wamp\www\cafe\img\dt1.jpg" >
                <div class="content">
                    <h4><span>10 </span>Matches in Progress...</h4>
                    <p>I recently playing through black box's nfs with keyboard,
                         so far I only have beaten MW05 and Carbon. I have to say, 
                         this is still my personal favorite even after all this year. The control is nice,
                         </p>
                         <div class="btn">
                            <!-- <a href="#" class="watch">watch</a> -->
                            <a href="#" class="Join">Join now</a>
                         </div>
                </div>

            </div>
            <div class="box">
                <img src="D:\wamp\www\cafe\img\fn.jpg" >
                <div class="content">
                    <h4><span>20 </span>Matches in Progress...</h4>
                    <p>I recently playing through black box's nfs with keyboard,
                         so far I only have beaten MW05 and Carbon. I have to say, 
                         this is still my personal favorite even after all this year. The control is nice,
                         </p>
                         <div class="btn">
                            <!-- <a href="#" class="watch">watch</a> -->
                            <a href="#" class="Join">Join now</a>
                         </div>
                </div>

            </div>
        </div>
    </div>
    <!-- contacts -->
    <div class="contact">
        <img src="D:\wamp\www\cafe\img\am.jpg">
        <div class="form">
            <h1>Contact Us</h1>
            <div class="inputBx">
                <p>Enter name</p>
                <input type="text" placeholder="Full Name">
            </div>
            <div class="inputBx">
                <p>Email</p>
                <input type="text" placeholder="Email">
            </div>
            <div class="inputBx">"
                <p>Message</p>
                <textarea placeholder="type here..."></textarea>
            </div>
            <div class="inputBx">
                
                <input type="submit" name="Submit">
            </div>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <div class="info">
            <a href="#" class="logo">Gammers</a>
            <p><i class='bx bx-copyright' ></i>2023 All Rights Reserved</p>
            <ul>
                <li><a href="#"><i class='bx bxl-facebook-circle'></i></a></li>
                <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                <li><a href="#"><i class='bx bxl-youtube' ></i></a></li>
            </ul>
        </div>
    </footer>

    <script>
        // sticky NavBar
        window.addEventListener('scroll',function() {
            var header = document.querySelector('header');
            header.classList.toggle('sticky',window.scrollY > 0);
        });
        // responsive NavBar
        function toggleMenu(){
            const toggleMenu = document.querySelector('.toggleMenu');
            const nav = document.querySelector('.nav');
            toggleMenu.classList.toggle('active')
            nav.classList.toggle('active')
        }

        // Filterable cards

        let list = document.querySelectorAll('.list');
        let card = document.querySelectorAll('.card');

        for(let i=0; i<list.length;i++){
            list[i].addEventListener('click',function(){
                for(let j=0; j<list.length;j++){
                    list[j].classList.remove('active');
                }
                this.classList.add('active');

                let dataFilter = this.getAttributr('data-filter');
                for(let k=0; k<card.length;k++)
                {
                    card[k].classList.remove('active');
                    card[k].classList.add('hide');

                    if(card[k].getAttribute('data-item') == dataFilter || dataFilter == 'all'){
                        card[k].classList.remove('hide');
                        card[k].classList.add('active');
                    }

                }
            })
        }
    </script>
    <script
    src="https://code.jquery.com/jquery-3.6.4.js"
    integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
    crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $('.list').click(function(){
                const value = $(this).attr('data-filter');
                if(value == 'all'){
                    $('.card').show('1000');

                }else if(value == 'Action'){
                    console.log("action value")
                    $('.card').hide('1000');
                    $('.Act').show('1000');

                }else if(value == 'Adventure'){
                    console.log("Adventure value")
                    $('.card').hide('1000');
                    $('.ad').show('1000');

                }else if(value == 'Sports'){
                    console.log("Sports value")
                    $('.card').hide('1000');
                    $('.sp').show('1000');

                }else if(value == 'Racing'){
                    console.log("Racing value")
                    $('.card').hide('1000');
                    $('.rc').show('1000');

                }
                else{
                    $('.card').not('.'+value).hide('1000');
                    $('.card').filter('.'+value).show('1000');
                }

            })
        })
    </script>
</body>
</html>