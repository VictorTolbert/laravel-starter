<template>
    <section class="create section">
        <div class="container">
            <h1 class="title">Create New Ticket</h1>
            <h2 class="subtitle">Fill out the form below to submit your <b>{{ selectedRequestType }}</b> support request</h2>
            <hr>
            <div class="columns">
                <div class="column is-4">
                    <b-field label="Request Type">
                        <b-select expanded v-model="selectedRequestType" placeholder="Select a name">
                            <option
                                v-for="(option, index) in requestTypes"
                                :value="option"
                                :key="index">
                                {{ option }}
                            </option>
                        </b-select>
                    </b-field>

                    <b-field label="Request Subtype">
                        <b-select expanded v-model="selectedRequestSubtype" placeholder="Select a name">
                            <option
                                v-for="(option, index) in requestSubtypes"
                                :value="option"
                                :key="index">
                                {{ option }}
                            </option>x
                        </b-select>
                    </b-field>

                    <b-field label="Description">
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <div class="columns">
                        <div class="column">
                            <b-field label="Priority">
                                <b-select expanded v-model="selectedPriority" placeholder="Select a name">
                                    <option
                                        v-for="option in priorities"
                                        :value="option.priority"
                                        :key="option.id">
                                        {{ option.priority }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>

                        <div class="column">
                            <b-field label="Environment" v-if="selectedRequestType == 'TechOps -- Change Management Request'">
                                <b-select expanded v-model="selectedEnvironment">
                                    <option
                                        v-for="(option, index) in environments"
                                        :value="option"
                                        :key="index">
                                        {{option}}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>

                    <b-field label="Scrum Team" v-if="selectedRequestType == 'Release Management -- Change Request'">
                        <b-select expanded v-model="selectedScrumTeam">
                            <option
                                v-for="(option, index) in scrumTeams"
                                :value="option"
                                :key="index">
                                {{option}}
                            </option>
                        </b-select>
                    </b-field>

                     <b-field label="Pull Request ID" v-if="selectedRequestType == 'Release Management -- Change Request'">
                         <b-input></b-input>
                     </b-field>

                    <b-field label="Summary" v-if="selectedRequestType == 'Release Management -- Change Request'">
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field label="Justification" v-if="selectedRequestType == 'Release Management -- Change Request'">
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field label="Impact/Risk Analysis" v-if="selectedRequestType == 'Release Management -- Change Request'">
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field label="Systems Impacted" v-if="selectedRequestType == 'TechOps -- Change Management Request'">
                        <b-input></b-input>
                    </b-field>

                    <b-field label="Planned Date" v-if="selectedRequestType == 'TechOps -- Change Management Request'">
                        <b-input type="date"></b-input>
                    </b-field>

                    <b-field label="End-user Outage"
                        v-if="selectedRequestType == 'Release Management -- Change Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-select expanded v-model="selectedEndUserOutage">
                            <option
                                v-for="(option, index) in endUserOutage"
                                :value="option"
                                :key="index">
                                {{option}}
                            </option>
                        </b-select>
                    </b-field>

                    <b-field
                        label="Validation Steps"
                        v-if="selectedRequestType == 'TechOps -- Change Management Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field
                        label="Validator"
                        v-if="selectedRequestType == 'TechOps -- Change Management Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-input></b-input>
                    </b-field>

                    <b-field
                        label="Patch Steps"
                        v-if="selectedRequestType == 'Release Management -- Change Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field
                        label="Additional Notes"
                        v-if="selectedRequestType == 'TechOps -- Change Management Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <b-field
                        label="Rollback Plan"
                        v-if="selectedRequestType == 'Release Management -- Change Request' || selectedRequestType == 'TechOps -- Change Management Request'"
                    >
                        <b-input maxlength="200" type="textarea"></b-input>
                    </b-field>

                    <div class="field is-grouped">
                        <p class="control">
                            <a class="button is-primary">
                                Create
                            </a>
                        </p>
                        <p class="control">
                            <router-link :to="{ name: 'tickets' }" class="button is-link">
                                Cancel
                            </router-link>
                        </p>
                    </div>
                </div>

                <div class="column">
                </div>

            </div>
        </div>
    </section>
</template>

<script>
    import moment from 'moment'

    export default {
        data () {
            return {
                versions: [],
                subject: '',
                description: '',
                requestStart: new Date(moment().add(14, 'days').toISOString()),
                requestEnd: new Date(moment().add(5, 'days').toISOString()),
                plannedDate: new Date(moment().add(5, 'days').toISOString()),
                selectedRequestType: 'TechOps -- Server Request',
                requestTypes: [
                    'TechOps -- DBA Request',
                    'TechOps -- Server Request',
                    'TechOps -- Change Management Request',
                    'Release Management -- Change Request'
                ],
                selectedRequestSubtype: '',
                techOpsDbaRequestSubtypes: [
                    'DBA Access Issue/AWS',
                    'DBA Access Issue',
                    'DBA Change Request',
                    'Feedback',
                    'General Inquiry',
                    'Report Problem'
                ],
                techOpsServerRequestSubtypes: [
                    'TECH Request Resource',
                    'TECH Request Resource / AWS',
                    'TECH Request Resource / Hyper V VM',
                    'Feedback',
                    'General Inquiry',
                    'Report Problem'
                ],
                releaseManagementChangeRequestSubtypes: [
                    'Alpha - Deployment',
                    'Alpha - Emergency Patch',
                    'UAT - Deployment',
                    'UAT - Emergency Patch',
                    'Prod - Deployment',
                    'Prod - Emergency Patch'
                ],
                techOpsChangeManagementRequestSubtypes: [
                    'TECH Change Request',
                    'DBA Change Request',
                    'TECH Change Request / AWS',
                    'TECH Change Request / Hyper  VM'
                ],
                selectedScrumTeam: '',
                scrumTeams: [
                    'Abacus',
                    'Apollo',
                    'Autobots',
                    'Calypso',
                    'Deee-Lite',
                    'Ichiban',
                    'Titan',
                    'WeareN4'
                ],
                selectedDeveloper: 'Ling Zhu',
                developers: [
                    'Ling Zhu',
                    'Victor Tolbert'
                ],
                selectedQualityAnalyst: 'MD Khan',
                qualityAnalysts: [
                    'MD Khan'
                ],
                selectedEnvironment: 'Production',
                environments: [
                    'Alpha',
                    'Deployment',
                    'Production',
                    'UAT'
                ],
                selectedPriority: 'Low',
                priorities: [
                    { id: 1, priority: 'Critical' },
                    { id: 2, priority: 'High' },
                    { id: 3, priority: 'Medium' },
                    { id: 4, priority: 'Low' }
                ],
                selectedEndUserOutage: '',
                endUserOutage: [
                    'Yes',
                    'No'
                ]
            }
        },

        computed: {
            requestSubtypes () {
                if (this.selectedRequestType === 'TechOps -- DBA Request') {
                    return this.techOpsDbaRequestSubtypes
                }

                if (this.selectedRequestType === 'TechOps -- Server Request') {
                    return this.techOpsServerRequestSubtypes
                }

                if (this.selectedRequestType === 'TechOps -- Change Management Request') {
                    return this.techOpsChangeManagementRequestSubtypes
                }
                if (this.selectedRequestType === 'Release Management -- Change Request') {
                    return this.releaseManagementChangeRequestSubtypes
                }
            }
        },

        methods: {
            onSubmit () {
                console.log('submit!')
            }
        }
    }
</script>
