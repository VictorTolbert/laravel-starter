<template>
    <div class="ham" id="ham">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</template>
<script>
export default {
    mounted () {
        var ham = document.getElementById('ham')
        ham.onclick = function () {
            ham.classList.toggle('clicked')
        }
    }
}
</script>
