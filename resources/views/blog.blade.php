<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company NAME</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!--HEADER-->

    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>Lorem Ipsum Dolor Sit Amet</p>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-inline pull-right">
                            <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" title="Post"><i class="fa fa-envelope-o"></i></a></li>
                            <li><a href="tel:+902222222222"><i class="fa fa-phone"></i> +90 222 222 22 22</a></li>
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
                            <li><a href="/" title="">HOME</a></li>
                            <li><a href="custompage" title="">PAGE</a></li>
                            <li class="active"><a href="posts" title="">BLOG</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
    				<!-- END MAIN NAVIGATION -->
    			</div>
    		</nav>
    </header>

    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#" title="Post">Home</a></li>
                        <li class="active">Category Name</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <section class="category-content col-sm-9">
                    <h2 class="category-title">CATEGORY NAME</h2>
                    <ul class="media-list">
                        @foreach($posts as $post)
                            <li class="media">
                                <div class="media-left">
                                    <a href="#" title="Post">
                                        <img class="media-object" src="{{ asset('storage/'.$post->filename) }}" alt="Post">
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="#" title="Post Title">{{$post->title}}</a></h3>
                                    <p>{{$post->content}}</p>
                                    <aside class="meta category-meta">
                                        <div class="pull-left">
                                            <div class="arc-comment"><a href="#" title="Comment"><i class="fa fa-comments"></i> 0 Comment</a></div>
                                            <div class="arc-date">10/15/2016</div>
                                        </div>
                                        <div class="pull-right">
                                            <ul class="arc-share">
                                                <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" title="Post"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </aside>
                                </div>
                            </li>
                        @endforeach


                    </ul>
                </section>

            </div>
        </div>
    </main>
    <!--FOOTER-->

    <footer class="site-footer">
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2016 COMPANY NAME</p>
                    </div>
                    <div class="col-md-8">

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
