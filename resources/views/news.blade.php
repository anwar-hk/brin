@include('layouts/header_link')
@include('layouts/welcome_nav')
<!--Page Title-->
    <section class="page-title">
        <div class="cws-image-bg" style="background-image: url(images/bgImages/news.jpg)">
            <div class="cws-overlay-bg"></div>
        </div>

        <div class="auto-container animate__animated animate__bounceInDown animate__delay-2s">
            <h1>News</h1>
            <ul class="page-breadcrumb">
                <li><a href="/">Home</a></li>
                <li>News</li>
            </ul>
        </div>
    </section>
    <section class="blog-section">
        <div class="auto-container">
            <!-- News Block -->
            @foreach ($news as $n)
            {{-- {{ dd($n) }} --}}
            <div class="news-block">
                <div class="inner-box row">
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="video">
                            <img src="{{asset('/backend/backend_img/news/'.$n->image)}}">
                            </div>
                        <div class="date"><span>{{ date_format($n->created_at,"d") }}</span> {{ date_format($n->created_at,"M") }}</div>
                        </div>
                    </div>
                    <div class="content-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                        <h3><a href="{{url($n->link )}}" target="_blank">{{$n->title}}</a></h3>
                            <ul class="post-info">
                                <li><span class="icon fa fa-user"></span> by admin</li>
                            </ul>
                        <div class="text">{{$n->discription}}</div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
           
            @endforeach
            <!-- Styled Pagination -->
            <div style="text-align: center">
                 {{ $news->links() }}
            </div>
        </div>
    </section>
    
    <!--Clients Section-->
    @include('layouts.our_partner')
    <!--End Clients Section-->

    <!-- Main Footer -->
@include('layouts.footer_link')