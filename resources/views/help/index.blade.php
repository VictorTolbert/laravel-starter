@extends('layouts.slds')
@section('content')
<div class="site-help slideright-transition open-drawer">
    <div class="wrapper open-drawer">
        <div class="site-help__toggle">Need Help?</div>
        <div class="site-help__content" style="font-size: 80%;">
            <div class="slds-grid slds-wrap slds-grid--pull-padded-medium">
                <div class="slds-size--1-of-2 slds-p-horizontal--medium slds-m-bottom--large">
                    <article class="slds-media">
                        <figure class="slds-media__figure"><svg class="slds-icon slds-align-middle slds-align-middle slds-icon--x-small" style="width: 2rem; height: 2rem; color: rgb(82, 84, 93);"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-question-circle"></use></svg></figure>
                        <div class="slds-media__body">
                            <div class="content">
                                <h3 class="slds-text-heading--medium slds-m-bottom--medium">Online Help</h3>
                                <p class="slds-m-bottom--medium">Find page specific help or access the general help documentation.</p><button class="slds-button slds-button--neutral slds-align-middle slds-m-right--medium">Page Help</button><a class="slds-align-middle slds-button slds-button--primary">General Help</a></div>
                        </div>
                    </article>
                </div>
                <div class="slds-size--1-of-2 slds-p-horizontal--medium">
                    <article class="slds-media">
                        <figure class="slds-media__figure"><svg class="slds-icon slds-align-middle slds-align-middle slds-icon--x-small" style="width: 2rem; height: 2rem; color: rgb(82, 84, 93);"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-phone"></use></svg></figure>
                        <div class="slds-media__body">
                            <div class="content">
                                <h3 class="slds-text-heading--medium slds-m-bottom--medium">Call Us</h3>
                                <p>We are available from 8:00am-11:00pm EST/EDT Mon - Fri.</p>
                                <p>Customer Service: 1(844)48VIDEA</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
            <hr>
            <div class="slds-grid slds-wrap slds-grid--pull-padded-medium">
                <div class="slds-size--1-of-2 slds-p-horizontal--medium">
                    <article class="slds-media">
                        <figure class="slds-media__figure"><svg class="slds-icon slds-align-middle slds-align-middle slds-icon--x-small" style="width: 2rem; height: 2rem; color: rgb(82, 84, 93);"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-comment"></use></svg></figure>
                        <div class="slds-media__body">
                            <div class="content">
                                <h3 class="slds-text-heading--medium slds-m-bottom--medium">Live Chat</h3>
                                <p>Need fast help? From 8:00am-11:00pm EST/EDT Mon - Fri we are online and ready to help.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="slds-size--1-of-2 slds-p-horizontal--medium">
                    <article class="slds-media">
                        <figure class="slds-media__figure"><svg class="slds-icon slds-align-middle slds-align-middle slds-icon--x-small" style="width: 2rem; height: 2rem; color: rgb(82, 84, 93);"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-envelope"></use></svg></figure>
                        <div class="slds-media__body">
                            <div class="content">
                                <h3 class="slds-text-heading--medium slds-m-bottom--medium">Contact Us</h3>
                                <p>Technical Support: support@videa.tv</p>
                                <p class="slds-m-bottom--medium">Or, use our email form and we will get back to you within our support hours of 8:00am-11:00pm EST/EDT - Mon-Fri</p>
                                <div class="slds-col--bump-top"><input type="button" value="Contact Us" class="slds-button slds-button--brand"></div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
