<template>
    <swiper ref="mySwiper" :options="swiperOptions" :not-next-tick="notNextTick" class="swiper-box">
        <swiper-slide>I'm Slide 1</swiper-slide>
        <swiper-slide>I'm Slide 2</swiper-slide>
        <swiper-slide>I'm Slide 3</swiper-slide>
        <swiper-slide>I'm Slide 4</swiper-slide>
        <swiper-slide>I'm Slide 5</swiper-slide>
        <swiper-slide>I'm Slide 6</swiper-slide>
        <swiper-slide>I'm Slide 7</swiper-slide>

        <div class="swiper-pagination" slot="pagination"></div>
        <div class="swiper-button-prev" slot="button-prev"></div>
        <div class="swiper-button-next" slot="button-next"></div>
        <div class="swiper-scrollbar" slot="scrollbar"></div>
    </swiper>
</template>

<script>
export default {
    name: 'carousel',

    data () {
        return {
            notNextTick: true,
            swiperOptions: {
                autoplay: 3000,
                direction: 'vertical',
                grabCursor: true,
                setWrapperSize: ctrue,
                autoHeight: true,
                pagination: '.swiper-pagination',
                paginationClickable: true,
                prevButton: '.swiper-button-prev',
                nextButton: '.swiper-button-next',
                scrollbar: '.swiper-scrollbar',
                mousewheelControl: true,
                observeParents: true,
                debugger: true,
                onTransitionStart (swiper) {
                    console.log(swiper)
                }
            }
        }
    },

    computed: {
        swiper () {
            return this.$refs.mySwiper.swiper
        }
    },

    mounted () {
        console.log('this is current swiper instance object', this.swiper)
        this.swiper.slideTo(3, 1000, false)
    }
}
</script>

<style lang="scss">
    html,
    body {
        position: relative;
        height: 100%;
    }

    body {
        background: #eee;
    }

    .swiper-box {
        width: 100%;
        height: 100%;
        margin: 0 auto;
    }

    .swiper-item {
        height: 100%;
        text-align: center;
        font-size: 18px;
        background: #fff;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
</style>
