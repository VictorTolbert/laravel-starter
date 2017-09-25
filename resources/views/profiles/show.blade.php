@extends('layouts.app')

@section('hero-body')
<div class="hero-body">
    <div class="container is-fluid">
        <h1 class="title">Profile</h1>
        <h2 class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cumque nesciunt nobis dolores doloremque assumenda dolorem, laboriosam reprehenderit.</h2>
    </div>
</div>
@endsection

@section('content')
<div class="container is-fluid profile">
    <section class="section profile-heading">
        <div class="columns">
            <div class="column is-narrow">
                <figure class="image avatar is-128x128">
                  <img src="{{ get_gravatar($profileUser->email) }}">
                </figure>
            </div>
            <div class="column is-5 name">
                <p>
                    <span class="title is-bold">{{ $profileUser->name }}</span>
                    <span class="button is-primary is-outlined follow">Follow</span>
                </p>
                <p class="tagline">The users profile bio would go here, of course. It could be two lines</p>
            </div>
            <div class="column">
                <nav class="level">
                  <div class="level-item has-text-centered">
                    <div>
                      <p class="heading">Tweets</p>
                      <p class="title">3,456</p>
                    </div>
                  </div>
                  <div class="level-item has-text-centered">
                    <div>
                      <p class="heading">Following</p>
                      <p class="title">123</p>
                    </div>
                  </div>
                  <div class="level-item has-text-centered">
                    <div>
                      <p class="heading">Followers</p>
                      <p class="title">456K</p>
                    </div>
                  </div>
                  <div class="level-item has-text-centered">
                    <div>
                      <p class="heading">Likes</p>
                      <p class="title">789</p>
                    </div>
                  </div>
                </nav>
            </div>


{{--             <div class="column is-2 followers has-text-centered">
                <p class="stat-val">129k</p>
                <p class="stat-key">followers</p>
            </div>
            <div class="column is-2 following has-text-centered">
                <p class="stat-val">2k</p>
                <p class="stat-key">following</p>
            </div>
            <div class="column is-2 likes has-text-centered">
                <p class="stat-val">29</p>
                <p class="stat-key">likes</p>
            </div> --}}
        </div>
    </section>

    <div class="profile-options">
        <div class="tabs is-fullwidth">
            <ul>
                <li class="link">
                    <a>
                        <b-icon icon="list"></b-icon>
                        <span>My Lists</span>
                    </a>
                </li>
                <li class="link">
                    <a>
                        <b-icon icon="favorite"></b-icon>
                        <span>My Likes</span>
                    </a>
                </li>
                <li class="link">
                    <a>
                        <b-icon icon="description"></b-icon>
                        <span>My Posts</span>
                    </a>
                </li>
                <li class="link">
                    <a>
                        <b-icon icon="bookmark"></b-icon>
                        <span>My Bookmarks</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

{{--     <div class="box">
        <!-- Main container -->
        <nav class="level">
            <!-- Left side -->
            <div class="level-left">
                <div class="level-item">
                    <p class="subtitle is-5">
                        <strong>123</strong> posts
                    </p>
                </div>
                <div class="level-item">
                    <p class="control has-addons">
                        <input class="input" type="text" placeholder="Find a post">
                        <button class="button">
                Search
              </button>
                    </p>
                </div>
            </div>

            <!-- Right side -->
            <div class="level-right">
                <p class="level-item"><strong>All</strong></p>
                <p class="level-item"><a>Published</a></p>
                <p class="level-item"><a>Drafts</a></p>
                <p class="level-item"><a>Deleted</a></p>
                <p class="level-item"><a class="button is-success">New</a></p>
            </div>
        </nav>
    </div> --}}

    <div class="spacer"></div>

    <section class="section">
        <div class="columns">
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
            </div>
            <div class="column is-3">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="http://placehold.it/300x225" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <span class="tag is-dark">#webdev</span>
                            <strong class="timestamp">2 d</strong>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a class="card-footer-item">Save</a>
                        <a class="card-footer-item">Edit</a>
                        <a class="card-footer-item">Delete</a>
                    </footer>
                </div>
                <br>
            </div>
        </div>
    </section>
</div>

<section class="section">
    <div class="container is-fluid">
        <div class="columns">
            <div class="column is-narrow">
                <figure class="image is-48x48">
                  <img src="{{ get_gravatar($profileUser->email) }}">
                </figure>
            </div>
            <div class="column is-8 col-md-8 col-md-offset-2">
                <h1 class="title">
                    {{ $profileUser->name }}
                </h1>
                <h1 class="subtitle">
                    {{ $profileUser->email }}
                </h1>
            </div>
        </div>
    </div>
</section>
@endsection
