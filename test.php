<?php
//Template name: test page

add_action( 'genesis_entry_content', 'wst_test_uikit' );
function wst_test_uikit(){ ?>

    <div class="uk-text-center" uk-grid>
        <div class="uk-width-1-3">
            <div class="uk-card uk-card-default uk-card-body">1-3</div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-card uk-card-default uk-card-body">1-3</div>
        </div>
        <div class="uk-width-1-3">
            <div class="uk-card uk-card-default uk-card-body">1-3</div>
        </div>
    </div>

    <div class="uk-text-center" uk-grid>
        <div class="uk-width-1-2">
            <div class="uk-card uk-card-default uk-card-body">1-2</div>
        </div>
        <div class="uk-width-1-2">
            <div class="uk-card uk-card-default uk-card-body">1-2</div>
        </div>
    </div>

    <div class="uk-text-center" uk-grid>
        <div class="uk-width-1-4">
            <div class="uk-card uk-card-default uk-card-body">1-4</div>
        </div>
        <div class="uk-width-3-4">
            <div class="uk-card uk-card-default uk-card-body">3-4</div>
        </div>
    </div>




<?php }

genesis();