@extends('layouts.app')
@section('title', 'Scratch')
@section('content')
<header class="hero is-light">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Scratch</h1>
        </div>
    </div>
</header>

<section class="section">
    <div class="container is-fluid">
        <div class="box">
            <p class="is-size-3">Tooltips</p>
            <hr class="is-marginless">
            <section class="section">
                <div class="columns">
                    <div class="column">
                        <b-tooltip
                            {{-- @click.native="active = !active"  --}}
                            {{-- :active="active"  --}}
                            position="is-right"
                            multilined
                            label="Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.">
                            <a href="#" id="indicate_changes_popup" data-original-title="" title="">
                                <span class="icon">
                                    @svg('material.help')
                                </span>
                            </a>
                        <b-tooltip>
                    </div>

                    <div class="column">
                        <b-tooltip
                            {{-- @click.native="active = !active"  --}}
                            {{-- :active="active"  --}}
                            position="is-top"
                            multilined
                            label="Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.">
                            <a href="#" id="indicate_changes_popup" data-original-title="" title="">
                                <span class="icon">
                                    @svg('material.help')
                                </span>
                            </a>
                        <b-tooltip>
                    </div>

                    <div class="column">
                        <b-tooltip
                            {{-- @click.native="active = !active"  --}}
                            {{-- :active="active"  --}}
                            position="is-bottom"
                            multilined
                            label="Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.">
                            <a href="#" id="indicate_changes_popup" data-original-title="" title="">
                                <span class="icon">
                                    @svg('material.help')
                                </span>
                            </a>
                        <b-tooltip>
                    </div>

                    <div class="column">
                        <b-tooltip
                            {{-- @click.native="active = !active"  --}}
                            {{-- :active="active"  --}}
                            position="is-left"
                            multilined
                            label="Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam.">
                            <a href="#" id="indicate_changes_popup" data-original-title="" title="">
                                <span class="icon">
                                    @svg('material.help')
                                </span>
                            </a>
                        <b-tooltip>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<nav class="panel">
    <p class="panel-heading">
        View Selection
    </p>
    <div class="panel-block">
        <p class="control has-icons-left">
            <input class="input" type="text" placeholder="Search">
            <span class="icon is-small is-left">
                <i class="fa fa-search"></i>
            </span>
        </p>
    </div>
</nav>

<div class="container is-fluid">
    <h1 class="title">Settings</h1>
    <hr>
    <div class="columns">
        <div class="column is-half">
            <div class="columns">
                <div class="column is-one-third">
                    <h2 class="is-size-4">Account</h2>
                </div>
                <div class="column is-two-thirds">
                    <div class="field">
                        <label class="label" for="fullname">Username</label>
                        <div class="control">
                            <input class="input" type="text">
                        </div>
                        <p class="help is-success">The username is available</p>
                    </div>
                    <div class="field">
                        <label class="label" for="fullname">Email Address</label>
                        <div class="control">
                            <input class="input" type="text">
                        </div>
                        <p class="help is-danger">This email is invalid</p>
                    </div>
                    <div class="field">
                        <label class="label" for="fullname">Phone Number</label>
                        <div class="control">
                            <input class="input" type="tel">
                        </div>
                        <p class="help is-info">Helpful text...</p>
                    </div>
                </div>
            </div>

            <div class="columns">
                <div class="column is-one-third">
                    <h2 class="is-size-4">Billing</h2>
                </div>
                <div class="column is-two-thirds">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section">
    <b-tabs>
        <b-tab-item label="Timeline">
            <section class="section">
                <div class="container is-fluid">
                    <ul class="timeline"><li class="time-label"><span class="tag is-danger">
                            10 Feb. 2014
                          </span></li> <li class=""><span class="fa fa-envelope tag is-info"></span> <div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 12:05</span> <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3> <div class="timeline-body">
                                      Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                      weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                      jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                      quora plaxo ideeli hulu weebly balihoo...
                                    </div> <div class="timeline-footer"><a class="button is-primary is-small">Read more</a> <a class="button is-danger is-small">Delete</a></div></div></li>   <li class=""><span class="fa fa-user tag is-primary"></span> <div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span> <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3></div></li>   <li class=""><span class="fa fa-comments tag is-danger"></span> <div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span> <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3> <div class="timeline-body">
                                      Take me to your leader!
                                      Switzerland is small and neutral!
                                      We are more like Germany, ambitious and misunderstood!
                                    </div> <div class="timeline-footer"><a class="button is-info is-small">View comment</a></div></div></li>   <li class="time-label"><span class="tag is-primary">
                                        3 Jan. 2014
                                      </span></li>   <li class=""><span class="fa fa-camera  tag is-danger"></span> <div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span> <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3> <div class="timeline-body"><img src="http://placehold.it/150x100" alt="..." class="margin"> <img src="http://placehold.it/150x100" alt="..." class="margin"> <img src="http://placehold.it/150x100" alt="..." class="margin"> <img src="http://placehold.it/150x100" alt="..." class="margin"></div></div></li>   <li class=""><span class="fa fa-video-camera tag is-success"></span> <div class="timeline-item"><span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span> <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3> <div class="timeline-body"><div class="embed-responsive embed-responsive-16by9"><iframe src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen="allowfullscreen" class="embed-responsive-item"></iframe></div></div> <div class="timeline-footer"><a href="#" class="button is-success is-small">See comments</a></div></div></li>  <li class=""><span class="fa fa-clock-o tag is-white"></span></li></ul>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Calendar">
            <section class="section">
                <div class="container is-fluid">
                    @include('partials.calendar')
                </div>
            </section>
        </b-tab-item>

        <b-tab-item label="Goals">
            <section class="section">
                <div class="container is-fluid">
                    <div class="columns">
                        <div class="column is-2">
                            <p><b-icon icon="access_time" size="is-small"></b-icon> Tuesday July 25, 2017 to Wednesday July 26, 2017 EDT</p>
                            <p><b-icon icon="location_on" size="is-small"></b-icon> Videa, 3390 Peachtree Road NE, Atlanta, GA, United States</p>
                            <hr>
                        </div>
                        <div class="column is-4">
                            <div class="content">
                                @include('content.2017.goals')
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Station Groups">
            <section class="section">
                <div class="container is-fluid">
                    <span class="box" v-for="(group, index) in db.demo.stationGroups" :key="index">
                        @{{ group.group }}
                    </span>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Loaders"></b-tab-item>
        <b-tab-item label="Spinners"></b-tab-item>
        <b-tab-item label="Codepen">
            <section class="section">
                <div class="container is-fluid">
                    <codepen slug-hash="WjRGWb"></codepen>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Mixins">
            <section class="section">
                <div class="container">
                    <h1 class="title">Mixins</h1>
                    <h2 class="subtitle">Utility mixins for custom elements and responsive helpers</h2>

                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>=arrow($color)</code></td>
                                <td>Creates a CSS-only down arrow. Used for the dropdown select.</td>
                            </tr>
                            <tr>
                                <td><code>=block</code></td>
                                <td>Defines a margin-bottom of 1.5rem, except when the element is the last child. Used for almost all block elements.</td>
                            </tr>
                            <tr>
                                <td><code>=clearfix</code></td>
                                <td>Adds a clearfix at the end of the element. Used for the “is-clearfix” helper.</td>
                            </tr>
                            <tr>
                                <td><code>=center($size)</code></td>
                                <td>Positions an element in the exact center of its parent. Used for the spinner in a loading button.</td>
                            </tr>
                            <tr>
                                <td><code>=delete</code></td>
                                <td>Creates a CSS-only cross. Used for the delete element in modals, messages, tags…</td>
                            </tr>
                            <tr>
                                <td><code>=fa($size, $dimensions)</code></td>
                                <td>Sets the style of a Font Awesome icon container.</td>
                            </tr>
                            <tr>
                                <td><code>=hamburger($dimensions)</code></td>
                                <td>Creates a CSS-only hamburger menu with 3 bars. Used for the “nav-toggle”.</td>
                            </tr>
                            <tr>
                                <td><code>=loader</code></td>
                                <td>Creates a CSS-only loading spinner. Used for the “.loader” element, and for input and button spinners.</td>
                            </tr>
                            <tr>
                                <td><code>=overflow-touch</code></td>
                                <td>Sets the style of a container so that it keeps momentum when scrolling on iOS devices.</td>
                            </tr>
                            <tr>
                                <td><code>=overlay($offset: 0)</code></td>
                                <td>Makes the element overlay its parent container, like the transparent modal background.</td>
                            </tr>
                            <tr>
                                <td><code>=placeholder</code></td>
                                <td>Sets the styles of an input placeholder.</td>
                            </tr>
                            <tr>
                                <td><code>=unselectable</code></td>
                                <td>Turns the element unselectable. Used for buttons to prevent selection when clicking.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </b-tab-item>
        <b-tab-item label="Image Placeholder">
            <section class="section">
                <div class="container is-fluid">
                    <h3 class="is-size-3">Image Placeholder</h3>
                    <figure class="image">
                        <image-placeholder
                            :width="200"
                            :height="150"
                            background-color="#ccc"
                            border-color="#333"
                            :border-width="1"
                            :show-ratio="false"
                            font-family="monspace, sans-serif"
                            font-color="#333"
                            :font-size="36">
                        </image-placeholder>
                    </figure>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>Props</th>
                                <th>Type</th>
                                <th>Default</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>width</code></td>
                                <td>Number</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td><code>height</code></td>
                                <td>Number</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <td><code>background-color</code></td>
                                <td>String</td>
                                <td>‘#ccc’</td>
                            </tr>
                            <tr>
                                <td><code>border-color</code></td>
                                <td>String</td>
                                <td>‘#333’</td>
                            </tr>
                            <tr>
                                <td><code>border-width</code></td>
                                <td>Number</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td><code>show-ratio</code></td>
                                <td>Boolean</td>
                                <td>false</td>
                            </tr>
                            <tr>
                                <td><code>font-family</code></td>
                                <td>String</td>
                                <td>‘monospace, sans-serif’</td>
                            </tr>
                            <tr>
                                <td><code>font-color</code></td>
                                <td>String</td>
                                <td>‘#333’</td>
                            </tr>
                            <tr>
                                <td><code>font-size</code></td>
                                <td>Number</td>
                                <td>14</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </b-tab-item>
    </b-tabs>
</section>
@endsection
