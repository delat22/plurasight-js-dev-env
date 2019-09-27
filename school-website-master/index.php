<?php 
    $title = "UIS - Home";
    $css = "home";
    include "php/nav.php";
?>

    <main>
        
<!-- This is th markup for the introduction page-->
        <section class="intro-img">
            <section class="img">
                <section class="img-dets">
                    <h1>Welcome To <br>
                    Unique International School</h1>
                    <p>The ideal learning environment for your child</p>
                    <button><a href="about.php">Learn More</a></button>
                </section>
            </section>
        </section>
        
<!-- This is the markup for the features that is attached to the introduction page-->
        <section class="feat-cont">
            <section class="feat-row">
                
                <section class="feat-col" id="diffColor">
                    <section class="feat-dets">
                        <em class="fa fa-female"></em>
                        <h2>Certified Teachers</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p>
                    </section>
                </section>
                <section class="feat-col">
                    <section class="feat-dets">
                        <em class="fas fa-walking"></em>
                        <h2>Condusive Environment</h2>
                        <p>Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequa</p>
                    </section>
                </section>
                <section class="feat-col" id="diffColor">
                    <section class="feat-dets">
                        <em class="fas fa-check-circle"></em>
                        <h2>Government Approved</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident</p>
                    </section>
                </section>
                <section class="feat-col">
                    <section class="feat-dets">
                        <em class="fas fa-quran"></em>
                        <h2>Moral Doctrines</h2>
                        <p>Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </section>
                </section>
                
            </section>
        </section>
        
        <section class="welcome">
            <section class="wel-row">
                <h2>Who Are We <em class="fa fa-question"></em></h2>
                <section class="wel-col">
                    <article><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p></article>
                </section>
                <section class="wel-img">
                    <figure>
                        <section class="img-dets">
                            <h4>We teach our students to work hard to achieve their dreams</h4>
                            <a href="">Register your child now</a>
                        </section>
                        <img src="images/exam.jpg">
                        <figcaption>Students In School</figcaption>
                    </figure>
                    
                    <figure>
                        <section class="img-dets">
                            <h4>We teach our students to work hard to achieve their dreams</h4>
                            <a href="">Register your child now</a>
                        </section>
                        <img src="images/homework.jpg">
                        <figcaption>Students At Work</figcaption>
                    </figure>
                    
                    <figure>
                        <section class="img-dets">
                            <h4>We teach our students to work hard to achieve their dreams</h4>
                            <a href="">Register your child now</a>
                        </section>
                        <img src="images/laptop.jpg">
                        <figcaption>Students In School</figcaption>
                    </figure>
                </section>
            </section>
        </section>
        
<!-- This list out the steps that must be taken by aspirants-->
        <section class="admit-cont">
            <h2>Get Admitted In These Easy Steps <em class="fa fa-th-list">
            </em></h2>
            <section class="admit-row">
                <section class="admit-col">
                        <p><em class="fa fa-wpforms"></em><br> Fill the form online</p>
                </section>
                
                <section class="admit-col">
                    <p><em class="fa fa-chair"></em> <br>Reserve date for exam</p>
                </section>
                
                <section class="admit-col">
                    <p><em class="fa fa-user-edit"></em><br> Write Exam</p>
                </section>
                
                <section class="admit-col">
                    <p><em class="fa fa-smile"></em> <br>Recieve admission letter</p>
                </section>
            </section>
            <p id="regLink"><small><a href="">Terms and Condition Apply</a></small></p>
            <p id="regLink"><a href="">Begin Your Journey &rarr;</a></p>
        </section>
        
    </main>

<?php 
    include "php/footer.php";
?>