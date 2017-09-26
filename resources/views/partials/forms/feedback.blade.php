<section class="feedback-form radius6 text-center" id="end-page-feedback">
    <h1 class="feedback-title"> Did you find this page helpful?</h1>
    <p> We're always looking for advice to help improve our documentation! <br> Please let us know what's working (or what's not!). <br> We're constantly iterating thanks to the feedback we receive. </p>
    <form class="report">
        <div class="group flex-container m-t">
            <div class="select-wrapper pos-rel">
                <i class="icon icon-carret-down pos-abt"></i>
                <select class="radius6 text-regular" id="report-type">
                    <option value="feedback"> Feedback </option>
                    <option value="issue"> Issue </option>
                    <option value="typo"> Typo </option>
                    <option value="praise"> Praise </option>
                    <option value="other"> Other </option>
                </select>
            </div>
            <input autocapitalize="none" autocomplete="off" autocorrect="off" class="radius6 text-regular" id="report-email" placeholder="Email address" spellcheck="false" type="email">
        </div>
        <div class="group">
            <textarea class="radius6 text-regular" id="report-description" placeholder="Description here" required="required"></textarea>
        </div>
        <div class="group text-center">
            <button class="btn btn-lg btn-static-secondary report-submit elevation1"> Submit </button>
        </div>
    </form>
</section>
