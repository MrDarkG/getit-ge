<div class="container mt-4 " style="padding:0">
    <nav class="navbar navbar-expand-lg custom-bg-dark border-radius-12" id="navbarTop">
        <div class="container-fluid ">
            <div class="p-2 ms-auto">
                <button class="navbar-toggler ms-auto " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars custom-text-primary" aria-hidden="true"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">{{__('guest.login')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">{{__('guest.register')}}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function(){
        let navbar_height;
        let navbarClasslist = document.getElementById('navbarTop').classList;
        window.addEventListener('scroll', function() {
            if (window.scrollY > 200) {
                navbarClasslist.add('fixed-top');
                navbarClasslist.remove('border-radius-12');
                navbar_height = document.querySelector('.navbar').offsetHeight;
                document.body.style.paddingTop = navbar_height + 'px';
            } else {
                navbarClasslist.add('border-radius-12');
                navbarClasslist.remove('fixed-top');
                // remove padding top from body
                document.body.style.paddingTop = '0';
            }
        });
    });
</script>
