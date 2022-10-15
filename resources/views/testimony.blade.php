@extends('layout.app')

@section('content')
<section class="pb_section cover-bg-red cover-bg-opacity-3">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center">
                    <h2 class="mb-4 text-uppercase pb_letter-spacing-2 text-white">TESTIMONY</h2>
                </div>
            </div>

            <div class="row">
                @forelse ($testimonies as $key => $testimony)
                    <div class="col-md">
                        <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                            <div class="media-body">
                                <div class="quote pb_text-black text-white">&ldquo;</div>
                                <blockquote class="mb-5 pb_font-20 text-white">{{ $testimony['result'] }}</blockquote>
                                <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="{{ $testimony['image'] }}" alt="Generic placeholder image">
                                <h3 class="heading text-white">{{ $testimony['name'] }}</h3>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="col-md">
                        <div class="media d-block text-center testimonial_v1 pb_quote_v1">
                            <div class="media-body">
                                <div class="quote pb_text-black text-white">&ldquo;</div>
                                <blockquote class="mb-5 pb_font-20 text-white">-</blockquote>
                                <img class="d-flex text-center mx-auto mb-3 rounded-circle" src="" alt="Generic placeholder image">
                                <h3 class="heading text-white">-</h3>
                                <p class="subheading text-white">-</p>

                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
