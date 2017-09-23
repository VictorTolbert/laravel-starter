<template>
    <div class="site-help is-hidden-touch slideright-transition" :class="open ? 'open-drawer' : 'close-drawer'">
        <div class="wrapper" :class="open ? 'open-drawer' : 'close-drawer'">
            <div class="site-help__toggle" @click="toggle">
                Need Help?
            </div>
            <div class="site-help__content">
                <section class="section">
                    <div class="columns">
                        <div class="column">
                            <article class="media">
                              <figure class="media-left">
                                <span class="icon is-medium is-dark">
                                    <i class="fa fa-question-circle"></i>
                                </span>
                              </figure>
                              <div class="media-content">
                                <div class="content is-small">
                                    <h3 class="title is-5" style="margin-top: 0.25rem">Help</h3>
                                    <p>
                                        Find page specific help for the page or access the general help documentation.
                                    </p>
                                    <p>
                                        <help-link :help-id="$route.meta.helpId">Page Help</help-link>
                                        <a class="button is-white is-small" @click="showHelp(null)">
                                            General Help
                                        </a>
                                    </p>
                                </div>
                              </div>
                            </article>
                        </div>
                        <div class="column">
                            <article class="media">
                                <figure class="media-left">
                                    <span class="icon is-medium is-dark">
                                        <i class="fa fa-comment"></i>
                                    </span>
                                </figure>
                                <div class="media-content">
                                    <div class="content is-small">
                                        <h3 class="title is-5" style="margin-top: 0.25rem">Live Chat</h3>
                                        <p>
                                            Need fast help? From 8:00am-11:00pm EST/EDT Mon - Fri we are online and ready to help.
                                        </p>
                                        <p class="control">
                                            <button class="button is-primary is-outlined is-small" disabled>Chat Offline</button>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <hr>
                    <div class="columns">

                        <div class="column">
                            <article class="media">
                                <figure class="media-left">
                                    <span class="icon is-medium is-dark">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                </figure>
                                <div class="media-content">
                                    <div class="content is-small">
                                        <h3 class="title is-5" style="margin-top: 0.25rem">Call Us</h3>
                                        <p>We are available from 8:00am-11:00pm EST/EDT Mon - Fri.
                                        Customer Service: 1(844)48VIDEA</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="column">
                            <article class="media">
                                <figure class="media-left">
                                    <span class="icon is-medium is-dark">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </figure>
                                <div class="media-content">
                                    <div class="content is-small">
                                        <h3 class="title is-5" style="margin-top: 0.25rem">Contact Us</h3>
                                        <p>
                                            Technical Support: support@videa.tv. Or, use our email form and we will get back to you
                                            within our support hours of 8:00am-11:00pm EST/EDT - Mon-Fri
                                        </p>

                                        <p class="control">
                                            <button class="button is-primary is-outlined is-small">Contact Us</button>
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                open: false,
                showContactUs: true,
                showEmailSent: false,
                showEmailUs: false
            }
        },
        methods: {
            showHelp (helpId) {
                /* eslint-disable no-undef */
                MadCap.OpenHelp(helpId, null, null, false)
            },
            toggle () {
                this.open = !this.open
            }
        }
    }
</script>

<style lang="sass">

</style>
