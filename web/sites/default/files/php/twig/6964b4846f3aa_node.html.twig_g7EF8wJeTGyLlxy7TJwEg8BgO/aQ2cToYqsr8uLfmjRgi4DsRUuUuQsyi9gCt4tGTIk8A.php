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

/* themes/custom/gold/templates/node.html.twig */
class __TwigTemplate_937256afa0606b9700bc2f93406cecb4 extends Template
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
        yield "<div class=\"container-fluid py-3\">
  <div class=\"container\">
    <div class=\"row\">

      ";
        // line 5
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), ["article", "blog"])) {
            // line 6
            yield "        <div class=\"breadcrumb-wrapper py-2 mb-3\">
           ";
            // line 7
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("breadcrumb"), "html", null, true);
            yield "
        </div>
        ";
        }
        // line 10
        yield "     </div>
     <div class=\"row\">
      <!-- ================= LEFT CONTENT (Main Article) ================= -->
      <div class=\"col-lg-8\">
        <article class=\"single-article\">
         
          ";
        // line 17
        yield "          ";
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_blog_image", [], "any", false, false, true, 17))) {
            // line 18
            yield "            <div class=\"position-relative mb-3 \">
              
              ";
            // line 20
            $context["image"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_blog_image", [], "any", false, false, true, 20), "entity", [], "any", false, false, true, 20), "fileuri", [], "any", false, false, true, 20);
            // line 21
            if (($context["image"] ?? null)) {
                // line 22
                yield "  <img src=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter(($context["image"] ?? null), "large"), "html", null, true);
                yield "\" alt=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22), "html", null, true);
                yield "\" class=\"img-fluid w-100\">
";
            }
            // line 24
            yield "            </div>
          ";
        }
        // line 26
        yield "
          ";
        // line 28
        yield "          <div class=\"article-meta d-flex align-items-center mb-3 text-muted\">
            <span class=\"text-danger fw-bold\">
              ";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_categories", [], "any", false, false, true, 30), "html", null, true);
        yield "
            </span>
            <span class=\"mx-2\">/</span>
            <span>
              ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "getCreatedTime", [], "method", false, false, true, 34), "F d, Y"), "html", null, true);
        yield "
            </span>
          </div>

          ";
        // line 39
        yield "          <h1 class=\"mb-3 font-weight-bold\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h1>

          ";
        // line 42
        yield "          <div class=\"article-body mb-4\">
            ";
        // line 43
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 43), "html", null, true);
        yield "
          </div>
          
          ";
        // line 46
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_taxonomy_keywords", [], "any", false, false, true, 46))) {
            // line 47
            yield "          <div class=\"d-flex flex-wrap m-n1\">
             ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_taxonomy_keywords", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 49
                yield "            <a class=\"btn btn-sm btn-outline-secondary m-1\"
              href=\"";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.taxonomy_term.canonical", ["taxonomy_term" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 50), "id", [], "method", false, false, true, 50)]), "html", null, true);
                yield "\"
              title=\"";
                // line 51
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 51), "label", [], "any", false, false, true, 51), "html", null, true);
                yield "\">
              ";
                // line 52
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 52), "label", [], "any", false, false, true, 52), "html", null, true);
                yield "
            </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "          </div>
          ";
        }
        // line 57
        yield "          
                  
          ";
        // line 59
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "bundle", [], "any", false, false, true, 59) == "blog")) {
            // line 60
            yield "          <div class=\"after-content mt-4\">
             ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalRegion("after_content"), "html", null, true);
            yield "
          </div> 
          ";
        }
        // line 64
        yield "
     
        </article>
      </div>

      <!-- ================= RIGHT SIDEBAR ================= -->
      <div class=\"col-lg-4\">

        <!-- Newsletter Widget -->
        <div class=\"bg-light py-4 px-3 mb-4 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Newsletter</h4>
          <p class=\"mb-3\">Subscribe to get the latest news directly in your inbox.</p>
          <form>
            <input type=\"email\" class=\"form-control mb-2\" placeholder=\"Enter your email\" required>
            <button class=\"btn btn-danger w-100\">Subscribe</button>
          </form>
        </div>

        <!-- Follow Us Widget -->
        <div class=\"bg-light py-4 px-3 mb-4 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Follow Us</h4>
          <div class=\"d-flex justify-content-center\">
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-youtube\"></i></a>
          </div>
        </div>



        <!-- Advertisement (optional) -->
        <div class=\"bg-light py-4 px-3 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Advertisement</h4>
          <img src=\"/themes/custom/gold/images/ad-placeholder.jpg\" alt=\"Ad\" class=\"img-fluid rounded\">
        </div>

      </div>

    </div>
  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "content", "label"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/node.html.twig";
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
        return array (  176 => 64,  170 => 61,  167 => 60,  165 => 59,  161 => 57,  157 => 55,  148 => 52,  144 => 51,  140 => 50,  137 => 49,  133 => 48,  130 => 47,  128 => 46,  122 => 43,  119 => 42,  113 => 39,  106 => 34,  99 => 30,  95 => 28,  92 => 26,  88 => 24,  80 => 22,  78 => 21,  76 => 20,  72 => 18,  69 => 17,  61 => 10,  55 => 7,  52 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container-fluid py-3\">
  <div class=\"container\">
    <div class=\"row\">

      {% if node.bundle in ['article', 'blog'] %}
        <div class=\"breadcrumb-wrapper py-2 mb-3\">
           {{ drupal_region('breadcrumb') }}
        </div>
        {% endif %}
     </div>
     <div class=\"row\">
      <!-- ================= LEFT CONTENT (Main Article) ================= -->
      <div class=\"col-lg-8\">
        <article class=\"single-article\">
         
          {# --- Featured Image --- #}
          {% if content.field_blog_image is not empty %}
            <div class=\"position-relative mb-3 \">
              
              {% set image = node.field_blog_image.entity.fileuri %}
{% if image %}
  <img src=\"{{ image|image_style('large') }}\" alt=\"{{ node.title.value }}\" class=\"img-fluid w-100\">
{% endif %}
            </div>
          {% endif %}

          {# --- Article Meta (Category + Date) --- #}
          <div class=\"article-meta d-flex align-items-center mb-3 text-muted\">
            <span class=\"text-danger fw-bold\">
              {{ content.field_categories }}
            </span>
            <span class=\"mx-2\">/</span>
            <span>
              {{ node.getCreatedTime()|date('F d, Y') }}
            </span>
          </div>

          {# --- Article Title --- #}
          <h1 class=\"mb-3 font-weight-bold\">{{ label }}</h1>

          {# --- Body Content --- #}
          <div class=\"article-body mb-4\">
            {{ content.body }}
          </div>
          
          {% if node.field_taxonomy_keywords is not empty %}
          <div class=\"d-flex flex-wrap m-n1\">
             {% for item in node.field_taxonomy_keywords %}
            <a class=\"btn btn-sm btn-outline-secondary m-1\"
              href=\"{{ path('entity.taxonomy_term.canonical', {'taxonomy_term': item.entity.id()}) }}\"
              title=\"{{ item.entity.label }}\">
              {{ item.entity.label }}
            </a>
            {% endfor %}
          </div>
          {% endif %}
          
                  
          {% if node.bundle == 'blog' %}
          <div class=\"after-content mt-4\">
             {{ drupal_region('after_content') }}
          </div> 
          {% endif %}

     
        </article>
      </div>

      <!-- ================= RIGHT SIDEBAR ================= -->
      <div class=\"col-lg-4\">

        <!-- Newsletter Widget -->
        <div class=\"bg-light py-4 px-3 mb-4 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Newsletter</h4>
          <p class=\"mb-3\">Subscribe to get the latest news directly in your inbox.</p>
          <form>
            <input type=\"email\" class=\"form-control mb-2\" placeholder=\"Enter your email\" required>
            <button class=\"btn btn-danger w-100\">Subscribe</button>
          </form>
        </div>

        <!-- Follow Us Widget -->
        <div class=\"bg-light py-4 px-3 mb-4 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Follow Us</h4>
          <div class=\"d-flex justify-content-center\">
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-twitter\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-instagram\"></i></a>
            <a class=\"btn btn-outline-secondary btn-sm mx-1\" href=\"#\"><i class=\"fab fa-youtube\"></i></a>
          </div>
        </div>



        <!-- Advertisement (optional) -->
        <div class=\"bg-light py-4 px-3 text-center rounded\">
          <h4 class=\"font-weight-bold mb-3\">Advertisement</h4>
          <img src=\"/themes/custom/gold/images/ad-placeholder.jpg\" alt=\"Ad\" class=\"img-fluid rounded\">
        </div>

      </div>

    </div>
  </div>
</div>", "themes/custom/gold/templates/node.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 5, "set" => 20, "for" => 48];
        static $filters = ["escape" => 7, "image_style" => 22, "date" => 34];
        static $functions = ["drupal_region" => 7, "path" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'image_style', 'date'],
                ['drupal_region', 'path'],
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
