<template>
    <div>
        <article class="message is-warning" style="display: block" v-show="$store.state.debug">
<!--             <div class="message-header">
                <p>Page Info</p>
                <button class="delete"></button>
            </div> -->
            <div class="message-body">
                <div class="container">

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus
                </div>
          </div>
        </article>
    </div>
</template>

<style scoped>
    .message {
/*         position: fixed;
        top: 5rem;
        z-index: 99; */
    }
    .ordinal {
        font-size: smaller;
        vertical-align: super;
    }
</style>
