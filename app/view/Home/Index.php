<?php

?>

<!--PAYLOAD_CONTENT_END-->

<div class="wrapper style1">
    <div class="inner">

        <!-- Feature 1 -->
        <section class="container box feature1">
            <div class="row">
                <div class="col-12">
                    <header class="first major">
                        <h2>Optimized functional is beautiful.</h2>
                        <p>Who is recommending us? <strong><a href="http://kouy.ir/recommendation">Let's see</a></strong> ...</p>
                    </header>
                </div>
                <div class="col-4 col-12-medium">
                    <section>
                        <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                        <header class="second icon solid fa-user">
                            <h3>Business Administration</h3>
                            <p>We use tech only if needed :)</p>
                        </header>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section>
                        <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                        <header class="second icon solid fa-cog">
                            <h3>Software Architecture</h3>
                            <p>Reliable, Scalable, Efficient</p>
                        </header>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section>
                        <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                        <header class="second icon solid fa-chart-bar">
                            <h3>Data Science</h3>
                            <p>To sharpen decision making</p>
                        </header>
                    </section>
                </div>
                <div class="col-12">
                    <p>We do believe in coopration, experience, and values of each business.</p>
                </div>
            </div>
        </section>

    </div>
</div>
<div class="wrapper style2">
    <div class="inner">

        <!-- Feature 2 -->
        <section class="container box feature2">
            <div class="row">
                <div class="col-6 col-12-medium">
                    <section>
                        <header class="major">
                            <h2>Services & Pricing</h2>
                            <p>How we calculate fees</p>
                        </header>
                        <p>Please shoot a message to our finance department, then we will send you a PDF file containing information you need.</p>
                        <footer>
                            <a href="http://improve.gordarg.com/submit-ticket" class="button medium icon solid fa-arrow-circle-right">Leave a message</a>
                        </footer>
                    </section>
                </div>
                <div class="col-6 col-12-medium">
                    <section>
                        <header class="major">
                            <h2>We are hiring!</h2>
                            <p>If you know how to dream and build, join us.</p>
                        </header>
                        <p>Our crew will decide to hire new co-workers.</p>
                        <footer>
                            <a href="https://t.me/humancapitals" class="button medium alt icon solid fa-info-circle">Careers</a>
                        </footer>
                    </section>
                </div>
            </div>
        </section>

    </div>
</div>
<div class="wrapper style3">
    <div class="inner">
        <div class="container">
            <div class="row">
                <div class="col-8 col-12-medium">

                    <!-- Article list -->
                    <section class="box article-list">
                        <h2 class="icon fa-file-alt">Recent Posts</h2>


                        <?php
                        foreach ($Data['News'] as $item)
                        {
                        ?>
                        <!-- Excerpt -->
                        <article class="box excerpt">
                            <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                            <div>
                                <header>
                                    <span class="date"><?php echo $item['pubDate'] ?></span>
                                    <h3><a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></h3>
                                </header>
                                <p><?php echo $item['description'] ?></p>
                            </div>
                        </article>
                        <?php
                        }
                        ?>

                        <footer>
                            <a href="<?php echo _Root ?>app/rss/news.xml" class="button alt icon solid fa-rss">News Feed</a>
                        </footer>
                    </section>
                </div>
                <div class="col-4 col-12-medium">

                    <!-- Spotlight -->
                    <section class="box spotlight">
                        <h2 class="icon fa-file-alt">Spotlight</h2>

                        <?php
                        foreach ($Data['Articles'] as $item)
                        {
                        ?>
                        <article>
                            <a href="#" class="image featured"><img src="images/pic07.jpg" alt=""></a>
                            <header>
                                <h3><a href="<?php echo $item['link'] ?>"><?php echo $item['title'] ?></a></h3>
                                <p><?php echo $item['pubDate'] ?></p>
                            </header>
                            <p><?php echo $item['description'] ?></p>
                            <footer>
                                <a href="<?php echo _Root ?>app/rss/articles.xml" class="button alt icon solid fa-rss">Articles Feed</a>
                            </footer>
                        </article>
                        <?php
                        }
                        ?>

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>