<table id="column-config" class="b-table--custom table is-bordered is-narrow is-striped">
    <thead>
        <tr>
            <th>Show/Hide</th>
            <th>Column</th>
            <th>Width</th>
            <th>Lock Column</th>
        </tr>
    </thead>
    <tr v-for="(column, index) in clientsColumns">
        <td class="has-text-centered">
            <b-checkbox v-model="column.isVisible"></b-checkbox>
        </td>
        <td>
            @{{ column.title }}
        </td>
        <td>
            <b-select v-model="column.width">
                <option value="">Auto Fit</option>
                <option value="80">XX Small (80)</option>
                <option value="160">X Small (160)</option>
                <option value="240">Small (240)</option>
                <option value="320">Medium (320)</option>
                <option value="480">Large (480)</option>
                <option value="640">X Large (640)</option>
                <option value="720">XX Large (720)</option>
            </b-select>
        </td>
        <td class="has-text-centered">
            <a class="is-large" v-if="index == 2">
                @svg('unlock')
            </a>
        </td>
    </tr>
</table>
