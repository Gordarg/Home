<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?php echo $Data['Title']?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo _Root ?>assets/css/main.css" />
</head>
<body class="homepage is-preload">
<div id="page-wrapper">

<!-- Header -->
    <div id="header-wrapper">
        <div class="container">

            <!-- Header -->
                <header id="header">
                    <div class="inner">

                        <!-- Logo -->
                            <h1><a href="<?php echo _Root?>" id="logo"><?php echo _AppName ?></a></h1>

                        <!-- Nav -->
                            <nav id="nav">
                                <ul>
                                    <li>
                                        <a href="#">Subsidiaries</a>
                                        <ul>
                                            <li><a href="https://foruq.ir/">Foruq</a></li>
                                            <li><a href="https://agriinno.com/">AgriInno</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">CSR</a>
                                        <ul>
                                            <li>
                                                <a href="https://sariab.ir">Sariab</a>
                                                <ul>
                                                    <li><a href="https://sariab.ir">Home</a></li>
                                                    <li><a href="#">Open Source</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="https://github.com/Gordarg/SF">SnowFramework</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="https://improve.gordarg.com/">Customer Area</a></li>
                                </ul>
                            </nav>

                    </div>
                </header>

            <!-- Banner -->
                <div id="banner">
                    <h2>We build high quality customzied services</h2>
                    <p>Intrested in our team? Submit a ticket.<br/>We will reach you as soon as possible.</p>
                    <a href="http://improve.gordarg.com/submit-ticket" class="button large icon solid fa-check-circle">Submit</a>
                </div>

        </div>
    </div>

    <!-- Main Wrapper -->
    <div id="main-wrapper">
        <!--VIEW_CONTENT-->
    </div>

    <!-- Footer Wrapper -->
    <div id="footer-wrapper">
        <footer id="footer" class="container">
            <div class="row">
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                        <section>
                            <h2>Navigation</h2>
                            <ul class="divided">
                                <li><a href="http://improve.gordarg.com">Knowledge Base</a></li>
                                <li><a href="http://improve.gordarg.com/submit-ticket">Ask for support</a></li>
                                <li><a href="https://github.com/gordarg">Developers</a></li>
                                <li><a href="http://sariab.ir">Sariab</a></li>
                                <li><a href="http://Kouy.ir">Kouy</a></li>
                                <li><a href="https://t.me/humancapitals">Careers</a></li>
                            </ul>
                        </section>

                </div>
                <div class="col-3 col-6-medium col-12-small">

                    <!-- Links -->
                        <section>
                            <h2>About</h2>
                            <ul class="divided">
                                <li><a href="#">Team</a></li>
                                <li><a href="http://kouy.ir/tayyebi">Director</a></li>
                            </ul>
                        </section>

                    <!-- Links -->
                        <section>
                            <h2>Policies</h2>
                            <ul class="divided">
                                <li><a href="<?php echo _Root?>Home/Policy/Meeting">Meetings & Negotiations</a></li>
                                <li><a href="<?php echo _Root?>Home/Policy/Privacy">Privacy</a></li>
                                <li><a href="<?php echo _Root?>Home/Policy/Payment">Payment</a></li>
                                <li><a href="<?php echo _Root?>Home/Policy/Delivery">Delivery</a></li>
                                <li><a href="<?php echo _Root?>Home/Policy/Contract">Contracts</a></li>
                            </ul>
                        </section>

                </div>
                <div class="col-6 col-12-medium imp-medium">

                    <!-- About -->
                        <section>
                            <h2><strong><?php echo _AppName ?></strong>, since 2016</h2>
                            <!-- <p>Hi! This is <strong>ZeroFour</strong>, a free, fully responsive HTML5 site
                            template by <a href="http://twitter.com/ajlkn">AJ</a> for <a href="http://html5up.net/">HTML5 UP</a>.
                            It's <a href="http://html5up.net/license/">Creative Commons Attribution</a>
                            licensed so use it for any personal or commercial project (just credit us
                            for the design!).</p> -->
                            <a href="#" class="button alt icon solid fa-arrow-circle-right">Our story</a>
                        </section>

                    <!-- Contact -->
                        <section>
                            <h2>Get in touch</h2>
                            <div>
                                <div class="row">
                                    <div class="col-6 col-12-small">
                                        <dl class="contact">
                                            <dt>Twitter</dt>
                                            <dd><a href="https://twitter.com/gordarg_com">@gordarg_com</a></dd>
                                            <dt>WWW</dt>
                                            <dd><a href="https://gordarg.com">gordarg.com</a></dd>
                                            <dt>Email</dt>
                                            <dd><a href="mailto:info@gordarg.com">info@gordarg.com</a></dd>
                                        </dl>
                                    </div>
                                    <!-- <div class="col-6 col-12-small">
                                        <dl class="contact">
                                            <dt>Address</dt>
                                            <dd>
                                                1234 Fictional Rd<br />
                                                Nashville, TN 00000-0000<br />
                                                USA
                                            </dd>
                                            <dt>Phone</dt>
                                            <dd>(000) 000-0000</dd>
                                        </dl>
                                    </div> -->
                                </div>
                            </div>
                        </section>

                </div>
                <div class="col-12">
                    <div id="copyright">
                        <ul class="menu">
                            <!-- <li>&copy; Untitled. All rights reserved</li> -->
                            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</div>

<!-- Scripts -->
<script src="<?php echo _Root ?>assets/js/jquery.min.js"></script>
<script src="<?php echo _Root ?>assets/js/jquery.dropotron.min.js"></script>
<script src="<?php echo _Root ?>assets/js/browser.min.js"></script>
<script src="<?php echo _Root ?>assets/js/breakpoints.min.js"></script>
<script src="<?php echo _Root ?>assets/js/util.js"></script>
<script src="<?php echo _Root ?>assets/js/main.js"></script>

</body>
</html>