<?php /* Template Name: Home Page */ ?>
<?php echo get_header('custom'); ?>

<div id="particles-js" class="hero">
    <div class="container-fluid px-0 px-md-2">
        <div class="row">
            <div class="col-12 col-lg-4 align-self-center">
                <h1 class="fancy-header">The <span class="outline">Space</span>&nbsp;For<br>your Creativity</h1>
                <p>The Space is a coworking space and community for Cedar Rapids Iowa creatives. With a wonderful mix of artists, freelancers and entrepreneurs, The Space offers something you won't find at other coworking spaces: community.</p>
                <div class="button-container">
                    <a href="https://membership.cedarrapidscoworking.space" class="btn btn-outline-primary" role="button">Join Our Community</a>
                    <a href="#perks" class="btn btn-outline-primary" role="button">Perks</a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div id="scene" class="floating-image-container"><img data-depth="0.4" class="img-fluid d-none d-lg-block floating-image" src="<?php echo wp_get_attachment_url(get_theme_mod('hero-image')) ?>"></div>
            </div>
        </div>
    </div><img class="bottom-triangle" src="<?php echo get_template_directory_uri() ?>/assets/img/bottom-triangle.svg">
</div>
<div class="section" id="perks">
    <div class="container">
        <h1 class="fancy-header mb-5">Perks</h1>
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/location.svg"></div>
                        <h2 class="card-title text-uppercase">Creative Location</h2>
                        <p class="card-text">The Space is located in the heart of the NewBo district in Cedar Rapids, IA and is surrounded by lots of great stores, restaurants and coffee shops.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/recording.svg"></div>
                        <h2 class="card-title text-uppercase">Recording Studio</h2>
                        <p class="card-text">The Space has a dedicated office that members can use for phone calls, client meetings, or even recording a podcast!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card card-dark">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/meeting.svg"></div>
                        <h2 class="card-title text-uppercase">Meeting Space</h2>
                        <p class="card-text">The Space has partnered with Office Evolution, also in NewBo, to offer our members 50% off their conference rooms, and day offices.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card card-dark">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/inspiration.svg"></div>
                        <h2 class="card-title text-uppercase">Inspiration</h2>
                        <p class="card-text">The Space offers a creative space full of creative people that makes it nearly impossible not to be inspired.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/community.svg"></div>
                        <h2 class="card-title text-uppercase">Community</h2>
                        <p class="card-text">The Space is more than just a space, it's a thriving community of Cedar Rapids creatives, freelancers and entrepreneurs.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/internet.svg"></div>
                        <h2 class="card-title text-uppercase">HIGH SPEED INTERNET</h2>
                        <p class="card-text">ImOn Communications has generously partnered with The Space to offer our members high speed internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center"><a href="https://membership.cedarrapidscoworking.space"><button class="btn btn-outline-secondary btn-lg" type="button">Join Our Community</button></a></div>
</div>
<div id="pricing-js" class="section dark">
    <div class="container">
        <h1 class="text-center fancy-header my-5">Pricing</h1>
        <div class="row">
            <div class="col-12 col-lg-4 ml-md-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"></div>
                        <h2 class="card-title text-uppercase">Floater</h2>
                        <h2 class="text-muted card-subtitle">$150/mo</h2>
                        <hr>
                        <h5 class="card-title">Includes</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle"></i>&nbsp;High Speed WiFi</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Free premium coffee</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Area discounts on food/coffee in NewBo</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Host events in the space at discounted price</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Discount on printing services through Allegra Printing</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Business mail listing</li>
                        </ul>
                        <div class="text-center"><a href="https://membership.cedarrapidscoworking.space/floater"><button class="btn btn-outline-secondary" type="button">Get Started</button></a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 mr-md-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"></div>
                        <h2 class="card-title text-uppercase">Dedicated Desk</h2>
                        <h2 class="text-muted card-subtitle">$250/mo</h2>
                        <hr>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle"></i>&nbsp;All the benefits of the Floater plan</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Your own desk and chair</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Bigger discount on printing services through Allegra</li>
                        </ul>
                        <div class="text-center"><a href="https://membership.cedarrapidscoworking.space/dedicated-desk/"><button class="btn btn-outline-secondary" type="button">Get Started</button></a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 ml-md-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="card-icon"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"><img class="img-fluid pricing-icon" src="<?php echo get_template_directory_uri() ?>/assets/img/pricing-icon.svg"></div>
                        <h2 class="card-title text-uppercase">Private Office</h2>
                        <h2 class="text-muted card-subtitle">100sqft</h2>
                        <hr>
                        <h5 class="card-title">Includes</h5>
                        <ul class="list-unstyled">
                            <li><i class="fas fa-check-circle"></i>&nbsp;All the benefits of the Dedicated Desk and Floater plans</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Your own furnished office, with a window</li>
                            <li><i class="fas fa-check-circle"></i>&nbsp;Contact James for more information</li>
                        </ul>
                        <div class="text-center"><a target="_blank" href="mailto:create@crcoworking.space"><button class="btn btn-outline-secondary" type="button">Email James</button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center fancy-header mt-5 mb-3">Need A Day Pass?</h1>
    <div class="text-center mb-5"><a href="#contact"><button class="btn btn-outline-primary btn-lg" type="button">Contact Us</button></a></div>
</div>
<div class="section">
    <div class="container">
        <h1 class="text-center fancy-header my-5">Reviews</h1>
        <div class="carousel slide" data-ride="carousel" id="carousel-1">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/greg_dietzenbach.png">
                                <div>
                                    <h4 class="card-title mb-0"><strong>Greg Dietzenbach - Creative Director</strong></h4>
                                    <h5 class="text-muted mb-2">McCullough Creative</h5>
                                </div>
                            </div>
                            <p class="card-text">"As a Creative Director, I’m always looking for new ways and places to inspire me and my team. The Space is exactly what I wanted in CR. It’s more than just a space, it’s a place where community nurtures creativity. That’s
                                important because nothing is created in a vacuum. Come to think of it, The Space doesn’t even own a vacuum (yet)." </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/stephanie-mae.png">
                                <div>
                                    <h4 class="card-title mb-0"><strong>Stephanie Mae - Owner</strong></h4>
                                    <h5 class="text-muted mb-2">Stephanie's Creations</h5>
                                </div>
                            </div>
                            <p class="card-text">"Good location, a tastefully remodeled building, nice comfortable furniture, and friendly people. Lots of opportunities for networking. Best coworking space in town!" </p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/lindsay-handy.png">
                                <div>
                                    <h4 class="card-title mb-0"><strong>Lindsay Handy</strong></h4>
                                    <h5 class="text-muted mb-2"></h5>
                                </div>
                            </div>
                            <p class="card-text">"Perfect spot to get out of the office and in a comfortable yet productive environment! Get here! You will be glad you did!❤️" </p>
                        </div>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-left.svg"><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="sr-only">Next</span><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow-right.svg"></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-1" data-slide-to="1"></li>
                <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
        </div>
    </div>
</div>
<div id="new-members-js" class="section dark">
    <div class="container">
        <h1 class="fancy-header mt-5">Members</h1>
        <p>What makes our space so great? Our members, of course</p>
        <div class="row">
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/devin-green-thumb.jpg">
                            <div>
                                <h4 class="card-title mb-0"><strong>Devin Green</strong></h4>
                                <h5 class="text-muted mb-2">Graphic and Web Designer</h5>
                            </div>
                        </div>
                        <p class="card-text">"When I create, I pull inspiration from all avenues possible. I make sure that it represents the task at hand. I believe designing is more than just putting pictures together." </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://devingreen.me" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="http://facebook.com/devinmigreen" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a class="social-card-icon" href="https://twitter.com/artistro08?fbclid=IwAR1ahgONdSCzaeBrIl0JeAhPb-VS0Nq-2FHJ0H2TXewWOziD5J9cyAuprG0" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a class="social-card-icon" href="https://instagram.com/artistro08?fbclid=IwAR1oF8ZLQqX7osmIKwYEqy5uE-F4vD2zx9dseLzhzTNJe_u_IGGYWCh6HUg" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-card-icon" href="https://linkedin.com/in/artistro08?fbclid=IwAR11_BCMEFypDhidTByJ7JfTXQ4nNts7mktCT1y1LBXS7dLUkaSfsm8qg30" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/rina-jensen.jpg">
                            <div>
                                <h4 class="card-title mb-0"><strong>Rina Jensen</strong></h4>
                                <h5 class="text-muted mb-2">Business Resilliancy Coach</h5>
                            </div>
                        </div>
                        <p class="card-text">"The most important piece is our thinking. It determines EVERYTHING in our lives. Who we feel we deserve to be coupled with. The kind of work we think we deserve to have. And the friends we surround ourselves with. All of it starts within ourselves." </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://rinajensen.com" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://www.facebook.com/pg/RinaLJensen" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a class="social-card-icon" href="https://instagram.com/RinaLJensen" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-card-icon" href="https://linkedin.com/in/RinaJensen" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/jennie-morton.jpg">
                            <div>
                                <h4 class="card-title mb-0"><strong>Jennie Morton</strong></h4>
                                <h5 class="text-muted mb-2">Brand Story Teller</h5>
                            </div>
                        </div>
                        <p class="card-text">"I write about all things engineering. Give me a topic that is complex and bores most people to tears - I'll be happy as a clam geeking out over all the technical details." </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://herringbonefreelance.com" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://www.facebook.com/herringbonefreelance/" target="_blank"><i class="fab fa-facebook"></i></a>
                            <!-- <a class="social-card-icon" href="#"><i class="fab fa-twitter"></i></a> -->
                            <a class="social-card-icon" href="https://www.instagram.com/herringbonefreelance/" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-card-icon" href="https://www.linkedin.com/in/jennie-morton-freelance-engineering-writer/" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/nate-houstman.png">
                            <div>
                                <h4 class="card-title mb-0"><strong>Nate Houstman</strong></h4>
                                <h5 class="text-muted mb-2">Xiphos Web Marketing</h5>
                            </div>
                        </div>
                        <p class="card-text">"I’m an advertiser, web designer, blogger, and marketing nerd, in business since 2014. Here, I present news and how-to’s for everyone. Want to work with me? Click the button below! We’re in a new age of entrepreneurship- there’s no reason anyone can’t succeed!" </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://xiphoswebmarketing.com/" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://www.facebook.com/xiphoswebmarketing" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a class="social-card-icon" href="https://www.youtube.com/channel/UCsFz-XHDc0NSXNCsIMStgEg" target="_blank"><i class="fab fa-youtube"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/kendra-aarhus.png">
                            <div>
                                <h4 class="card-title mb-0"><strong>Kendra Aarhus Van Kirkchove</strong></h4>
                                <h5 class="text-muted mb-2">Beauty Artist</h5>
                            </div>
                        </div>
                        <p class="card-text">"I'm committed to showing you that together we can make a great impact on the world around us. Through conferences, speaking engagements, volunteering, and empowering others to take action, this isn't a dream built on empty words. Let's talk. Let's make a difference. How can I help you inspire?" </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://kendraaarhus.com" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://youConferences.com" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://www.facebook.com/kendraaarhus" target="_blank"><i class="fab fa-facebook"></i></a>
                            <!-- <a class="social-card-icon" href="#"><i class="fab fa-twitter"></i></a> -->
                            <a class="social-card-icon" href="https://www.instagram.com/kendraarhus" target="_blank"><i class="fab fa-instagram"></i></a>
                            <a class="social-card-icon" href="https://www.linkedin.com/in/Kendraaarhus" target="_blank"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <div class="card member-card h-100">
                    <div class="card-body">
                        <div class="profile-heading"><img class="profile-image" src="<?php echo get_template_directory_uri() ?>/assets/img/aaron-vannoy.png">
                            <div>
                                <h4 class="card-title mb-0"><strong>Aaron Van Noy</strong></h4>
                                <h5 class="text-muted mb-2">Big Ten Web Design</h5>
                            </div>
                        </div>
                        <p class="card-text">"We take our job seriously because your company’s future often depends on us. We educate our clients on our marketing strategies and the value we provide." </p>
                        <div class="social-card">
                            <a class="social-card-icon" href="https://bigtenwebdesign.com/" target="_blank"><i class="fas fa-globe"></i></a>
                            <a class="social-card-icon" href="https://www.facebook.com/BigTenWebDesign/" target="_blank"><i class="fab fa-facebook"></i></a>
                            <a class="social-card-icon" href="https://www.linkedin.com/company/big-ten-web-design/" target="_blank"><i class="fab fa-linkedin"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <h1 class="text-center fancy-header my-5">Sponsors</h1>
        <div class="row">
            <div class="col-12 col-md-4 mx-auto"><a class="text-center d-flex justify-content-xl-center align-items-xl-center mb-4" href="https://www.imon.net/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/imon_communications_logo.png"></a></div>
        </div>
        <h1 class="text-center fancy-header my-5">Partners</h1>
        <div class="row align-items-center mb-3">
            <div class="col-12 col-md-4"><a class="text-center d-flex justify-content-xl-center align-items-xl-center mb-4" href="https://www.allegramarketingprint.com/locations/cedar_rapids-ia/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/allegra_marketing_print_mail.png"></a></div>
            <div class="col-12 col-md-4"><a class="text-center d-flex justify-content-xl-center align-items-xl-center mb-4" href="https://www.officeevolution.com/locations/cedar-rapids" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/office_evolution.png"></a></div>
            <div class="col-12 col-md-4"><a class="text-center d-flex justify-content-xl-center align-items-xl-center mb-4" href="https://iowabrewing.beer/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/iowa_brewing_co.png"></a></div>

        </div>
        <div class="row align-items-center mb-3">
            <div class="col-12 col-md-4"><a class="text-center d-flex justify-content-xl-center align-items-xl-center mb-4" href="https://www.rossstreetroasting.com/" target="_blank"><img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/ross_street_roasting.png"></a></div>
        </div>
    </div>
</div>
<?php echo get_footer(); ?>