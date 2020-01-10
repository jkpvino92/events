<?php include("notification-popup.php") ?>
<!-- Page Content -->
<div id="page-content">
<!-- Slider -->
<div id="homepage-carousel" style="background: #011C38; ">
    <div class="container">
        <div class="homepage-carousel-wrapper">
            <div class="row">
                <div class="col-md-6 col-sm-7">
                    <div class="image-carousel">
                        <div class="image-carousel-slide"><img src="<?php echo base_url() ?>assets/img/slide-1.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="<?php echo base_url() ?>assets/img/slide-2.jpg" alt=""></div>
                        <div class="image-carousel-slide"><img src="<?php echo base_url() ?>assets/img/slide-3.jpg" alt=""></div>
                    </div><!-- /.slider-image -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-5">
                    <div class="slider-content">
                        <div class="row">
                            <?php if(isset($logged_info['email'])){ ?> <?php }else{ ?> 
                            <div class="col-md-12">
                                <h1>Join our community</h1>
                                <?php 
                                if(validation_errors() != false) { 
                                    echo '<div class="form-group alert alert-danger alert-box has-error">';
                                    echo'<ul>';
                                    echo validation_errors('<li class="control-label">', '</li>');
                                    echo'</ul>';
                                    echo '</div>'; 
                                    echo $validation_msg;  
                                }

                                 ?>
                                <form id="register" role="form" name="registration" action="<?php echo base_url(); ?>customer/account/register" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="firstname" id="firstname" placeholder="First Name" type="text" value="<?php echo set_value('firstname'); ?>" >
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                         <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="lastname" id="lastname" placeholder="Last Name" type="text" value="<?php echo set_value('lastname'); ?>">
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                       
                                    </div><!-- /.row -->
                                    <div class="row">
                                         <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="email" id="email" placeholder="Email" type="email" value="<?php echo set_value('email'); ?>">
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <select name="gender" id="gender" class="has-dark-background">
                                                    <option value="">Gender</option>
                                                    <option value="1">Male</option>
                                                    <option value="0">Female</option>
                                                </select>
                                            </div>
                                        </div><!-- /.col-md-6 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <input class="form-control has-dark-background" name="phone_no" id="phone_no" placeholder="Phone No" type="text" value="<?php echo set_value('phone_no'); ?>">
                                            </div>
                                        </div><!-- /.col-md-6 -->                                    
                                       

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="terms" id="terms">I Understand <a href="#">Terms & Conditions</a>
                                            </label>
                                        </div>
                                    </div><!-- /.row -->
                                    <button type="submit" id="slider-submit" class="btn btn-framed pull-right">Submit</button>
                                    <div id="form-status"></div>
                                </form>
                            </div><!-- /.col-md-12 -->
                            
                            <?php } ?>
                        </div><!-- /.row -->
                    </div><!-- /.slider-content -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
            <div class="background"></div>
        </div><!-- /.slider-wrapper -->
        <div class="slider-inner"></div>
    </div><!-- /.container -->
</div>
<!-- end Slider -->



<!-- <section class="cta section-padding border-bottom">
    <div class="container">
        <header>
            <h2>About Universo</h2>
        </header>
        <div class="row">
            <div class="col-md-12">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <img src="<?php echo base_url() ?>assets/img/illustration-1.svg" alt="" class="svg">
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-6 mt-5 mt-md-0">
                        <ul class="feature-list-wrapper list-unstyled">
                            <li>
                                <div class="icon"><span class="circle-secondary"><i class="la la-check-circle"></i></span></div>
                                <div class="list-content">
                                    <h4>Claim Listing</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="circle-success"><i class="la la-money"></i></span></div>
                                <div class="list-content">
                                    <h4>Paid Listing</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><span class="circle-primary"><i class="la la-line-chart"></i></span></div>
                                <div class="list-content">
                                    <h4>Promote your Business</h4>
                                    <p>Excepteur sint occaecat cupidatat non proident sunt in culpa officia deserunt mollit.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->




<!-- News, Events, About -->
<div class="block">
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-4 col-sm-6">
                <section class="news-small" id="news-small">
                    <header>
                        <h2>Latest Events</h2>
                    </header>
                    <div class="section-content">
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">U-M School of Public Health, Detroit partners aim to improve air quality in the city</a></header>
                        </article>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                        </article>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                        </article>
                    </div>
                    <a href="" class="read-more stick-to-bottom">All News</a>
                </section>
            </div> -->
            <div class="col-md-4 col-sm-6">
                <section class="events small" id="events-small">
                    <header>
                        <h2>School Events</h2>
                    </header>
                    <div class="section-content">
                        <?php foreach ($schoolEvents as $key => $schoolevent) { ?>
                        <article class="event nearest">
                            <figure class="date">
                                <div class="month"><?php $date =date('F',strtotime($schoolevent->event_from)); echo substr($date, 0, 3); ?></div>
                                <div class="day"><?php echo date('d',strtotime($schoolevent->event_from)); ?></div>
                            </figure>
                            <aside>
                                <header>
                                    <a href=""> <?php echo $schoolevent->name; ?> </a>
                                </header>
                                <div class="additional-info"><?php echo substr($schoolevent->institution, 0, 80); ?>...</div>
                            </aside>
                        </article>
                        <?php } ?>
                       
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-sm-6">
                <section class="events small" id="events-small">
                    <header>
                        <h2>College Events</h2>
                    </header>
                    <div class="section-content">
                    	<?php foreach ($collegeEvents as $key => $collegeEvent) { ?>
                        <article class="event nearest">
                            <figure class="date">
                                <div class="month"><?php $date =date('F',strtotime($collegeEvent->event_from)); echo substr($date, 0, 3); ?></div>
                                <div class="day"><?php echo date('d',strtotime($collegeEvent->event_from)); ?></div>
                            </figure>
                            <aside>
                                <header>
                                    <a href=""> <?php echo $collegeEvent->name; ?> </a>
                                </header>
                                <div class="additional-info"><?php echo substr($collegeEvent->institution, 0, 80); ?>...</div>
                            </aside>
                        </article>
                        <?php } ?>
                       
                    </div>
                </section>
            </div>
            <div class="col-md-4 col-sm-12">
                <section id="about">
                    <header>
                        <h2>About Universo</h2>
                    </header>
                    <div class="section-content">
                        <img src="<?php echo base_url() ?>assets/img/students.jpg" alt="" class="add-margin">
                        <p><strong>Welcome o Universo.</strong> Premium HTML Template for schools, universieties and other educational institutes.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet semper tincidunt.
                            Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                        <br>
                        <a href="" class="read-more stick-to-bottom">Read More</a>
                    </div><!-- /.section-content -->
                </section><!-- /.about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end News, Events, About -->




    <section id="latest-courses">
        <div class="block">
            <div class="container">
                <header><h2>Latest Events</h2></header>
                <div class="row">
                    <?php foreach ($latestevents as $key => $latestevent) { ?>
                        <div class="col-md-4">
                            <div class="latest-course">
                                <?php $filename =  base_url().'assets/images/logo/'.$latestevent->banner; $file_headers = @get_headers($filename); ?>
                                <?php if($file_headers[0] == 'HTTP/1.0 404 Not Found'){ ?>
                                    <figure class="date thumb">
                                        <div class="month">Dec</div>
                                        <div class="day"><?php echo date('d', strtotime($latestevent->event_from)) ?></div>
                                    </figure>
                                <?php } elseif ($file_headers[0] == 'HTTP/1.0 302 Found' && $file_headers[7] == 'HTTP/1.0 404 Not Found'){ ?>                                    
                                    <figure class="date thumb">
                                        <div class="month">Dec</div>
                                        <div class="day"><?php echo date('d', strtotime($latestevent->event_from)) ?></div>
                                    </figure>
                                <?php }else{ ?> 
                                    <figure class="image">
                                        <div class="image-wrapper"><a href="course-detail-v1.html"><img src="<?php echo base_url() ?>assets/images/logo/<?php echo $latestevent->banner ?>"></a></div>
                                    </figure>
                                <?php } ?>                                
                                <aside class="description">
                                    <a href="course-detail-v1.html"><h4><?php echo (strlen($latestevent->name) > 25) ? substr($latestevent->name,0,25).'...' : $latestevent->name; ?></h4></a>
                                    <p> <?php echo $latestevent->institution ?> </p>
                                    <p> <?php echo $latestevent->country ?>, <?php echo $latestevent->state ?>, <?php echo $latestevent->city ?> </p>
                                    <div class="course-meta">
                                        <span class="course-date"><i class="fa fa-calendar-o"></i><?php echo $latestevent->event_from ?></span>
                                        <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                    </div>
                                </aside>
                                <hr>
                            </div><!-- /.latest-course -->
                        </div><!-- /.col-md-4 -->
                    <?php } ?>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.block -->
    </section>
    <!-- /#latest-courses -->




















<!-- Partners, Make a Donation -->
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9">
                <section id="partners">
                    <header>
                        <h2>Partners & Donors</h2>
                    </header>
                    <div class="section-content">
                        <div class="logos">
                            <div class="logo"><a href=""><img src="<?php echo base_url() ?>assets/img/hariniJewellers.jpg" alt=""></a></div>
                            <div class="logo"><a href=""><img src="<?php echo base_url() ?>assets/img/hariniJewellers.jpg" alt=""></a></div>
                            <div class="logo"><a href=""><img src="<?php echo base_url() ?>assets/img/hariniJewellers.jpg" alt=""></a></div>
                            <div class="logo"><a href=""><img src="<?php echo base_url() ?>assets/img/hariniJewellers.jpg" alt=""></a></div>
                            <div class="logo"><a href=""><img src="<?php echo base_url() ?>assets/img/hariniJewellers.jpg" alt=""></a></div>
                        </div>
                    </div>
                </section>
            </div><!-- /.col-md-9 -->
            <div class="col-md-3 col-sm-3">
                <section id="donation">
                    <header>
                        <h2>Make a Donation</h2>
                    </header>
                    <div class="section-content">
                        <a href="" class="universal-button">
                            <h3>Support the University of Universo!</h3>
                            <figure class="date"><i class="fa fa-arrow-right"></i></figure>
                        </a>
                    </div><!-- /.section-content -->
                </section>
            </div><!-- /.col-md-3 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Partners, Make a Donation -->
</div>
<!-- end Page Content -->




