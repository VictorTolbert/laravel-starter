<template>
    <form action="">
        <div class="field" style="margin-bottom: 2rem">
            <float-label>
                <input id="FirstName" class="input is-medium" placeholder="First Name:" name="FirstName" maxlength="255" type="text">
            </float-label>
        </div>
        <div class="field" style="margin-bottom: 2rem">
            <float-label>
                <input id="LastName" class="input is-medium"  placeholder="Last Name:" name="LastName" maxlength="255" type="text">
            </float-label>
        </div>
        <div class="field" style="margin-bottom: 2rem">
            <float-label>
                <input id="Email" class="input is-medium"  name="Email" placeholder="Email Address:" maxlength="255" type="email">
            </float-label>
        </div>

        <div class="field" style="margin-bottom: 2rem">
            <p class="control is-expanded">
                <div class="select is-medium is-fullwidth">
                    <float-label label="Design Team Size">
                        <select id="Team_Size__c" name="Team_Size__c" >
                            <option value="">Design Team Size</option>
                            <option value="1-3">1-3</option>
                            <option value="4-6">4-6</option>
                            <option value="7-9">7-9</option>
                            <option value="10+">10+</option>
                        </select>
                    </float-label>
                </div>
            </p>
        </div>

        <div class="field" style="margin-bottom: 2rem">
            <p class="control is-expanded">
                <div class="select is-medium is-fullwidth">
                    <float-label label="Job Title">
                        <select id="Title" name="Title">
                            <option value="">Job Title</option>
                            <option value="UX/UI Designer">UX/UI Designer</option>
                            <option value="PM/Business Analyst">PM/Business Analyst</option>
                            <option value="Design Manager">Design Manager</option>
                            <option value="C-level Executive">C-level Executive</option>
                            <option value="Other">Other</option>
                        </select>
                    </float-label>
                </div>
            </p>
        </div>

        <div class="field" style="margin-bottom: 2rem">
            <float-label>
                <input id="Phone" class="input is-medium" placeholder="Phone" name="Phone" maxlength="255" type="tel">
            </float-label>
        </div>

        <div class="field" style="margin-bottom: 2rem">
            <p class="control">
                <a class="button is-primary is-medium is-fullwidth">Button</a>
            </p>
        </div>
    </form>
</template>
