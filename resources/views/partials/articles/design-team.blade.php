<div class="columns is-multiline">
    <div v-for="person in db.designTeam" class="column is-6">
        <div class="media">
            <figure class="media-left" style="width: 10rem">
                <p class="image is-128x128 is-grayscale">
                    <a href="/profiles">
                        <img :src="`/images/team-thumbs/${person.name.toLowerCase()}.jpg`">
                    </a>
                </p>
            </figure>
            <div class="media-content">
                <div class="content">
                    <p>
                        <strong>@{{ person.name }}</strong> <small>@bill.mclain</small> <small>31m</small>
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
