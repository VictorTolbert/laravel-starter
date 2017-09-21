<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Kendo UI Snippet</title>

    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.2.621/styles/kendo.common.min.css"/>
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.2.621/styles/kendo.rtl.min.css"/>
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.2.621/styles/kendo.silver.min.css"/>
    <link rel="stylesheet" href="http://kendo.cdn.telerik.com/2017.2.621/styles/kendo.mobile.all.min.css"/>

    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
    <script src="https://unpkg.com/vue/dist/vue.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-datasource-vue-wrapper/dist/cdn/kendo-datasource-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-popups-vue-wrapper/dist/cdn/kendo-popups-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-buttons-vue-wrapper/dist/cdn/kendo-buttons-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-layout-vue-wrapper/dist/cdn/kendo-layout-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-window-vue-wrapper/dist/cdn/kendo-window-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-dropdowns-vue-wrapper/dist/cdn/kendo-dropdowns-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-dateinputs-vue-wrapper/dist/cdn/kendo-dateinputs-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-grid-vue-wrapper/dist/cdn/kendo-grid-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-upload-vue-wrapper/dist/cdn/kendo-upload-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-validator-vue-wrapper/dist/cdn/kendo-validator-vue-wrapper.min.js"></script>
    <script src="https://unpkg.com/@progress/kendo-inputs-vue-wrapper/dist/cdn/kendo-inputs-vue-wrapper.min.js"></script>
</head>
<body>

<div id="app">
     @yield('content')
</div>

<script>
    new Vue({
        el: '#app',
        data: {
            schemaModelFields: {
                ProductID: { editable: false, nullable: true },
                ProductName: { validation: { required: true } },
                UnitPrice: { type: 'number', validation: { required: true, min: 1 } },
                Discontinued: { type: 'boolean' },
                UnitsInStock: { type: 'number', validation: { min: 0, required: true } }
            }
        },
        methods: {
            customBoolEditor: function(container, options) {
                kendo.jQuery
                    ('<input class="k-checkbox" type="checkbox" name="Discontinued"' +
                            'data-type="boolean" data-bind="checked:Discontinued">').appendTo(container)
                kendo.jQuery('<label class="k-checkbox-label">​</label>').appendTo(container)
            },
            parameterMap: function(options, operation) {
                if (operation !== 'read' && options.models) {
                    return { models: kendo.stringify(options.models) }
                }
            }
        }
    })
</script>
</body>
</html>
