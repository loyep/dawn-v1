<div class="items items-left col-12 col-md-6">
    <div class="item">
        <a class="custom-hover d-block" href="{{ route('post.show', ['slug' => $post->slug]) }}" target="_blank"
           title="{{ $post->title }}">
            <div class="custom-hover-img image"
                 style="background-image: url('{{ asset('static/images/bg.jpg') }}');"></div>
            <div class="content p-3 p-lg-4">
                <div class="title text-l2"><h2
                            class="font-24 font-md-20 font-xs-20 color-white light-14 font-weight-normal">
                        {{ $post->title }}</h2></div>
                <div class="data nodots d-none d-md-flex align-items-center flex-row font-14 font-md-12 text-light mt-3">
                    <div class="flex-fill d-flex">
                        <span class="u-cat mr-2 mr-md-3">{{ $post->category->name }}</span>
                    </div>
                    <div class="text-nowrap">
                        <span class="u-time">2017-09-28</span>
                        <span class="u-comment"><i class="fal fa-comment-alt-lines"></i>  34</span>
                        <span class="u-like"><i class="fal fa-heart"></i>  94</span>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
