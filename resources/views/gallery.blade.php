@extends('layout.app')

@section('content')
<section class="pb_section" id="section-gallery">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10 text-center">
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">Gallery</h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card-columns">
                    @for ($i = 1; $i < 10; $i++)
                        <div class="card border-0 mb-4">
                            {{-- PART PENYIMPANAN GAMBAR UNTUK GALLERY --}}
                            <a href="../images/products/1.jpg" class="pb_hover-zoom image-popup">
                                <img class="img-fluid" src="../images/products/{{$i}}.jpg" alt="Image caption here">
                                <i class="ion-ios-search-strong icon"></i>
                            </a>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
