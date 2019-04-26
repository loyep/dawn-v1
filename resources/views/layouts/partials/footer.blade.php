@php
    $socials = [
        [
            'name' => 'weibo',
            'link' => '#'
        ],
        [
            'name' => 'github',
            'link' => 'https://github.com/loyep'
        ]
    ];
    $socials =json_decode(json_encode($socials));
@endphp

@inject('prism', 'App\Services\PrismService')

@if (config('prism.footer.layout', 'footer3') === 'footer1')
    <footer class="footer bg-white border-top border-light text-center py-4 py-md-5">
        <div class="container">
            @if (!empty($prism->socials()))
                <div class="footer-social text-md">
                    @foreach($prism->socials() as $social)
                        <a href="{{ $social->link }}" target="_blank"
                           class="btn btn-light btn-icon btn-md btn-rounded mx-md-1">
                            <span><i class="fa fa-{{ $social->name }}"></i></span>
                        </a>
                    @endforeach
                </div>
            @endif
            <div class="footer-copyright text-muted mt-4">
                Copyright © {{ date('Y') }} <a href="{{ url('/') }}" title="{{ $name }}" rel="home">{{ $name }}</a>.
                Designed by <a href="https://loyep.com" title="Prism" target="_blank">Prism</a>.
            </div>
        </div>
    </footer>
@else
    <footer class="footer bg-dark pt-4 pt-md-5">
        <div class="container">
            <div class="row my-n3">
                <div class="col py-3">
                    <div class="footer-widget pr-lg-5">
                        <div class="footer-widget-header">{{ $name }}</div>
                        <div class="footer-widget-content">
                            <p>{{ $description ?? '美好源于热爱' }}</p>
                        </div>
                        <div class="footer-widget-social mx-n2 mt-2">
                            @foreach($prism->socials() as $social)
                                <a href="{{ $social->link }}" target="_blank" class="{{ $social->name }} px-2">
                                    <span><i class="fa fa-{{ $social->name }}"></i></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    <div class="footer-widget">
                        <div class="footer-widget-header">标签</div>
                        <div class="footer-widget-content">
                            <div class="footer-widget-links">
                                @foreach($prism->footerTags() as $tag)
                                    <a href="{{ $tag->perm_link }}" target="_self">
                                        {{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 py-3">
                    @routeis('home')
                        <div class="footer-widget">
                            <div class="footer-widget-header">友链</div>
                            <div class="footer-widget-content">
                                <div class="footer-widget-links">
                                    @foreach($prism->links() as $link)
                                        <a href="{{ $link->url }}" target="{{ $link->target }}">
                                            {{ $link->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="footer-widget">
                            <div class="footer-widget-header">分类</div>
                            <div class="footer-widget-content">
                                <div class="footer-widget-links m-n1">
                                    @foreach($prism->footerCategories() as $category)
                                        <a href="{{ $category->perm_link }}" target="_self">
                                            {{ $category->name }}
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endrouteis
                </div>
            </div>
            <div class="footer-copyright border-top py-4 mt-4">
                Copyright © {{ date('Y') }} <a href="{{ url('/') }}" title="{{ $name }}" rel="home">{{ $name }}</a>.
                Designed by <a href="https://loyep.com" title="Prism" target="_blank">Prism</a>.
            </div>
        </div>
    </footer>
@endif

<back-to-top>
    <span class="icon-stack">
        <i class="text-xs iconfont icon-up"></i>
        <span class="back-to-top-text">{{ __('Top') }}</span>
    </span>
</back-to-top>