@extends('layouts.app')

@section('title', config('app.name') . ' -- Kerangka PHP Ringan')

@section('content')

    {{-- Hero --}}
    <section class="text-center py-4 py-lg-5">
        <span class="badge rounded-pill badge-brand px-3 py-2 mb-3">ratuu company</span>

        <h1 class="display-5 fw-bold mb-3">
            selamat datang di sistem parkiran<br class="d-none d-md-inline">
            <span class="text-brand">punya ratu</span>
        </h1>

        <p class="lead text-secondary mx-auto mb-4" style="max-width: 620px;">
            sistem parkiran yang dapat diakses oleh pemilik, admin, dan juga pengguna yang merupakan karyawan di perusahaan 'RatusCompany'
        </p>

        <div class="d-flex flex-wrap gap-2 justify-content-center">
            <a class="btn btn-brand btn-lg px-4" href="#langkah">Mulai dari sini</a>
        </div>
    </section>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
