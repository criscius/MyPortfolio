<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Jquery -->
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Latest compiled and minified Javascript -->
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <!-- aniview -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-aniview-master/jquery.aniview.min.js"></script> 
        <!-- lightgallery -->
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lightgallery.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lightgallery-all.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-thumbnail.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-autoplay.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-fullscreen.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-hash.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-pager.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-video.min.js"></script> 
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lightGallery-master/dist/js/lg-zoom.min.js"></script> 
       
        


	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
        
        <script type="text/javascript">
            $(document).ready(function(){
                $window = $(window);
                //Captura cada elemento section com o data-type "background"
                $('section[data-type="background"]').each(function(){
                    var $scroll = $(this);   
                        //Captura o evento scroll do navegador e modifica o backgroundPosition de acordo com seu deslocamento.            
                        $(window).scroll(function() {
                            var yPos = -($window.scrollTop() / $scroll.data('speed')); 
                            var coords = '50% '+ yPos + 'px';
                            $scroll.css({ backgroundPosition: coords });    
                        }); 
                });  
                
               //animeview - faz as animações acontecerem de acordo com a rolagem
                var options = {
                    animateThreshold: 100,
                    scrollPollInterval: 20
                };
                $('.aniview').AniView();
                
                //lightgallery
                $(document).ready(function() {
                    $("#lightgallery").lightGallery(); 
                     });
                $('#aniimated-thumbnials').lightGallery({
                     thumbnail:true
                      }); 
                 }); 

//Google
       
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78540946-1', 'auto');
  ga('send', 'pageview');


          
        </script>
        
        
        
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="container-fluid" id="fullpage">
    <header class="row-fluid hidden-xs">
        <nav class="navbar navbar-default col-xs-12 navbar-inverse navbar-fixed-top aniview" av-animation="bounce" role="navigation">
            <ul class="nav navbar-nav">
                <li><a href="#section1" title="About Me"><i class="about" ></i>About Me</a></li>
                <li><a href="#section2" title="Skills"><i class="skills" ></i>Skills</a></li>
                <li><a href="#section3" title="Work Experience"><i class="work" ></i>Work Experience</a></li>
                <li><a href="#section4" title="Education"><i class="education" ></i>Education</a></li>
                <li><a href="#section5" title="Portfolio"><i class="portfolio" ></i>Portfolio</a></li>
                <li><a href="#section6" title="Contact"><i class="contact" ></i>Contact</a></li>
            </ul>
        </nav>
    </header>    
    <header class="row-fluid hidden-sm hidden-md hidden-lg menu-resp">
        <nav class="navbar col-xs-12 navbar-inverse navbar-fixed-top aniview" av-animation="bounce" role="navigation">
            <ul class="nav navbar-nav">
               <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <span class="menu-responsivo"></span>
                </a>
                <ul class="dropdown-menu">
                   <li><a href="#section1" title="About Me">About Me</a></li>
                    <li><a href="#section2" title="Skills">Skills</a></li>
                    <li><a href="#section3" title="Work Experience">Work Experience</a></li>
                    <li><a href="#section4" title="Education">Education</a></li>
                    <li><a href="#section5" title="Portfolio">Portfolio</a></li>
                    <li><a href="#section6" title="Contact">Contact</a></li>
                </ul>
              </li>
            </ul>
        </nav>
          

    </header>    
    <header class="row-fluid presentation-title section">
        <aside class="col-xs-12 presentation">
                <h1 class="aniview" av-animation="slideInLeft">Hi, I am Denise Cristina</h1>
                <h5 class="aniview" av-animation="slideInRight">A curious and dedicated person towards Front End Development and Web Design</h5>
        </aside>
        <aside background-color="#" class="row-fluid">
            <div class="skewed col-xs-12">
            </div>
        </aside>
        <aside class="row-fluid" id="parallaxBar" data-speed="6" data-type="background">
            <figure class="col-xs-12"></figure>
        </aside>
    </header>
    <main class="bg-no-color cont-about" id="section1">
        <section class="row">
            <h1 class="col-xs-12 aniview slow" av-animation="slideInDown">About Me</h1>
        </section>
        <article class="about-me row">
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                <figure class="aniview slow" av-animation="slideInRight"></figure>
                <a href="<?php bloginfo('template_directory'); ?>/CV-Denise-Cristina-Cius.pdf" type="button" target="_blank" class="btn btn-default btn-lg aniview slow" av-animation="bounceIn" role="button">Download  Printable Resume</a>
            </div>  
            <dl class="col-md-9 col-sm-7 col-xs-12 aniview slow" av-animation="slideInUp">
                <dt>Denise Cristina Cius Cristino</dt>
                <dd><p>I am a curious and dedicated person to Front End Development, Web Design and everything else that makes up the internet. <!--I would say adventurer and dreamer too.--> </p>

                    <p>I've always been intrigued about the internet and to learn about how everything works, so I enrolled in, and completed a small web design course in 2003 and ever since that moment, I knew what I wanted to do for the rest of my life.</p>

                    <p>I majored in Information Technology, with emphasis on the internet and In 2012 when I got married and moved out of my hometown in Brazil, I started to desire living in another country to which my husband agreed.
</p>

                    <p>I arrived from Brazil in October of last year and for the last 5 months, I have been furthering my knowledge in Front End Development, because since 2013 I have been working only as a web designer and have developed this online portfolio in order to showcase my skills :)</p>

                    <div class="cont-colapse-link">
                        <div class="pink-line pink-line-left"></div><a href="#demo" data-toggle="collapse">See more</a><div class="pink-line pink-line-right"></div><br/>
                    </div>
                    <div id="demo" class="collapse">
                        <p><strong>About my personality and daily life:</strong></p>

                        <p>I cannot define myself as a quiet or extroverted person. It all depends on the moment in time, but I love to meet new people, learn about new things and different cultures. </p>

                        <p>I am very passionate about business, biography, self-help and technical books and
I go crazy for mango juice, yellow ice cream, web technologies, geeky, cute and creative things, travelling, sushi, and movies about fantasy and science fiction! </p>

                        <p>I am always trying to keep myself out of the comfort zone by making difficult choices at times but I believe this lifestyle helps me grow as a person and further my ability.</p>

                        <!--<p>And... I learned to get in the habit of passing on the good that others 
                        have done for me.. It makes me feel well.</p> -->
                    </div>
                </dd>
            </dl>
            <div class="col-md-3 col-sm-5 hidden-xs">
                <figure class="aniview slow" av-animation="slideInRight"></figure>
                <a href="<?php bloginfo('template_directory'); ?>/CV-Denise-Cristina-Cius.pdf" type="button" target="_blank" class="btn btn-default btn-lg aniview slow" av-animation="bounceIn" role="button">Download  Printable Resume</a>
            </div>  
        </article>
    </main><!-- bg-no-color-->
    <main class="bg-black cont-skills" id="section2">
            <section class="row">
                <h1 class="col-xs-12 aniview slow" av-animation="slideInDown">Skills</h1>
            </section>
            <div class="row my-skills aniview slow" av-animation="bounce">
                <div class="col-xs-3 circleprogressbar">
                    <figure class="noventa"></figure>
                    <span>90%</span>
                    <h3>HTML5</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="noventa"></figure>
                    <span>90%</span>
                    <h3>CSS3</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="oitenta"></figure>
                    <span>80%</span>
                    <h3>Bootstrap</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="cinquenta"></figure>
                    <span>50%</span>
                    <h3>jQuery</h3>
                </div>
            </div>
            <div class="row my-skills aniview slow" av-animation="bounce">
               <div class="col-xs-3 circleprogressbar">
                   <figure class="noventa"></figure>
                    <span>90%</span>
                    <h3>Wordpress</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="cinquenta"></figure>
                    <span>50%</span>
                    <h3>SAAS</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="noventa"></figure>
                    <span>90%</span>
                    <h3>Photoshop</h3>
                </div>
                <div class="col-xs-3 circleprogressbar">
                    <figure class="setenta"></figure>
                    <span>70%</span>
                    <h3>Web Design</h3>
                </div>
            </div>
        <article class="row my-skills barras espaco-acima">
            <div class="col-md-6 col-xs-12 aniview slow" av-animation="rotateInUpLeft">
                <h3>English Communication 50%</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/bar-50.png" />
            </div>
            <div class="col-md-6 col-xs-12 aniview slow" av-animation="rotateInUpRight">
                <h3>Responsibility 100%</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/bar-100.png" />
            </div>
            <div class="col-md-6 col-xs-12"></div>
        </article>
        <article class="row my-skills barras">
            <div class="col-md-6  col-xs-12aniview slow" av-animation="rotateInUpLeft">
                <h3>Team Work 90%</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/bar-90.png" />
            </div>
            <div class="col-md-6 col-xs-12 aniview slow" av-animation="rotateInUpRight">
                <h3>Punctuality 100%</h3>
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/img/bar-100.png" />
            </div>
            <div class="col-md-6"></div>
        </article>
        <article class="row my-skills barras">
            <div class="col-md-6 col-xs-12">
                <h3>Creativity 90%</h3>
                <img class="img-responsive aniview slow" av-animation="rotateInUpLeft" src="<?php bloginfo('template_directory'); ?>/img/bar-90.png" />
            </div>
            <div class="col-md-6 col-xs-12">
                <h3>Organizing 100%</h3>
                <img class="img-responsive aniview slow" av-animation="rotateInUpRight" src="<?php bloginfo('template_directory'); ?>/img/bar-100.png" />
            </div>
            <div class="col-md-6"></div>
        </article>
    </main><!-- bg-black -->
    <main class="bg-no-color sem-espaco-abaixo cont-resume" id="section3">
        <section class="row" >
            <h1 class="col-xs-12 aniview slow" av-animation="slideInLeft">Resume</h1>
        </section>
        <article class="row resume title">
            <div class="col-xs-12">
                <button type="button" class="btn btn-default btn-lg work aniview slow" av-animation="slideInRight">Work Experience</button>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12 first alinhar-direita">
                <h2>Freelancer Web Designer</h2>
                <h5>Home Office - 2013 - 2016</h5>
                <p>I worked at home, on development of layouts for websites.</p>
                <i class="bola-direita"></i>
            </div>
           <div class="col-sm-6 col-xs-12 alinhar-esquerda espaco-top">
                <h2>Magento Front End Developer</h2>
                <h5>Signativa - 2012 - 2013</h5>
                <p>I worked on development of Magento Ecommerce.</p>
                <i class="bola-esquerda"></i>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12  alinhar-direita">
                <h2>Support Attendant</h2>
                <h5>Espécie Web Solutions - 2008 - 2012</h5>
                <p>I worked doing maintenance on wordpress websites.</p>
                <i class="bola-direita"></i>
            </div>
            <div class="col-sm-6 col-xs-12 alinhar-esquerda espaco-top" id="section4">
                <h2></h2>
                <h5></h5>
                <p></p>
                <i></i>
            </div>
        </article> 
    </main>
    <main class="bg-no-color sem-espaco-topo cont-resume">
        <article class="row resume title">
            <div class="col-xs-12">
                <button type="button" class="btn btn-default btn-lg education aniview slow" av-animation="slideInDown">Education</button>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12  first alinhar-direita">
                <h2>Front End Skills Updating</h2>
                <h5>Online Courses - 2016</h5>
                <p>I have been updating my Front End skills for 6 months, and learning more about animations CSS3, HTML5, Javascript and Wordpress. After that, I intend to learn LESS, JSON, Angular js, React js, Magento and other.</p>
                <i class="bola-direita"></i>
            </div>
           <div class="col-sm-6 col-xs-12 alinhar-esquerda espaco-top">
               <h2>Digital Marketing</h2>
                <h5>iJumper - 2015</h5>
                <p>It was a course which haven’t a graduation level, but its content was equivalent. </p>
                <i class="bola-esquerda"></i>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12  alinhar-direita">
                <h2>Facebook Marketing</h2>
                <h5>Camila Porto - 2015</h5>
                <p>It was a really great course about Facebook strategies, which I studied online.</p>
                <i class="bola-direita"></i>
            </div>
           <div class="col-sm-6 col-xs-12 alinhar-esquerda espaco-top">
                <h2>Graphic Design</h2>
                <h5>Casa das Oficinas - 2013</h5>
                <p>It was a fast course of 6 months. </p>
                <i class="bola-esquerda"></i>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12 alinhar-direita">
                <h2>Interface Design</h2>
                <h5>Edukee - 2013</h5>
                <p>It was an online course about interface design techniques.</p>
                <i class="bola-direita"></i>
            </div>
           <div class="col-sm-6 col-xs-12 alinhar-esquerda espaco-top">
                <h2>MBA Postgraduate</h2>
                <h5>Doll Institute - 2013</h5>
                <p>I attended the MBA postgraduate course of management of Information Technology. </p>
                <i class="bola-esquerda"></i>
            </div>
        </article>
        <article class="row resume line">
            <div class="col-sm-6 col-xs-12 alinhar-direita">
                <h2>Information Technology</h2>
                <h5>União University of Ponta Grossa - 2011</h5>
                <p>I majored in Information Technology, with emphasis on Internet. </p>
                <i class="bola-direita"></i>
            </div>
           <div class="col-md-6 col-xs-12 alinhar-esquerda espaco-top">
                <h2></h2>
                <h5></h5>
                <p></p>
            </div>
        </article>
    </main><!-- bg-no-color -->
    <main class="bg-no-color cont-portfolio no-center" id="section5">
        <section class="row" >
            <h1 class="col-xs-12 aniview" av-animation="slideInUp">Portfolio</h1>
        </section>
        <section class="col-xs-12 portfolio aniview slow" av-animation="fadeInDown" id="lightgallery">
                <a href="<?php bloginfo('template_directory'); ?>/img/gran.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Ecommerce</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/gran-thumb.jpg" alt="Gran Boutique" class="img-responsive" />
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/farma.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/farma-thumb.jpg" alt="Farma & Farma Popular" class="img-responsive" />
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/ottoni.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/otoni-thumb.jpg" alt="Ottoni" class="img-responsive" />
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/ivar.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/ivar-thumb.jpg" alt="dr. Ivar" class="img-responsive" />
                </a>    
            
                <a href="<?php bloginfo('template_directory'); ?>/img/auto.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Ecommerce</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/auto-thumb.jpg" alt="Auto Box" class="img-responsive" />
                </a>
           
                <a href="<?php bloginfo('template_directory'); ?>/img/gm.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/gm-thumb.jpg" alt="GM Bordados" class="img-responsive" />
                </a>
            
                <a href="<?php bloginfo('template_directory'); ?>/img/kimassa.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/kimassa-thumb.jpg" alt="Kimassa" class="img-responsive" />
                </a>
           
                <a href="<?php bloginfo('template_directory'); ?>/img/cpz.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Ecommerce</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/cpz-thumb.jpg" alt="CPZ" class="img-responsive" />
                </a>
     
                <a href="<?php bloginfo('template_directory'); ?>/img/painel.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Admin</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/painel-thumb.jpg" alt="Painel" class="img-responsive" />
                </a>
                <a href="<?php bloginfo('template_directory'); ?>/img/candy.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/candy-thumb.jpg" alt="Candy Tur" class="img-responsive" />
                </a>

                <a href="<?php bloginfo('template_directory'); ?>/img/hotel.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/colinas-thumb.jpg" alt="Hotel Colinas" class="img-responsive" />
                </a>

                <a href="<?php bloginfo('template_directory'); ?>/img/raulino.jpg">
                    <div class="hover-imgs">
                        <dl>
                            <dt>Website</dt>
                            <dd>See more</dd>
                        </dl>
                        <div class="borda-hover"></div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/raulino-thumb.jpg" alt="dr. Raulino" class="img-responsive" />
                </a>
 
        </section>
    </main><!-- bg-no-color -->

    <footer >
        <section class="row">
            <h1 class="col-xs-12 aniview" av-animation="shake" id="section6">Contact Me</h1>
        </section>
        <article class="row">
            <div class="col-sm-6 col-xs-12 aniview slow" av-animation="slideInLeft">
                <?php
                echo do_shortcode('[contact-form-7 id="20" title="contact form"]');
                ?>
                
            </div>
            <div class="col-sm-6 col-xs-12 address aniview slow" av-animation="slideInRight">
                <p>New Zealand</p>
                <p>+64 027 395 6449</p>
                <p>hello@cristinacius.com</p>
                <ul>
                    <li><a class="face" target="_blank" href="https://www.facebook.com/denisecristinacius?ref=bookmarks"></a></li>
                    <li><a class="linkedin" target="_blank" href="https://nz.linkedin.com/in/criscius"></a></li>
                    <li><a class="be" target="_blank" href="https://www.behance.net/cristinacius"></a></li>
                </ul>
            </div>
        </article>
    </footer>
    
    
    
</div> <!-- container-fluid -->

