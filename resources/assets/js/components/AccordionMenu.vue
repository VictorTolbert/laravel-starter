<template>
    <div class="faq-container">
        <h2 class="is-size-4">Frequently Asked Questions</h2>
        <hr>
        <div class="faq-question" v-on:click="toggle(index)" v-for="(item, index) in contents">
            <div class="faq-description"><span class="faq-number">{{index + 1}}</span>{{item.title}}<span>+</span></div>
            <div class="faq-content" style="display: none;">
                <p>{{item.msg}}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'accordion-menu',
    props: {
        contents: {
            type: Array,
            default: [
                {
                    title: 'How are you?',
                    msg: 'I am fine thank you.'
                }
            ]
        }
    },
    methods: {
        toggle: function (num) {
            // console.log(this)
            // console.log(this.$el)
            // console.log(this.$el.children)
            if (this.$el.children[num].classList.contains('open')) {
                // console.log("if")
                this.$el.children[num].classList.remove('open')
                this.$el.children[num].querySelectorAll('.faq-content')[0].style.display = 'none'
            } else {
                // console.log("else")
                var prevFaqQuestion = this.$el.querySelectorAll('.open')
                if (prevFaqQuestion.length !== 0) {
                    prevFaqQuestion[0].classList.remove('open')
                    prevFaqQuestion[0].querySelectorAll('.faq-content')[0].style.display = 'none'
                }
                this.$el.children[num].classList.add('open')
                this.$el.children[num].querySelectorAll('.faq-content')[0].style.display = ''
            }
        }
    }
}
</script>

<style scoped>
.faq-container {
  margin: 0 auto;
}

.faq-question {
  padding: 0px;
  transition: all 0.3s;
}

.faq-description {
  position: relative;
  transition: all 0.3s;
}

.faq-description .faq-number {
  display: inline-block;
  text-align: center;
  color: #4a4a4a;
  transition: all 0.3s;
  font-weight: normal;
}

.faq-question.open {
  background: #f7f7f7;
}

/* .faq-question.open .faq-description {
  font-weight: 600;
}

.faq-question.open .faq-description .faq-number {
  color: white;
  background: #4a4a4a;
} */

.faq-question.open .faq-description span:last-child {
  transform: rotate(45deg);
  font-weight: normal;
}

@media (max-width: 767px) {
  .faq-container {
    width: 100%;
    border-radius: 0;
    border: 1px solid transparent;
    border-bottom: 1px solid #D9D9D9;
    padding: 0;
  }

  .content-title {
    font-size: 28px;
    text-align: center;
    font-weight: 600;
  }

  .faq-description {
    font-size: 18px;
  }

  .faq-question .faq-description span:last-child {
    top: 8px;
  }
}
</style>
