<div class="post-action pt-5">
    <div class="post-like text-center">
        <like-button id="{{ $article->id }}" count="{{ number_format($article->likes_count) }}" value="{{ $article->isLiked() }}" class="btn btn-lg btn-primary">
            <i class="iconfont icon-yishoucang"></i> {{ __('prism.article.like') }}
        </like-button>
    </div>
    <div class="post-share justify-content-between mt-4">
        <div class="post-play">
            <!-- <a href="">
                <i class="text-lg iconfont icon-star-1"></i> 收藏 <small class="text-muted">(123)</small>
            </a>
            <span class="px-3 text-light"> &Iota;</span> -->
            <a class="btn-bigger-cover" id="btn-bigger-cover" href="javascript:">
                <i class="text-lg iconfont icon-daochu"></i> 海报
            </a>
        </div>
        @include('components.article.share', compact('article'))
    </div>
</div>