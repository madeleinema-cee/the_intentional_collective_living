<?php
/**
 * Header Template
 *
 * @file           header.php
 * @package        Responsive
 * @author         CyberChimps
 * @copyright      2020 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		<?php wp_head(); ?>
	</head>

<body <?php body_class(); ?> <?php responsive_schema_markup( 'body' ); ?> >
	<style>
         @import url(//db.onlinewebfonts.com/c/74c3c29282b604a9eed88ac6ede61463?family=Apercu+Pro);

         .site-content {
            width:100%;
        }

        .main-content {
            padding-left: 10%;
            padding-right: 10%;
            padding-bottom: 5%;
        }

        .categories {
            font-size: 18px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.22;
            letter-spacing: normal;
            color: #000000;
            display: inline-block;
            padding: 20px 10px 0 0;
        }

        .grey-title {
            padding-top: 20px;
            height: 22px;
            font-family: 'ApercuPro', sans-serif;
            font-size: 18px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.22;
            letter-spacing: normal;
            color: #7c7c7c;
            padding-bottom: 20px;
            margin-top: 20px;
        }

        .content {
            font-size: 16px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.38;
            letter-spacing: normal;
            color: #000000;
            padding-left: 25px;
            padding-bottom: 20px;
        }

        .link {
            font-family: 'ApercuPro', sans-serif;
            font-size: 16px;
            font-weight: 500;
            font-stretch: normal;
            font-style: normal;
            line-height: 1.38;
            letter-spacing: normal;
            color: #000000;
            text-decoration: underline;
            padding-left: 20px;
        }
        .link:hover {
            opacity: 80%;
            color: black;
        }

        i {
            display: inline-block;
            padding-right: 10px;
            margin: 0;
            font-size: 24px;
        }

        .section {
            margin-bottom: 20px;
        }

        .nav-item {
        }

        .btn {
            margin: 0 30px 0 0;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #000000;
        }

        .btn:hover {
            opacity: 80%;
        }

        .navbar {
            background-color: #faf8f5;
            padding: 20px 10%;
        }

        .login-btn {
            border-radius: 23px;
            border: solid 1px #2c2c2c;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: #000000;
            padding-left: 20px;
            padding-right: 20px;
        }

        .sign-btn {
            border-radius: 23px;
            border: solid 1px #648c1a;
            font-size: 16px;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            color: white;
            padding-left: 20px;
            padding-right: 20px;
            background-color: #648c1a;
        }



</style>
	<?php wp_body_open(); ?>
	<?php Responsive\responsive_header(); // before header hook. ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#primary"><?php esc_html_e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	<div class="site hfeed">
		<?php
		Responsive\responsive_header_top();
		// Elementor `header` location.
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) {
			?>

			<header id="masthead" class="site-header" role="banner" <?php responsive_schema_markup( 'site-header' ); ?> >
				<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="http://dev-the-ilc.org/">The Intentional Living Collective</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <div class="btn" type="button" id="explore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Explore
        </div>
        <div class="dropdown-menu" aria-labelledby="explore">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="grey-title">Community connections</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section">
                                    <a href="http://dev-the-ilc.org/first_hand_stories/" class="categories"><i class="fa fa-circle"></i>First-hand Stories</a>
                                    <p class="content">Find inspiration through stories from people that rose from the ashes of challenges like yours</p>
                                </div>
                                <a href="http://dev-the-ilc.org/events/" class="section"><div class="categories"><i class="fa fa-circle"></i>Events and activities</a>
                                    <p class="content">Connect in real or virtual space with people that "get" you because they've been there too</p></div>
                            </div>
                            <div class="col-lg-6">
                                <a href="http://dev-the-ilc.org/community_forum_all/" class="section"><div class="categories"><i class="fa fa-circle"></i>Community forum</a>
                                    <p class="content">A safe space to connect, share experiences, feel heard, and ask for or offer help</p></div>
                                <a href="http://www.theintentionallivingcollective.org/life-transition-zone---traditional-view.html" class="section"><div class="categories"><i class="fa fa-circle"></i>Resources portal</a>
                                    <p class="content">Find and connect with people and organizations to serve and be served</p></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="grey-title">Programs and services</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href=" http://dev-the-ilc.org/personal-guidance/" class="section"><div class="categories"><i class="fa fa-circle"></i>Personal guidance</a>
                                    <p class="content">Connect with someone for guidance and support that has been there and wants to help</p></div>
                                <a href="http://dev-the-ilc.org/rising-phoenix-awards/" class="section"><div class="categories"><i class="fa fa-circle"></i>Rising Phoenix Awards</a>
                                    <p class="content">Recognize and celebrate everyday, inspirational people from your community</p></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section"><a href="http://dev-the-ilc.org/community_forum_all/" class="categories"><i class="fa fa-circle"></i>Community forum</a>
                                    <p class="content">Embrace and celebrate major life transitions with real intention</p></div>
                                <div><a class="link" href="http://dev-the-ilc.org/coming-of-age-ceremony/">Coming of age</a> →</div>
                                <div><a class="link" href="http://dev-the-ilc.org/weddings-and-unions-ceremony/">Weddings & unions</a> →</div>
                                <div ><a class="link" href="http://dev-the-ilc.org/ceremony-life/ ">Life celebrations</a> →</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </li>
      <li class="nav-item">
        <div class="menu">
        <div class="btn" type="button" id="topics" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Topics
        </div>
        <div class="dropdown-menu" aria-labelledby="topics">
            <div class="container">
                <div class="grey-title">Topics</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section">
                                    <div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/abuse/">Abuse</a></div>
                                    <p class="content">Resources to help survivors of abuse and domestic violence heal and thrive</p>
                                </div>
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/grieving/">Grieving</a></div>
                                    <p class="content">Resources to help you grieve and recover from significant loss. You are not alone</p></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/addiction/">Addiction</a></div>
                                    <p class="content">Resources to help people in recovery heal, grow, and get their lives back</p>
                                </div>
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/parenthood/">Parenthood</a></div>
                                    <p class="content">Resources to help you deal with the many big challenges that come with being a parent</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/divorce_or_uncoupling/">Divorce or uncoupling</a></div>
                                    <p class="content">Resources to help you get through and heal from challenging relationship endings</p></div>
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/military_life_transitions/">Military life transitions</a></div>
                                    <p class="content">Help for families facing the challenging life transitions that come with being in the military</p></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/health_crisis/">Health crisis</a></div>
                                    <p class="content">Navigate through and recover from a major health crisis that’s affected you or your loved ones</p>
                                </div>
                                <div class="mt-5"><a class="link" href="http://dev-the-ilc.org/topics/">View all</a> →</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      </li>
      <li class="nav-item">
        <div class="menu">
        <div class="btn" type="button" id="organizations" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            For organizations
        </div>
        <div class="dropdown-menu" aria-labelledby="organizations">
            <div class="container">
                <div class="row">
            <div class="col-lg-8">
                <div class="grey-title">For organizations</div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section">
                            <div class="categories"><i class="fa fa-circle"></i><a href="http://dev-the-ilc.org/resources-portal/"> Resources portal</a></div>
                            <p class="content">Easily find and connect with people or organizations that either need your help or can collaborate with you to scale your impact</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section"><div class="categories"><i class="fa fa-circle"></i><a href=""> Memberships for organizations</a></div>
                            <p class="content">Member organizations get enhanced visibility and access to the resources available through our resources portal and community</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
    </div>
      </li>
      <li class="nav-item">
        <div class="menu">
        <div class="btn" type="button" id="about" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Company
        </div>
        <div class="dropdown-menu" aria-labelledby="about">
        <div class="container">
    <div class="grey-title">About us</div>
    <div class="row">
        <div class="col-lg-3">
            <div class="section">
                <a href="http://dev-the-ilc.org/who-we-are/" class="categories"><i class="fa fa-circle"></i>Who we are</a>
                <p class="content">Learn about who we are, how we came to be, what we value, and how you might fit in with us</p>
            </div>

        </div>
        <div class="col-lg-3">
            <a href="http://dev-the-ilc.org/manifesto/" class="section"><div class="categories"><i class="fa fa-circle"></i>Our Manifesto</a>
                <p class="content">Learn about what we believe in, what we have in common, and what you can expect from us</p></div>

        </div>

        <div class="col-lg-3">
            <a href="http://dev-the-ilc.org/ambassadors/" class="section"><div class="categories"><i class="fa fa-circle"></i>Become an ambassador</a>
                <p class="content">Join our team and use your own experiences to help others facing similar life challenges</p></div>

        </div>
        <div class="col-lg-3">
            <a href="http://dev-the-ilc.org/sponsors/" class="section"><div class="categories"><i class="fa fa-circle"></i>Become a sponsor</a>
                <p class="content">Be part of something awesome by donating resources to help us better serve more people</p>
            </div>

        </div>
    </div>
</div>
    </div>
    </div>
      </li>
        <li class="nav-item">
        <div class="btn btn-outline-secondary login-btn"><a href="http://dev-the-ilc.org/login/">Login</a></div>
      </li>
        <br>
        <li class="nav-item">
            <div class="btn btn-outline-secondary sign-btn"><a href="http://dev-the-ilc.org/signup_categories/">Sign up</a></div>
      </li>
    </ul>
  </div>
</nav>			</header>

			<?php
		}
		Responsive\responsive_header_bottom();
		?>
