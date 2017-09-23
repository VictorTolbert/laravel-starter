<template>
    <section>
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-3" v-for="(icon, index) in icons" :key="index">
                    <div class="box" style="min-height: 10rem">
                        <article class="media">
                            <div class="media-left">
                              <b-icon pack="fa"  type="is-dark" :icon="icon.name"></b-icon>
                            </div>
                          <div class="media-content">
                            <div class="content">
                                <p><strong>{{icon.label}}</strong><br>
                                {{icon.description}}</p>
                                <div class="block">
                                    <a class="button is-primary is-outlined is-inversed is-small">Copy</a>
                                    <a class="button is-primary is-outlined is-inversed is-small">Download</a>
                                </div>
                            </div>
                          </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data () {
            return {
                icons: [
                    { name: 'arrow-circle-left', label: 'Back', description: 'Takes user back to previous screen' },
                    { name: 'caret-down', label: 'Expand', description: 'Used to expand a table row' },
                    { name: 'plus-circle', label: 'Add', description: 'Used to add programs in a data table' },
                    { name: 'list', label: 'Details', description: 'Used to see more information' },
                    { name: 'arrow-circle-up', label: 'Back to Top', description: 'Takes user back to top of screen' },
                    { name: 'caret-right', label: 'Collapse', description: 'Used to collapse a table row' },
                    { name: 'files-o', label: 'Duplicate/Copy', description: 'Used in data table' },
                    { name: 'times', label: 'Delete', description: 'Used to delete a row in a data table' },
                    { name: 'phone', label: 'Call Us', description: 'Need Help drawer' },
                    { name: 'pencil', label: 'Table Row Edit', description: 'Used when editing inside a data table' },
                    { name: 'download', label: 'Export', description: 'Used to export to Excel' },
                    { name: 'comment', label: 'Live Chat', description: 'Need Help drawer' },
                    { name: 'pencil-square-o', label: 'Edit', description: 'Use outside of a data table' },
                    { name: 'chevron-circle-left', label: 'Pagination Previous', description: 'Used to go to previous set of table data' },
                    { name: 'chevron-circle-right', label: 'Pagination Next', description: 'Used to go to next set of table data' },
                    { name: 'envelope', label: 'Contact Us', description: 'Need Help drawer' },
                    { name: 'calendar', label: 'Calendar', description: 'Used to select dates' },
                    { name: 'sort', label: 'Sort', description: 'Default state for data table' },
                    { name: 'sort-asc', label: 'Sort', description: 'Ascending state for data table' },
                    { name: 'sort-desc', label: 'Sort', description: 'Descending state for data table' },
                    { name: 'calendar-plus-o', label: 'Add Calendar', description: 'Used to add quarter/week' },
                    { name: 'cog', label: 'Settings', description: 'Used with button for app personalization' },
                    { name: 'cogs', label: 'Settings', description: 'Used with button for app personalization' },
                    { name: 'exclamation-triangle', label: 'No Results found / Error', description: 'Used when searching and no results are found' },
                    { name: 'check-circle', label: 'Success', description: 'Used as an indication of successful change or submittal of information.' },
                    { name: 'list', label: 'Table View', description: 'Used to view data in a table format' },
                    { name: 'bar-chart', label: 'Chart View', description: 'Used to view data in a chart format' }
                ]
            }
        }
    }
</script>
