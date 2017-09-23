<template>
    <section class="dashboard section">

        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">

                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification">

                            </article>
                            <article class="tile is-child notification">
                                <div class="content">
                                    <p class="title">...tiles</p>
                                    <p class="subtitle">Bottom tile</p>

                                </div>
                            </article>
                        </div>

                        <div class="tile is-parent">
                            <article class="tile is-child notification">
                                <div class="content">
                                    <p class="title">Atoms</p>
                                    <p class="subtitle">atoms of our interfaces serve as the foundational
                                    building blocks that comprise all our user interfaces. These atoms
                                    include <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">basic HTML elements</a> like form labels, inputs, buttons, and others that can’t be broken down any further without ceasing to be functional.</p>
                                    <hr>
                                    <p class="title">Molecules</p>
                                    <p class="subtitle">In interfaces, molecules are relatively simple groups of UI elements functioning together as a unit. For example, a form label, search input, and button can join together to create a search form molecule.</p>
                                    <hr>
                                    <p class="title">Organisms</p>
                                    <p class="subtitle">Organisms are relatively complex UI components composed of groups of molecules and/or atoms and/or other organisms. These organisms form distinct sections of an interface.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child notification">
                            <div class="content">
                                <p class="title">Wide tile</p>
                                <p class="subtitle">Aligned with the right tile</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification">
                        <div class="content">
                            <p class="title">List of patterns</p>
                            <p class="subtitle">Atoms, Molecules, Organisms, Templates, Pages</p>
                            <div class="content">
                                <ol>
                                    <router-link
                                        tag="li"
                                        v-for="(pattern, index) in patterns"
                                        :to="{ name: pattern.name}"
                                        :key="index">
                                        <a>{{pattern.name}}</a>
                                    </router-link>
                                </ol>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import ModalForm from '@/components/ModalForm'

    export default {
        data () {
            return {
                patterns: require('@/data/patterns'),
                isImageModalActive: false,
                isCardModalActive: false,
                isComponentModalActive: false,
                ModalForm,
                formProps: {
                    email: 'evan@you.com',
                    password: 'testing'
                },
                selectedSize: '',
                isPublic: false,
                orderManagementNav: '',
                ReportingNav: '',
                navigation: 'home',
                activeTab: 0,
                selectedQuarter: '',
                message: 'Try & Copy What I`m saying'
            }
        },
        methods: {
            alert () {
                this.$dialog.alert({
                    title: 'Title Alert',
                    message: 'I have a title, a custom button and <b>HTML</b>!',
                    confirmText: 'Cool!'
                })
            },
            confirmCustom () {
                this.$dialog.confirm({
                    title: 'Privacy Politics',
                    message: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. [...]',
                    cancelText: 'Disagree',
                    confirmText: 'Agree',
                    type: 'is-success',
                    onConfirm: () => {
                        this.$toast.open('User agreed')
                    }
                })
            },
            confirmCustomDelete () {
                this.$dialog.confirm({
                    title: 'Deleting account',
                    message: 'Are you sure you want to <strong>delete</strong> your account? This action cannot be undone.',
                    confirmText: 'Delete Account',
                    type: 'is-danger',
                    hasIcon: true,
                    onConfirm: () => {
                        this.$toast.open('Account deleted!')
                    }
                })
            },
            prompt () {
                this.$dialog.prompt({
                    message: `What's your name?`,
                    maxlength: 20,
                    placeholder: 'e.g. John Doe',
                    onConfirm: (value) => {
                        this.$toast.open('Your name is: ' + value)
                    }
                })
            },
            onCopy (e) {
                alert('You just copied: ' + e.text)
            },
            onError (e) {
                alert('Failed to copy texts')
            }
        }
    }
</script>
