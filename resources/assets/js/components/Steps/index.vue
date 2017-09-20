<template>
    <div class="steps" id="stepsDemo">
        <div class="step-item is-active is-success">
            <div class="step-marker">
                <span class="icon">
                    <i class="fa fa-check"></i>
                </span>
            </div>
            <div class="step-content">
                <p class="step-title">Step 1</p>
                <p>This is the first step of the process.</p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker"></div>
            <div class="step-content">
                <p class="step-title">Step 2</p>
                <p>This is the second step. You get here once you have completed the first
                    step.
                </p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker">3</div>
            <div class="step-content">
                <p class="step-title">Step 3</p>
                <p>This is the third step. One more last before the end.</p>
            </div>
        </div>
        <div class="step-item">
            <div class="step-marker">
                <span class="icon">
                    <i class="fa fa-flag"></i>
                </span>
            </div>
            <div class="step-content">
                <p class="step-title">Step 4</p>
                <p>Final step. You have completed all the previous steps and end the process.</p>
            </div>
        </div>
        <div class="steps-actions">
            <div class="steps-action">
                <button data-nav="previous" class="button is-light">previous</button>
            </div>
            <div class="steps-action">
                <button data-nav="next" class="button is-light">Next</button>
            </div>
        </div>
    </div>
</template>
<script>

import StepsWizard from './StepsWizard'

export default {
    mounted () {
        var stepsWizard = new StepsWizard(document.getElementById('stepsDemo'))
    }
}
</script>
