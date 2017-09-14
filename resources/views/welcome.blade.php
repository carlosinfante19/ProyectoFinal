<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Final 4Geeks</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>

    <body>

    <!--Header-->

    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Lorem Ipsum Dolor Sit Amet</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+902222222"><i class="fa fa-phone"></i> +90 222 2222</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <!--Menu bar-->

        <nav class="navbar navbar-default">
            <div class="container">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a href="index.html" class="navbar-brand">
                    <img src="img/logo.png" alt="Post">
                </a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="/" title="">HOME</a></li>
                        <li><a href="page" title="">PAGE</a></li>
                        <li><a href="posts" title="">BLOG</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <!-- END MAIN NAVIGATION -->
            </div>
        </nav>
    </header>

        <!--Identification Bar-->

        <main class="site-main">
            <section class="hero_area">
                <div class="hero_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1>COMPANY NAME</h1>
                                <h2>Donec Elit Non Porta Gravida Eget Metus</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!--Titles-->

            <section class="boxes_area">
                <div class="container">
                    <div class="row">
                        @foreach($data['titles'] as $title)
                            
                            <div class="col-sm-4">
                                <div class="box">
                                    <h3>{{$title->title}}</h3>
                                    <p>{{$title->content}}</p>
                                    <i class="{{$title->icon}}"></i>
                                </div>
                            </div>
                        @endforeach
                        
                        
                    </div>
                </div>
            </section>

            <!--Services-->

            <section class="services">
                <h2 class="section-title">SERVICES</h2>
                <p class="desc">Praesent faucibus ipsum at sodales blandit</p>
                <div class="container">
                    <div class="row">
                        @foreach($data['services'] as $service)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="media">
                                    <div class="media-left media-middle">
                                        <i class="{{$service->icon}}"></i>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="media-heading">{{$service->title}}</h4>
                                        <p>{{$service->content}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!--Lastes News-->

            <section class="home-area">
                <div class="home_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12"><h2 class="sub_title">LATEST NEWS</h2></div>
                            <div class="home_list">
                                <ul>
                                    @foreach($data['blog'] as $blog)
                                    <li class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="thumbnail">
                                            <img src="{{ asset('storage/'.$blog->filename) }}" alt="Post">
                                            <div class="caption">
                                                <h3><a href="#">{{$blog->title}}</a></h3>
                                                <p>{{$blog->content}}</p>
                                                <a href="#" class="btn btn-link" role="button">More</a>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>

                <!--REFERENCES-->

                            <div class="col-sm-9 home_bottom">
                                <h2 class="sub_title">REFERENCES</h2>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="6000" id="myCarousel">
                                        <div class="carousel-inner">
                                            @foreach($data['references'] as $key => $value)
                                                @if($key == 0)
                                                <div class="item active">
                                                    <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                        <a href="#"><img src="{{ asset('storage/'.$value->filename) }}" class="img-responsive" alt="Reference"></a>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="item">
                                                    <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                        <a href="#"><img src="{{ asset('storage/'.$value->filename) }}" class="img-responsive" alt="Reference"></a>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        </div>
                                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>

                <!--CALL CENTER-->

                            <div class="col-sm-3">
                                <h2 class="sub_title w10">CALL YOU</h2>
                                <div class="clearfix"></div>
                                <div class="login-form-1">
                                    <form id="login-form" class="text-left">
                                        <div class="login-form-main-message"></div>
                                        <div class="main-login-form">
                                            <div class="login-group">
                                                <div class="form-group">
                                                    <label for="ad" class="sr-only">Name</label>
                                                    <input type="text" class="form-control" id="ad" name="ad" placeholder="Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="tel" class="sr-only">Phone Number</label>
                                                    <input type="text" class="form-control" id="tel" name="tel" placeholder="Phone Number">
                                                </div>
                                            </div>
                                            <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!--FOOTER-->

        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                        <h4>COMPANY NAME</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam congue lectus diam, sit amet cursus massa efficitur sed. </p>
                        <ul class="list-inline">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                        <h4>SERVICES</h4>
                        <ul class="big">
                            <li><a href="#" title="">Title One</a></li>
                            <li><a href="#" title="">Title Two</a></li>
                            <li><a href="#" title="">Title Three</a></li>
                            <li><a href="#" title="">Title Four</a></li>
                            <li><a href="#" title="">Title Five</a></li>
                            <li><a href="#" title="">Title Six</a></li>
                            <li><a href="#" title="">Title Seven</a></li>
                            <li><a href="#" title="">Title Eight</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                        <h4>CONTENT</h4>
                        <ul class="big">
                            <li><a href="#" title="">Title One</a></li>
                            <li><a href="#" title="">Title Two</a></li>
                            <li><a href="#" title="">Title Three</a></li>
                            <li><a href="#" title="">Title Four</a></li>
                            <li><a href="#" title="">Title Five</a></li>
                            <li><a href="#" title="">Title Six</a></li>
                            <li><a href="#" title="">Title Seven</a></li>
                            <li><a href="#" title="">Title Eight</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                        <h4>CONTENT</h4>
                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +90 222 222 22 22</a></p>
                        <p><a href="mailto:iletisim@agrisosgb.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> mail@awebsitename.com</a></p>
                    </div>
                </div>
            </div>
            <div id="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="pull-left">&copy; 2016 COMPANY NAME</p>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-inline navbar-right">
                                <li><a href="#">HOME</a></li>
                                <li><a href="#">MENU ITEM</a></li>
                                <li><a href="#">MENU ITEM</a></li>
                                <li><a href="#">MENU ITEM</a></li>
                                <li><a href="#">MENU ITEM</a></li>
                                <li><a href="#">MENU ITEM</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $('.carousel[data-type="multi"] .item').each(function(){
              var next = $(this).next();
              if (!next.length) {
                next = $(this).siblings(':first');
              }
              next.children(':first-child').clone().appendTo($(this));

              for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
              }
            });
        </script>
    </body>
</html>
