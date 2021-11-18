@extends('layouts.appadmin')
@section('title')
    Dashboard oke
    @endsection

@section('content')



                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                                <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
                                <h4 class="font-weight-normal mb-0"></h4>
                            </div>
                            <div class="col-12 col-xl-7">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted"></p>
                                        <h4 class="mb-0 font-weight-bold"></h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted"></p>
                                        <h4 class="mb-0 font-weight-bold"></h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted"></p>
                                        <h4 class="mb-0 font-weight-bold"></h4>
                                    </div>
                                    <div class="pr-3 mb-3 mb-xl-0">
                                        <p class="text-muted"></p>
                                        <h4 class="mb-0 font-weight-bold"></h4>
                                    </div>
                                    <div class="mb-3 mb-xl-0">
                                        <button class="btn btn-warning rounded-0 text-white">Downloads</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left"></p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"></h3>
                                    <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                </div>
                                <p class="mb-0 mt-2 text-warning"><span class="text-body ml-1"><small></small></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left"></p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"></h3>
                                    <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                </div>
                                <p class="mb-0 mt-2 text-danger"> <span class="text-body ml-1"><small></small></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left"></p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"></h3>
                                    <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                </div>
                                <p class="mb-0 mt-2 text-success"><span class="text-body ml-1"><small></small></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title text-md-center text-xl-left"></p>
                                <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                                    <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0"></h3>
                                    <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                                </div>
                                <p class="mb-0 mt-2 text-success"><span class="text-body ml-1"><small></small></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="card bg-primary border-0 position-relative">
                            <div class="card-body">
                                <p class="card-title text-white"></p>
                                <div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row">
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                                                        <div class="icon icon-a text-white mr-3">
                                                            <i class="ti-cup icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-b text-white mr-3">
                                                            <i class="ti-bar-chart icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-c text-white mr-3">
                                                            <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row">
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-4 mt-md-0">
                                                        <div class="icon icon-a text-white mr-3">
                                                            <i class="ti-cup icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-b text-white mr-3">
                                                            <i class="ti-bar-chart icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 item">
                                                    <div class="d-flex flex-column flex-xl-row mt-5 mt-md-0">
                                                        <div class="icon icon-c text-white mr-3">
                                                            <i class="ti-shopping-cart-full icon-lg ml-3"></i>
                                                        </div>
                                                        <div class="content text-white">
                                                            <div class="d-flex flex-wrap align-items-center mb-2 mt-3 mt-xl-1">
                                                                <h3 class="font-weight-light mr-2 mb-1"></h3>
                                                                <h3 class="mb-0"></h3>
                                                            </div>
                                                            <div class="col-8 col-md-7 d-flex border-bottom border-info align-items-center justify-content-between px-0 pb-2 mb-3">
                                                                <h5 class="mb-0"></h5>
                                                                <div class="d-flex align-items-center">
                                                                    <i class="ti-angle-down mr-2"></i>
                                                                    <h5 class="mb-0"></h5>
                                                                </div>
                                                            </div>
                                                            <p class="text-white font-weight-light pr-lg-2 pr-xl-5"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#performanceOverview" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#performanceOverview" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



@endsection