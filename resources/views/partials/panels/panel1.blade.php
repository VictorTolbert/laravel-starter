<div class="box">
    <b-field grouped group-multiline>
        <b-field label="Name" expanded>
            <b-field>
                <b-select placeholder="Title">
                    <option>Mr.</option>
                    <option>Ms.</option>
                </b-select>
                <b-input placeholder="Name" expanded></b-input>
            </b-field>
        </b-field>
        <b-field label="Email" expanded>
            <b-input placeholder="some@email.com"></b-input>
        </b-field>
        <b-field label="Autocomplete" expanded>
            <b-input></b-input>
        </b-field>
        <b-field label="Program Name" expanded>
            <b-input></b-input>
        </b-field>
        <b-field label="Select" expanded>
            <b-select placeholder="Select Daypart" expanded>
                <option>Daytime</option>
                <option>Prime</option>
                <option>Early Morning</option>
                <option>Early News</option>
                <option>Early Fringe</option>
                <option>Late Night</option>
            </b-select>
        </b-field>
        <b-field label="Flight Start">
            <b-datepicker
                placeholder="Click to select..."
                :first-day-of-week="1"
                icon="today"
                :readonly="false">
                <button class="button is-primary"
                    @click="date = new Date()">
                    <b-icon icon="today"></b-icon>
                    <span>Today</span>
                </button>

                <button class="button is-danger"
                    @click="date = null">
                    <b-icon icon="clear"></b-icon>
                    <span>Clear</span>
                </button>
            </b-datepicker>
        </b-field>
        <b-field label="Flight End">
            <b-datepicker
                placeholder="Click to select..."
                icon="today"
                :first-day-of-week="1"
                :readonly="false">
            </b-datepicker>
        </b-field>
        <b-field label="Days" expanded>
            <b-select expanded>
                <option>Mon - Fri</option>
                <option>Mon - Sun</option>
                <option>Sat - Sun</option>
                <option>Mon</option>
                <option>Tue</option>
                <option>Wed</option>
                <option>Thu</option>
                <option>Fri</option>
                <option>Sat</option>
                <option>Sun</option>
            </b-select>
        </b-field>
        <b-field label="Show Programs" expanded>
            <b-select expanded>
                <option>Availed Only</option>
                <option>Non-Avaiiled Only</option>
                <option>Both Availed and Non-Availed</option>
            </b-select>
        </b-field>
        <div class="field">
            <label class="label">&nbsp;</label>
            <div class="control">
                <button class="button is-primary">Search</button>
                <button class="button is-neutral">Clear</button>
            </div>
        </div>
    </b-field>
</div>
