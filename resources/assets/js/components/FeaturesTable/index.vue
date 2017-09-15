<template>
    <div>
        <h1 class="title">Features Table</h1>
        <hr>
        <table class="features-table">
            <thead>
                <tr>
                    <td></td>
                    <td>Standard</td>
                    <td>Professional</td>
                    <td>Enterprise</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td></td>
                    <td>$99</td>
                    <td>$199</td>
                    <td>$399</td>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Custom domain</td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                </tr>
                <tr>
                    <td>Advanced control</td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                </tr>
                <tr>
                    <td>Unlimited support</td>
                    <td><b-icon pack="fa" icon="clear"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                </tr>
                <tr>
                    <td>User registration</td>
                    <td><b-icon pack="fa" icon="clear"></b-icon></td>
                    <td><b-icon pack="fa" icon="clear"></b-icon></td>
                    <td><b-icon pack="fa" icon="check"></b-icon></td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

<style>
    .features-table {
        width: 100%;
        margin: 0 auto;
        border-collapse: separate;
        border-spacing: 0;
        text-shadow: 0 1px 0 #fff;
        color: #2a2a2a;
        background: #fafafa;
    }

    .features-table td {
        height: 50px;
        line-height: 50px;
        padding: 0 20px;
        border-bottom: 1px solid #cdcdcd;
/*         box-shadow: 0 1px 0 white;
        -moz-box-shadow: 0 1px 0 white;
        -webkit-box-shadow: 0 1px 0 white; */
        white-space: nowrap;
        text-align: center;
    }

    /*Body*/
    .features-table tbody td {
        text-align: center;
        width: 150px;
    }

    .features-table tbody td:first-child {
        width: auto;
        text-align: left;
    }

    .features-table td:nth-child(2),
    .features-table td:nth-child(3) {
        background: #efefef;
        background: rgba(144,144,144,0.15);
        border-right: 1px solid white;
    }


    .features-table td:nth-child(4) {
        background: #e7f3d4;
        background: rgba(184,243,85,0.3);
    }

    /*Header*/
    .features-table thead td {
/*         -moz-border-radius-topright: 10px;
        -moz-border-radius-topleft: 10px;
        border-top-right-radius: 10px;
        border-top-left-radius: 10px; */
        border-top: 1px solid #eaeaea;
    }

    .features-table thead td:first-child {
        border-top: none;
    }

    /*Footer*/
    .features-table tfoot td {
/*         -moz-border-radius-bottomright: 10px;
        -moz-border-radius-bottomleft: 10px;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px; */
        border-bottom: 1px solid #dadada;
    }

    .features-table tfoot td:first-child {
        border-bottom: none;
    }
</style>
