
<template lang="pug">
  .container
    #join.text-center
      form
        .form-group
          input.form-control.input-lg.text-center(type='text', max='12', placeholder='Name')
        button.btn.btn-primary.btn-lg(type='submit') Join Chat
</template>

<script>
  // https://github.com/MetinSeylan/Vue-Socket.io
  import Vue from 'vue'
  import VueSocketio from 'vue-socket.io'

  Vue.use(VueSocketio, 'http://metinseylan.com:1992')

  export default {
    data: ()  => ({
      join: false,
      name: null,
      users: null,
      message: null,
      messages: {}
    }),
    methods: {
      joinChat (name) {
        if (name) {
          this.$socket.emit('join', name)
        }
      },
      send (message) {
        if (message) {
          this.$socket.emit('send', message)
          this.$set('message', null)
        }
      }
    },
    watch: {
      messages () {
        setTimeout(function () {
          $('.messages ul').scrollTop(999999999)
        }, 100)
      }
    },
    sockets: {
      users (users) {
        this.$set('users', users)
      },
      joined () {
        this.$set('join', true)
      },
      messages (data) {
        this.$set('messages', data)
      },
      onmessage (data) {
        this.messages.push(data)
      },
      adduser (user) {
        this.users.push(user)
      }
    }
  })
</script>
