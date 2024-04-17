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

/* base-back.html.twig */
class __TwigTemplate_215cfce197517939a201cdf2e8312265 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'aside' => [$this, 'block_aside'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base-back.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76 \" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/apple-icon.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/favicon.png"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/styles.css"), "html", null, true);
        echo "\">

\t\t<title>
\t\t\tIron Core GYM
\t\t\t";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        // line 16
        echo "\t\t</title>
\t\t";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "\t</head>

\t<body class=\"g-sidenav-show   bg-gray-100\">
\t\t";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 468
        echo "\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 14
        echo "\t\t\t\tDashboard |
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "\t\t\t<!--     Fonts and icons     -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
\t\t\t<!-- Nucleo Icons -->
\t\t\t<link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome Icons -->
\t\t\t<script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link
\t\t\thref=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- CSS Files -->
\t\t\t<link id=\"pagestyle\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/argon-dashboard.css"), "html", null, true);
        echo "?v=2.0.4\" rel=\"stylesheet\"/>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 36
        echo "\t\t\t<div class=\"min-height-300 bg-primary position-absolute w-100\"></div>
\t\t\t<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">
\t\t\t\t";
        // line 38
        $this->displayBlock('aside', $context, $blocks);
        // line 136
        echo "\t\t\t</aside>
\t\t\t";
        // line 137
        $this->displayBlock('main', $context, $blocks);
        // line 263
        echo "
\t\t\t<div class=\"fixed-plugin\">
\t\t\t\t<a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
\t\t\t\t\t<i class=\"fa fa-cog py-2\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t<div class=\"card-header pb-0 pt-3 \">
\t\t\t\t\t\t<div class=\"float-start\">
\t\t\t\t\t\t\t<h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
\t\t\t\t\t\t\t<p>See our dashboard options.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"float-end mt-4\">
\t\t\t\t\t\t\t<button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Toggle Button -->
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"horizontal dark my-1\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body pt-sm-3 pt-0 overflow-auto\">
\t\t\t\t\t\t<!-- Sidebar Backgrounds -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Sidebar Colors</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
\t\t\t\t\t\t\t<div class=\"badge-colors my-2 text-start\">
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- Sidenav Type -->
\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Sidenav Type</h6>
\t\t\t\t\t\t\t<p class=\"text-sm\">Choose between 2 different sidenav types.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
\t\t\t\t\t\t<!-- Navbar Fixed -->
\t\t\t\t\t\t<div class=\"d-flex my-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Navbar Fixed</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch ps-0 ms-auto my-auto\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr class=\"horizontal dark my-sm-4\">
\t\t\t\t\t\t<div class=\"mt-2 mb-5 d-flex\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Light / Dark</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch ps-0 ms-auto my-auto\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    Download</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    documentation</a>
\t\t\t\t\t\t<div class=\"w-100 text-center\">
\t\t\t\t\t\t\t<a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
\t\t\t\t\t\t\t<h6 class=\"mt-3\">Thank you for sharing!</h6>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tTweet
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tShare
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Core JS Files   -->
\t\t\t<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\tvar ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
new Chart(ctx1, {
type: \"line\",
data: {
labels: [
\"Apr\",
\"May\",
\"Jun\",
\"Jul\",
\"Aug\",
\"Sep\",
\"Oct\",
\"Nov\",
\"Dec\"
],
datasets: [
{
label: \"Mobile apps\",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: \"#5e72e4\",
backgroundColor: gradientStroke1,
borderWidth: 3,
fill: true,
data: [
50,
40,
300,
220,
500,
250,
400,
230,
500
],
maxBarThickness: 6

}
]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false
}
},
interaction: {
intersect: false,
mode: 'index'
},
scales: {
y: {
grid: {
drawBorder: false,
display: true,
drawOnChartArea: true,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
padding: 10,
color: '#fbfbfb',
font: {
size: 11,
family: \"Open Sans\",
style: 'normal',
lineHeight: 2
}
}
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
color: '#ccc',
padding: 20,
font: {
size: 11,
family: \"Open Sans\",
style: 'normal',
lineHeight: 2
}
}
}
}
}
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\tvar win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
\t\t\t</script>
\t\t\t<!-- Github buttons -->
\t\t\t<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
\t\t\t<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
\t\t\t<script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/argon-dashboard.min.js"), "html", null, true);
        echo "?v=2.0.4\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 39
        echo "\t\t\t\t\t<div class=\"sidenav-header\">

\t\t\t\t\t\t<a class=\"navbar-brand m-0\">
\t\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/iron_core_black.png"), "html", null, true);
        echo "\" width=\"50\" height=\"100\" alt=\"main_logo\">
\t\t\t\t\t\t\t<span class=\"ms-1 font-weight-bold\">IRON Core GYM</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"horizontal dark mt-0\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Dashboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Users</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Subscriptions</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Coaching</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Exercises</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-in.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Plans</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Nutrition</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_food_index");
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Food</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recipe_index");
        echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Recipes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Events</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Competitions</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Stock</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Products</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 138
        echo "\t\t\t\t<main
\t\t\t\t\tclass=\"main-content position-relative border-radius-lg \">
\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
\t\t\t\t\t\t<div class=\"container-fluid py-1 px-3\">
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm\">
\t\t\t\t\t\t\t\t\t\t<a class=\"opacity-5 text-white\" href=\"javascript:;\">Pages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t<h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
\t\t\t\t\t\t\t\t<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text text-body\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav  justify-content-end\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user me-sm-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-sm-inline d-none\">
\t\t\t\t\t\t\t\t\t\t\t\tmoamen@hammami.com</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sidenav-toggler-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item px-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/team-2.jpg"), "html", null, true);
        echo "\" class=\"avatar avatar-sm  me-3 \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfrom Laur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13 minutes ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/small-logos/logo-spotify.svg"), "html", null, true);
        echo "\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New album</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tby Travis Scott
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"12px\" height=\"12px\" viewbox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<title>credit-card</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(1716.000000, 291.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(453.000000, 454.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPayment successfully completed
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Navbar -->
\t\t\t\t</main>
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base-back.html.twig";
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
        return array (  629 => 210,  608 => 192,  552 => 138,  542 => 137,  500 => 104,  489 => 96,  432 => 42,  427 => 39,  417 => 38,  405 => 466,  284 => 348,  280 => 347,  276 => 346,  272 => 345,  268 => 344,  185 => 263,  183 => 137,  180 => 136,  178 => 38,  174 => 36,  164 => 35,  152 => 30,  147 => 28,  140 => 24,  135 => 22,  129 => 18,  119 => 17,  108 => 14,  98 => 13,  85 => 468,  83 => 35,  78 => 32,  76 => 17,  73 => 16,  71 => 13,  64 => 9,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

\t<head>
\t\t<meta charset=\"utf-8\"/>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<link rel=\"apple-touch-icon\" sizes=\"76x76 \" href=\"{{ asset('back-office/img/apple-icon.png') }}\">
\t\t<link rel=\"icon\" type=\"image/png\" href=\"{{ asset('back-office/img/favicon.png') }}\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('back-office/styles.css') }}\">

\t\t<title>
\t\t\tIron Core GYM
\t\t\t{% block title %}
\t\t\t\tDashboard |
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t<!--     Fonts and icons     -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
\t\t\t<!-- Nucleo Icons -->
\t\t\t<link href=\"{{ asset('back-office/css/nucleo-icons.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome Icons -->
\t\t\t<script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
\t\t\t<link
\t\t\thref=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- CSS Files -->
\t\t\t<link id=\"pagestyle\" href=\"{{ asset('back-office/css/argon-dashboard.css') }}?v=2.0.4\" rel=\"stylesheet\"/>
\t\t{% endblock %}
\t</head>

\t<body class=\"g-sidenav-show   bg-gray-100\">
\t\t{% block body %}
\t\t\t<div class=\"min-height-300 bg-primary position-absolute w-100\"></div>
\t\t\t<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">
\t\t\t\t{% block aside %}
\t\t\t\t\t<div class=\"sidenav-header\">

\t\t\t\t\t\t<a class=\"navbar-brand m-0\">
\t\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/iron_core_black.png') }}\" width=\"50\" height=\"100\" alt=\"main_logo\">
\t\t\t\t\t\t\t<span class=\"ms-1 font-weight-bold\">IRON Core GYM</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"horizontal dark mt-0\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Dashboard</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Users</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Subscriptions</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Coaching</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Exercises</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-in.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Plans</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Nutrition</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('app_food_index') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Food</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"{{ path('app_recipe_index') }}\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Recipes</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Events</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Competitions</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Stock</h6>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Products</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t</aside>
\t\t\t{% block main %}
\t\t\t\t<main
\t\t\t\t\tclass=\"main-content position-relative border-radius-lg \">
\t\t\t\t\t<!-- Navbar -->
\t\t\t\t\t<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
\t\t\t\t\t\t<div class=\"container-fluid py-1 px-3\">
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm\">
\t\t\t\t\t\t\t\t\t\t<a class=\"opacity-5 text-white\" href=\"javascript:;\">Pages</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t\t<h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
\t\t\t\t\t\t\t\t<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text text-body\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<ul class=\"navbar-nav  justify-content-end\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user me-sm-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-sm-inline d-none\">
\t\t\t\t\t\t\t\t\t\t\t\tmoamen@hammami.com</span>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"sidenav-toggler-inner\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item px-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/team-2.jpg') }}\" class=\"avatar avatar-sm  me-3 \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfrom Laur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13 minutes ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/small-logos/logo-spotify.svg') }}\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New album</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tby Travis Scott
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"12px\" height=\"12px\" viewbox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<title>credit-card</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(1716.000000, 291.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(453.000000, 454.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPayment successfully completed
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End Navbar -->
\t\t\t\t</main>
\t\t\t{% endblock %}

\t\t\t<div class=\"fixed-plugin\">
\t\t\t\t<a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
\t\t\t\t\t<i class=\"fa fa-cog py-2\"></i>
\t\t\t\t</a>
\t\t\t\t<div class=\"card shadow-lg\">
\t\t\t\t\t<div class=\"card-header pb-0 pt-3 \">
\t\t\t\t\t\t<div class=\"float-start\">
\t\t\t\t\t\t\t<h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
\t\t\t\t\t\t\t<p>See our dashboard options.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"float-end mt-4\">
\t\t\t\t\t\t\t<button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-close\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Toggle Button -->
\t\t\t\t\t</div>
\t\t\t\t\t<hr class=\"horizontal dark my-1\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body pt-sm-3 pt-0 overflow-auto\">
\t\t\t\t\t\t<!-- Sidebar Backgrounds -->
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Sidebar Colors</h6>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
\t\t\t\t\t\t\t<div class=\"badge-colors my-2 text-start\">
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-dark\" data-color=\"dark\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-info\" data-color=\"info\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-success\" data-color=\"success\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-warning\" data-color=\"warning\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t\t<span class=\"badge filter bg-gradient-danger\" data-color=\"danger\" onclick=\"sidebarColor(this)\"></span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<!-- Sidenav Type -->
\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Sidenav Type</h6>
\t\t\t\t\t\t\t<p class=\"text-sm\">Choose between 2 different sidenav types.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\" onclick=\"sidebarType(this)\">White
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\" onclick=\"sidebarType(this)\">Dark
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
\t\t\t\t\t\t<!-- Navbar Fixed -->
\t\t\t\t\t\t<div class=\"d-flex my-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Navbar Fixed</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch ps-0 ms-auto my-auto\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\" onclick=\"navbarFixed(this)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<hr class=\"horizontal dark my-sm-4\">
\t\t\t\t\t\t<div class=\"mt-2 mb-5 d-flex\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Light / Dark</h6>
\t\t\t\t\t\t\t<div class=\"form-check form-switch ps-0 ms-auto my-auto\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\" onclick=\"darkMode(this)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    Download</a>
\t\t\t\t\t\t<a class=\"btn btn-outline-dark w-100\" href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                    documentation</a>
\t\t\t\t\t\t<div class=\"w-100 text-center\">
\t\t\t\t\t\t\t<a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\" data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\" aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
\t\t\t\t\t\t\t<h6 class=\"mt-3\">Thank you for sharing!</h6>
\t\t\t\t\t\t\t<a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tTweet
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\" class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\tShare
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--   Core JS Files   -->
\t\t\t<script src=\"{{ asset('back-office/js/core/popper.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('back-office/js/core/bootstrap.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('back-office/js/plugins/perfect-scrollbar.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('back-office/js/plugins/smooth-scrollbar.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('back-office/js/plugins/chartjs.min.js') }}\"></script>
\t\t\t<script>
\t\t\t\tvar ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
new Chart(ctx1, {
type: \"line\",
data: {
labels: [
\"Apr\",
\"May\",
\"Jun\",
\"Jul\",
\"Aug\",
\"Sep\",
\"Oct\",
\"Nov\",
\"Dec\"
],
datasets: [
{
label: \"Mobile apps\",
tension: 0.4,
borderWidth: 0,
pointRadius: 0,
borderColor: \"#5e72e4\",
backgroundColor: gradientStroke1,
borderWidth: 3,
fill: true,
data: [
50,
40,
300,
220,
500,
250,
400,
230,
500
],
maxBarThickness: 6

}
]
},
options: {
responsive: true,
maintainAspectRatio: false,
plugins: {
legend: {
display: false
}
},
interaction: {
intersect: false,
mode: 'index'
},
scales: {
y: {
grid: {
drawBorder: false,
display: true,
drawOnChartArea: true,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
padding: 10,
color: '#fbfbfb',
font: {
size: 11,
family: \"Open Sans\",
style: 'normal',
lineHeight: 2
}
}
},
x: {
grid: {
drawBorder: false,
display: false,
drawOnChartArea: false,
drawTicks: false,
borderDash: [5, 5]
},
ticks: {
display: true,
color: '#ccc',
padding: 20,
font: {
size: 11,
family: \"Open Sans\",
style: 'normal',
lineHeight: 2
}
}
}
}
}
});
\t\t\t</script>
\t\t\t<script>
\t\t\t\tvar win = navigator.platform.indexOf('Win') > -1;
if (win && document.querySelector('#sidenav-scrollbar')) {
var options = {
damping: '0.5'
}
Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
}
\t\t\t</script>
\t\t\t<!-- Github buttons -->
\t\t\t<script async defer src=\"https://buttons.github.io/buttons.js\"></script>
\t\t\t<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
\t\t\t<script src=\"{{ asset('back-office/js/argon-dashboard.min.js') }}?v=2.0.4\"></script>
\t\t{% endblock %}
\t</body>

</html>
", "base-back.html.twig", "C:\\Users\\user\\Desktop\\projetWeb\\PidevWeb\\templates\\base-back.html.twig");
    }
}
