@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container">
       <table class="table is-bordered is-striped">
           <thead>
               <tr>
                   <th>Property</th>
                   <th>Value</th>
               </tr>
           </thead>
           <tbody>
               <tr v-for="prop in db.tokens.spacing">
                   <td v-text="prop.name"  :style="`padding-top: ${prop.value};padding-bottom: ${prop.value}`"></td>
                   <td v-text="prop.value"></td>
               </tr>
           </tbody>
       </table>
    </div>
</section>
@endsection
