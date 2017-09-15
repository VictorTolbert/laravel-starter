@extends('layouts.app')

@section('hero-body')
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <b-tabs type="is-boxed">
                <b-tab-item label="Component">
                    <div class="box">
                        <div class="content">

                            <div class="columns">
                                <div class="column">
                                    <div class="field">
                                        <div class="control">
                                            <float-label>
                                                <label class="label">Advertiser</label>
                                                <input type="text" class="input" placeholder="Advertiser">
                                            </float-label>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <div class="control">
                                            <float-label>
                                                <label class="label">Agency</label>
                                                <input type="text" class="input" placeholder="Agency">
                                            </float-label>
                                        </div>
                                    </div>
                                </div>
                                <div class="column">
                                    <b-field label="Flight Start Date">
                                        <b-datepicker
                                            placeholder="Click to select..."
                                            icon="today">
                                        </b-datepicker>
                                    </b-field>
                                </div>
                                <div class="column">
                                    <b-field label="Flight End Date">
                                        <b-datepicker
                                            placeholder="Click to select..."
                                            icon="today">
                                        </b-datepicker>
                                    </b-field>
                                </div>
                                <div class="column">
                                    <div class="field">
                                        <label class="label">&nbsp;</label>
                                        <div class="control">
                                            <button class="button is-primary">Search</button>
                                            <button class="button is-link">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <avails></avails>
                        </div>
                    </div>
                </b-tab-item>
                <b-tab-item label="Template"></b-tab-item>
                <b-tab-item label="Props"></b-tab-item>
            </b-tabs>
        </div>
    </section>
@endsection
