<div class="slds-grid">
    <div class="slds-form-element slds-m-right--x-small slds-has-error">
        <label for="buyer-email" class="slds-form-element__label">
            Buyer Email <abbr class="slds-required" title="required">*</abbr>
        </label>
        <div class="slds-form-element__control slds-input-has-icon slds-input-has-icon--right">
            <svg class="slds-icon slds-align-middle slds-input__icon slds-icon--x-small"
                style="color: rgb(59, 127, 54);">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-check"></use>
            </svg>
            <input id="buyer-email" type="text" class="slds-input" style="min-width: 14rem;"></div>
        <div id="error-message" class="slds-form-element__help">Error Message</div>
    </div>
    <button type="button" class="slds-button slds-button--neutral slds-align-middle" ng-disabled="emailValidated" ng-show="!isNewEmail" data-ng-click="verifyEmail()">Verify</button>
    <button type="button" class="slds-button slds-button--neutral slds-align-middle" ng-show="isNewEmail" data-ng-click="createNewUser()">Create&nbsp;New&nbsp;User</button>
</div>
