<template>
    <aside class="menu">
        <p class="menu-label">
            Quick Links
        </p>
        <ul class="menu-list">
            <li>
                <router-link to="/resources">Resources</router-link>
            </li>
            <li>
                <router-link to="/training">Training Center</router-link>
            </li>

            <li>
                <router-link to="/calendar">Calendar</router-link>
            </li>

            <!-- <li>
                <a href="http://ecco.ga-sps.org/help.php" target="_blank">Get Help</a>
            </li> -->

        </ul>
    </aside>
</template>

<script>
export default {
    mounted () {
        console.log('Component mounted.')
    }
}
</script>
