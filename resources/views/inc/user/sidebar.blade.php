<div class="d-flex justify-content-center mt-4 pt-4 pb-4">
    <div class="col-md-6">
        <img src="/images/logo-white.png" class="logo-image" alt="" width="100%">
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center ">
        <div class="dropdown ">
            <button class="btn btn-secondary language-button dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/images/languages/united-kingdom.png" height="30px" alt=""> ENG
            </button>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li>
                    <a class="dropdown-item" href="#">
                        <img src="/images/languages/georgia.png" height="30px" alt=""> ქარ
                    </a>
                </li>
            </ul>
        </div>
    </div>

</div>
<div class="d-flex justify-content-center mt-4 pt-4 pb-4">
    <div class="col-md-12 d-flex justify-content-center">

        @if (Auth::user()->avatar)
            <div>
                <img src="{{ Auth::user()->avatar }}" class="rounded-circle" alt="" width="60px">
            </div>
        @endif
        <div class="ms-4  d-flex flex-column justify-content-center text-attract">
            <div>
                <b>
                    {{ Auth::user()->name }}
                    {{ Auth::user()->surname }}
                </b>
            </div>
            <div>
                {{ __('user.room_number') . " GT" . str_pad(Auth::user()->id, 4, "0", STR_PAD_LEFT) }}
            </div>
        </div>
    </div>

</div>
<div class="d-flex justify-content-center mt-4 pt-4 pb-4 ">
    <div class="col-md-6 flex-grow-1">
        <div class="card balance-card rounded-border">
            <div class="card-body">
                <h5 class="card-title">{{ __('user.balance') }}</h5>
                <p class="card-text">{{
                            sprintf(
                                "%01.2f",
                                App\Services\User\UserService::getBalanceByUserId(Auth::user()->id)
                                )

                            }} GEL
                </p>
                <button class="btn btn-primary w-100 rounded-border">
                    <div class="d-flex justify-content-center py-2">
                        <div class="me-1">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </div>
                        <div class="d-none d-lg-block">
                            {{ __('user.add_balance') }}
                        </div>
                    </div>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-6 flex-grow-1 ">
        <div class="card balance-card rounded-border h-100">
            <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">{{ __('user.debt') }}</h5>
                <p class="card-text">{{
                            sprintf(
                                "%01.2f",
                                App\Services\User\UserService::getBalanceByUserId(Auth::user()->id)
                                )

                            }} GEL
                </p>
            </div>
        </div>
    </div>
</div>
<div class="d-flex mt-2 pt-4 pb-4 container border-1">
    <ul class="navbar-nav user-sidebar-menu p-3 ps-4">
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-address-card me-2 menu-icons" aria-hidden="true"></i>
                Contact
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-cog me-2 menu-icons" aria-hidden="true"></i>
                Settings
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fa fa-history me-2 menu-icons" aria-hidden="true"></i>
                Payment History
            </a>
        </li>
    </ul>
</div>
<div class="d-flex mt-2 pt-2 pb-4 container border-1">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="#" class="nav-link">
                Services Agreement
            </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
                Restrictions
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                FAQ
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                Courier Service
            </a>
        </li>
    </ul>
</div>
