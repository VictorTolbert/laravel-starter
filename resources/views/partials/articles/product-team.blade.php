<div class="columns is-multiline">
    <div v-for="person in db.productTeam" class="column is-3">
         <div class="media">
             <figure class="media-left" style="width: 10rem">
                 <p class="image is-128x128 is-grayscale">
                     <img :src="`/images/team-thumbs/${person.name.toLowerCase()}.jpg`">
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
</div>
