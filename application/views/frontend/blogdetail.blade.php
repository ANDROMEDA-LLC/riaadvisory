@extends('frontend/template')
@section('title','Blog')
@section('icerik')
<p style="display:none;" class="menuactive">Company</p>
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Blog</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="{{base_url('blog')}}">Blog</a></li>
                        <li> {{$blogdetail->baslik}}</li>
                    </ul>
                </div>
            </div>

            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <div class="shape3"><img src="{{base_url('assets/frontend')}}/img/shape/1.svg" alt="image"></div>
        </div>
        <!-- End Page Title Area -->

        
        <!-- Start Blog Details Area -->
        <section class="blog-details-area ptb-110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                            <div class="article-image">
                                <img src="{{base_url('uploads/blog/').$blogdetail->resim_yol}}" alt="image">
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><span>Posted On:</span> <a href="#">{{$blogdetail->create_date}}</a></li>
                                        <li><span>Posted By:</span> <a href="#">Admin</a></li>
                                    </ul>
                                </div>
                                @php echo htmlspecialchars_decode($blogdetail->icerik) @endphp
                                   </div>
<!-- 
                            <div class="article-footer">
                                <div class="article-tags">
                                    <span><i class="fas fa-bookmark"></i></span>

                                    <a href="#">Fashion</a>,
                                    <a href="#">Games</a>,
                                    <a href="#">Travel</a>
                                </div>

                                <div class="article-share">
                                    <ul class="social">
                                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div> -->
                        </div>

                        <div class="comments-area">
                            <!-- <h3 class="comments-title">2 Comments:</h3>

                            <ol class="comment-list">
                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/author1.jpg" class="avatar" alt="image">
                                                <b class="fn">James Anderson</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2019 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>

                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/author2.jpg" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                        <span class="says">says:</span>
                                                    </div>
        
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2019 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
        
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
        
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>

                                        <ol class="children">
                                            <li class="comment">
                                                <article class="comment-body">
                                                    <footer class="comment-meta">
                                                        <div class="comment-author vcard">
                                                            <img src="assets/img/author3.jpg" class="avatar" alt="image">
                                                            <b class="fn">Sarah Taylor</b>
                                                            <span class="says">says:</span>
                                                        </div>
            
                                                        <div class="comment-metadata">
                                                            <a href="#">
                                                                <time>April 24, 2019 at 10:59 am</time>
                                                            </a>
                                                        </div>
                                                    </footer>
            
                                                    <div class="comment-content">
                                                        <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    </div>
            
                                                    <div class="reply">
                                                        <a href="#" class="comment-reply-link">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ol>
                                    </ol>
                                </li>

                                <li class="comment">
                                    <article class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="assets/img/author2.jpg" class="avatar" alt="image">
                                                <b class="fn">John Doe</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <time>April 24, 2019 at 10:59 am</time>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </article>

                                    <ol class="children">
                                        <li class="comment">
                                            <article class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="assets/img/author4.jpg" class="avatar" alt="image">
                                                        <b class="fn">James Anderson</b>
                                                        <span class="says">says:</span>
                                                    </div>
        
                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time>April 24, 2019 at 10:59 am</time>
                                                        </a>
                                                    </div>
                                                </footer>
        
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                </div>
        
                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                            </ol> -->

                            <!-- <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked 
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" name="author" required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" name="email" required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" name="url">
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit" value="Post Comment">
                                    </p>
                                </form>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                            <!-- <section class="widget widget_search">
                                <form class="search-form">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search...">
                                    </label>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </form>
                            </section> -->

                            <section class="widget widget_evolta_posts_thumb">
                                <h3 class="widget-title">Latest Blogs</h3>
                                @foreach ($latestblog as $item)
                                <article class="item">
                                    <a href="{{base_url('blogdetail/').$item->slug}}" class="thumb">
                                        <span class="fullimage cover" role="img" ><img src="{{base_url('uploads/blog/').$item->resim_yol}}"/></span>
                                    </a>
                                    <div class="info">
                                        <time datetime="2019-06-30">{{$item->create_date}}</time>
                                        <h4 class="title usmall"><a href="{{base_url('blogdetail/').$item->slug}}">{{$item->baslik}}</a></h4>
                                    </div>

                                    <div class="clear"></div>
                                </article>
                                @endforeach
                                
                            </section>

                            <!-- <section class="widget widget_recent_comments">
                                <h3 class="widget-title">Recent Comments</h3>

                                <ul>
                                    <li>
                                        <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
                                        on
                                        <a href="#">Hello world!</a>
                                    </li>
                                    <li>
                                        <span class="comment-author-link">
                                            <a href="#">Evolta</a>
                                        </span>
                                        on
                                        <a href="#">Hello world!</a>
                                    </li>
                                    <li>
                                        <span class="comment-author-link">
                                            <a href="#">Wordpress</a>
                                        </span>
                                        on
                                        <a href="#">Hello world!</a>
                                    </li>
                                    <li>
                                        <span class="comment-author-link">
                                            <a href="#">A WordPress Commenter</a>
                                        </span>
                                        on
                                        <a href="#">Hello world!</a>
                                    </li>
                                    <li>
                                        <span class="comment-author-link">
                                            <a href="#">Evolta</a>
                                        </span>
                                        on
                                        <a href="#">Hello world!</a>
                                    </li>
                                </ul>
                            </section> -->
<!-- 
                            <section class="widget widget_recent_entries">
                                <h3 class="widget-title">Recent Posts</h3>

                                <ul>
                                    <li><a href="#">How to Become a Successful Entry Level UX Designer</a></li>
                                    <li><a href="#">How to start your business as an entrepreneur</a></li>
                                    <li><a href="#">How to be a successful entrepreneur</a></li>
                                    <li><a href="#">10 Building Mobile Apps With Ionic And React</a></li>
                                    <li><a href="#">Protect your workplace from cyber attacks</a></li>
                                </ul>
                            </section> -->

                            <!-- <section class="widget widget_archive">
                                <h3 class="widget-title">Archives</h3>

                                <ul>
                                    <li><a href="#">May 2019</a></li>
                                    <li><a href="#">April 2019</a></li>
                                    <li><a href="#">June 2019</a></li>
                                </ul>
                            </section> -->

                            <!-- <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>

                                <ul>
                                    <li><a href="#">Business</a></li>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Tips</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                </ul>
                            </section> -->

                            <!-- <section class="widget widget_meta">
                                <h3 class="widget-title">Meta</h3>

                                <ul>
                                    <li><a href="#">Log in</a></li>
                                    <li><a href="#">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                    <li><a href="#">WordPress.org</a></li>
                                </ul>
                            </section> -->

                            <!-- <section class="widget widget_tag_cloud">
                                <h3 class="widget-title">Tags</h3>

                                <div class="tagcloud">
                                    <a href="#">IT <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Evolta <span class="tag-link-count"> (3)</span></a>
                                    <a href="#">Games <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                    <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                    <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                                </div>
                            </section> -->
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Details Area -->


@endsection