@extends('layouts.app')
@section('content')
<header class="hero is-dark has-code-bg">
    <div class="hero-body">
        <div class="container is-fluid">
            <h1 class="title">Program Revenue</h1>
            <h2 class="subtitle">The Program Revenue screen shows you how your automated Videa accounts are faring relative to your station programming line up. It compares this year's numbers through the Videa automated system to last year's numbers. You can also see the sports or special programs already defined in the Videa system.

</h2>
        </div>
    </div>
</header>
<section class="section">
    <div class="column">
        <nav class="level">
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">% Inventory Sold By Videa</p>
              <p class="title">5%</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Units Sold by Videa</p>
              <p class="title">517</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Total Station Units Available</p>
              <p class="title">52,215</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Total Revenue TY/LY</p>
              <p class="title">$10,888 / $0</p>
            </div>
          </div>
          <div class="level-item has-text-centered">
            <div>
              <p class="heading">Videa TY AUR/LY AUR</p>
              <p class="title">$166 / $0</p>
            </div>
          </div>
        </nav>
    </div>
</section>
@endsection
