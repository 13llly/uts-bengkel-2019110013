@extends('layout.app')

@section('content')
<section class="pb_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5">

                {{-- POSISI BIAR 1 BARIS --}}
                <div class="row">
                    {{-- SIMPAN GAMBAR 1 --}}
                    <div class="col">
                        <p><img src="../images/about/1.png" alt="Instant Image" class="img-fluid"></p>
                    </div>
                    {{-- SIMPAN GAMBAR 2 --}}
                    <div class="col">
                        <p><img src="../images/about/2.png" alt="Instant Image" class="img-fluid"></p>
                    </div>

                </div>
            </div>

            {{-- DESKRIPSI UNTUK GAMBARAN UMUM BENGKEL --}}
            <div class="col-lg-4 pl-lg-5 pl-lg-0">
                {{-- JUDUL --}}
                <h2 class="mb-4 text-uppercase pb_letter-spacing-2">CV MOTOR ABC</h2>
                {{-- PARAGRAF 1 --}}
                <p>CV Motor ABC merupakan perusahaan yang bergerak dibidang jasa penjualan otomotif, service & penjualan suku cadang sepeda motor Honda sejak tahun 2007.
                    Selain penjualan, kami juga melayani pemeliharaan serta penjualan spare part resmi.</p>
                {{-- PARAGRAF 2 --}}
                <p>CV Motor ABC memiliki jaringan penjualan dan pemeliharaan yang tersebar 5 Kota di Indonesia yaitu Bandung, Tasikmalaya, Jakarta, Banjar dan Bogor.
                    Siap melayani anda dengan sepenuh hati dengan kualitas yang maksimal.</p>
            </div>
        </div>
    </div>
</section>
@endsection
