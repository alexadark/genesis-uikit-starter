<?php
//Template name: test page

add_action( 'genesis_entry_content', 'wst_test_uikit' );
function wst_test_uikit(){ ?>




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



<?php }

genesis();