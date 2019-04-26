@inject('prism', 'App\Services\PrismService')

<div id="search-popup-wrap">
    <div class="search-popup-cover bg-light px-3 px-lg-5 py-5">
        <div class="bg-effect bg-cover nc-no-lazy" style="background-image: url('{!! 11 // $search['background'] !!}')">
            <span class="overlay"></span>
        </div>
        <form role="search" id="searchform" class="search-popup-form py-lg-5" method="get" action="{{ route('search') }}">
            <input class="form-control form-control-lg form-transparent" type="text" placeholder="{{ __('Type Something...') }}" name="q" id="q" required />
        </form>
    </div>
    @php
        $tags = $prism->searchTop();
    @endphp
    @if (!empty($tags))
        <div class="search-key-push px-3 px-lg-5 py-3 py-lg-4">
            <div class="h6 mb-3">{{ __('Top Keywords') }}</div>
            <ul class="nav nav-pills m-n1">
                @foreach($tags as $tag)
                    <li class="nav-item p-1"><a href="{{ $tag->perm_link }}" target="_blank" class="btn btn-light btn-sm">{{ $tag->name }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif
</div>