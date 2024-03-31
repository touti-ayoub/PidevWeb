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

/* security/login.html.twig */
class __TwigTemplate_7ed69959106226ef4e0a706ab541f7dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Log in!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <main class=\"main-content mt-0\">
        <section>
            <div class=\"page-header min-vh-100\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto\">
                            <div >
                                <div class=\"card-header pb-0 text-start\">
                                    <h4 class=\"font-weight-bolder\">Sign In</h4>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                    <br>
                                </div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        ";
        // line 24
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageKey", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })()), "messageData", [], "any", false, false, false, 25), "security"), "html", null, true);
            echo "</div>
                                        ";
        }
        // line 27
        echo "                                        <div class=\"mb-3\">
                                            <input type=\"email\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" class=\"form-control form-control-lg\" placeholder=\"Email\" aria-label=\"Email\" autocomplete=\"email\" required autofocus>
                                        </div>
                                        <div class=\"mb-3\">
                                            <input type=\"password\" name=\"password\" class=\"form-control form-control-lg\" placeholder=\"Password\" aria-label=\"Password\" autocomplete=\"current-password\" required>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\">
                                            <label class=\"form-check-label\" for=\"_remember_me\">Remember me</label>
                                        </div>
                                        <div class=\"text-center\">
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                            <button class=\"btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0\" type=\"submit\">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                    <p class=\"mb-4 text-sm mx-auto\">
                                        Don't have an account?
                                        <a href=\"javascript:;\" class=\"text-primary text-gradient font-weight-bold\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column\">
                            <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden\" style=\"background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;\">
                                <span class=\"mask bg-gradient-primary opacity-6\"></span>
                                <h4 class=\"mt-5 text-white font-weight-bolder position-relative\">\"Commitment is the new currency\"</h4>
                                <p class=\"text-white position-relative\">The more seamless the performance appears, the greater the dedication and effort invested behind the scenes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 67
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "security/login.html.twig";
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
        return array (  200 => 67,  190 => 66,  153 => 38,  140 => 28,  137 => 27,  131 => 25,  129 => 24,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block stylesheets %}
    {{ parent() }}
{% endblock %}

{% block body %}
    <main class=\"main-content mt-0\">
        <section>
            <div class=\"page-header min-vh-100\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto\">
                            <div >
                                <div class=\"card-header pb-0 text-start\">
                                    <h4 class=\"font-weight-bolder\">Sign In</h4>
                                    <p class=\"mb-0\">Enter your email and password to sign in</p>
                                    <br>
                                </div>
                                <div class=\"card-body\">
                                    <form method=\"post\">
                                        {% if error %}
                                            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                        {% endif %}
                                        <div class=\"mb-3\">
                                            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" class=\"form-control form-control-lg\" placeholder=\"Email\" aria-label=\"Email\" autocomplete=\"email\" required autofocus>
                                        </div>
                                        <div class=\"mb-3\">
                                            <input type=\"password\" name=\"password\" class=\"form-control form-control-lg\" placeholder=\"Password\" aria-label=\"Password\" autocomplete=\"current-password\" required>
                                        </div>
                                        <div class=\"form-check form-switch\">
                                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\">
                                            <label class=\"form-check-label\" for=\"_remember_me\">Remember me</label>
                                        </div>
                                        <div class=\"text-center\">
                                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                            <button class=\"btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0\" type=\"submit\">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <br>
                                <div class=\"card-footer text-center pt-0 px-lg-2 px-1\">
                                    <p class=\"mb-4 text-sm mx-auto\">
                                        Don't have an account?
                                        <a href=\"javascript:;\" class=\"text-primary text-gradient font-weight-bold\">Sign up</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column\">
                            <div class=\"position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden\" style=\"background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;\">
                                <span class=\"mask bg-gradient-primary opacity-6\"></span>
                                <h4 class=\"mt-5 text-white font-weight-bolder position-relative\">\"Commitment is the new currency\"</h4>
                                <p class=\"text-white position-relative\">The more seamless the performance appears, the greater the dedication and effort invested behind the scenes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
{% endblock %}
", "security/login.html.twig", "C:\\Users\\touti\\Documents\\PidevWeb\\templates\\security\\login.html.twig");
    }
}
