@extends('layouts.main')

@section('content')
<main class="blog-post">
    <div class="container">
        <a href="{{route('main.index')}}"><i class="nav-icon far fa-home rounded-circle" style="color:black;font-size: 30px;"></i></a>
        <h1 class="edica-page-title" data-aos="fade-up">{{$post->title}}</h1>
        <p class="edica-blog-post-meta" data-aos="fade-up" data-aos-delay="200">{{$date->translatedFormat('F')}} {{$date->format('d')}}, 20{{$date->format('y')}} {{$date->format('H:i')}} • {{$post->comments->count()}} Комментариев</p>
        <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
            <img src="{{asset('storage/' . $post->main_image)}}" alt="featured image" class="w-100">
        </section>
        <section class="post-content">
            <div class="row">
                <div class="col-lg-9 mx-auto" data-aos="fade-up">
                    {!! $post->content !!}
                </div>
            </div>
        </section>
        <div class="row mt-4">
            <div class="col-lg-9 mx-auto">
                <section class="related-posts">
                    <h2 class="section-title mb-4" data-aos="fade-up">Схожие посты</h2>
                    <div class="row">
                        @foreach($relatedPosts as $post)
                        <div class="col-md-4" data-aos="fade-right" data-aos-delay="100">
                            <a href="{{route('post.show', $post->id)}}"><img src="{{asset('storage/'. $post->preview_image)}}" alt="related post" class="post-thumbnail"></a>
                            <p class="post-category">{{$post->category_id}}</p>
                            <a href="{{route('post.show', $post->id)}}"><h5 class="post-title">{{$post->title}}</h5></a>
                        </div>
                        @endforeach
                    </div>
                </section>
                <section class="comment-section">
                    <h2 class="section-title mb-5" data-aos="fade-up">Оставить комментарий</h2>
                    <form action="/" method="post">
                        <div class="row">
                            <div class="form-group col-12" data-aos="fade-up">
                                <label for="comment" class="sr-only">Комментарий</label>
                                <textarea name="comment" id="comment" class="form-control" placeholder="Комментарий" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12" data-aos="fade-up">
                                <input type="submit" value="Отправить" class="btn btn-warning">
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection