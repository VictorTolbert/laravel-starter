@extends('layouts.app')
@section('content')
<header class="hero is-light">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Spacing</h1>
        </div>
    </div>
</header>
<section class="section">
    <div class="container is-fluid">
       <table class="table is-bordered is-striped">
           <thead>
               <tr>
                   <th>Property</th>
                   <th>Value</th>
               </tr>
           </thead>
           <tbody>
               <tr
                    v-for="(prop, index) in db.tokens.spacing"
                    :key="index"
                    :style="(prop.value == '0.5rem') ? 'background: #222; color: #eee' : ''">
                   <td
                        v-text="prop.name"
                        :style="`padding-top: ${prop.value};padding-bottom: ${prop.value}`">
                        <span v-if=><b>@{{ prop.name }}</b></span>
                        <span v-else>@{{ prop.name }}</span>
                    </td>
                   <td v-text="prop.value"></td>
               </tr>
           </tbody>
       </table>
    </div>
</section>
@endsection
