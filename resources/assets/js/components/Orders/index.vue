<template>
    <div>
        <h1 class="title">Order Reporting</h1>
        <h2 class="subtitle"></h2>
        <hr>
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <b-icon icon="navigate_next"></b-icon>
                        Order #
                    </th>
                    <th>Advertiser</th>
                    <th>Agency</th>
                    <th>Product</th>
                    <th>Campaign</th>
                    <th>Ordered</th>
                    <th>Revenue</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(order, index ) in orders"
                    :key="index">
                    <td>
                        <b-icon icon="navigate_next"></b-icon>
                        <a>{{order.id}}</a>
                    </td>
                    <td>
                        {{order.advertiser}}
                    </td>
                    <td>{{order.agency}}</td>
                    <td>{{order.product}}</td>
                    <td>{{order.campaign}}</td>
                    <td></td>
                    <td>{{order.revenue}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                orders: require('@/data/orders')
            }
        }
    }
</script>
