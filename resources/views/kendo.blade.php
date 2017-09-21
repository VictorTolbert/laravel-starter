@extends('layouts.kendo')
@section('content')
{{--  http://docs.telerik.com/kendo-ui-wrappers-vue/introduction  --}}
    <kendo-datasource ref="datasource1"
                      :transport-read-url="'https://demos.telerik.com/kendo-ui/service/Products'"
                      :transport-read-data-type="'jsonp'"
                      :transport-update-url="'https://demos.telerik.com/kendo-ui/service/Products/Update'"
                      :transport-update-data-type="'jsonp'"
                      :transport-destroy-url="'https://demos.telerik.com/kendo-ui/service/Products/Destroy'"
                      :transport-destroy-data-type="'jsonp'"
                      :transport-create-url="'https://demos.telerik.com/kendo-ui/service/Products/Create'"
                      :transport-create-data-type="'jsonp'"
                      :transport-parameter-map="parameterMap"
                      :schema-model-id="'ProductID'"
                      :schema-model-fields="schemaModelFields"
                      :batch='true'
                      :page-size='20'>
      </kendo-datasource>

      <kendo-grid :height="550"
                :data-source-ref="'datasource1'"
                :pageable='true'
                :editable="'inline'"
                :toolbar="['create']">
      <kendo-grid-column field="ProductName"></kendo-grid-column>
      <kendo-grid-column field="UnitPrice" title="Unit Price" :width="120" :format="'{0:c}'"></kendo-grid-column>
      <kendo-grid-column field="UnitsInStock" title="Units In Stock" :width="120"></kendo-grid-column>
      <kendo-grid-column field="Discontinued" :width="120" :editor="customBoolEditor"></kendo-grid-column>
      <kendo-grid-column :command="['edit', 'destroy']" title="&nbsp;" width="250px"></kendo-grid-column>
    </kendo-grid>
@endsection
