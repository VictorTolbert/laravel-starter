<div class="vui-grid">
    <div class="vui-form-element vui-m-right--x-small vui-has-error">
        <label for="buyer-email" class="vui-form-element__label">
            Buyer Email <abbr class="vui-required" title="required">*</abbr>
        </label>
        <div class="vui-form-element__control vui-input-has-icon vui-input-has-icon--right">
            <svg class="vui-icon vui-align-middle vui-input__icon vui-icon--x-small"
                style="color: rgb(59, 127, 54);">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/static/shared/icons.svg#icon-check"></use>
            </svg>
            <input id="buyer-email" type="text" class="vui-input" style="min-width: 14rem;"></div>
        <div id="error-message" class="vui-form-element__help">Error Message</div>
    </div>
    <button type="button" class="vui-button vui-button--neutral vui-align-middle" ng-disabled="emailValidated" ng-show="!isNewEmail" data-ng-click="verifyEmail()">Verify</button>
    <button type="button" class="vui-button vui-button--neutral vui-align-middle" ng-show="isNewEmail" data-ng-click="createNewUser()">Create&nbsp;New&nbsp;User</button>
</div>
