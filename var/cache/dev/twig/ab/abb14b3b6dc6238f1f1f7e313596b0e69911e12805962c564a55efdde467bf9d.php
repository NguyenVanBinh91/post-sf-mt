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

/* books/author.html.twig */
class __TwigTemplate_80c9b439cdf47ccc5967d7f921baac2ad5e2db32fbc97e584609bc53239bbcf8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/author.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "books/author.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "books/author.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "List Books";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "     <nav class=\"navbar navbar-expand-lg navbar-light bg-light\"  style=\"background-color: #9A616D;\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"#\">List Books</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              Dropdown
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Content</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class=\"vh-100\">
    <div class=\"container py-5 h-100\">
    <h2>List Books</h2>
    <div class=\"row\">
    <div class=\"d-flex\">
      <form class=\"d-flex w-50\" id=\"search_form\">
        <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"searchbook\" id=\"searchbook\">
        <button id=\"btn-search\" class=\"btn btn-outline-success\" type=\"button\">Search</button>
      </form>
      <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.create");
        echo "\" class=\"btn btn-outline-primary float-end\">Create New Book</a>
    </div>
        
    </div><br>
   
    <div class=\"row\">
      <table class=\"table table-bordered table-striped center\">
        <thead>
          <tr>
            <th scope=\"col\" style=\"text-align: center;\">#</th>
            <th scope=\"col\">Title</th>
            <th scope=\"col\">Descretion</th>
            <th scope=\"col\">Image</th>
            <th scope=\"col\">Content</th>
            <th scope=\"col\">Keywords</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">Category</th>
            <th scope=\"col\">Status</th>
            <th scope=\"col\" style=\"text-align: center;\">Action</th>
          </tr>
        </thead>
        <tbody id=\"table-list-data\">
        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 68
            echo "          <tr>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.detail", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></td>
            <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "descretion", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
            <td><image src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/brochures/" . twig_get_attribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" style=\"width: 50px;height: 50px;\"/></td>
            <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "content", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
            <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "keywords", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
            <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "tags", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
            <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "category", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
            <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "status", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Edit</a> 
                <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("books.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a> 
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </tbody>
      </table>
    </div>
    </div>
  </section>
  <script>
    \$(document).ready(function(){
      \$(\"#btn-search\").click(function(e) {
        e.preventDefault();
        var actionurl = e.currentTarget;
        var searchbook = \$('#searchbook').val();       
        \$.ajax({
            url : \"/books/list\",
            type : \"post\",
            dataType:\"text\",
            data : {
              searchbook : searchbook
            },
            success : function (result){
              \$('#table-list-data').html(result);
                //\$('#table-list-data').html(result);
            }
        });
      });
      
    });
  </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "books/author.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 84,  206 => 80,  202 => 79,  197 => 77,  193 => 76,  189 => 75,  185 => 74,  181 => 73,  177 => 72,  173 => 71,  167 => 70,  163 => 69,  160 => 68,  156 => 67,  131 => 45,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}List Books{% endblock %}
{% block body %}
     <nav class=\"navbar navbar-expand-lg navbar-light bg-light\"  style=\"background-color: #9A616D;\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"#\">List Books</a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"#\">Home</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">Link</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              Dropdown
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
              <li><a class=\"dropdown-item\" href=\"#\">Action</a></li>
              <li><a class=\"dropdown-item\" href=\"#\">Another action</a></li>
              <li><hr class=\"dropdown-divider\"></li>
              <li><a class=\"dropdown-item\" href=\"#\">Something else here</a></li>
            </ul>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link disabled\" href=\"#\" tabindex=\"-1\" aria-disabled=\"true\">Content</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section class=\"vh-100\">
    <div class=\"container py-5 h-100\">
    <h2>List Books</h2>
    <div class=\"row\">
    <div class=\"d-flex\">
      <form class=\"d-flex w-50\" id=\"search_form\">
        <input class=\"form-control\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\" name=\"searchbook\" id=\"searchbook\">
        <button id=\"btn-search\" class=\"btn btn-outline-success\" type=\"button\">Search</button>
      </form>
      <a href=\"{{ path('books.create') }}\" class=\"btn btn-outline-primary float-end\">Create New Book</a>
    </div>
        
    </div><br>
   
    <div class=\"row\">
      <table class=\"table table-bordered table-striped center\">
        <thead>
          <tr>
            <th scope=\"col\" style=\"text-align: center;\">#</th>
            <th scope=\"col\">Title</th>
            <th scope=\"col\">Descretion</th>
            <th scope=\"col\">Image</th>
            <th scope=\"col\">Content</th>
            <th scope=\"col\">Keywords</th>
            <th scope=\"col\">Tags</th>
            <th scope=\"col\">Category</th>
            <th scope=\"col\">Status</th>
            <th scope=\"col\" style=\"text-align: center;\">Action</th>
          </tr>
        </thead>
        <tbody id=\"table-list-data\">
        {% for book in books %}
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
        {% endfor %}
        </tbody>
      </table>
    </div>
    </div>
  </section>
  <script>
    \$(document).ready(function(){
      \$(\"#btn-search\").click(function(e) {
        e.preventDefault();
        var actionurl = e.currentTarget;
        var searchbook = \$('#searchbook').val();       
        \$.ajax({
            url : \"/books/list\",
            type : \"post\",
            dataType:\"text\",
            data : {
              searchbook : searchbook
            },
            success : function (result){
              \$('#table-list-data').html(result);
                //\$('#table-list-data').html(result);
            }
        });
      });
      
    });
  </script>
{% endblock %}", "books/author.html.twig", "/Users/admin/code/demosymfony/templates/books/author.html.twig");
    }
}
