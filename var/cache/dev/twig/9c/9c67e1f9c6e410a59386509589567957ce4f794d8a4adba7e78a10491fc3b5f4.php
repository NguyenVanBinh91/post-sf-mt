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

/* books/table-list-data.html.twig */
class __TwigTemplate_7b060f811d034b327c5ae5c87f8c3ee6cbda4b74652030003f9e2cd663a444aa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/table-list-data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/table-list-data.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 2
            echo "  <tr>
    <td>";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 3), "html", null, true);
            echo "</td>
    <td><a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 4), "html", null, true);
            echo "</a></td>
    <td>";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "descretion", [], "any", false, false, false, 5), "html", null, true);
            echo "</td>
    <td><image src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/brochures/" . twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 6))), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px;\"/></td>
    <td>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "content", [], "any", false, false, false, 7), "html", null, true);
            echo "</td>
    <td>";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "keywords", [], "any", false, false, false, 8), "html", null, true);
            echo "</td>
    <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "tags", [], "any", false, false, false, 9), "html", null, true);
            echo "</td>
    <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 10), "html", null, true);
            echo "</td>
    <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "status", [], "any", false, false, false, 11), "html", null, true);
            echo "</td>
    <td>
        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Edit</a> 
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 14)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a> 
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "books/table-list-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 14,  89 => 13,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  68 => 7,  64 => 6,  60 => 5,  54 => 4,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for book in books %}
  <tr>
    <td>{{book.id}}</td>
    <td><a href=\"{{ path('books.detail',{id:book.id}) }}\">{{book.title}}</a></td>
    <td>{{book.descretion}}</td>
    <td><image src=\"{{ asset('images/brochures/' ~ book.image) }}\" style=\"width: 50px;height: 50px;\"/></td>
    <td>{{book.content}}</td>
    <td>{{book.keywords}}</td>
    <td>{{book.tags}}</td>
    <td>{{book.category}}</td>
    <td>{{book.status}}</td>
    <td>
        <a href=\"{{ path('books.edit',{id:book.id}) }}\" class=\"btn btn-info\">Edit</a> 
        <a href=\"{{ path('books.delete',{id:book.id}) }}\" class=\"btn btn-danger\">Delete</a> 
    </td>
  </tr>
{% endfor %}", "books/table-list-data.html.twig", "/Users/admin/code/demosymfony/templates/books/table-list-data.html.twig");
    }
}
