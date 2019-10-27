@extends('layouts.payment')

@section('content')
    <!-- Banner section start -->
    <section class="banner v5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 m-auto">
                    <div class="ban-content text-center">
                        <h1>Описание проекта..</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspe ultrices gravida. Risus commodo viverra
                            maecenas.</p>
                        <a href="#" class="btn btn-filled btn-round"><span class="bh"></span> <span>НАЧАТЬ ПОЛЬЗОВАТЬСЯ СЕРВИСОМ</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section end -->

    <!-- Faq section start -->
    <section class="faq-tab bg-offwhite">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 m-auto text-center">
                    <div class="sec-heading">
                        <h2 class="sec-title">Описание проекта</h2>
                        <p class="sec-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-md-12 m-auto">
                    <ul class="row nav nav-tabs">
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#general-qs">
                                <!-- <img src="images/icons/9.png" alt=""> -->

                                <!-- Roysha icon -->
                                <span class="roysha-icon roysha-ask"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span></span>

                                Помощь
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#trasn-money">
                                <!-- <img src="images/icons/10.png" alt=""> -->

                                <!-- Roysha icon -->
                                <span class="roysha-icon roysha-hand-cash"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span></span>

                                Как это работает ?
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#mbl-banking">
                                <!-- <img src="images/icons/11.png" alt=""> -->

                                <!-- Roysha icon -->
                                <span class="roysha-icon roysha-fast-transfer"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span
                                        class="path14"></span><span class="path15"></span><span
                                        class="path16"></span><span
                                        class="path17"></span><span class="path18"></span></span>

                                Платежные системы
                            </a>
                        </li>
                        <li class="col-md-3">
                            <a data-toggle="tab" href="#fee-charges">
                                <!-- <img src="images/icons/12.png" alt=""> -->

                                <!-- Roysha icon -->
                                <span class="roysha-icon roysha-bank-diposite"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span><span
                                        class="path11"></span><span class="path12"></span><span
                                        class="path13"></span><span
                                        class="path14"></span><span class="path15"></span><span
                                        class="path16"></span></span>

                                Еще что-то
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="general-qs" class="tab-pane fade in active show">
                            <div class="accordion" id="accordion">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#faq-1"
                                        aria-expanded="true">
                                        Lorem ipsum dolor sit amet
                                    </h5>
                                    <div id="faq-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse
                                                ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="trasn-money" class="tab-pane fade">
                            <div class="accordion" id="accordion1">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#tm-1"
                                        aria-expanded="true">
                                        Lorem ipsum dolor sit amet.
                                    </h5>
                                    <div id="tm-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscied do eiusmod tempor
                                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspen disse
                                                ultrices gravida.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="mbl-banking" class="tab-pane fade">
                            <div class="accordion" id="accordion2">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#mblb-3"
                                        aria-expanded="false">
                                        Lorem ipsum dolor sit amet.
                                    </h5>

                                    <div id="mblb-3" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga,
                                                laboriosam!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="fee-charges" class="tab-pane fade">
                            <div class="accordion" id="accordion3">
                                <div class="accordion-item">
                                    <h5 class="collapsed" data-toggle="collapse" data-target="#fc-1"
                                        aria-expanded="true">
                                        Lorem ipsum dolor sit amet.
                                    </h5>
                                    <div id="fc-1" class="collapse" data-parent="#accordion">
                                        <div class="acr-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis,
                                                sit!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Faq section end -->
@endsection
