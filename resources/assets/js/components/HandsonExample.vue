<template>
    <div id="example-container" class="wrapper">
        <HotTable :root="root" :settings="hotSettings"></HotTable>
    </div>
</template>

<script>
import HotTable from 'vue-handsontable-official'
import Vue from 'vue';

export default {
    data: function() {
        return {
            root: 'test-hot',
            hotSettings: {
              data: function(rows, columns) {
                const result = [];
                for (let i = 0; i < rows; i++) {
                  let row = [];
                  for (let j = 0; j < columns; j++) {
                    row.push('[' + i + ', ' + j + ']');
                  }
                  result.push(row);
                }
                return result;
              }(40, 40),
              colHeaders: true
            }
        };
    },
    name: 'SampleApp',
    components: {
        HotTable
    }
}
</script>

<style>
  #test-hot {
    width: 600px;
    height: 400px;
    overflow: hidden;
  }
</style>
