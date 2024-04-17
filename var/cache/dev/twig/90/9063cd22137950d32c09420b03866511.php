<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base-front.html.twig */
class __TwigTemplate_cdd558b8a7af5a9ecc31208f53fd5abf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-front.html.twig"));

        // line 1
        echo "<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta
\t\tname=\"description\" content=\"GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4\">

\t\t<!-- theme meta -->
\t\t<meta name=\"theme-name\" content=\"gymfit\"/>

\t\t<meta name=\"author\" content=\"Themefisher.com\">

\t\t<title>GymFit| Fitness template</title>

\t\t<!-- bootstrap.min css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
\t\t<!-- Icofont Css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/icofont/icofont.min.css"), "html", null, true);
        echo "\">
\t\t<!-- Themify Css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/themify/css/themify-icons.css"), "html", null, true);
        echo "\">
\t\t<!-- animate.css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/animate-css/animate.css"), "html", null, true);
        echo "\">
\t\t<!-- Magnify Popup -->
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\">
\t\t<!-- Owl Carousel CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick.css"), "html", null, true);
        echo "\">
\t\t<link
\t\trel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick-theme.css"), "html", null, true);
        echo "\">
\t\t<!-- Main Stylesheet -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\">

\t</head>
\t<body>


\t\t<!-- Section Menu Start -->
\t\t<!-- Header Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg navigation fixed-top\" id=\"navbar\"> <div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<h2 class=\"text-white text-capitalize\"></i>Gym<span class=\"text-color\">Fit</span>
\t\t\t\t</h2>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsid\" aria-controls=\"navbarsid\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"ti-view-list\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse text-center navbar-collapse\" id=\"navbarsid\">
\t\t\t\t<ul class=\"navbar-nav mx-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages.</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"about.html\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"trainer.html\">Trainer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"course.html\">Courses</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"service.html\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"pricing.html\">Memebership</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog.</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog.html\">Blog Grid</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog Sidebar</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-single.html\">Blog Details</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"contact.html\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0\">
\t\t\t\t\t<a href=\"tel:+23-345-67890\">
\t\t\t\t\t\t<h3 class=\"text-color mb-0\">
\t\t\t\t\t\t\t<i class=\"ti-mobile mr-2\"></i>+23-563-5688</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html></nav><!-- Header Close --><div class=\"main-wrapper \">
<!-- Section Menu End -->

<!-- Section Slider Start -->
<!-- Slider Start -->
\t<section class=\"slider\"> <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<span class=\"h6 d-inline-block mb-4 subhead text-uppercase\">Gym fitness club</span>
\t\t\t\t<h1 class=\"text-uppercase text-white mb-5\">Step up your
\t\t\t\t\t<span class=\"text-color\">fitness Challange</span><br>with us</h1>

\t\t\t\t<a href=\"pricing.html\" target=\"_blank\" class=\"btn btn-main \">Join Us
\t\t\t\t\t<i class=\"ti-angle-right ml-3\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Slider End -->

<!-- Section Intro Start -->
<section class=\"mt-80px\">
\t<div class=\"container\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top border-bottom position-relative hover-style-1\">
\t\t\t\t\t<span class=\"number\">01</span>
\t\t\t\t\t<h3 class=\"mt-3\">Modern Equipment</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top hover-style-1\">
\t\t\t\t\t<span class=\"number\">02</span>
\t\t\t\t\t<h3 class=\"mt-3\">PROFFESIONAL TRAINer</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top hover-style-1\">
\t\t\t\t\t<span class=\"number\">03</span>
\t\t\t\t\t<h3 class=\"mt-3\">HEALTHY DIET Plan</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Intro End -->

<!-- Section About start -->
<section class=\"section about\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\"></div>
\t</div>
</section>
<!-- Section About End -->

<!-- section Call To action start -->
<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<span class=\"h6 letter-spacing text-white\">Dscover your potential</span>
\t\t\t\t\t<h2 class=\"text-lg mt-4 mb-5 text-white\">
\t\t\t\t\t\tBook your early seat to get
\t\t\t\t\t\t<span class=\"text-color\">summer 25%
\t\t\t\t\t\t</span>dicsount
\t\t\t\t\t</h2>

\t\t\t\t\t<a href=\"pricing.html\" class=\"btn btn-main text-white\">Join Today</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- section Call To action start -->

<!-- Section Services Start -->
<section class=\"section services \">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Our Services</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym-alt-2 text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">WEIGHT LIFTING</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-cycling-alt text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Cycling</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym-alt-3 text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">YOGA MEDIDATION</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-muscle text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Building body</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-dumbbell text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Fitness Track</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Fitness</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Services End -->

<!-- Section Gallery Start -->
<section class=\"gallery\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Our gallery</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container-fluid p-0\">
\t\t<div class=\"row no-gutters portfolio-gallery\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-01.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-01.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-02.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-02.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-03.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-03.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-04.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-04.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-05.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-05.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-06.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-06.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-07.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-07.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-08.jpg"), "html", null, true);
        echo "\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/gallery-08.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!-- Section Gallery END -->

<!-- Section Testimonial Start -->
<section class=\"section textimonial position-relative bg-3\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t\t\t<h2 class=\"text-white\">What People say</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-slider\">
\t\t\t\t\t<div class=\"text-center mb-4 \">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">A great Start to a healthy life</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">John Donas</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">The workout worth attending!</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Donas Jack</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">Very Professional Club and coaches</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Mikel Hussy</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">Shape your body and healthy!</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Hiker jons</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Testimonial END -->

<!-- Section Course Start -->
<section class=\"section course bg-gray\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Popular Courses</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/course-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/course-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\"mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/course-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/images/gallery/course-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t<a href=\"course.html\" class=\"btn btn-main\">See all our Courses</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Course ENd -->


<!-- Section Footer Start -->
<!-- footer Start -->
\t<footer class=\"footer bg-black-50\"> <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
\t\t\t\t<h2 class=\"text-white mb-4\">GymFit</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores, sint nostrum omnis eaque cumque dolorum.</p>

\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t</div>


\t\t\t<div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"footer-widget recent-blog\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Recents Posts</h4>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"text-white\">Claritas est etiam processus dynamicus</a>
\t\t\t\t\t\t<p class=\"text-sm mt-2 text-white-50\">30 february 2019</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"text-white\">Claritas est etiam processus dynamicus</a>
\t\t\t\t\t\t<p class=\"text-sm mt-2 text-white-50\">30 february 2019</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-5 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Quick Links</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-40 mb-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"service.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"pricing.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Membership</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"course.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Courses</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Contact us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-5\">
\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Home location</h4>
\t\t\t\t\t<p>Washington 6036 Richmond
\t\t\t\t\t\t                            hwy., Alexandria, VA USA 22303
\t\t\t\t\t</p>
\t\t\t\t\t<span class=\"text-white\">+1 (409) 987–5874</span>
\t\t\t\t\t<span class=\"text-white\">info@demolink.org</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row align-items-center mt-5 px-3 bg-black mx-1\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<p class=\"text-white mt-3\">Gymfit © 2019 , Theme By
\t\t\t\t\t<a href=\"https://themefisher.com/\" class=\"text-color\">Themefisher.com</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 ml-auto text-right\">
\t\t\t\t<ul class=\"list-inline mb-0 footer-socials\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\">
\t\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\">
\t\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://github.com/themefisher/\">
\t\t\t\t\t\t\t<i class=\"ti-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Section Footer End -->

<!-- Section Footer Scripts --></div><!--
\t Essential Scripts
\t =====================================--><!-- Main jQuery --><script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/jquery/jquery.js"), "html", null, true);
        echo "\"></script><!-- Bootstrap 4.3.1 --><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script><!-- Slick Slider --><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/slick-carousel/slick/slick.min.js"), "html", null, true);
        echo "\"></script><!--  Magnific Popup--><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script><!-- Form Validator --><script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js\"></script><script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js\"></script><!-- Google Map --><script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/plugins/google-map/gmap.js"), "html", null, true);
        echo "\"></script><script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/script.js"), "html", null, true);
        echo "\"></script></body></html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base-front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  687 => 559,  563 => 438,  548 => 426,  532 => 413,  516 => 400,  427 => 314,  423 => 313,  416 => 309,  412 => 308,  405 => 304,  401 => 303,  394 => 299,  390 => 298,  383 => 294,  379 => 293,  372 => 289,  368 => 288,  361 => 284,  357 => 283,  350 => 279,  346 => 278,  110 => 45,  105 => 43,  100 => 41,  95 => 39,  89 => 36,  83 => 33,  77 => 30,  71 => 27,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang=\"en\">
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta
\t\tname=\"description\" content=\"GYm,fitness,business,company,agency,multipurpose,modern,bootstrap4\">

\t\t<!-- theme meta -->
\t\t<meta name=\"theme-name\" content=\"gymfit\"/>

\t\t<meta name=\"author\" content=\"Themefisher.com\">

\t\t<title>GymFit| Fitness template</title>

\t\t<!-- bootstrap.min css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/bootstrap/css/bootstrap.min.css') }}\">
\t\t<!-- Icofont Css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/icofont/icofont.min.css') }}\">
\t\t<!-- Themify Css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/themify/css/themify-icons.css') }}\">
\t\t<!-- animate.css -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/animate-css/animate.css') }}\">
\t\t<!-- Magnify Popup -->
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/magnific-popup/dist/magnific-popup.css') }}\">
\t\t<!-- Owl Carousel CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front-office/plugins/slick-carousel/slick/slick.css') }}\">
\t\t<link
\t\trel=\"stylesheet\" href=\"{{ asset('front-office/plugins/slick-carousel/slick/slick-theme.css') }}\">
\t\t<!-- Main Stylesheet -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('front-office/css/style.css') }}\">

\t</head>
\t<body>


\t\t<!-- Section Menu Start -->
\t\t<!-- Header Start -->
\t\t\t<nav class=\"navbar navbar-expand-lg navigation fixed-top\" id=\"navbar\"> <div class=\"container-fluid\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t<h2 class=\"text-white text-capitalize\"></i>Gym<span class=\"text-color\">Fit</span>
\t\t\t\t</h2>
\t\t\t</a>
\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsid\" aria-controls=\"navbarsid\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t<span class=\"ti-view-list\"></span>
\t\t\t</button>
\t\t\t<div class=\"collapse text-center navbar-collapse\" id=\"navbarsid\">
\t\t\t\t<ul class=\"navbar-nav mx-auto\">
\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.html\">Home
\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Pages.</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"about.html\">About</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"trainer.html\">Trainer</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"course.html\">Courses</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"service.html\">Services</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"pricing.html\">Memebership</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog.</a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog.html\">Blog Grid</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-sidebar.html\">Blog Sidebar</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"blog-single.html\">Blog Details</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a class=\"nav-link\" href=\"contact.html\">Contact</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"my-md-0 ml-lg-4 mt-4 mt-lg-0 ml-auto text-lg-right mb-3 mb-lg-0\">
\t\t\t\t\t<a href=\"tel:+23-345-67890\">
\t\t\t\t\t\t<h3 class=\"text-color mb-0\">
\t\t\t\t\t\t\t<i class=\"ti-mobile mr-2\"></i>+23-563-5688</h3>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html></nav><!-- Header Close --><div class=\"main-wrapper \">
<!-- Section Menu End -->

<!-- Section Slider Start -->
<!-- Slider Start -->
\t<section class=\"slider\"> <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<span class=\"h6 d-inline-block mb-4 subhead text-uppercase\">Gym fitness club</span>
\t\t\t\t<h1 class=\"text-uppercase text-white mb-5\">Step up your
\t\t\t\t\t<span class=\"text-color\">fitness Challange</span><br>with us</h1>

\t\t\t\t<a href=\"pricing.html\" target=\"_blank\" class=\"btn btn-main \">Join Us
\t\t\t\t\t<i class=\"ti-angle-right ml-3\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Slider End -->

<!-- Section Intro Start -->
<section class=\"mt-80px\">
\t<div class=\"container\">
\t\t<div class=\"row \">
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top border-bottom position-relative hover-style-1\">
\t\t\t\t\t<span class=\"number\">01</span>
\t\t\t\t\t<h3 class=\"mt-3\">Modern Equipment</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top hover-style-1\">
\t\t\t\t\t<span class=\"number\">02</span>
\t\t\t\t\t<h3 class=\"mt-3\">PROFFESIONAL TRAINer</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t<div class=\"card p-5 border-0 rounded-top hover-style-1\">
\t\t\t\t\t<span class=\"number\">03</span>
\t\t\t\t\t<h3 class=\"mt-3\">HEALTHY DIET Plan</h3>
\t\t\t\t\t<p class=\"mt-3 mb-4\">Vestibulum sit amet blan augue, sit amet vehicula mi. Aliquam vitae varius.</p>
\t\t\t\t\t<a href=\"about.html\" class=\"text-color text-uppercase font-size-13 letter-spacing font-weight-bold\">
\t\t\t\t\t\t<i class=\"ti-minus mr-2 \"></i>more Details</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Intro End -->

<!-- Section About start -->
<section class=\"section about\">
\t<div class=\"container\">
\t\t<div class=\"row align-items-center\"></div>
\t</div>
</section>
<!-- Section About End -->

<!-- section Call To action start -->
<section class=\"section cta\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 col-md-12 col-sm-12\">
\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<span class=\"h6 letter-spacing text-white\">Dscover your potential</span>
\t\t\t\t\t<h2 class=\"text-lg mt-4 mb-5 text-white\">
\t\t\t\t\t\tBook your early seat to get
\t\t\t\t\t\t<span class=\"text-color\">summer 25%
\t\t\t\t\t\t</span>dicsount
\t\t\t\t\t</h2>

\t\t\t\t\t<a href=\"pricing.html\" class=\"btn btn-main text-white\">Join Today</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- section Call To action start -->

<!-- Section Services Start -->
<section class=\"section services \">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Our Services</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row no-gutters\">
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym-alt-2 text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">WEIGHT LIFTING</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-cycling-alt text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Cycling</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym-alt-3 text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">YOGA MEDIDATION</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-muscle text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Building body</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-dumbbell text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Fitness Track</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4 col-md-6 col-sm-6\">
\t\t\t\t<div class=\"text-center  px-4 py-5 hover-style-1\">
\t\t\t\t\t<i class=\"icofont-gym text-lg text-color\"></i>
\t\t\t\t\t<h4 class=\"mt-3 mb-4 text-uppercase\">Fitness</h4>
\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, molestias.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Services End -->

<!-- Section Gallery Start -->
<section class=\"gallery\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Our gallery</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"container-fluid p-0\">
\t\t<div class=\"row no-gutters portfolio-gallery\">
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-01.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-01.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-02.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-02.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-03.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-03.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-04.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-04.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-05.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-05.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-06.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-06.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-07.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-07.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6 col-sm-6\">
\t\t\t\t<a href=\"{{ asset('front-office/images/gallery/gallery-08.jpg') }}\" class=\"popup-gallery\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/gallery-08.jpg') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>
</section>

<!-- Section Gallery END -->

<!-- Section Testimonial Start -->
<section class=\"section textimonial position-relative bg-3\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t\t\t<h2 class=\"text-white\">What People say</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"testimonial-slider\">
\t\t\t\t\t<div class=\"text-center mb-4 \">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">A great Start to a healthy life</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">John Donas</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">The workout worth attending!</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Donas Jack</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">Very Professional Club and coaches</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Mikel Hussy</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<i class=\"ti-quote-left text-lg text-color\"></i>
\t\t\t\t\t\t<h3 class=\"mt-4 text-white letter-spacing\">Shape your body and healthy!</h3>
\t\t\t\t\t\t<p class=\"my-4 text-white-50\">Laboriosam molestias aperiam sit corporis sunt, hic veritatis possimus optio reprehenderit, laudantium excepturi, consequatur. Assumenda hic error veniam exercitationem</p>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h4 class=\"mb-0 text-capitalize text-white font-weight-normal\">Hiker jons</h4>
\t\t\t\t\t\t\t<span class=\"text-white-50\">Manager</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Testimonial END -->

<!-- Section Course Start -->
<section class=\"section course bg-gray\">
\t<div class=\"container\">
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8 text-center\">
\t\t\t\t<div class=\"section-title\">
\t\t\t\t\t<div class=\"divider mb-3\"></div>
\t\t\t\t\t<h2>Popular Courses</h2>
\t\t\t\t\t<p>We offer more than 35 group exercis, aerobic classes each week.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/course-1.jpg') }}\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/course-2.jpg') }}\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\"mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/course-3.jpg') }}\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t<div class=\"card border-0 rounded-0 p-0 mb-5 mb-lg-0 shadow-sm\">
\t\t\t\t\t<img src=\"{{ asset('front-office/images/gallery/course-2.jpg') }}\" alt=\"\" class=\"img-fluid\">

\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<a href=\"course-single.html\">
\t\t\t\t\t\t\t<h4 class=\"font-secondary mb-0\">Build Body</h4>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<p class=\" mb-2\">Mentor: Jimmy Karter</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t<div class=\"row justify-content-center\">
\t\t\t<div class=\"col-lg-8\">
\t\t\t\t<div class=\"mt-5 text-center\">
\t\t\t\t\t<a href=\"course.html\" class=\"btn btn-main\">See all our Courses</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
<!-- Section Course ENd -->


<!-- Section Footer Start -->
<!-- footer Start -->
\t<footer class=\"footer bg-black-50\"> <div class=\"container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-lg-4 col-md-6 mb-5 mb-lg-0\">
\t\t\t\t<h2 class=\"text-white mb-4\">GymFit</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus illo ad quo sunt maiores, sint nostrum omnis eaque cumque dolorum.</p>

\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
\t\t\t</div>


\t\t\t<div class=\"col-lg-3 col-md-6 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"footer-widget recent-blog\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Recents Posts</h4>
\t\t\t\t\t<div>
\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"text-white\">Claritas est etiam processus dynamicus</a>
\t\t\t\t\t\t<p class=\"text-sm mt-2 text-white-50\">30 february 2019</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-4\">
\t\t\t\t\t\t<a href=\"blog-single.html\" class=\"text-white\">Claritas est etiam processus dynamicus</a>
\t\t\t\t\t\t<p class=\"text-sm mt-2 text-white-50\">30 february 2019</p>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-2 col-md-5 mb-5 mb-lg-0\">
\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Quick Links</h4>
\t\t\t\t\t<ul class=\"list-unstyled footer-menu lh-40 mb-0\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"about.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>About Us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"service.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Services</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"pricing.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Membership</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"course.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Courses</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"contact.html\">
\t\t\t\t\t\t\t\t<i class=\"ti-angle-double-right mr-2\"></i>Contact us</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3 col-md-5\">
\t\t\t\t<div class=\"footer-widget\">
\t\t\t\t\t<h4 class=\"mb-4 text-white letter-spacing text-uppercase\">Home location</h4>
\t\t\t\t\t<p>Washington 6036 Richmond
\t\t\t\t\t\t                            hwy., Alexandria, VA USA 22303
\t\t\t\t\t</p>
\t\t\t\t\t<span class=\"text-white\">+1 (409) 987–5874</span>
\t\t\t\t\t<span class=\"text-white\">info@demolink.org</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row align-items-center mt-5 px-3 bg-black mx-1\">
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<p class=\"text-white mt-3\">Gymfit © 2019 , Theme By
\t\t\t\t\t<a href=\"https://themefisher.com/\" class=\"text-color\">Themefisher.com</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-lg-6 ml-auto text-right\">
\t\t\t\t<ul class=\"list-inline mb-0 footer-socials\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://www.facebook.com/themefisher\">
\t\t\t\t\t\t\t<i class=\"ti-facebook\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://twitter.com/themefisher\">
\t\t\t\t\t\t\t<i class=\"ti-twitter\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"https://github.com/themefisher/\">
\t\t\t\t\t\t\t<i class=\"ti-github\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
</footer>
<!-- Section Footer End -->

<!-- Section Footer Scripts --></div><!--
\t Essential Scripts
\t =====================================--><!-- Main jQuery --><script src=\"{{ asset('front-office/plugins/jquery/jquery.js') }}\"></script><!-- Bootstrap 4.3.1 --><script src=\"{{ asset('front-office/plugins/bootstrap/js/bootstrap.min.js') }}\"></script><!-- Slick Slider --><script src=\"{{ asset('front-office/plugins/slick-carousel/slick/slick.min.js') }}\"></script><!--  Magnific Popup--><script src=\"{{ asset('front-office/plugins/magnific-popup/dist/jquery.magnific-popup.min.js') }}\"></script><!-- Form Validator --><script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js\"></script><script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js\"></script><!-- Google Map --><script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ\"></script><script src=\"{{ asset('front-office/plugins/google-map/gmap.js') }}\"></script><script src=\"{{ asset('front-office/js/script.js') }}\"></script></body></html>
", "base-front.html.twig", "C:\\Users\\user\\Desktop\\projetWeb\\PidevWeb\\templates\\base-front.html.twig");
    }
}
