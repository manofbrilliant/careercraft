<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>CareerCraft the tool for all</title>

        <link rel="stylesheet"href="<?=$action->helper->loadcss('bootstrap.min.css')?>">
        <link rel="stylesheet"href="<?=$action->helper->loadcss('bootstrap-icons.css')?>">
        <link rel="stylesheet"href="<?=$action->helper->loadcss('templatemo-kind-heart-charity.css')?>">
 


  

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?=$action->helper->loadimage('logo.png')?>" class="logo img-fluid" alt="Kind Heart Charity">
                    <span>
                        CareerCraft
                        <small>Choose Your own career path</small>
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#top">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section1">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section2">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="#section3">Feedback</a>
                        </li>

                       
                        <li class="nav-item ms-3">
                            <a class="nav-link custom-btn custom-border-btn btn" href="<?= $action->helper->url('signup') ?>">Login / Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="cta-section section-padding section-bg">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 ms-auto">
                            <h2 class="mb-0">"Create your own  destiny"</h2>
                        </div>

                        <div class="col-lg-5 col-12">
                            <a href="" class="me-4">let's Build it !</a>

                            <a href="<?= $action->helper->url('signup') ?>" class="custom-btn btn smoothscroll">Get Started</a>
                        </div>

                    </div>
                </div>
            </section>


            <section class="section-padding" id="section1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-12 text-center mx-auto">
                            <h2 class="mb-5">Services included in CareerCraft</h2>
                        </div>
            
                        <!-- Image 1 -->
                        <div class="col-lg-2-4 col-md-6 col-12 mb-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="<?=$action->helper->url('login')?>" class="d-block">
                                    <img src="<?=$action->helper->loadimage('resume.png')?>" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text">Resume <strong>Builder</strong></p>
                                </a>
                            </div>
                        </div>
            
                        <!-- Image 2 -->
                        <div class="col-lg-2-4 col-md-6 col-12 mb-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="<?=$action->helper->url('login')?>" class="d-block">
                                    <img src="<?=$action->helper->loadimage('letter.png')?>" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text"><strong>Cover letter</strong> Builder</p>
                                </a>
                            </div>
                        </div>
            
                        <!-- Image 3 -->
                        <div class="col-lg-2-4 col-md-6 col-12 mb-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="<?=$action->helper->url('chatbot')?>" class="d-block">
                                    <img src="<?=$action->helper->loadimage('chatbot.png')?>" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text">Job Trained <strong>Chatbot BETA version</strong></p>
                                </a>
                            </div>
                        </div>
            
                        <!-- Image 4 -->
                        <div class="col-lg-2-4 col-md-6 col-12 mb-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="<?=$action->helper->url('companies-list')?>" class="d-block">
                                    <img src="<?=$action->helper->loadimage('company.png')?>" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text"><strong>Fields wise</strong> Companies List</p>
                                </a>
                            </div>
                        </div>
            
                        <!-- Image 5 -->
                        <div class="col-lg-2-4 col-md-6 col-12 mb-4">
                            <div class="featured-block d-flex justify-content-center align-items-center">
                                <a href="<?=$action->helper->url('career-guide')?>" class="d-block">
                                    <img src="<?=$action->helper->loadimage('career.png')?>" class="featured-block-image img-fluid" alt="">
                                    <p class="featured-block-text"><strong>Career</strong>Guidance</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            

            <section class="section-padding section-bg" id="section2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <img src="careerbg.jpg " class="custom-text-box-image img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="custom-text-box">
                                <h2 class="mb-2">About us</h2>

                                <h5 class="mb-3">A Project designed and developed by DCME B3 final Year Bouys</h5>

                                <p class="mb-0">A Project was designed based on some of the programmming languages such as  HTML, CSS, JS, and PHP. This project is aminly designed to allobrate the features of an career tools and its needs </p>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box mb-lg-0">
                                        <h5 class="mb-3">Features</h5>

                                        <ul class="custom-list mt-2">
                                            <li class="custom-list-item d-flex">
                                          
                                               * Attractive design and UI interface
                                            </li>

                                            <li class="custom-list-item d-flex">
                                            
                                               * Customized templates
                                            </li>

                                            
                                            <li class="custom-list-item d-flex">
                                        
                                               * Job specifically trained chatbot
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="custom-text-box d-flex flex-wrap d-lg-block mb-lg-0">
                                        <div class="counter-thumb"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="0" data-to="6" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Templates for use</span>
                                        </div> 

                                        <div class="counter-thumb mt-4"> 
                                            <div class="d-flex">
                                                <span class="counter-number" data-from="1" data-to="500" data-speed="1000"></span>
                                                <span class="counter-number-text"></span>
                                            </div>

                                            <span class="counter-text">Chatbot prompts trained </span>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="about-section section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-5 col-12">
                            <img src="<?=$action->helper->loadimage('svietdip.jpeg')?>" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                        </div>

                        <div class="col-lg-5 col-md-7 col-12">
                            <div class="custom-text-block">
                                <h2 class="mb-0">SVIET 2<sup>nd</sup> shift diploma</h2>

                                <p class="text-muted mb-lg-4 mb-md-4">Engineering College</p>

                                <p>
                                SVIET 2nd shift diploma Nandamuru offers a diploma program designed to equip students with foundational skills in various technical fields. The diploma courses focus on core engineering disciplines such as Computers,Mechanical, Electrical, Civil, and Electronics Engineering, among others.  The diploma programs are recognized for their comprehensive curriculum, which is tailored to meet industry needs, enabling students to develop the technical expertise required for a successful career in their chosen fields. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

         


           

            <section class="volunteer-section section-padding" id="section3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-4">Give me us Feedback</h2>

                            <form class="custom-form volunteer-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h3 class="mb-4">Give Your Response </h3>

                                <div class="row">
                                    <div class="row">
                                        <!-- Input Field -->
                                   
                                    
                                        <!-- Dropdown Field -->
                                        <div>
                                            <select name="volunteer-role" id="volunteer-role" class="form-control" required>
                                                <option value="" disabled selected>Select the feature</option>
                                                <option value="leader">Resume Builder</option>
                                                <option value="coordinator">Cover letter builderr</option>
                                                <option value="assistant">Chatbot</option>
                                                <option value="member">Companies list</option>
                                                <option value="member">Career Guidance</option>
                                                <option value="member">All</option>
                                            </select>
                                        </div>
                                    </div>
                                    

                
                                   
                                </div>

                                <textarea name="volunteer-message" rows="3" class="form-control" id="volunteer-message" placeholder="Feedback about the feature you have experienced"></textarea>

                                <button type="submit" class="form-control">Submit</button>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <img src="<?=$action->helper->loadimage('logo.png')?>" class="volunteer-image img-fluid" alt="">

                            <div class="custom-block-body text-center">
                                <h4 class="text-white mt-lg-3 mb-lg-3">CareerCraft</h4>

                                <p class="text-white">Give Your valuble feedback on the features that have been experienced by you. Through this we can improve our productivity and UI interface</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

           

           
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12 mb-4">
                        <img src="<?=$action->helper->loadimage('logo.png')?>" class="logo img-fluid" alt="">
                    </div>

               

                    <div class="col-lg-4 col-md-6 col-12 mx-auto">
                        <h5 class="site-footer-title mb-3">Make Your own Path by clicking below</h5>

                        <a href="<?= $action->helper->url('signup') ?>" class="custom-btn btn mt-3">Login / Signup</a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-7 col-12">
                            <p class="copyright-text mb-0">Copyright © 2024 by DCME Final Year Boys</p>
                        </div>
                        
                      
                        
                    </div>
                </div>
            </div>
        </footer>

        <script src="<?=$action->helper->loadjs('jquery.min.js')?>"></script>
        <script src="<?=$action->helper->loadjs('bootstrap.min.js')?>"></script>
        <script src="<?=$action->helper->loadjs('jquery.sticky.js')?>"></script>
        <script src="<?=$action->helper->loadjs('click-scroll.js')?>"></script>
        <script src="<?=$action->helper->loadjs('counter.js')?>"></script>
        <script src="<?=$action->helper->loadjs('custom.js')?>"></script>

    </body>
</html>