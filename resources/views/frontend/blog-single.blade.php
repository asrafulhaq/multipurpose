@extends('frontend.layouts.app')

@section('main-content')

<!-- End Navigation Bar-->
<section class="page-title parallax">
    <div data-parallax="scroll" data-image-src="frontend/images/bg/15.jpg" class="parallax-bg"></div>
    <div class="parallax-overlay">
        <div class="centrize">
            <div class="v-center">
                <div class="container">
                    <div class="title center">
                        <h1 class="upper">This is our blog<span class="red-dot"></span></h1>
                        <h4>We have a few tips for you.</h4>
                        <hr>
                    </div>
                </div>
                <!-- end of container-->
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-single">
                    <div class="post-info">
                        <h2><a href="#">Checklists for Startups</a></h2>
                        <h6 class="upper"><span>By</span><a href="#"> Admin</a><span class="dot"></span><span>28 September 2015</span><span class="dot"></span><a href="#" class="post-tag">Startups</a></h6>
                    </div>
                    <div class="post-media">
                        <img src="frontend/images/blog/1.jpg" alt="">
                    </div>
                    <div class="post-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ut ratione similique temporibus tempora dicta soluta? Qui hic, voluptatem nemo quo corporis dignissimos voluptatum debitis cumque fugiat mollitia quasi quod. Repudiandae
                            possimus quas odio nisi optio asperiores, vitae error laudantium, ratione odit ipsa obcaecati debitis deleniti minus, illo maiores placeat omnis magnam.</p>
                        <blockquote class="serif">
                            <p>Modi perferendis ipsa, dolorum eaque accusantium! Velit libero fugit dolores repellendus consequatur nisi, deserunt aperiam a ea ex hic, iusto atque, quas. Aliquam rerum dolores saepe sunt, assumenda voluptas.</p>
                        </blockquote>
                        <p>Ipsa in adipisci eius qui quos minima ratione velit reprehenderit fuga deleniti amet quidem commodi ducimus.</p>
                        <h3>In hac habitasse platea dictumst.</h3>
                        <p>Sapiente amet eaque soluta perferendis. Quia ex sit sint voluptate ipsa culpa, veritatis:</p>
                        <ul>
                            <li>Proin elementum ante quis mauris</li>
                            <li>Integer dictum magna vitae ullamcorper sodales</li>
                            <li>Integer non placerat diam, id ornare est. Curabitur sit amet lectus vitae urna.</li>
                            <li>Vestibulum ante ipsum primis in faucibus</li>
                        </ul>
                        <p>Labore expedita officiis, in perspiciatis atque voluptates odio dignissimos doloribus quibusdam est minus ullam nulla quisquam nihil aspernatur rem laborum accusantium animi.</p>
                    </div>
                </article>
                <!-- end of article-->
                <div id="comments">
                    <h5 class="upper">3 Comments</h5>
                    <ul class="comments-list">
                        <li>
                            <div class="comment">
                                <div class="comment-pic">
                                    <img src="frontend/images/team/1.jpg" alt="" class="img-circle">
                                </div>
                                <div class="comment-text">
                                    <h5 class="upper">Jesse Pinkman</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime distinctio et quam possimus velit dolor sunt nisi neque, harum, dolores rem incidunt, esse ipsa nam facilis eum doloremque numquam veniam.</p><a href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                            <ul class="children">
                                <li>
                                    <div class="comment">
                                        <div class="comment-pic">
                                            <img src="frontend/images/team/2.jpg" alt="" class="img-circle">
                                        </div>
                                        <div class="comment-text">
                                            <h5 class="upper">Arya Stark</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque porro quae harum dolorem exercitationem voluptas illum ipsa sed hic, cum corporis autem molestias suscipit, illo laborum, vitae, dicta ullam minus.</p><a href="#"
                                                                                                                                                                                                                                                                          class="comment-reply">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="comment">
                                <div class="comment-pic">
                                    <img src="frontend/images/team/3.jpg" alt="" class="img-circle">
                                </div>
                                <div class="comment-text">
                                    <h5 class="upper">Rust Cohle</h5><span class="comment-date">Posted on 29 September at 10:41</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A deleniti sit beatae natus! Beatae velit labore, numquam excepturi, molestias reiciendis, ipsam quas iure distinctio quia, voluptate expedita autem explicabo illo.</p>
                                    <a
                                        href="#" class="comment-reply">Reply</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end of comments-->
                <div id="respond">
                    <h5 class="upper">Leave a comment</h5>
                    <div class="comment-respond">
                        <form class="comment-form">
                            <div class="form-double">
                                <div class="form-group">
                                    <input name="author" type="text" placeholder="Name" class="form-control">
                                </div>
                                <div class="form-group last">
                                    <input name="email" type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Comment" class="form-control"></textarea>
                            </div>
                            <div class="form-submit text-right">
                                <button type="button" class="btn btn-color-out">Post Comment</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end of comment form-->
            </div>
            <div class="col-md-3 col-md-offset-1">
                <div class="sidebar hidden-sm hidden-xs">
                    <div class="widget">
                        <h6 class="upper">Search blog</h6>
                        <form>
                            <input type="text" placeholder="Search.." class="form-control">
                        </form>
                    </div>
                    <!-- end of widget        -->
                    <div class="widget">
                        <h6 class="upper">Categories</h6>
                        <ul class="nav">
                            <li><a href="#">Fashion</a>
                            </li>
                            <li><a href="#">Tech</a>
                            </li>
                            <li><a href="#">Gaming</a>
                            </li>
                            <li><a href="#">Food</a>
                            </li>
                            <li><a href="#">Lifestyle</a>
                            </li>
                            <li><a href="#">Money</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of widget        -->
                    <div class="widget">
                        <h6 class="upper">Popular Tags</h6>
                        <div class="tags clearfix"><a href="#">Design</a><a href="#">Fashion</a><a href="#">Startups</a><a href="#">Tech</a><a href="#">Web</a><a href="#">Lifestyle</a>
                        </div>
                    </div>
                    <!-- end of widget      -->
                    <div class="widget">
                        <h6 class="upper">Latest Posts</h6>
                        <ul class="nav">
                            <li><a href="#">Checklists for Startups<i class="ti-arrow-right"></i><span>30 Sep, 2015</span></a>
                            </li>
                            <li><a href="#">The Death of Thought<i class="ti-arrow-right"></i><span>29 Sep, 2015</span></a>
                            </li>
                            <li><a href="#">Give it five minutes<i class="ti-arrow-right"></i><span>24 Sep, 2015</span></a>
                            </li>
                            <li><a href="#">Uber launches in Las Vegas<i class="ti-arrow-right"></i><span>20 Sep, 2015</span></a>
                            </li>
                            <li><a href="#">Fun with Product Hunt<i class="ti-arrow-right"></i><span>16 Sep, 2015</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of widget          -->
                </div>
                <!-- end of sidebar-->
            </div>
        </div>
        <!-- end of row-->

    </div>
</section>

@endsection
