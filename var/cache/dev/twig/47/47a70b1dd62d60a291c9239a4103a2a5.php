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

/* aa.html.twig */
class __TwigTemplate_46bd2ed20adb8144ef8adcab14f6afe0 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'sidebar' => [$this, 'block_sidebar'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aa.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "aa.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>


\t\t";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
\t\t";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 154
        echo "\t</head>

\t<body>
\t\t";
        // line 157
        $this->displayBlock('sidebar', $context, $blocks);
        // line 255
        echo "        ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 375
        echo "\t\t";
        $this->displayBlock('body', $context, $blocks);
        // line 376
        echo "

\t</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
\t\t\t<!-- Nucleo Icons -->
\t\t\t<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome Icons -->
\t\t\t<link
\t\t\thref=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
\t\t\t<!-- CSS Files -->
\t\t\t<link id=\"pagestyle\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/argon-dashboard.css"), "html", null, true);
        echo "?v=2.0.4\" rel=\"stylesheet\"/>\t
    
    
    \t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "\t\t\t<!--   Core JS Files   -->
\t\t\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 33
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
            <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
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
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/argon-dashboard.min.js"), "html", null, true);
        echo "?v=2.0.4\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 157
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 158
        echo "\t\t\t<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">

\t\t\t\t<div class=\"sidenav-header\">
\t\t\t\t\t<i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
\t\t\t\t\t<a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
\t\t\t\t\t\t<img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/logo-ct-dark.png"), "html", null, true);
        echo "\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
\t\t\t\t\t\t<span class=\"ms-1 font-weight-bold\">Argon Dashboard 2</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<hr class=\"horizontal dark mt-0\">
\t\t\t\t<div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"./pages/dashboard.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/tables.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-calendar-grid-58 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/billing.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Billing</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/virtual-reality.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-app text-info text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Virtual Reality</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/rtl.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-world-2 text-danger text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">RTL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Profile</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-in.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Sign In</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-up.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-collection text-info text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Sign Up</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidenav-footer mx-3 \">
\t\t\t\t\t<div class=\"card card-plain shadow-none\" id=\"sidenavCard\">
\t\t\t\t\t\t<img class=\"w-50 mx-auto\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/illustrations/icon-documentation.svg"), "html", null, true);
        echo "\" alt=\"sidebar_illustration\">
\t\t\t\t\t\t<div class=\"card-body text-center p-3 w-100 pt-0\">
\t\t\t\t\t\t\t<div class=\"docs-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Need help?</h6>
\t\t\t\t\t\t\t\t<p class=\"text-xs font-weight-bold mb-0\">Please check our docs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\" target=\"_blank\" class=\"btn btn-dark btn-sm w-100 mb-3\">Documentation</a>
\t\t\t\t\t<a class=\"btn btn-primary btn-sm mb-0 w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
\t\t\t\t</div>
\t\t\t</aside>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 255
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        echo "<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
\t\t\t\t\t<div class=\"container-fluid py-1 px-3\">
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm\">
\t\t\t\t\t\t\t\t\t<a class=\"opacity-5 text-white\" href=\"javascript:;\">Pages</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t<h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
\t\t\t\t\t\t\t<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text text-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"navbar-nav  justify-content-end\">
\t\t\t\t\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user me-sm-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-sm-inline d-none\">Sign In</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sidenav-toggler-inner\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item px-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/team-2.jpg"), "html", null, true);
        echo "\" class=\"avatar avatar-sm  me-3 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfrom Laur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13 minutes ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/small-logos/logo-spotify.svg"), "html", null, true);
        echo "\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New album</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tby Travis Scott
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"12px\" height=\"12px\" viewbox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<title>credit-card</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(1716.000000, 291.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(453.000000, 454.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPayment successfully completed
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 375
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "aa.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  592 => 375,  531 => 324,  509 => 305,  448 => 255,  425 => 242,  343 => 163,  336 => 158,  326 => 157,  314 => 152,  192 => 33,  188 => 32,  184 => 31,  180 => 30,  176 => 29,  173 => 28,  163 => 27,  149 => 22,  144 => 20,  138 => 17,  133 => 15,  128 => 12,  118 => 11,  98 => 6,  83 => 376,  80 => 375,  77 => 255,  75 => 157,  70 => 154,  68 => 27,  65 => 26,  63 => 11,  58 => 8,  56 => 6,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>


\t\t{% block stylesheets %}
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
\t\t\t<!-- Nucleo Icons -->
\t\t\t<link href=\"{{ asset('back-office/css/nucleo-icons.css') }}\" rel=\"stylesheet\"/>
\t\t\t<link
\t\t\thref=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- Font Awesome Icons -->
\t\t\t<link
\t\t\thref=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
\t\t\t<!-- CSS Files -->
\t\t\t<link id=\"pagestyle\" href=\"{{ asset('back-office/css/argon-dashboard.css') }}?v=2.0.4\" rel=\"stylesheet\"/>\t
    
    
    \t{% endblock %}

\t\t{% block javascripts %}
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
            <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
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
\t</head>

\t<body>
\t\t{% block sidebar %}
\t\t\t<aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \" id=\"sidenav-main\">

\t\t\t\t<div class=\"sidenav-header\">
\t\t\t\t\t<i class=\"fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none\" aria-hidden=\"true\" id=\"iconSidenav\"></i>
\t\t\t\t\t<a class=\"navbar-brand m-0\" href=\" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html \" target=\"_blank\">
\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/logo-ct-dark.png') }}\" class=\"navbar-brand-img h-100\" alt=\"main_logo\">
\t\t\t\t\t\t<span class=\"ms-1 font-weight-bold\">Argon Dashboard 2</span>
\t\t\t\t\t</a>
\t\t\t\t</div>

\t\t\t\t<hr class=\"horizontal dark mt-0\">
\t\t\t\t<div class=\"collapse navbar-collapse  w-auto \" id=\"sidenav-collapse-main\">
\t\t\t\t\t<ul class=\"navbar-nav\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link active\" href=\"./pages/dashboard.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/tables.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-calendar-grid-58 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/billing.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Billing</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/virtual-reality.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-app text-info text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Virtual Reality</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/rtl.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-world-2 text-danger text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">RTL</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item mt-3\">
\t\t\t\t\t\t\t<h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Account pages</h6>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/profile.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Profile</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-in.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Sign In</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link \" href=\"./pages/sign-up.html\">
\t\t\t\t\t\t\t\t<div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
\t\t\t\t\t\t\t\t\t<i class=\"ni ni-collection text-info text-sm opacity-10\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"nav-link-text ms-1\">Sign Up</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"sidenav-footer mx-3 \">
\t\t\t\t\t<div class=\"card card-plain shadow-none\" id=\"sidenavCard\">
\t\t\t\t\t\t<img class=\"w-50 mx-auto\" src=\"{{ asset('back-office/img/illustrations/icon-documentation.svg') }}\" alt=\"sidebar_illustration\">
\t\t\t\t\t\t<div class=\"card-body text-center p-3 w-100 pt-0\">
\t\t\t\t\t\t\t<div class=\"docs-info\">
\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">Need help?</h6>
\t\t\t\t\t\t\t\t<p class=\"text-xs font-weight-bold mb-0\">Please check our docs</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<a href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\" target=\"_blank\" class=\"btn btn-dark btn-sm w-100 mb-3\">Documentation</a>
\t\t\t\t\t<a class=\"btn btn-primary btn-sm mb-0 w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree\" type=\"button\">Upgrade to pro</a>
\t\t\t\t</div>
\t\t\t</aside>
\t\t{% endblock %}
        {% block navbar %}<nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\" data-scroll=\"false\">
\t\t\t\t\t<div class=\"container-fluid py-1 px-3\">
\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t<ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm\">
\t\t\t\t\t\t\t\t\t<a class=\"opacity-5 text-white\" href=\"javascript:;\">Pages</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t<h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
\t\t\t\t\t\t</nav>
\t\t\t\t\t\t<div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
\t\t\t\t\t\t\t<div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text text-body\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"navbar-nav  justify-content-end\">
\t\t\t\t\t\t\t\t<li class=\"nav-item d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user me-sm-1\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-sm-inline d-none\">Sign In</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
\t\t\t\t\t\t\t\t\t\t<div class=\"sidenav-toggler-inner\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"sidenav-toggler-line bg-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item px-3 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bell cursor-pointer\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\" aria-labelledby=\"dropdownMenuButton\">
\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/team-2.jpg') }}\" class=\"avatar avatar-sm  me-3 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New message</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tfrom Laur
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13 minutes ago
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('back-office/img/small-logos/logo-spotify.svg') }}\" class=\"avatar avatar-sm bg-gradient-dark  me-3 \">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">New album</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tby Travis Scott
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t1 day
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex py-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<svg width=\"12px\" height=\"12px\" viewbox=\"0 0 43 36\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<title>credit-card</title>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(-2169.000000, -745.000000)\" fill=\"#FFFFFF\" fill-rule=\"nonzero\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(1716.000000, 291.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<g transform=\"translate(453.000000, 454.000000)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\" opacity=\"0.593633743\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<path class=\"color-background\" d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</g>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-sm font-weight-normal mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tPayment successfully completed
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-xs text-secondary mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-clock me-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t2 days
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</nav>{% endblock %}
\t\t{% block body %}{% endblock %}


\t</body>

</html>
", "aa.html.twig", "C:\\Users\\user\\Desktop\\projetWeb\\PidevWeb\\templates\\aa.html.twig");
    }
}
