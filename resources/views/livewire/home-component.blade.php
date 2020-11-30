<div>
    <!-- Page Header -->
  <header class="masthead" style="background-image: url('assets/img/home.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>LaraBlog</h1>
            <span class="subheading">Blog criado com Laravel</span>
          </div>
        </div>
      </div>
    </div>
  </header>

   <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        @foreach ($posts as $post)
            
        
        <div class="post-preview">
        <a href="/post/{{$post->slug}}">
            <h2 class="post-title">
              {{$post->title}}
            </h2>
            <h3 class="post-subtitle">
              {{$post->excerpt}}
            </h3>
          </a>
          <p class="post-meta">Postado em
            {{ date('d/m/Y', strtotime($post->created_at))}}
        </div>
        <hr>
        @endforeach
        
        <!-- Pager -->
      </div>
    </div>
  </div>

</div>
