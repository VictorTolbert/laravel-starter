<script>
import { mjml2html } from 'mjml'

export default {
    data () {
        return {
            html: null,
            errors: null,
            mjml: `
                <mjml>
                    <mj-body>
                    <mj-container>
                        <mj-section>
                        <mj-column>
                            <mj-text>
                            Hello World!
                            </mj-text>
                        </mj-column>
                        </mj-section>
                    </mj-container>
                    </mj-body>
                </mjml>
            `
        }
    },

    methods: {
        processMjml () {
            /*
                Compile an mjml string
                */
            const { errors, html } = mjml2html(this.mjml)
            this.errors = errors
            this.html = html
        }
    },

    mounted () {
        this.processMjml()
        /*
            Print the generated responsive HTML
            */
        console.log(this.html)
        /*
            Print the mjml errors, if any
            */
        console.log(this.errors)
    }
}

</script>
