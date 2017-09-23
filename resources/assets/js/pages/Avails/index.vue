<template>
    <section class="section">
        <div class="container">
<!--             <h1 class="title">Avails</h1>
            <h2 class="subtitle">Quickly view and access updated list of your current avails organized by number, release date, advertiser, and more.</h2>
            <hr> --><!--
            <b-message has-icon>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id fermentum quam. Proin sagittis, nibh id hendrerit imperdiet, elit sapien laoreet elit
            </b-message> -->

            <h3 class="title is-6"><b>View Selection</b></h3>
            <b-field grouped>
                <b-input icon="search" expanded placeholder="Find by Avail Number, Advertiser, Agency, Status, etc..."></b-input>
                <p class="control">
                    <button class="button is-primary">Search</button>
                </p>
            </b-field>

            <hr class="is-marginless">

<!--             <article class="box">
                <div class="columns">
                    <div class="column is-2">
                        <b-field label="Advertiser" type="is-info" message="You can have a message too">
                            <b-input placeholder="Advertiser"></b-input>
                        </b-field>
                    </div>
                    <div class="column is-2">
                        <b-field label="Agency">
                            <b-input placeholder="Agency"></b-input>
                        </b-field>
                    </div>
                    <div class="column is-2">
                        <div class="control">
                            <label class="label">Avail Number</label>
                            <input type="text" placeholder="Avail #" class="input">
                        </div>
                    </div>
                    <div class="column is-2">
                        <div class="control">
                            <label class="label">Status</label>
                            <span class="select">
                                <select name="" id="">
                                    <option>All Avails</option>
                                    <option>Pending Buyer Request</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="column is-1">
                        <div class="control">
                            <label class="label">&nbsp;</label>
                            <button class="button is-primary is-outlined">Search</button>
                        </div>
                    </div>
                </div>
            </article> -->
            <avails></avails>
        </div>
    </section>
</template>
