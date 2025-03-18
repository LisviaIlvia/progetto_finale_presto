<x-layout>
    <section class="container my-5">
        <h2 class="text-center text-white display-6 mb-5">{{__('ui.category_ads')}}
            <span class="display-6 fw-bold">{{ $tag->name }}</span>
        </h2>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($ads as $ad)
                <div class="col-12 col-md-3">
                    <x-ad-card :ad="$ad" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3 class="display-6 text-white">
                    {{__('ui.no_items_uploaded')}}
                    </h3>
                    @auth
                        <a href="{{ route('create.ad') }}" class="btn btn-danger my-5">{{__('ui.post_ad')}}</a>
                    @endauth
                </div>
            @endforelse
            
            <!-- Paginazione -->
            <div class="d-flex justify-content-center mt-4">
                {{ $ads->links() }}
            </div>
        </div>
    </section>
</x-layout>
