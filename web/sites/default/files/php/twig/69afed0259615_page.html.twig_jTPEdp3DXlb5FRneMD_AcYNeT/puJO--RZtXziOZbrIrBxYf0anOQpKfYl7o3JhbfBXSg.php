<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gold/templates/layout/page.html.twig */
class __TwigTemplate_d94a58332e85aa630b94313d5d8657a9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_attributes"] ?? null), "html", null, true);
        yield ">
<head>
  <head-placeholder token=\"";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  <title>";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
  <css-placeholder token=\"";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
  <js-placeholder token=\"";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
</head>

<body";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
        yield ">

  ";
        // line 13
        yield "  <div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel\" >
                    
                    
                    ";
        // line 22
        yield "                    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("first_slider", "trending_top_bar"), "html", null, true);
        yield "                </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
             ";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l, F d, Y"), "html", null, true);
        yield "
        </div>
    </div>

    <div class=\"row align-items-center py-2 px-lg-5\">
      <div class=\"col-lg-4\"> 
        ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 32), "html", null, true);
        yield "
      </div>
      <div class=\"col-lg-8 text-center text-lg-right\">
        ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_image", [], "any", false, false, true, 35), "html", null, true);
        yield "
      </div>
    </div>
  </div>

  ";
        // line 41
        yield "  <div class=\"container-fluid p-0 mb-3\">
    <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        ";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 47), "html", null, true);
        yield "
      </div>
    </nav>
  </div>

  ";
        // line 53
        yield "  <main role=\"main\">
    ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 54), "html", null, true);
        yield "
  </main>

  ";
        // line 58
        yield "  <div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 60
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 60), "html", null, true);
        yield "</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 61
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 61), "html", null, true);
        yield "</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 62), "html", null, true);
        yield "</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 63), "html", null, true);
        yield "</div>
    </div>
  </div>

  <js-bottom-placeholder token=\"";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["placeholder_token"] ?? null), "html", null, true);
        yield "\">
</body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["html_attributes", "placeholder_token", "head_title", "attributes", "page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  164 => 67,  157 => 63,  153 => 62,  149 => 61,  145 => 60,  141 => 58,  135 => 54,  132 => 53,  124 => 47,  116 => 41,  108 => 35,  102 => 32,  93 => 26,  85 => 22,  75 => 13,  70 => 10,  64 => 7,  60 => 6,  56 => 5,  52 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html{{ html_attributes }}>
<head>
  <head-placeholder token=\"{{ placeholder_token }}\">
  <title>{{ head_title|safe_join(' | ') }}</title>
  <css-placeholder token=\"{{ placeholder_token }}\">
  <js-placeholder token=\"{{ placeholder_token }}\">
</head>

<body{{ attributes }}>

  {# ================= TOPBAR ================= #}
  <div class=\"container-fluid\">
    <div class=\"row align-items-center bg-light px-lg-5\">
        <div class=\"col-12 col-md-8\">
            <div class=\"d-flex justify-content-between\">
                <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                <div class=\"owl-carousel owl-carousel-1 tranding-carousel\" >
                    
                    
                    {# ✅ VIEW OUTPUT COMES HERE #}
                    {{ drupal_view('first_slider', 'trending_top_bar') }}                </div>
            </div>
        </div>
        <div class=\"col-md-4 text-right d-none d-md-block\">
             {{ \"now\"|date(\"l, F d, Y\") }}
        </div>
    </div>

    <div class=\"row align-items-center py-2 px-lg-5\">
      <div class=\"col-lg-4\"> 
        {{ page.logo }}
      </div>
      <div class=\"col-lg-8 text-center text-lg-right\">
        {{ page.top_image }}
      </div>
    </div>
  </div>

  {# ================= NAVBAR ================= #}
  <div class=\"container-fluid p-0 mb-3\">
    <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        {{ page.navbar }}
      </div>
    </nav>
  </div>

  {# ================= PAGE CONTENT ================= #}
  <main role=\"main\">
    {{ page.content }}
  </main>

  {# ================= FOOTER ================= #}
  <div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
      <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_first }}</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_second }}</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_third }}</div>
      <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_fourth }}</div>
    </div>
  </div>

  <js-bottom-placeholder token=\"{{ placeholder_token }}\">
</body>
</html>
", "themes/custom/gold/templates/layout/page.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 2, "safe_join" => 5, "date" => 26];
        static $functions = ["drupal_view" => 22];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join', 'date'],
                ['drupal_view'],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
