<!-- Section: gallery -->

<section id="gallery" class="home-section text-center bg-white" data-enllax-ratio="0.5">
    <div class="heading-about">
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="wow bounceInDown" data-wow-delay="0.4s">
                <div class="section-heading">
                <h2>Gallery</h2>
                <i class="fa fa-2x fa-angle-down"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container_gallery">

         <!-- Jssor Slider Begin -->
        <!-- To move inline styles to css file/block, please specify a class name for each element. --> 
        <div id="slider1_container" class="sliderDimension" style="position: relative; top: 0px; margin: auto; background: #191919; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                    background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/loader.gif) no-repeat center center;
                    top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" class="sliderDimension" style="cursor: move; position: absolute; left: 0px; top: 0px; overflow: hidden;">
                <?php
                    for($i=1;$i<14;$i++){
                        echo '<div>
                                <img u="image" src="img/slider/slide ('.$i.').jpeg" />
                                <img u="thumb" src="img/slider/slide ('.$i.').jpeg" />
                            </div>';
                    }
                ?>
            </div>
            
            <!--#region Arrow Navigator Skin Begin -->
            
            <!-- Arrow Left -->
            <span u="arrowleft" class="jssora03l" style="top: 158px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora03r" style="top: 158px; right: 8px">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <!--#region Thumbnail Navigator Skin Begin -->
            <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
            

            <!-- thumbnail navigator container -->
            <div u="thumbnavigator" class="jssort07" style="left: 0px; bottom: 0px;">
                <!-- Thumbnail Item Skin Begin -->
                <div u="slides" style="cursor: default;">
                    <div u="prototype" class="p">
                        <div u="thumbnailtemplate" class="i"></div>
                        <div class="o"></div>
                    </div>
                </div>
                <!-- Thumbnail Item Skin End -->
            </div>
            <!--#endregion Thumbnail Navigator Skin End -->
        </div>
    </div>      
    <!-- Jssor Slider End -->
</section>