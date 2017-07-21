<?php
// Template name: test page
add_action( 'genesis_entry_content', 'wst_test_uikit' );
function wst_test_uikit() {
 ?>




	<div class="uk-text-center" uk-grid>
		<div >
			<div class="uk-card uk-card-default uk-card-body">Auto</div>
		</div>
		<div class="uk-width-1-3">
			<div class="uk-card uk-card-default uk-card-body">Auto</div>
		</div>
		<div class="uk-width-expand">
			<div class="uk-card uk-card-default uk-card-body">Expand</div>
		</div>
	</div>

	<div class="uk-child-width-1-3 uk-grid-small uk-text-center" uk-grid>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Item</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Item</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Item</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Item</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Item</div>
		</div>
	</div>


	<div class="uk-grid-small uk-text-center uk-child-width-expand" uk-grid>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Expand</div>
		</div>
		<div class="uk-width-1-3">
			<div class="uk-card uk-card-default uk-card-body">1-3</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Expand</div>
		</div>
		<div>
			<div class="uk-card uk-card-default uk-card-body">Expand</div>
		</div>
	</div>

	<div class="uk-grid-match uk-grid-small uk-text-center" uk-grid>
		<div class="uk-width-1-2@m">
			<div class="uk-card uk-card-default uk-card-body">1-2@m</div>
		</div>
		<div class="uk-width-1-4@m">
			<div class="uk-card uk-card-default uk-card-body">1-4@m</div>
		</div>
		<div class="uk-width-1-4@m">
			<div class="uk-card uk-card-default uk-card-body">1-4@m</div>
		</div>
		<div class="uk-width-1-5@m uk-hidden@l">
			<div class="uk-card uk-card-secondary uk-card-body">1-5@m<br>hidden@l</div>
		</div>
		<div class="uk-width-1-5@m uk-width-1-3@l">
			<div class="uk-card uk-card-default uk-card-body">1-5@m<br>1-3@l</div>
		</div>
		<div class="uk-width-3-5@m uk-width-2-3@l">
			<div class="uk-card uk-card-default uk-card-body">3-5@m<br>2-3@l</div>
		</div>
	</div>

	<div class="uk-grid-match uk-grid-small uk-text-center" uk-grid>
		<div class="uk-width-auto@m uk-visible@l">
			<div class="uk-card uk-card-primary uk-card-body">auto@m<br>visible@l</div>
		</div>
		<div class="uk-width-1-3@m">
			<div class="uk-card uk-card-default uk-card-body">1-3@m</div>
		</div>
		<div class="uk-width-expand@m">
			<div class="uk-card uk-card-default uk-card-body">expand@m</div>
		</div>
	</div>


  <button>hello</button>

	<button class="uk-button uk-button-default">Button</button>

	<div class="media-queries">Test</div>


    <h1>lightbox</h1>

    <div uk-lightbox>
        <a class="uk-button uk-button-default" href="https://getuikit.com/docs/images/photo.jpg">Open Lightbox</a>
    </div>

    <div class="uk-h3">Slide</div>
    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/photo.jpg" caption="Caption 1">
                <img src="https://getuikit.com/docs/images/photo.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/dark.jpg" caption="Caption 2">
                <img src="https://getuikit.com/docs/images/dark.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/light.jpg" caption="Caption 3">
                <img src="https://getuikit.com/docs/images/light.jpg" alt="">
            </a>
        </div>
    </div>

    <div class="uk-h3">Fade</div>
    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: fade">
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/photo.jpg" caption="Caption 1">
                <img src="https://getuikit.com/docs/images/photo.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/dark.jpg" caption="Caption 2">
                <img src="https://getuikit.com/docs/images/dark.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/light.jpg" caption="Caption 3">
                <img src="https://getuikit.com/docs/images/light.jpg" alt="">
            </a>
        </div>
    </div>

    <div class="uk-h3">Scale</div>
    <div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: scale">
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/photo.jpg" caption="Caption 1">
                <img src="https://getuikit.com/docs/images/photo.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/dark.jpg" caption="Caption 2">
                <img src="https://getuikit.com/docs/images/dark.jpg" alt="">
            </a>
        </div>
        <div>
            <a class="uk-inline" href="https://getuikit.com/docs/images/light.jpg" caption="Caption 3">
                <img src="https://getuikit.com/docs/images/light.jpg" alt="">
            </a>
        </div>
    </div>


    <div class="uk-margin-large" uk-lightbox>
        <a class="uk-button uk-button-default" href="https://getuikit.com/docs/images/photo.jpg" caption="Image">Image</a>
        <a class="uk-button uk-button-default" href="//www.quirksmode.org/html5/videos/big_buck_bunny.mp4" caption="Video">Video</a>
        <a class="uk-button uk-button-default" href="//www.youtube.com/watch?v=YE7VzlLtp-4" caption="YouTube">YouTube</a>
        <a class="uk-button uk-button-default" href="//vimeo.com/1084537" caption="Vimeo">Vimeo</a>
    </div>


<?php }

genesis();
