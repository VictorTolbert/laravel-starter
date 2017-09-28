<h2 class="title is-size-4">Product Team</h2>
<div class="columns is-multiline">
    <div v-for="person in db.team" class="column is-3">
        <!-- @{{ person.name }} -->
         <div class="media">
             <figure class="media-left" style="width: 10rem">
                 <p class="image is-128x128 is-grayscale">
                     <img :src="`/images/team/${person.name.toLowerCase()}.jpg`">
                 </p>
             </figure>
             <div class="media-content">
                 <div class="content">
                     <p>
                         <strong v-text="person.name"></strong> <small v-text="person.email"></small> <small></small>
                         <br>
                         <div v-text="person.bio"></div>
                     </p>
                 </div>
             </div>
         </div>
    </div>

{{--     <!-- Bill -->
    <div class="column is-6">

    </div>

    <!-- David -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/david.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Bill Mc</strong> <small>@bill.mclain</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Dawn Tavoletti  -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/david.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Bill</strong> <small>@bill.mclain</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jerome Thompson -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/jerome.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Jerome</strong> <small>@jerome.thompson</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ro -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/rokeia.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Ro</strong> <small>@rokeia.gravely</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ruth Kim -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/ruth.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Ruth</strong> <small>@ruth.kim</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Mark -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/mark.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Mark</strong> <small>@ruth.kim</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charlane -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/ruth.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Charlene</strong> <small>@charlene.</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Matt Hand -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/matt.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Len</strong> <small>@charlene.</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Renee -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/renee.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Len</strong> <small>@charlene.</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Lynn Hobbs -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/ruth.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Len</strong> <small>@charlene.</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Kurt Myers -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/kurt.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Kurt</strong> <small>@ruth.kim</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Osen Unuigbe -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/ruth.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Ruth</strong> <small>@ruth.kim</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Phil Greco -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/phil.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Phil</strong> <small>@phil.greco</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Tom  -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/tom.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Tom</strong> <small>@tom.powers</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vadim -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/victor.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Victor</strong> <small>@victor.tolbert</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Vic -->
    <div class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128">
                    <img src="/images/team/victor.jpg">
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>Victor</strong> <small>@victor.tolbert</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div> --}}
</div>
