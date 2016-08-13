<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>Portal Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/AdminLTE.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/AdminLTE.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/skins/_all-skins.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skins/_all-skins.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('assets/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/smoothscroll.js') }}"></script>


</head>

<body data-spy="scroll" data-offset="0" data-target="#navigation">

<!-- Fixed navbar -->
<div id="navigation" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}"><b>Portal Management System</b></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#showcase" class="smoothScroll">Beranda</a></li>
                <li><a href="#news" class="smoothScroll">Berita</a></li>
                <li><a href="#contact" class="smoothScroll">Kontak</a></li>
                <li><a href="{{ url('/about') }}" >Tentang</a></li>
                <!-- <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Arsip
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">MOM Rapat</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                  </ul>
                </li> -->
            </ul>
            <ul class="nav navbar-nav navbar-right">
              {{-- <li>
                  <input type="text" class="form-control">
              </li>
              <li>
                  <button type="button" class="btn btn-info btn-flat">Search</button>
              </li> --}}

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                    <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                @else
                    <li><a href="{{ url('/student-dashboard') }}">{{ Auth::user()->name }}</a></li>
                @endif
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>


{{-- <section id="showcase" name="showcase"></section> --}}
<div id="showcase">
    <div class="container">
        <div class="row">
            {{-- <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1> --}}
            <div class="col-lg-6 col-lg-offset-3">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{ asset('assets/img/fmipa-iso1.jpg') }}" alt="">
                            <div class="carousel-caption">
                              First Slide
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/fmipa-iso2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/fmipa-iso3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/img/fmipa-iso4.jpg') }}" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                      <span class="fa fa-angle-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                      <span class="fa fa-angle-right"></span>
                    </a>
                </div>
            </div>
        </div>

    </div><!-- /container -->
</div>



<!-- FEATURES WRAP -->
<div id="news">
  <div class="container">
    <div class="row">

      <!-- Content Wrapper. Contains page content -->

      <!-- Content Header (Page header) -->
      <section class="content-header">

      </section>

  <!-- Main content -->
      <section class="content">

          <aside class="" style="float:right;width:30%">
            <div class="">

              <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">Berita Terbaru</h3>

                  <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body no-padding">
                  <ul class="nav nav-pills nav-stacked">
                    <li><a href="#berita1" class="smoothScroll"> Undangan Kegiatan</a></li>
                    <li><a href="#berita2" class="smoothScroll"> Fakultas MIPA IPB</a></li>
                  </ul>
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /. box -->

              <!-- /.box -->
            </div>
            <!-- /.col -->

          </aside>


        <div class="row">

          <div  id="berita1" class="col-md-8">
            <div class="box box-primary">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div class="mailbox-read-info">
                  <h2>Undangan Kegiatan</h2>
                  <h5>Publish by : Admin FMIPA
                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                  {{-- <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                      <i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                      <i class="fa fa-share"></i></button>
                  </div> --}}
                  <!-- /.btn-group -->
                  {{-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i></button> --}}
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">
                  <div class="col-md-6">
                    <div class="carousel-inner">
                      <div class="item active">
                          <img src="{{ asset('assets/img/contohsurat.jpg') }}" alt="">
                      </div>
                    </div>
                  </div>

                  <p>Lorem Ipsum</p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <!-- /.mailbox-read-message -->
              </div>

              {{-- <!-- /.box-footer -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer --> --}}
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->


          <div  id="berita2" class="col-md-8">
            <div class="box box-primary">

              <!-- /.box-header -->
              <div class="box-body no-padding">
                <div id="berita2" class="mailbox-read-info">
                  <h2>Fakultas MIPA IPB - Faculty of Mathematic and Natural Sciences</h2>
                  <h5>Publish by : Admin FMIPA
                    <span class="mailbox-read-time pull-right">15 Feb. 2016 11:03 PM</span></h5>
                </div>
                <!-- /.mailbox-read-info -->
                <div class="mailbox-controls with-border text-center">
                  {{-- <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                      <i class="fa fa-trash-o"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                      <i class="fa fa-reply"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                      <i class="fa fa-share"></i></button>
                  </div> --}}
                  <!-- /.btn-group -->
                  {{-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                    <i class="fa fa-print"></i></button> --}}
                </div>
                <!-- /.mailbox-controls -->
                <div class="mailbox-read-message">

                  <div class="col-md-6">
                    <div class="carousel-inner">
                      <div class="item active">
                          <img id="myImg" src="{{ asset('assets/img/fmipa-pomi.jpg') }}" alt="FMIPA IPB">
                          <!-- modal image -->
                          <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                          </div>
                          <!-- / modal image -->
                      </div>
                    </div>
                  </div>
                  <p>Lorem Ipsum</p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                </div>
                <!-- /.mailbox-read-message -->
              </div>

              {{-- <!-- /.box-footer -->
              <div class="box-footer">
                <div class="pull-right">
                  <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
                </div>
                <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
              </div>
              <!-- /.box-footer --> --}}
            </div>
            <!-- /. box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
  </div>
</div><!--/ .container -->




<section id="contact" name="contact"></section>
<!-- <div id="footerwrap">
    <div class="container">
        <div class="col-lg-5">
            <h3>{{ trans('adminlte_lang::message.address') }}</h3>
            <p>
                Gedung FMIPA IPB<br/>
                Jalan Meranti<br/>
                Kampus IPB Dramaga<br/>
                Bogor
                16630
            </p>
        </div>

        <div class="col-lg-7">
            <h3>{{ trans('adminlte_lang::message.dropus') }}</h3>
            <br>
            <form role="form" action="#" method="post" enctype="plain">
                <div class="form-group">
                    <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                </div>
                <div class="form-group">
                    <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                </div>
                <div class="form-group">
                    <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
            </form>
        </div>
    </div>
</div> -->
<div id="c">
    <div class="container">
        <p>
            FMIPA IPB. Jalan Meranti Kampus IPB Dramaga Bogor<br/>
            Tlp/Fax : 0251-8625481 | E-mail: fmipa@ipb.ac.id
            <br/>

        </p>

    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
