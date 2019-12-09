@extends('layouts.template')
@push('title')
<title>{{$content->title}}</title>
<meta name="description" content="{{$content->description}}" />
@endpush

@push('body')
<body>
<!--PRELOADER-->
<div class="preloader"><div class="spinner"></div></div>
@endpush
@section('content')
    <!-- Breadcrumb -->
    <div class="page-cover">
        <div class="container">
            <div class="row">
                <div class="col-xs-5">
                    <div class="cover-content">
                        <div class="author-detail">
                            <a href="#" class="tag tag-blue">#Dicas</a>
                            <a href="#" class="tag tag-gold"><i class="fa fa-eye"></i> {{date('Y')}}</a>
                        </div>
                        <h1>{{$details->title}}</h1>
                        <div class="author-detail">
                            <p><i class="icon-clock"></i> Postado em : {{$details->date}}</p>
                            <p><a href="#"><i class="icon-profile-male"></i> {{$details->author}}</a></p>
                            <p><a href="#"><i class="icon-chat"></i> 0</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-7">
                    <img src="{{$details->image}}" alt="{{$details->title}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Ends -->
    <!-- Detail -->
    <section class="item-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="item-wrapper">
                        <div class="item-detail">
                            <p class="articlepara">A sazonalidade é muito importante para o comércio. Cada época do ano tem suas particularidades e seu potencial de vendas, e isso influencia diretamente na forma de se planejar.

                            <div class="detail-image">
                                <img src="images/trending1.jpg" alt="Image">
                            </div>
                            <p class="articlepara">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line. Podcasting operational change management inside of workflows to establish a framework. Taking seamless key performance indicators offline to maximise the long tail. Keeping your eye on the ball while performing a deep dive on the start-up mentality to derive convergence on cross-platform integration.</p>
                        </div>
                        <blockquote>
                            <p>Was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            <div class="sectionoverlay"></div>
                        </blockquote>
                        <div class="author-profile">
                            <div class="profile-image">
                                <img src="images/profile1.jpg" alt="Image">
                            </div>
                            <div class="profile-content">
                                <h3>Jack Richard</h3>
                                <ul class="profile-link">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                </ul>
                                <p>Was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="share-buttons">
                            <a href="#" class="btn-large btn-facebook"><i class="fa fa-facebook" aria-hidden="true"></i> Share on Facebook</a>
                            <p> <span>350</span> shares</p>
                            <a href="#" class="btn-large btn-twitter"><i class="fa fa-twitter" aria-hidden="true"></i> Share on Twitter</a>
                        </div>
                        <div class="item-tags">
                            <a href="#" class="tag-blue tag">#Sports</a>
                            <a href="#" class="tag tag-blue">#World Cup</a>
                            <a href="#" class="tag tag-blue">#Football</a>
                            <a href="#" class="tag tag-blue">#Qatar</a>
                        </div>
                        <div class="comment-box">
                            <h3>Comments</h3>
                            <ul class="comment-list">
                                <li>
                                    <div class="comment-item">
                                        <div class="comment-image">
                                            <img src="images/author.jpg" alt="Image">
                                        </div>
                                        <div class="comment-content">
                                            <h4>Jack Richard</h4>
                                            <p class="date"><i class="icon-clock"></i> 12 May 2018</p>
                                            <p>Et veniam possimus voluptatum voluptatem excepturi qui. Unde eum ut architecto veritatis quia deserunt incidunt consequatur. In fugiat voluptatem porro distinctio deleniti quod labore. Ipsam quibusdam inventore enim molestiae ducimus perspiciatis omnis. Eos repellat enim qui sit eaque maiores.</p>
                                            <p>Quos quos tempora ab eos eum. Et libero fugiat quia et qui. Et illo et ut dolor nihil esse dolores rerum. Ut voluptatem voluptatibus non officiis aut quia.</p>
                                            <a href="#" class="btn-white btn-red">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="reply">
                                        <li>
                                            <div class="comment-item">
                                                <div class="comment-image">
                                                    <img src="images/author.jpg" alt="Image">
                                                </div>
                                                <div class="comment-content">
                                                    <h4>Jack Richard</h4>
                                                    <p class="date"><i class="icon-clock"></i> 12 May 2018</p>
                                                    <p>Et veniam possimus voluptatum voluptatem excepturi qui. Unde eum ut architecto veritatis quia deserunt incidunt consequatur. In fugiat voluptatem porro distinctio deleniti quod labore. Ipsam quibusdam inventore enim molestiae ducimus perspiciatis omnis. Eos repellat enim qui sit eaque maiores.</p>
                                                    <a href="#" class="btn-white btn-red">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-item">
                                        <div class="comment-image">
                                            <img src="images/author.jpg" alt="Image">
                                        </div>
                                        <div class="comment-content">
                                            <h4>Jack Richard</h4>
                                            <p class="date"><i class="icon-clock"></i> 12 May 2018</p>
                                            <p>Et veniam possimus voluptatum voluptatem excepturi qui. Unde eum ut architecto veritatis quia deserunt incidunt consequatur. In fugiat voluptatem porro distinctio deleniti quod labore. Ipsam quibusdam inventore enim molestiae ducimus perspiciatis omnis. Eos repellat enim qui sit eaque maiores.</p>
                                            <p>Quos quos tempora ab eos eum. Et libero fugiat quia et qui. Et illo et ut dolor nihil esse dolores rerum. Ut voluptatem voluptatibus non officiis aut quia.</p>
                                            <a href="#" class="btn-white btn-red">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comment-form">
                            <form>
                                <h3>Add a comment</h3>
                                <div class="row">
                                    <div class="textarea col-sm-12">
                                        <label for="Name">Your Comment:</label>
                                        <textarea></textarea>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="Name">Name:</label>
                                        <input type="email" class="form-control" id="Name">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="email">Email address:</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label for="website">Website:</label>
                                        <input type="email" class="form-control" id="website">
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-white btn-red">Submit Comment</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="item-sidebar">
                        <div class="author sidebar-box">
                            <div class="sidebar-title">
                                <h3>Author</h3>
                            </div>
                            <div class="author-image">
                                <img src="images/profile1.jpg" alt="Image">
                            </div>
                            <div class="author-content">
                                <h4><a href="#">James Arthur</a></h4>
                                <p>Lorem ipsum dosectetur adipisicing elit, sed do.Lorem ipsum dolor sit amet, consectetur Nulla fringilla purus at leo dignissim congue.</p>
                                <ul class="header-social-links">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-categories sidebar-box">
                            <div class="sidebar-title">
                                <h3>Categories</h3>
                            </div>
                            <ul>
                                <li><a href="#">Science</a></li>
                                <li><a href="#">Management</a></li>
                                <li><a href="#">Humanities</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Biology</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                        </div>
                        <div class="recent-post clearfix sidebar-box">
                            <div class="sidebar-title">
                                <h3>Recent Posts</h3>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/profile1.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-blue">#News</a>
                                    <h4><a href="#">10 Tips you should follow</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent2.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-gold">#News</a>
                                    <h4><a href="#">Must have gadgets in life</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent1.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-green">#Health</a>
                                    <h4><a href="#">Selena, The talk of town</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-item">
                                <div class="recent-image">
                                    <img src="images/recent2.jpg" alt="Image">
                                </div>
                                <div class="recent-content">
                                    <a href="#" class="tag tag-blue">#News</a>
                                    <h4><a href="#">Why Zlatan left United?</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ad1 sidebar-box">
                            <div class="sidebar-title">
                                <h3>Advertisement</h3>
                            </div>
                            <div class="ad1-image">
                                <img src="images/footer1.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="popular-post sidebar-box">
                            <div class="sidebar-title">
                                <h3>Popular Posts</h3>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">01</span>
                                    <h4><a href="#">7 reasons Hollywood doesn’t make romantic comedies anymore</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">02</span>
                                    <h4><a href="#">Watch: the 3 best performances of the 2018 VMAs</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">03</span>
                                    <h4><a href="#">Why conservatives love to hate Alexandria?</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="popular-item">
                                <div class="popular-content">
                                    <span class="item-no">04</span>
                                    <h4><a href="#">10 Tips you should follow before eating street foods</a></h4>
                                    <div class="author-detail">
                                        <p><a href="#"><i class="icon-profile-male"></i> John Doe</a></p>
                                        <p><i class="icon-clock"></i> 12 May 2018</p>
                                        <p><a href="#"><i class="icon-chat"></i> 3 comments</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
