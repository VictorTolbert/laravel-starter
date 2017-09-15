@extends('layouts.app')

@section('content')
<section class="section">
<div class="container">
    <div class="columns">
        <div class="column">
            <aside class="menu">
                <p class="menu-label">Dashboard</p>

                <div class="panel-body">
                    You are logged in!
                </div>
            </aside>
        </div>
        <div class="column">
            <transition name="fade" mode="out-in">
                <keep-alive>
                    <router-view></router-view>
                </keep-alive>
            </transition>
        </div>
    </div>
</div>
</section>
@endsection
