<template>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-2">

                    <span v-tooltip="'basic one'">Tooltip</span>

                    <span v-tooltip="{ html: 'tooltipContent' }">
                        the target is an html element
                    </span>

                    <div id="tooltipContent">
                        <p>this content is in an
                            <strong>HTML</strong> tag</p>
                    </div>

                    <span v-tooltip="'auto positionning'">Tooltip</span>
                    <span v-tooltip.bottom="'bottom'">bottom tooltip</span>
                    <span v-tooltip.top="'top'">top tooltip</span>
                    <span v-tooltip.left="'left'">left tooltip</span>
                    <span v-tooltip.right="'right'">right tooltip</span>
                    <span v-tooltip="{content:'delayed by 1 second', delay: 1000}">
                        Delayed Tooltip
                    </span>
                    <span v-tooltip="{content:'offset by 30px', offset: 30}">
                        Offset Tooltip
                    </span>
                    <span v-tooltip.click="'Show on: click'">click trigger</span>
                    <span v-tooltip.hover.focus="'Show on: hover.focus'">
                        hover.focus triggers together
                    </span>
                    <span v-tooltip.click.manual="'click + manual trigger'">
                        click + manual trigger
                    </span>
                </div>
                <div class="column">
                    <div class="content">
                        <ais-index app-id="WTEU7RU64C" api-key="84cd67fa388e3c50b3a0a1710fae55ad" index-name="faqs">
                            <div class="field">
                                <label for="" class="label"></label>

                                <div class="control">
                                    <ais-input placeholder="Search FAQs..." autofocus :class-names="{
                          'ais-input': 'input'
                        }"></ais-input>
                                </div>
                            </div>

                            <ais-no-results>
                                <template scope="props">
                                    No products found for
                                    <i>@{{ props.query }}</i>.
                                </template>
                            </ais-no-results>

                            <ais-results>
                                <template scope="{ result }">
                                    <h2>
                                        <ais-highlight :result="result" attribute-name="question"></ais-highlight>
                                    </h2>
                                    <p>@{{ result.answer }}</p>
                                </template>
                            </ais-results>
                        </ais-index>

                        <ais-index app-id="WTEU7RU64C" api-key="84cd67fa388e3c50b3a0a1710fae55ad" index-name="faqs">
                            <ais-search-box :class-names="{
                        'ais-search-box': 'input',
                        'ais-search-box__submit': 'button is-primary',
                      }"></ais-search-box>

                            <ais-results>
                                <template scope="{ result }">
                                    <h2>
                                        <ais-highlight :result="result" attribute-name="question"></ais-highlight>
                                    </h2>
                                </template>
                            </ais-results>
                            <ais-pagination></ais-pagination>
                        </ais-index>
                    </div>

                </div>
            </div>
        </div>
    </section>

</template>
