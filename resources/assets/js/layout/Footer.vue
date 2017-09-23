<template>
    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <router-link :to="{ name: 'privacy' }" class="button is-link">
                    Privacy Policy
                </router-link>
                <router-link :to="{ name: 'terms' }" class="button is-link">
                    Terms and Conditions
                </router-link>
                <p>3390 Peachtree Road, NE, Suite 400 Atlanta, GA 30326<br>
                Copyright © 2014–2017 Videa. All rights reserved.</p>
                <p>844-48-VIDEA (844-488-4332)</p>
                 <!--<ul>
                    <li class="inline" v-for="(package, index) in packages" :key="index">
                        <a>{{package.name}}</a>
                    </li>
                </ul> -->
                <!-- <p>Made with <b-icon icon="favorite" type="is-danger"></b-icon> by Victor</p> -->
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'footer',
        data () {
            return {
                packages: require('@/data/packages')
            }
        }
    }
</script>
