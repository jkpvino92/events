
   <!--News-->
    <section>
        <div id="lgx-news" class="lgx-news">
            <div class="lgx-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="lgx-heading">
                                <h2 class="heading">From Our Blog</h2>
                                <h3 class="subheading">Conferences dedicated to building remarkable events.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<?php foreach ($sympos as $key => $value) { print_r($value); ?>
                    		<div class="col-xs-12 col-sm-6 col-md-4">
                    			<div class="lgx-single-news">
                    				<figure>
                    					<a href="news-single.html"><img src="http://placehold.it/1144x690" alt=""></a>
                    				</figure>
                    				<div class="single-news-info">
                    					<div class="meta-wrapper">
                    						<span><?php echo date('F d, Y',strtotime($value->event_from)); ?></span>
                    						<span><a href="#"><?php echo $value->name; ?></a></span>
                    						<span><a href="#">Design</a></span>
                    					</div>
                    					<h3 class="title"><a href="news-single.html"><?php echo substr($value->description, 0, 80); ?>....</a></h3>
                    					<a class="lgx-btn lgx-btn-white lgx-btn-sm" href="#"><span>Read More</span></a>
                    				</div>
                    			</div>
                    		</div>
                    	<?php } ?>
                       
                       
                    </div>
                    <div class="section-btn-area">
                        <a class="lgx-btn" href="news.html">View More Blogs</a>
                    </div>
                </div><!-- //.CONTAINER -->
            </div><!-- //.INNER -->
        </div>
    </section>
    <!--News END-->





