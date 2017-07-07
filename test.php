<?php
//Template name: test page

add_action( 'genesis_after_header', 'wst_test_uikit' );
function wst_test_uikit(){ ?>
	<div class="uk-grid uk-grid-width-1-2">
		<div class="uk-panel"><h2>panel1</h2></div>
		<div class="uk-panel"><h2>panel 2</h2></div>
	</div>

	<div class="uk-accordion" data-uk-accordion>

		<h3 class="uk-accordion-title">Heading 1</h3>
		<div class="uk-accordion-content">content 1</div>

		<h3 class="uk-accordion-title">Heading 2</h3>
		<div class="uk-accordion-content">content 1</div>

		<h3 class="uk-accordion-title">Heading 2</h3>
		<div class="uk-accordion-content">content 1</div>

	</div>


	<button class="uk-button" data-uk-toggle="{target:'#my-id'}">toggle</button>

	<div class="uk-panel uk-panel-box" id="my-id">bla bla</div>



    <div class=" tm-pf-slideshow uk-container uk-container-center uk-margin-large uk-slidenav-position"
         data-uk-slideshow="{autoplay:true,
  animation:'swipe'}">
        <ul class="uk-slideshow">
            <li>
                <div class="uk-panel uk-panel-box">
                    <div class="uk-grid uk-grid-width-large-1-2">
                        <div class="tm-slideshow-img uk-align-center " data-uk-scrollspy="{cls:'uk-animation-slide-bottom uk-animation-1',
         repeat: true}" >

                            <img class=""  src="http://lorempixel.com/output/fashion-q-c-640-480-6.jpg"
                                 alt="">
                        </div>
                        <div class="tm-slideshow-text "
                             data-uk-scrollspy="{cls:'uk-animation-slide-top uk-animation-1',
          repeat:true}">
                            <h3 class="uk-panel-title uk-text-center" >Title one</h3>

                            <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href="" target="_blank" class="uk-button uk-button-primary">Read More</a>
                        </div>
                    </div>

                </div>
            </li>
            <li>
                <div class="uk-panel uk-panel-box">
                    <div class="uk-grid uk-grid-width-large-1-2">
                        <div class="tm-slideshow-img uk-align-center " data-uk-scrollspy="{cls:'uk-animation-slide-bottom uk-animation-1',
         repeat: true}" >

                            <img class=""  src="http://lorempixel.com/output/people-q-c-640-480-7.jpg"
                                 alt="">
                        </div>
                        <div class="tm-slideshow-text "
                             data-uk-scrollspy="{cls:'uk-animation-slide-top uk-animation-1',
          repeat:true}">
                            <h3 class="uk-panel-title uk-text-center" >Title two</h3>

                            <p >Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <a href="" target="_blank" class="uk-button uk-button-primary">Read More</a>
                        </div>
                    </div>

                </div>
            </li>
        </ul>
        <a href="" class="uk-slidenav  uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
        <a href="" class="uk-slidenav  uk-slidenav-next" data-uk-slideshow-item="next"></a>
        <ul class="uk-dotnav uk-position-bottom uk-flex-center">
            <li data-uk-slideshow-item="0"><a href=""></a></li>
            <li data-uk-slideshow-item="1"><a href=""></a></li>
        </ul>
    </div>


<?php }

genesis();