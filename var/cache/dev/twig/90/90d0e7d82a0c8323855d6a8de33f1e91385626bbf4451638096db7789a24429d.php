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

/* books/index.html.twig */
class __TwigTemplate_9d9fab8935f268a99e87c2ef48bc63f030e4fe280a1aaade8eac66c0697f1159 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Login";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section class=\"vh-100\" style=\"background-color: #9A616D;\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col col-xl-10\">
            <div class=\"card\" style=\"border-radius: 1rem;\">
            <div class=\"row g-0\">
                <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp\"
                    alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\" />
                </div>
                <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
                <div class=\"card-body p-4 p-lg-5 text-black\">

                    <form action = \"/books/login\" method = \"POST\">

                        <div class=\"d-flex align-items-center mb-3 pb-1\">
                            <i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
                            <span class=\"h1 fw-bold mb-0\">Logo</span>
                        </div>

                        <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Sign into your account</h5>

                        <div class=\"form-outline mb-4\">
                            <input type=\"email\" id=\"form2Example17\" class=\"form-control form-control-lg\" name=\"email\" />
                            <label class=\"form-label\" for=\"form2Example17\">Email address</label>
                        </div>

                        <div class=\"form-outline mb-4\">
                            <input type=\"password\" id=\"form2Example27\" class=\"form-control form-control-lg\" name=\"password\"/>
                            <label class=\"form-label\" for=\"form2Example27\">Password</label>
                        </div>

                        <div class=\"pt-1 mb-4\">
                            <button class=\"btn btn-dark btn-lg btn-block\" type=\"submit\">Login</button>
                        </div>

                        <a class=\"small text-muted\" href=\"#!\">Forgot password?</a>
                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? <a href=\"#!\"
                            style=\"color: #393f81;\">Register here</a></p>
                        <a href=\"#!\" class=\"small text-muted\">Terms of use.</a>
                        <a href=\"#!\" class=\"small text-muted\">Privacy policy</a>
                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "books/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Login{% endblock %}

{% block body %}
    <section class=\"vh-100\" style=\"background-color: #9A616D;\">
    <div class=\"container py-5 h-100\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
        <div class=\"col col-xl-10\">
            <div class=\"card\" style=\"border-radius: 1rem;\">
            <div class=\"row g-0\">
                <div class=\"col-md-6 col-lg-5 d-none d-md-block\">
                <img src=\"https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp\"
                    alt=\"login form\" class=\"img-fluid\" style=\"border-radius: 1rem 0 0 1rem;\" />
                </div>
                <div class=\"col-md-6 col-lg-7 d-flex align-items-center\">
                <div class=\"card-body p-4 p-lg-5 text-black\">

                    <form action = \"/books/login\" method = \"POST\">

                        <div class=\"d-flex align-items-center mb-3 pb-1\">
                            <i class=\"fas fa-cubes fa-2x me-3\" style=\"color: #ff6219;\"></i>
                            <span class=\"h1 fw-bold mb-0\">Logo</span>
                        </div>

                        <h5 class=\"fw-normal mb-3 pb-3\" style=\"letter-spacing: 1px;\">Sign into your account</h5>

                        <div class=\"form-outline mb-4\">
                            <input type=\"email\" id=\"form2Example17\" class=\"form-control form-control-lg\" name=\"email\" />
                            <label class=\"form-label\" for=\"form2Example17\">Email address</label>
                        </div>

                        <div class=\"form-outline mb-4\">
                            <input type=\"password\" id=\"form2Example27\" class=\"form-control form-control-lg\" name=\"password\"/>
                            <label class=\"form-label\" for=\"form2Example27\">Password</label>
                        </div>

                        <div class=\"pt-1 mb-4\">
                            <button class=\"btn btn-dark btn-lg btn-block\" type=\"submit\">Login</button>
                        </div>

                        <a class=\"small text-muted\" href=\"#!\">Forgot password?</a>
                        <p class=\"mb-5 pb-lg-2\" style=\"color: #393f81;\">Don't have an account? <a href=\"#!\"
                            style=\"color: #393f81;\">Register here</a></p>
                        <a href=\"#!\" class=\"small text-muted\">Terms of use.</a>
                        <a href=\"#!\" class=\"small text-muted\">Privacy policy</a>
                    </form>

                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>
{% endblock %}
", "books/index.html.twig", "/Users/admin/code/demosymfony/templates/books/index.html.twig");
    }
}
