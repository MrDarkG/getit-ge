@extends('layouts.app')
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colorbox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

@endsection

@section('content')


    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <custom-slider :slider="{{ json_encode($slider) }}"></custom-slider>
        <!-- Carousel inner -->

        <!-- Carousel inner end-->

        <!-- Controllers -->
    </div>

    <section id="ts-service-area" class="ts-service-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">რას გთავაზობთ</h2>
                <p class="border-sub-title">
                    ამანათების და ტვირთების ტრანსპორტირების საუკეთესო პირობები </p>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-gift" aria-hidden="true"></i>

                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?address=projects">ამანათების ჩამოტანა</a></h3>
                            <p>ამანათების და ტვირთის ტრანსპორტირება ამერიკიდან, ინგლისიდან, დუბაიდან და ჩინეთიდან</p>
                        </div>
                    </div>
                    <!-- Service 1 end -->

                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-plane"></i></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?address=projects">ტვირთის გაგზავნა</a></h3>
                            <p>ტვირთის გაგზავნა ამერიკაში, ინგლისში, დუბაიში და ჩინეთში</p>
                        </div>
                    </div>
                    <!-- Service 2 end -->

                </div>
                <!-- Col end -->

                <div class="col-md-4">
                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-tasks"></i>

                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?menuid=2">საფოსტო მისამართები</a></h3>
                            <p>ინდივიდუალური საფოსტო მისამართი 4 ქვეყანაში სასურველი პროდუქციის გამოსაწერად</p>
                        </div>
                    </div>
                    <!-- Service 3 end -->

                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-sitemap"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?menuid=16">ამანათების მართვის პანელი</a></h3>
                            <p> ამანათების მართვის პანელი გაძლევთ საშუალებას ექაუნთიდან მართოთ გამოწერილი ამანათები.</p>
                        </div>
                    </div>
                    <!-- Service 4 end -->

                </div>
                <!-- Col end -->
                <div class="col-md-4">
                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-truck"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?menuid=30">საკურიერო მომსახურება</a></a>
                            </h3>
                            <p> საკურიერო მომსახურება ხორციელდება საქართველოს მასშტაბით</p>
                        </div>

                    </div>
                    <!-- Service 5 end -->

                    <div class="ts-service-box">
                        <div class="ts-service-icon pull-left">
                            <i class="fa fa-university"></i>
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="?menuid=8">გადახდის ფორმების ფართო არჩევანი</a></h3>
                            <p>გადახდა შეგიძლიათ ნაღდი ანგარიშსწორებით, სწრაფი გადახდის აპარატებით, პლასტიკური ბარათით,
                                გადარიცხვით, ბალანსის შევსებით.</p>
                        </div>
                    </div>
                    <!-- Service 6 end -->

                </div>
                <!-- Col end -->
            </div>
            <!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section>
    <section id="project-area" class="project-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">ტრანსპორტირების პირობები</h2>
                <p class="border-sub-title">
                    ქვეყნების მიხედვით </p>
            </div>
            <!--/ Title row end -->
        </div>
        <!--/ Container end -->

        <div id="isotope" class="isotope row">
            <div class="col-md-3 col-sm-6 col-xs-12 airfreight isotope-item">
                <div class="isotope-img-container">
                    <a class="gallery-popup" href="images/projects/project1.jpg">
                        <img class="img-responsive" src="images/projects/project1.jpg" alt="">

                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="?address=projects">ამერიკის შეერთებული შტატები</a>
                            </h3>
                            <p class="project-cat">1 kg 8.5 USD</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Isotope item 1 end -->

            <div class="col-md-3 col-sm-6 col-xs-12 healthcare isotope-item">
                <div class="isotope-img-container">
                    <a class="gallery-popup" href="images/projects/project2.jpg">
                        <img class="img-responsive" src="images/projects/project2.jpg" alt="">

                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="?address=projects">დიდი ბრიტანეთი</a>
                            </h3>
                            <p class="project-cat">1 kg 9 usd</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Isotope item 2 end -->

            <div class="col-md-3 col-sm-6 col-xs-12 government isotope-item">
                <div class="isotope-img-container">
                    <a class="gallery-popup" href="images/projects/project3.jpg">
                        <img class="img-responsive" src="images/projects/project3.jpg" alt="">

                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="?address=projects">არაბთა გაერთიანებული საამიროები</a>
                            </h3>
                            <p class="project-cat">1 kg 6 usd</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Isotope item 3 end -->

            <div class="col-md-3 col-sm-6 col-xs-12 infrastructure isotope-item">
                <div class="isotope-img-container">
                    <a class="gallery-popup" href="images/projects/project4.jpg">
                        <img class="img-responsive" src="images/projects/project4.jpg" alt="">

                    </a>
                    <div class="project-item-info">
                        <div class="project-item-info-content">
                            <h3 class="project-item-title">
                                <a href="?address=projects">ჩინეთის სახალხო რესპუბლიკა</a>
                            </h3>
                            <p class="project-cat">1 kg 12.3 usd</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Isotope item 4 end -->

        </div>
        <!-- Isotope end -->

        <!--   -->

        <div class="general-btn text-center">
            <a class="btn btn-primary" href="?address=projects">ვრცლად</a>
        </div>

    </section>
    <section id="ts-quote-block" class="ts-quote-block pattern-bg">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <h3 class="border-title border-left">ჩვენს შესახებ</h3>


                    <!--  -->


                    <!--  -->


                    <p><strong>GETIT.GE</strong> უკვე 15 წელია ქართულ ბაზარზე ოპერირებს და ახორციელებს ამანათების და
                        ტვირთების ტრანსპორტირებას მსოფლიოს სხვადასხვა ქვეყნიდან.
                        <br> ჩვენი მეშვეობით მარტივად შეძლებთ შეერთებულ შტატებში, დიდ ბრიტანეთში, ჩინეთსა და არაბთა
                        გაერთიანებულ საამიროებში შეძენილი ნივთების საქართველოში ტრანსპორტირებას.


                    </p>
                    <p>ჩვენი მიზანი თქვენთვის სასურველი ნივთის სწრაფად და ხარისხიანად ტრანსპორტირებაა. ჩვენი
                        მომსახურებით სარგებლობა შეუძლიათ როგორც ფიზიკურ, ისე იურიდიულ პირებს.


                    <p>მადლობა თანამშრომლობისთვის!</p>
                    </p>

                    <hr>
                    <div class="gap-30"></div>
                </div>
                <!-- Col end -->


                <!-- / -->


                <!-- /-->


                <div class="col-md-6">

                    <h3 class="border-title border-left">რატომ გეთით.ჯი?</h3>

                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">15 წლიანი
                                        გამოცდილება</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <img class="pull-left" src="images/services/service1.jpg" alt=""/>
                                    <p>15 წლიანი გამოცდილება გვაძლევს საშუალებას, შემოგთავაზოთ ტვირთების და ამანათების
                                        ტრანსპორტირების სწრაფი, თქვენზე მორგებული სერვისი.</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Panel 1 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                       href="#collapseTwo"> ამანათების მართვის მოქნილი პანელი</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <img class="pull-right" src="images/services/service2.jpg" alt=""/>
                                    <p> ამანათების მართვის პანელი საშუალებას გაძლევთ, ერთი ექაუნთიდან მართოთ როგორც
                                        თქვენთვის, ასევე თქვენ მიერ სხვისთვის გამოწერილი ამანათები - დაამატოთ საწყობში
                                        მისატანი ამანათები, დაადეკლარიროთ მისამართზე მიტანილი ამანათები
                                        და დაფაროთ ტრანსპორტირების საფასური.</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Panel 2 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                       href="#collapseFive">ტრანსპორტირების საუკეთესო პირობები</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <img class="pull-left" src="images/services/service5.jpg" alt=""/>
                                    <p>ამერიკიდან, ინგლისიდან და დუბაიდან ამანათების ტრანსპორტირების ღირებულებას
                                        ვანგარიშობთ მხოლოდ ფიზიკური წონით, მიუხედავად ამანათის მოცულობისა.<br> ჩინეთიდან
                                        მოცულობითი წონის გარეშე იგზავნება მხოლოდ ფეხსაცმელი და ტანსაცმელი.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Panel 3 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                       href="#collapseThree">სხვადასხვა ქვეყნიდან გამოწერის შესაძლებლობა</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <img class="pull-left" src="images/services/service3.jpg" alt=""/>
                                    <p>ჩვენს საიტზე რეგისტრაციის შემდეგ, თქვენ მიიღებთ 4 ქვეყნის პერსონალურ საფოსტო
                                        მისამართს, რომელსაც თქვენთვის სასურველი პროდუქციის გამოსაწერად გამოიყენებთ.</p>
                                </div>
                            </div>
                        </div>
                        <!--/ Panel 4 end-->

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion"
                                       href="#collapseFour">ანგარიშსწორების ფორმების ფართო არჩევანი</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <img class="pull-left" src="images/services/service4.jpg" alt=""/>
                                    <p>ტრანსპორტირების საფასურის გადახდა შესაძლებელია როგორც ნაღდი ანგარიშსწორებით,
                                        ასევე პლასტიკური ბარათით, სწრაფი გადახდის აპარატებით, ჩვენს საბანკო ანგარიშზე
                                        გადარიცხვით, ანგარიშზე თანხის შეტანით ან თქვენი ექაუნთიდან
                                        - პლასტიკური ბარათით ან ბალანსის შევსებით.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--/ Panel 3 end-->

                    </div>
                    <!--/ Accordion end -->

                </div>
                <!-- Block left -->


            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <section id="facts" class="facts-area bg-overlay no-padding">
        <div class="container">
            <div class="row">
                <div class="facts-wrapper w-100 row">
                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img src="images/icon-image/fact1.png" alt="">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">15</span>წელი</h2>
                            <h3 class="ts-facts-title">ავიაგადაზიდვების<br/> ბიზნესში</h3>
                        </div>
                    </div>
                    <!-- Col 1 end -->

                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img src="images/icon-image/fact2.png" alt="">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">4</span>ქვეყნიდან</h2>
                            <h3 class="ts-facts-title">გზავნილების <br/> ავიატრანსპორტირება</h3>
                        </div>
                    </div>
                    <!-- Col 2 end -->

                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img src="images/icon-image/fact3.png" alt="">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">40000</span>Plus</h2>
                            <h3 class="ts-facts-title">აქტიური<br/>მომხმარებელი</h3>
                        </div>
                    </div>
                    <!-- Col 3 end -->

                    <div class="col-md-3 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img src="images/icon-image/fact4.png" alt="">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp">2</span>+ მილიონი</h2>
                            <h3 class="ts-facts-title">ჩამოტანილი<br/> ამანათი</h3>
                        </div>
                    </div>
                    <!-- Col 4 end -->

                </div>
                <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <section id="partners-area" class="partners-area">
        <div class="container">
            <div class="row text-center">
                <h2 class="border-title">ჩვენი პარტნიორები</h2>
                <p class="border-sub-title">
                    ვთანამშრომლობთ მსოფლიოს წამყავან ავიაკომპანიებთან </p>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div id="partners-carousel" class="col-sm-12 owl-carousel owl-theme text-center partners">
                    <figure class="item partner-logo">
                        <a>
                            <img class="img-responsive" src="images/partners/partner1.png" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a>
                            <img class="img-responsive" src="images/partners/partner2.png" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a>
                            <img class="img-responsive" src="images/partners/partner3.png" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a>
                            <img class="img-responsive" src="images/partners/partner4.png" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo">
                        <a>
                            <img class="img-responsive" src="images/partners/partner6.png" alt="client">
                        </a>
                    </figure>

                    <figure class="item partner-logo last">
                        <a>
                            <img class="img-responsive" src="images/partners/partner5.png" alt="client">
                        </a>
                    </figure>

                </div>
                <!--/ Owl carousel end -->

            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section>
@endsection
