<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>San Pedro Pogi Personal Website</title>
    <link rel="stylesheet" href="Style.css">
    <script src="https://kit.fontawesome.com/fb7c25ad8f.js" crossorigin="anonymous"></script> 
</head>
<body>
<div id="header">
    <div class="container">
        <nav>
            <img src="logo.png" class="logo">
            <ul>
                <li><a href="#header">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#services">Education</a></li>
                <li><a href="#achievements">Achievements</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
            <!-- Add this code where you want the sign-out button to appear -->
            <form method="post" action="logout.php">
    <button type="submit" class="btn btn-primary">Sign Out</button>
</form>
        </nav>
        <div class="header-text">
            <p>BSIT STUDENT</p>
            <h1>I'm Bench Cyrus San Pedro from National<br> University Fairview</h1>
        </div>
    </div>
</div>
<!-- ----------about----------- -->
<div id="About">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="SARAPNETONGNASAPIC.png">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">ABOUT ME</h1>
                <p>My name is San Pedro, Bench Cyrus A. Im 20 years old and currently studying at National University Fairview as a college student. I want to become financially stable in the future so I can make up for the things that my family did for me. I love to play online and pc games such as Call of Duty Mobile, Farlight, etc, I also like to workout or go to the gym to have a healthy lifestyle due to the struggle and stress Ive been through. But most importantly, I love when Im around my Family.</p>

                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>Leadership</span><br></li>
                        <li><span>Teamwork</span><br></li>
                        <li><span>Active Listening</span><br></li> 
                        <li><span>Computer Skills</span><br></li> 
                        <li><span>Mobile Skills</span><br></li> 
                        <li><span>Gaming Skills</span><br></li>
                        <li><span>Gaslighting</span><br></li> 
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>Call of Duty Mobile Pro Player</span><br>4 years of playing</li>
                        <li><span>Lube 2 Go Employee</span><br>1 year of working</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>2022 - Current</span><br>National University Fairview (BSIT - MI)</li>
                        <li><span>2008 - 2022 </span><br>Holy Angel School of Caloocan Inc.</li>
                    </ul>
                    </ul>
                    </ul>
                    </ul>
                </div>
            </div>
    </div>
</div>
</div>
<!-- ---------Education-------- -->
<div id="services">
    <div class="container">
        <h1 class="sub-title">EDUCATION</h1>
        <div class="services-list">
            <div>
                <img src="Image (5).jpg">
                <h2>Holy Angel School of Caloocan Inc.</h2>
                <p>Kindergarden - Senior Highschool</p>
                <a href="#">Back to Home</a>
            </div>
            <div>
                <div class="Nu">
                <img src="nu-logo.png">
                </div>
                <h2>National University Fairview</h2>
                <p>1st year - Current (College) </p>
                <a href="#">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<!---------Achievements-------- -->
<div id="achievements">
    <div class="container">
        <h1 class="sub-title">ACHIEVEMENTS</h1>
        <div class="education-list">
            <div class="education">
                <img src="Image (7).jpg">
                <div class="layer">
                    <h3>CALL OF DUTY MOBILE ACHIVEMENTS (2019-2020)</h3>
                    <p>Lupon Warzone: 3rd Place, Prize Received: 5,000 Pesos</p>
                    <p>Garena Call of Duty MOBILE: Clan Invasion: 5th - 6th Place, Prize Received: 12,000 Pesos</p>
                    <p>The Philippine Pro Gaming League Season 1: 2nd Place, Prize Received: 60,000 Pesos</p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="education">
                <img src="Image (8).jpg">
                <div class="layer">
                    <h3>CALL OF DUTY MOBILE ACHIEVEMENTS (2020-2021)</h3>
                    <p>The Philippine Pro Gaming League Season 2: 3rd Place, Prize Received: 50,000 Pesos</p>
                    <p>RC Cola: Rise and Conquer: 3rd Place, Prize Received: 30,000 Pesos</p>
                    <p>Garena Call of Duty: Mobile- Philippines Championship 2021: 2nd Place, Prize Received: 100,000 Pesos</p>
                    <p>SONY World Championship: Philippines Championship 2021: Champion, Prize Received: 200,000 Pesos</p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
            <div class="education">
                <img src="Image (9).jpg">
                <div class="layer">
                    <h3>CALL OF DUTY MOBILE ACHIEVEMENTS (2021-2022)</h3>
                    <p>Garena Masters 2: 4th place, Prize Received: 80,000 Pesos</p>
                    <p>Garena Call of Duty: Mobile: Philippines Invitational 2021: 4th Place, Prize Received: 500 USD</p>
                    <p>Kitamen: Malaysia Vs Philippines Charity Showmatch: 4th Place, Prize Received 1000 USD</p>
                    <a href="#"><i class="fa-solid fa-link"></i></a>
                </div>
            </div>
        </div>
        <a href="#"class="btn">Back to Homescreen</a>
    </div>
</div>
<!---------Contacts-------- -->
<div id="Contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="subtitle">CONTACTS</h1>
                <p><i class="fa-regular fa-paper-plane"></i> benchcyrus2@gmail.com</p>
                <p><i class="fa-solid fa-phone-volume"></i> 09267530312</p>
                <div class="social-icons">
                    <a href="https://facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://twitter.com/"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://discord.com/"><i class="fa-brands fa-discord"></i></a>
                </div>
            </div>
            <div class="contact-right">
                <form>
                    <input type="text" name="Name" placeholder="Name:" required>
                    <input type="email" name="" placeholder="Email:" required>
                    <textarea name="Message" rows="6" placeholder="Message:"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="Buttom-text">
        <p><i class="fa-solid fa-circle-user"></i> Bench Cyrus San Pedro | IT - 224</p>
    </div>
</div>



<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

</script>

</body>
</html>