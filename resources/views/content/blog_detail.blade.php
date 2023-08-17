@extends("layout.header_footer")

@section('titulo')
Ocorrencias
@endsection

@section('conteudo')

<main>
    <!--page-title-area start-->
    <section class="page-title-area" style="background-image: url(assets/img/page-title/page-title-bg1.jpg);">
        <img class="right-shape" src="assets/img/cta/dot-shape-1.png" alt="Dot Pattern">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-title-wrapper pt-30 pt-lg-40 pt-md-10 pt-xs-10">
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home /</a></li>
                            <li class="active" aria-current="page">Blog</li>
                        </ul>
                        <h2 class="page-title">News Feeds</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title-area end-->
    <!--services-area start-->
    <section class="news-details-area pt-105 pb-90 pt-md-60 pb-md-25 pt-xs-50 pb-xs-20">
        <div class="container">
            <div class="row mb-15">
                <div class="col-lg-8">
                    <div class="news-details-left mb-30">
                        <div class="blogs__meta">
                            <span><i class="fal fa-eye"></i> 100 Views</span>
                            <span class="border-line2"><i class="fal fa-comments"></i> 30 Comments</span>
                            <span><i class="fal fa-calendar-alt"></i> 24th March 2022</span>
                        </div>
                        <p class="mb-55">A great commerce experience cannot be distilled to a single number.
                            It’s not a Lighthouse
                            score, or a set of Core Web Vitals figures, although both are important inputs.
                            A great commerce experience
                            is a trilemma that carefully balances competing needs of delivering great
                            customer experience, dynamic
                            storefront capabilities, and long-term business — conversion, retention,
                            re-engagement — objectives. As
                            developers, we rightfully obsess about the customer experience, relentlessly
                            working to squeeze every
                            millisecond out of the critical rendering path, optimize input latency, and
                            eliminate jank. At the limit,
                            statically generated, edge delivered, and HTML-first pages look like the optimal
                            strategy. That is until
                            you are confronted with the realization that the next step function in improving
                            conversion rates and business.
                        </p>
                        <img class="img-fluid" src="assets/img/blog/blog-15.jpg" alt="Blog Img">
                        <h3 class="mt-55 mb-25"><a class="s-sub-title" href="blog-details.html">A cleansing
                                hot shower or bath</a></h3>
                        <p>The journey, often, starts “simple” with localization. But then, quickly advances
                            to contextual pricing, juggling complexity of large and frequently updated product
                            catalog, managing
                            continuously running multivariate tests and promotion campaigns, and serving
                            customer-tailored
                            dynamic recommendations. Eventually, you reach a realization that every page is
                            similar to an open Tetris
                            board where each “slot” can and should be dynamically tailored by dynamic visitor
                            preferences, all powered by an ever-growing set of dynamic business rules.</p>
                        <h3 class="mt-50 mb-20"><a class="s-sub-title" href="blog-details.html">Setting the mood
                                with incense</a></h3>
                        <div class="boxes mb-55">
                            <img class="box-img" src="assets/img/blog/blog-16.jpg" alt="Img">
                            <p class="overflow-hidden">From connecting back-office operations to front-of-the-house
                                A/B testing and ynamic personalization for
                                each customer, the shared foundation is fast
                                server-side rendering powered by fast storefront data access. On top of this
                                foundation, we add layers of
                                caching, prerendering and edge delivery
                                optimizations — not the other way around.</p>
                        </div>
                        <blockquote class="blog-block text-center mb-50">
                            <div class="icon"><i class="fas fa-quote-left"></i></div>
                            <h3 class="mb-30">Choices to take a holiday and travelling
                                out inthis pandemic situation are limited. Why not
                                take a stay action on quality.</h3>
                            <h5 class="fs-20">Rosalina D. William </h5>
                            <p class="fs-14 theme-color">Founder</p>
                        </blockquote>
                        <p>Surveying the existing landscape of available developer tools and runtimes, we felt that
                            there is a gap.
                            Enabling dynamic commerce requires close integration between server and client, an
                            optimized streaming and
                            data fetch strategy, and a production platform that operates at scale. These are hard
                            technical problems that
                            Shopify can help solve and this is why we’ve been hard at work on the Hydrogen
                            framework. It’s a React-based
                            framework optimized for commerce and specialized to be powered by Shopify APIs and
                            infrastructure: The future
                            of commerce is dynamic and personalized.</p>
                        <div class="row share-social px-0 mt-55 pb-15">
                            <div class="col-lg-6 col-md-6 mb-30">
                                <h5 class="fs-20 mb-20">Releted Tags</h5>
                                <div class="tag-list">
                                    <a href="#">Popular</a>
                                    <a href="#">Design</a>
                                    <a href="#">UX</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 text-start text-md-end mb-30">
                                <h5 class="fs-20 mb-20">Social Share</h5>
                                <div class="author__social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row more-post align-items-center px-0 pb-30 mt-40">
                            <div class="col-lg-5 col-md-5 mb-20">
                                <div class="prev-box">
                                    <div class="prev-content">
                                        <p class="fs-14">Prev Post</p>
                                        <h3>Tips On Minimalist</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 mb-20 text-start text-md-center">
                                <img src="assets/img/icon/eclips-3.png" alt="Icon">
                            </div>
                            <div class="col-lg-5 col-md-5 mb-20">
                                <div class="prev-box">
                                    <div class="prev-content text-start text-md-end">
                                        <p class="fs-14">Next Post</p>
                                        <h3>Less Is More</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="authors mt-60 mb-50">
                            <div class="author-img">
                                <img src="assets/img/blog/blog-author2.jpg" alt="Img">
                            </div>
                            <div class="author-content">
                                <p class="fs-12">Written by</p>
                                <h3>Rosalina D. William</h3>
                                <p class="fs-14">Getting fast initial render with streaming server-side rendering,
                                    efficient
                                    component-level updates and state transitions, while also setting up a
                                    performant loading and bundling strategy.</p>
                            </div>
                        </div>
                        <div class="comments-wrapper">
                            <h3 class="post-title mb-50">03 Comments</h3>
                            <ul class="comment-list">
                                <li>
                                    <div class="comment-box">
                                        <div class="comment-avatar">
                                            <img src="assets/img/blog/comment-2.jpg" alt="Img">
                                        </div>
                                        <div class="comment-content">
                                            <h5>Rosalina Kelian <a href="#" class="reply"><i
                                                        class="fal fa-reply"></i> Reply</a></h5>
                                            <p class="fs-14 mb-15"><i class="far fa-calendar-alt"></i> 24th March
                                                2022</p>
                                            <p>For all the assets is hard and time-consuming technical work. And, of
                                                course, the result needs to be
                                                seamless and delightful — dare we say, even fun — to develop and
                                                maintain. Regardless of whether you’re
                                                ing up a storefront for a new merchant.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="ml-130 ml-lg-30 ml-md-30">
                                    <div class="comment-box">
                                        <div class="comment-avatar">
                                            <img src="assets/img/blog/comment-3.jpg" alt="Img">
                                        </div>
                                        <div class="comment-content">
                                            <h5>Rosalina Kelian <a href="#" class="reply"><i
                                                        class="fal fa-reply"></i> Reply</a></h5>
                                            <p class="fs-14 mb-15"><i class="far fa-calendar-alt"></i> 24th March
                                                2022</p>
                                            <p>Building a customer experience that will be visited by millions, the
                                                goal for Hydrogen is to eliminate
                                                undifferentiated and gnarly technical plumbing and enable you to
                                                start fast and focus on delivering
                                                merchant value.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-box">
                                        <div class="comment-avatar">
                                            <img src="assets/img/blog/comment-4.jpg" alt="Img">
                                        </div>
                                        <div class="comment-content">
                                            <h5>Rosalina Kelian <a href="#" class="reply"><i
                                                        class="fal fa-reply"></i>
                                                    Reply</a></h5>
                                            <p class="fs-14 mb-15"><i class="far fa-calendar-alt"></i> 24th March
                                                2022</p>
                                            <p>Unlocking such features and making them all work nicely together
                                                required that we work hands-on with
                                                React core team on helping define and prototype server components;
                                                Vite ecosystem on server-side
                                                streaming; Google’s Aurora team on integrating conformance.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form">
                            <h3 class="post-title mb-35">Post Comment</h3>
                            <form class="contact-form" action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-box text-input mb-20">
                                            <textarea name="message" cols="30" rows="10"
                                                placeholder="Type your comments...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="input-box mb-20">
                                            <input type="text" placeholder="Type your name....">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="input-box mail-input mb-20">
                                            <input type="text" placeholder="Type your email....">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="input-box sub-input mb-20">
                                            <input type="text" placeholder="Type your website....">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-15">
                                        <button class="form-btn"><i class="fal fa-comments"></i> Post
                                            Comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-right-widget mb-30">
                        <div class="widget widget-author mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">About Me</h4>
                            </div>
                            <div class="widget-author-content text-center">
                                <img src="assets/img/blog/author-blog1.jpg" alt="Img">
                                <h5 class="mt-25 mb-15">Rosalina D. Willaimson</h5>
                                <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <div class="author__social mt-25">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-search mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">Search Here</h4>
                            </div>
                            <form class="subscribe-form mb-10" action="#">
                                <input type="text" placeholder="Search your keyword...">
                                <button class="subscribe-btn"><i class="fal fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget widget-post mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">Popular Feeds</h4>
                            </div>
                            <ul class="post-list">
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="blog-details.html"><img src="assets/img/blog/post-1.jpg"
                                                alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="blog-details.html">Having education in
                                                    an area helps</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
                                                2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="blog-details.html"><img src="assets/img/blog/post-2.jpg"
                                                alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="blog-details.html">people think, feel, &
                                                    behave in a way</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
                                                2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post mb-30">
                                        <a href="blog-details.html"><img src="assets/img/blog/post-3.jpg"
                                                alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="blog-details.html">that contributes to
                                                    their success</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
                                                2022</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="blog-post">
                                        <a href="blog-details.html"><img src="assets/img/blog/post-4.jpg"
                                                alt="Post Img"></a>
                                        <div class="post-content">
                                            <h6 class="mb-10"><a href="blog-details.html">improves not only
                                                    their personal</a></h6>
                                            <span class="fs-14"><i class="fal fa-calendar-alt"></i> 24th March
                                                2022</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget widget-categories-list mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">Categories</h4>
                            </div>
                            <ul class="list-none">
                                <li><a href="#">Business <span class="f-right">26</span></a></li>
                                <li><a href="#">Consultant <span class="f-right">30</span></a></li>
                                <li><a href="#">Creative <span class="f-right">71</span></a></li>
                                <li><a href="#">UI/UX <span class="f-right">56</span></a></li>
                                <li><a href="#">Technologys <span class="f-right">60</span></a></li>
                            </ul>
                        </div>
                        <div class="widget widget-categories-tag mb-40">
                            <div class="widget-title-box pb-25 mb-30">
                                <h4 class="widget-sub-title2 fs-20">Instagram Feeds</h4>
                            </div>
                            <div class="tag-list">
                                <a href="#">Popular</a>
                                <a href="#">Design</a>
                                <a href="#">UX</a>
                                <a href="#">Usability</a>
                                <a href="#">Develop</a>
                                <a href="#">Icon</a>
                                <a href="#">Business</a>
                                <a href="#">Consult</a>
                                <a href="#">Kit</a>
                                <a href="#">Keyboard</a>
                                <a href="#">Mouse</a>
                                <a href="#">Tech</a>
                            </div>
                        </div>
                        <div class="widget widget-add">
                            <h4 class="widget-sub-title2 fs-20 mb-30">Sponsor Adds</h4>
                            <div class="banner-content mb-10">
                                <img class="img-fluid" src="assets/img/blog/blog-13.jpg" alt="banner">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services-area end-->


</main>
@endsection