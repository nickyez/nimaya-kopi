@extends('index.template.page')

@section('title', 'Nimaya Kopi - Kursus')

@push('style')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endpush

@section('content')
    <section id="faq">
        <div class="container py-5 mt-5">
            <div class="row">
                <div class="col-md-8">
                    <h1>Pertanyaan<br>yang sering diajukan</h1>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the first accordion panel. This panel is shown by default,
                                    thanks to the <code>.show</code> class.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Some placeholder content for the second accordion panel. This panel is hidden by
                                    default.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    And lastly, the placeholder content for the third and final accordion panel. This panel
                                    is hidden by default.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 border border-2 rounded py-4 align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <i class="fa-solid fa-message fs-1"></i>
                        <strong class="mt-2">Apakah ada pertanyaaan lain?</strong>
                        <p class="text-center mt-3">temukan platform terbaik untuk mempelajari dari teknik dasar tentang
                            kopi disini</p>
                        <a href="#" class="btn btn-dark w-100">Kirim Email</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


