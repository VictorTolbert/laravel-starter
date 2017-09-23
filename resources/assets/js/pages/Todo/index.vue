<template>
    <section class="section">
        <div class="container">
            <h1 class="title">Todo</h1>
            <hr>
            <div class="content">
                <ol>
                    <li v-for="(item, index) in items" :key="index">
                        <div class="block">
                            <b-checkbox v-model="item.isChecked">
                                <span :class="item.isChecked ? 'strike' : '' ">
                                    {{item.description}}
                                </span>
                            </b-checkbox>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                items: [{
                    description: 'Add mobile nav toggle and functionality',
                    isChecked: false
                }, {
                    description: 'Add task to generate SVG sprites',
                    isChecked: false
                }, {
                    description: 'Add filters for currency, etc.',
                    isChecked: false
                }, {
                    description: 'Fix section is-active tab highlighting when sub sections are selected',
                    isChecked: false
                }, {
                    description: 'Tickets: Add ticket creator name to ticket details',
                    isChecked: false
                }, {
                    description: 'Tickets: Fix user create route',
                    isChecked: false
                }, {
                    description: 'VueRouter: Scroll to top (0,0)',
                    isChecked: false
                }, {
                    description: 'Add Slideout menu example',
                    isChecked: false
                }, {
                    description: 'Laravel Project Starter: Add https://github.com/spatie/laravel-tinker-tools',
                    isChecked: false
                }, {
                    description: 'Laravel Project Starter: Review https://murze.be/2017/02/packages-make-developing-laravel-apps-easier',
                    isChecked: false
                }, {
                    description: 'Laravel Project Starter: Apply common manipulations to images like resizing, cropping and adding effects. https://docs.spatie.be/image/v1/introduction',
                    isChecked: false
                }, {
                    description: 'Laravel Project Starter: Easily use SVG images in your Blade templates, either as inline SVG or using SVG sprites. https://github.com/adamwathan/blade-svg',
                    isChecked: false
                }, {
                    description: 'Create Media Library example',
                    isChecked: false
                }]
            }
        }
    }
</script>

<style>
    .strike {
        text-decoration: line-through;
    }
</style>
