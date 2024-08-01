@extends('layouts.user')

@section('content')
    <div class="container">

        <div class="row justify-content-between ">
            <div class="col-md-2 my-2 flex-grow-1">
                <div class="card package-cards active p-4 text-center">
                    <i class="fa fa fa-lg fa-inbox" aria-hidden="true"></i>
                    Expected
                </div>
            </div>
            <div class="col-md-2 my-2 flex-grow-1">
                <div class="card package-cards p-4 text-center">
                    <i class="fa fa fa-lg fa-handshake-o" aria-hidden="true"></i>
                    Accepted
                </div>
            </div>
            <div class="col-md-2 my-2 flex-grow-1">
                <div class="card package-cards p-4 text-center">
                    <i class="fa fa fa-lg fa-plane" aria-hidden="true"></i>
                    Shipped
                </div>
            </div>
            <div class="col-md-2 my-2 flex-grow-1">
                <div class="card package-cards p-4 text-center">
                    <i class="fa fa fa-lg fa-plane flip" aria-hidden="true"></i>
                    Arrived
                </div>
            </div>
            <div class="col-md-2 my-2 flex-grow-1">
                <div class="card package-cards p-4 text-center">
                    <i class="fa fa fa-lg fa-truck" aria-hidden="true"></i>
                    Delivered
                </div>
            </div>
        </div>
        <div>
            @for($i = 0; $i < 5; $i++)

            <div class="card rounded-border my-4">
                <div class="card-header ">
                    <h5 class="my-2">
                        <b>Tracking Number: 420112359400108205497018673541</b>
                    </h5>
                </div>
                <div class="card-body">
                    <h5 class="card-title
                    "></h5>
                    <div class="mt-4">
                        <div class="d-flex justify-content-between">
                            <div class="card-body col-md-8">
                                <h5 class="card-title">
                                    <b>
                                        Package Details: Jhon Doe
                                    </b>
                                </h5>
                                <p class="">
                                    Package Status: . განბაჟებული 23.7.24 US
                                </p>
                                <p class="muted">
                                    Personal Number: 123456789
                                </p>
                                <p class="muted">
                                    Location: რეისი CN072924 ჩამოსვლის საორიენტაციო თარიღი 5.8.24
                                </p>
                            </div>
                            <div class="col-md-4 d-flex flex-column justify-content-end">
                                <button class="w-100 btn btn-primary my-2 p-3">
                                    <i class="fa fa-lg fa-eye" aria-hidden="true"></i>
                                    Invoice
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endfor

        </div>
    </div>
@endsection

