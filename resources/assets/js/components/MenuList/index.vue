<template>
    <ul class="menu-list">
        <router-link
            v-for="(item, index) in items"
            tag="li"
            :key="index"
            :to="{name: item.name}"
        >
            <a>{{item.label}}</a>
        </router-link>
    </ul>
</template>

<script>
    export default {
        props: ['items']
    }
</script>
