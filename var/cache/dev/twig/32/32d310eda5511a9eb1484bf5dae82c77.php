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

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/apple-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/favicon.png"), "html", null, true);
        echo "\">
    <title>
        Iron Core GYM ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "</head>

<body class=\"g-sidenav-show   bg-gray-100\">
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 455
        echo "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Dashboard | ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <!--     Fonts and icons     -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
        <!-- Nucleo Icons -->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- Font Awesome Icons -->
        <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/nucleo-svg.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
        <!-- CSS Files -->
        <link id=\"pagestyle\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/css/argon-dashboard.css"), "html", null, true);
        echo "?v=2.0.4\" rel=\"stylesheet\"/>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <div class=\"min-height-300 bg-primary position-absolute w-100\"></div>
    <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \"
           id=\"sidenav-main\">
        ";
        // line 31
        $this->displayBlock('aside', $context, $blocks);
        // line 128
        echo "    </aside>
    ";
        // line 129
        $this->displayBlock('main', $context, $blocks);
        // line 260
        echo "
    <div class=\"fixed-plugin\">
        <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
            <i class=\"fa fa-cog py-2\"> </i>
        </a>
        <div class=\"card shadow-lg\">
            <div class=\"card-header pb-0 pt-3 \">
                <div class=\"float-start\">
                    <h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class=\"float-end mt-4\">
                    <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
                        <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class=\"horizontal dark my-1\">
            <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class=\"mb-0\">Sidebar Colors</h6>
                </div>
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors my-2 text-start\">
                        <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-info\" data-color=\"info\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-success\" data-color=\"success\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\"
                              onclick=\"sidebarColor(this)\"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class=\"mt-3\">
                    <h6 class=\"mb-0\">Sidenav Type</h6>
                    <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
                </div>
                <div class=\"d-flex\">
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\"
                            onclick=\"sidebarType(this)\">White
                    </button>
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\"
                            onclick=\"sidebarType(this)\">Dark
                    </button>
                </div>
                <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class=\"d-flex my-3\">
                    <h6 class=\"mb-0\">Navbar Fixed</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\"
                               onclick=\"navbarFixed(this)\">
                    </div>
                </div>
                <hr class=\"horizontal dark my-sm-4\">
                <div class=\"mt-2 mb-5 d-flex\">
                    <h6 class=\"mb-0\">Light / Dark</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\"
                               onclick=\"darkMode(this)\">
                    </div>
                </div>
                <a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free
                    Download</a>
                <a class=\"btn btn-outline-dark w-100\"
                   href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View
                    documentation</a>
                <div class=\"w-100 text-center\">
                    <a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\"
                       data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\"
                       aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
                    <h6 class=\"mt-3\">Thank you for sharing!</h6>
                    <a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\"
                       class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
                    </a>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\"
                       class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/core/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/smooth-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/plugins/chartjs.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: \"line\",
            data: {
                labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                datasets: [{
                    label: \"Mobile apps\",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: \"#5e72e4\",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
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
                            },
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
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/js/argon-dashboard.min.js"), "html", null, true);
        echo "?v=2.0.4\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_aside($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "aside"));

        // line 32
        echo "        <div class=\"sidenav-header\">

            <a class=\"navbar-brand m-0\">
                <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/iron_core_black.png"), "html", null, true);
        echo "\" width=\"50\" height=\"100\"
                     alt=\"main_logo\"> <span class=\"ms-1 font-weight-bold\">IRON Core GYM</span>
            </a>
        </div>
        <hr class=\"horizontal dark mt-0\">
        <div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        echo "\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/tables.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Users</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_subscription_index");
        echo "\">                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Subscriptions</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Coaching</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Exercises</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/sign-in.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Plans</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Nutrition</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Food</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/sign-in.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Recipes</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Events</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Competitions</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Stock</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Products</span>
                    </a>
                </li>
            </ul>
        </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 129
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 130
        echo "    <main class=\"main-content position-relative border-radius-lg \">
        <!-- Navbar -->
        <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\"
             data-scroll=\"false\">
            <div class=\"container-fluid py-1 px-3\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                        <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-white\"
                                                               href=\"javascript:;\">Pages</a></li>
                        <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
                    </ol>
                    <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
                </nav>
                <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"
                                                                        aria-hidden=\"true\"></i></span>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
                        </div>
                    </div>
                    <ul class=\"navbar-nav  justify-content-end\">
                        <li class=\"nav-item d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
                                <i class=\"fa fa-user me-sm-1\"></i>
                                <span class=\"d-sm-inline d-none\"> ayoub@admin.com</span>
                            </a>
                        </li>
                        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
                                <div class=\"sidenav-toggler-inner\">
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item px-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\">
                                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\"
                               data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell cursor-pointer\"></i>
                            </a>
                            <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\"
                                aria-labelledby=\"dropdownMenuButton\">
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/team-2.jpg"), "html", null, true);
        echo "\"
                                                     class=\"avatar avatar-sm  me-3 \"></div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New message</span> from Laur
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("back-office/img/small-logos/logo-spotify.svg"), "html", null, true);
        echo "\"
                                                     class=\"avatar avatar-sm bg-gradient-dark  me-3 \"></div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New album</span> by Travis Scott
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\"
                                                     xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                                    <title>credit-card</title>
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <g transform=\"translate(-2169.000000, -745.000000)\"
                                                           fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                            <g transform=\"translate(1716.000000, 291.000000)\">
                                                                <g transform=\"translate(453.000000, 454.000000)\">
                                                                    <path class=\"color-background\"
                                                                          d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\"
                                                                          opacity=\"0.593633743\"></path>
                                                                    <path class=\"color-background\"
                                                                          d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    Payment successfully completed
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </main>
    ";
        
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
        return array (  606 => 201,  585 => 183,  530 => 130,  520 => 129,  441 => 59,  422 => 43,  411 => 35,  406 => 32,  396 => 31,  384 => 453,  285 => 357,  281 => 356,  277 => 355,  273 => 354,  269 => 353,  174 => 260,  172 => 129,  169 => 128,  167 => 31,  162 => 28,  152 => 27,  140 => 22,  135 => 20,  129 => 17,  125 => 16,  120 => 13,  110 => 12,  91 => 10,  79 => 455,  77 => 27,  72 => 24,  70 => 12,  67 => 11,  65 => 10,  60 => 8,  56 => 7,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"{{ asset('back-office/img/apple-icon.png') }}\">
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('back-office/img/favicon.png') }}\">
    <title>
        Iron Core GYM {% block title %} Dashboard | {% endblock %}
    </title>
    {% block stylesheets %}
        <!--     Fonts and icons     -->
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700\" rel=\"stylesheet\"/>
        <!-- Nucleo Icons -->
        <link href=\"{{ asset('back-office/css/nucleo-icons.css') }}\" rel=\"stylesheet\"/>
        <link href=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
        <!-- Font Awesome Icons -->
        <script src=\"https://kit.fontawesome.com/42d5adcbca.js\" crossorigin=\"anonymous\"></script>
        <link href=\"{{ asset('back-office/css/nucleo-svg.css') }}\" rel=\"stylesheet\"/>
        <!-- CSS Files -->
        <link id=\"pagestyle\" href=\"{{ asset('back-office/css/argon-dashboard.css') }}?v=2.0.4\" rel=\"stylesheet\"/>
    {% endblock %}
</head>

<body class=\"g-sidenav-show   bg-gray-100\">
{% block body %}
    <div class=\"min-height-300 bg-primary position-absolute w-100\"></div>
    <aside class=\"sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 \"
           id=\"sidenav-main\">
        {% block aside %}
        <div class=\"sidenav-header\">

            <a class=\"navbar-brand m-0\">
                <img src=\"{{ asset('back-office/img/iron_core_black.png') }}\" width=\"50\" height=\"100\"
                     alt=\"main_logo\"> <span class=\"ms-1 font-weight-bold\">IRON Core GYM</span>
            </a>
        </div>
        <hr class=\"horizontal dark mt-0\">
        <div>
            <ul class=\"navbar-nav\">
                <li class=\"nav-item\">
                    <a class=\"nav-link active\" href=\"{{ path('app_dashboard') }}\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-tv-2 text-primary text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Dashboard</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/tables.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Users</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"{{ path('app_subscription_index') }}\">                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-credit-card text-success text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Subscriptions</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Coaching</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Exercises</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/sign-in.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Plans</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Nutrition</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Food</span>
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/sign-in.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-copy-04 text-warning text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Recipes</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Events</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Competitions</span>
                    </a>
                </li>
                <li class=\"nav-item mt-3\">
                    <h6 class=\"ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6\">Stock</h6>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link \" href=\"./pages/profile.html\">
                        <div class=\"icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center\">
                            <i class=\"ni ni-single-02 text-dark text-sm opacity-10\"></i>
                        </div>
                        <span class=\"nav-link-text ms-1\">Products</span>
                    </a>
                </li>
            </ul>
        </div>
        {% endblock %}
    </aside>
    {% block main %}
    <main class=\"main-content position-relative border-radius-lg \">
        <!-- Navbar -->
        <nav class=\"navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl \" id=\"navbarBlur\"
             data-scroll=\"false\">
            <div class=\"container-fluid py-1 px-3\">
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5\">
                        <li class=\"breadcrumb-item text-sm\"><a class=\"opacity-5 text-white\"
                                                               href=\"javascript:;\">Pages</a></li>
                        <li class=\"breadcrumb-item text-sm text-white active\" aria-current=\"page\">Dashboard</li>
                    </ol>
                    <h6 class=\"font-weight-bolder text-white mb-0\">Dashboard</h6>
                </nav>
                <div class=\"collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4\" id=\"navbar\">
                    <div class=\"ms-md-auto pe-md-3 d-flex align-items-center\">
                        <div class=\"input-group\">
                            <span class=\"input-group-text text-body\"><i class=\"fas fa-search\"
                                                                        aria-hidden=\"true\"></i></span>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Type here...\">
                        </div>
                    </div>
                    <ul class=\"navbar-nav  justify-content-end\">
                        <li class=\"nav-item d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white font-weight-bold px-0\">
                                <i class=\"fa fa-user me-sm-1\"></i>
                                <span class=\"d-sm-inline d-none\"> ayoub@admin.com</span>
                            </a>
                        </li>
                        <li class=\"nav-item d-xl-none ps-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"iconNavbarSidenav\">
                                <div class=\"sidenav-toggler-inner\">
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                    <i class=\"sidenav-toggler-line bg-white\"></i>
                                </div>
                            </a>
                        </li>
                        <li class=\"nav-item px-3 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\">
                                <i class=\"fa fa-cog fixed-plugin-button-nav cursor-pointer\"></i>
                            </a>
                        </li>
                        <li class=\"nav-item dropdown pe-2 d-flex align-items-center\">
                            <a href=\"javascript:;\" class=\"nav-link text-white p-0\" id=\"dropdownMenuButton\"
                               data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fa fa-bell cursor-pointer\"></i>
                            </a>
                            <ul class=\"dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4\"
                                aria-labelledby=\"dropdownMenuButton\">
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"{{ asset('back-office/img/team-2.jpg') }}\"
                                                     class=\"avatar avatar-sm  me-3 \"></div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New message</span> from Laur
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=\"mb-2\">
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"my-auto\">
                                                <img src=\"{{ asset('back-office/img/small-logos/logo-spotify.svg') }}\"
                                                     class=\"avatar avatar-sm bg-gradient-dark  me-3 \"></div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    <span class=\"font-weight-bold\">New album</span> by Travis Scott
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item border-radius-md\" href=\"javascript:;\">
                                        <div class=\"d-flex py-1\">
                                            <div class=\"avatar avatar-sm bg-gradient-secondary  me-3  my-auto\">
                                                <svg width=\"12px\" height=\"12px\" viewBox=\"0 0 43 36\" version=\"1.1\"
                                                     xmlns=\"http://www.w3.org/2000/svg\"
                                                     xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                                                    <title>credit-card</title>
                                                    <g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                                                        <g transform=\"translate(-2169.000000, -745.000000)\"
                                                           fill=\"#FFFFFF\" fill-rule=\"nonzero\">
                                                            <g transform=\"translate(1716.000000, 291.000000)\">
                                                                <g transform=\"translate(453.000000, 454.000000)\">
                                                                    <path class=\"color-background\"
                                                                          d=\"M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z\"
                                                                          opacity=\"0.593633743\"></path>
                                                                    <path class=\"color-background\"
                                                                          d=\"M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z\"></path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class=\"d-flex flex-column justify-content-center\">
                                                <h6 class=\"text-sm font-weight-normal mb-1\">
                                                    Payment successfully completed
                                                </h6>
                                                <p class=\"text-xs text-secondary mb-0\">
                                                    <i class=\"fa fa-clock me-1\"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
    </main>
    {% endblock %}

    <div class=\"fixed-plugin\">
        <a class=\"fixed-plugin-button text-dark position-fixed px-3 py-2\">
            <i class=\"fa fa-cog py-2\"> </i>
        </a>
        <div class=\"card shadow-lg\">
            <div class=\"card-header pb-0 pt-3 \">
                <div class=\"float-start\">
                    <h5 class=\"mt-3 mb-0\">Argon Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class=\"float-end mt-4\">
                    <button class=\"btn btn-link text-dark p-0 fixed-plugin-close-button\">
                        <i class=\"fa fa-close\"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class=\"horizontal dark my-1\">
            <div class=\"card-body pt-sm-3 pt-0 overflow-auto\">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class=\"mb-0\">Sidebar Colors</h6>
                </div>
                <a href=\"javascript:void(0)\" class=\"switch-trigger background-color\">
                    <div class=\"badge-colors my-2 text-start\">
                        <span class=\"badge filter bg-gradient-primary active\" data-color=\"primary\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-dark\" data-color=\"dark\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-info\" data-color=\"info\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-success\" data-color=\"success\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-warning\" data-color=\"warning\"
                              onclick=\"sidebarColor(this)\"></span>
                        <span class=\"badge filter bg-gradient-danger\" data-color=\"danger\"
                              onclick=\"sidebarColor(this)\"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class=\"mt-3\">
                    <h6 class=\"mb-0\">Sidenav Type</h6>
                    <p class=\"text-sm\">Choose between 2 different sidenav types.</p>
                </div>
                <div class=\"d-flex\">
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2 active me-2\" data-class=\"bg-white\"
                            onclick=\"sidebarType(this)\">White
                    </button>
                    <button class=\"btn bg-gradient-primary w-100 px-3 mb-2\" data-class=\"bg-default\"
                            onclick=\"sidebarType(this)\">Dark
                    </button>
                </div>
                <p class=\"text-sm d-xl-none d-block mt-2\">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class=\"d-flex my-3\">
                    <h6 class=\"mb-0\">Navbar Fixed</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"navbarFixed\"
                               onclick=\"navbarFixed(this)\">
                    </div>
                </div>
                <hr class=\"horizontal dark my-sm-4\">
                <div class=\"mt-2 mb-5 d-flex\">
                    <h6 class=\"mb-0\">Light / Dark</h6>
                    <div class=\"form-check form-switch ps-0 ms-auto my-auto\">
                        <input class=\"form-check-input mt-1 ms-auto\" type=\"checkbox\" id=\"dark-version\"
                               onclick=\"darkMode(this)\">
                    </div>
                </div>
                <a class=\"btn bg-gradient-dark w-100\" href=\"https://www.creative-tim.com/product/argon-dashboard\">Free
                    Download</a>
                <a class=\"btn btn-outline-dark w-100\"
                   href=\"https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard\">View
                    documentation</a>
                <div class=\"w-100 text-center\">
                    <a class=\"github-button\" href=\"https://github.com/creativetimofficial/argon-dashboard\"
                       data-icon=\"octicon-star\" data-size=\"large\" data-show-count=\"true\"
                       aria-label=\"Star creativetimofficial/argon-dashboard on GitHub\">Star</a>
                    <h6 class=\"mt-3\">Thank you for sharing!</h6>
                    <a href=\"https://twitter.com/intent/tweet?text=Check%20Argon%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fargon-dashboard\"
                       class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-twitter me-1\" aria-hidden=\"true\"></i> Tweet
                    </a>
                    <a href=\"https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/argon-dashboard\"
                       class=\"btn btn-dark mb-0 me-2\" target=\"_blank\">
                        <i class=\"fab fa-facebook-square me-1\" aria-hidden=\"true\"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src=\"{{ asset('back-office/js/core/popper.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/core/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/plugins/perfect-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/plugins/smooth-scrollbar.min.js') }}\"></script>
    <script src=\"{{ asset('back-office/js/plugins/chartjs.min.js') }}\"></script>
    <script>
        var ctx1 = document.getElementById(\"chart-line\").getContext(\"2d\");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
        new Chart(ctx1, {
            type: \"line\",
            data: {
                labels: [\"Apr\", \"May\", \"Jun\", \"Jul\", \"Aug\", \"Sep\", \"Oct\", \"Nov\", \"Dec\"],
                datasets: [{
                    label: \"Mobile apps\",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: \"#5e72e4\",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
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
                            },
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
                            },
                        }
                    },
                },
            },
        });
    </script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src=\"https://buttons.github.io/buttons.js\"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src=\"{{ asset('back-office/js/argon-dashboard.min.js') }}?v=2.0.4\"></script>
{% endblock %}
</body>

</html>", "base-back.html.twig", "C:\\Users\\touti\\Documents\\PidevWeb\\templates\\base-back.html.twig");
    }
}
