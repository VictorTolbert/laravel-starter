<template>
    <div class="user-settings">
        <h1 class="title">Reset Password</h1>
        <h2 class="subtitle">Please enter your old password and confirm your new password</h2>
        <div class="reset-password columns">
            <div class="column">
                <b-field
                    label="Old Password"
                    type="is-danger"
                    message="This password is invalid"
                    >
                    <b-input type="password"
                        value="iwantmytreasure"
                        password-reveal>
                    </b-input>
                </b-field>

                <b-field label="New Password">
                    <b-input type="password"
                        value="iwantmytreasure"
                        password-reveal>
                    </b-input>
                </b-field>

                <b-field label="Confirm Password">
                    <b-input type="password"
                        value="iwantmytreasure"
                        password-reveal>
                    </b-input>
                </b-field>
            </div>
            <div class="column">
                <div class="content">
                    <h4>Password Requirements</h4>
                    <ul>
                        <li>At least 6 characters</li>
                        <li>Contains uppercase and lowercase letters</li>
                        <li>Contains a number</li>
                        <li>Contains at least 1 special character (!@$)</li>
                        <li>Does NOT include your email or username</li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <h1 class="title">Contact Information</h1>
        <h2 class="subtitle">Update Phone Number</h2>

        <div class="contact-info columns">
            <div class="column">
                <p>Please enter your phone number and confirm your new phone number.</p>
                <b-field
                    label="Phone Number (xxx-xxx-xxxx)">
                    <b-input></b-input>
                </b-field>
                <b-field
                    label="New Phone Number (xxx-xxx-xxxx)">
                    <b-input></b-input>
                </b-field>
                <b-field
                    label="Confirm Phone Number">
                    <b-input></b-input>
                </b-field>
            </div>
            <div class="column">
                <div class="content is-medium">
                    <p>Please contact the administrator at 844-213-8543 or <a href="mailto:admin@videa.tv">admin@videa.tv</a>, if you need tho have your email updated.</p>
                </div>
            </div>
        </div>
    </div>
</template>
