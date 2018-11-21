<div class="row masonry-wrap">
    <div class="masonry">
        <div class="grid-sizer"></div>

        @foreach($posts as $post)
            @if($post->type->code == 'quote')
                <article class="masonry__brick entry format-quote" data-aos="fade-up">
                    <div class="entry__thumb">
                        <blockquote>
                            <p>{{ $post->short_description }}</p>
                            <cite>{{ $post->title }}</cite>
                        </blockquote>
                    </div>   
                </article> <!-- end article -->
            @else
                @if($post->type->code == 'standard')
                    <article class="masonry__brick entry format-standard" data-aos="fade-up">
                        <div class="entry__thumb">
                            <a href="{{ url('post/'.$post->id) }}" class="entry__thumb-link">
                                <img src="{{ url($post->src) }}" alt="">
                            </a>
                        </div>
                @endif
                @if($post->type->code == 'video')
                    <article class="masonry__brick entry format-video" data-aos="fade-up">
                        <div class="entry__thumb video-image">
                            <a href="{{ url($post->src) }}" data-lity>
                                <img src="{{ url($post->src) }}">
                            </a>
                        </div>
                @endif
                @if($post->type->code == 'gallery')
                    <article class="masonry__brick entry format-gallery" data-aos="fade-up">
                        <div class="entry__thumb slider">
                            <div class="slider__slides">
                                @foreach(explode(';',$post->src) as $imagen)
                                    <div class="slider__slide">
                                        <img src="{{ url($imagen) }}">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                @endif
                        
                        <div class="entry__text">
                            <div class="entry__header">
                                <div class="entry__date">
                                    {{ $post->date }}
                                </div>
                                <h1 class="entry__title"><a href="{{ url('post/'.$post->id) }}">{{ $post->title }}</a></h1>
                            </div>
                            <div class="entry__excerpt">
                                <p>{{ $post->short_description }}</p>
                            </div>
                            <div class="entry__meta">
                                <span class="entry__meta-links">
                                    <a href="{{ url('category/'.$post->category->id) }}">{{ $post->category->name }}</a> 
                                </span>
                            </div>
                        </div>
                    </article> <!-- end article -->
            @endif
        @endforeach
    </div> <!-- end masonry -->
</div> <!-- end masonry-wrap -->