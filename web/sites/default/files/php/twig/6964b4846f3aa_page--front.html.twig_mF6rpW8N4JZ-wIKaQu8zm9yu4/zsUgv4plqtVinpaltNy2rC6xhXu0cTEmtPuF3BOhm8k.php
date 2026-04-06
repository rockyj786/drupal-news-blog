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

/* themes/custom/gold/templates/page--front.html.twig */
class __TwigTemplate_8c670c4761c6677a4bf90a78b1489960 extends Template
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
        yield " ";
        // line 15
        yield "


<!-- Topbar Start -->
    <div class=\"container-fluid\">
        <div class=\"row align-items-center bg-light px-lg-5\">
            <div class=\"col-12 col-md-8\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                    <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3 owl-loaded owl-drag\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                         
                         ";
        // line 27
        yield "                        ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("first_slider", "trending_top_bar"), "html", null, true);
        yield "
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 text-right d-none d-md-block\">
                ";
        // line 32
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "l, F d, Y"), "html", null, true);
        yield "
            </div> 
        </div>
        <div class=\"row align-items-center py-2 px-lg-5\">
            <div class=\"col-lg-4\">
                ";
        // line 37
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 37), "html", null, true);
        yield "
            </div>
            <div class=\"col-lg-8 text-center text-lg-right\">
                ";
        // line 40
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_image", [], "any", false, false, true, 40), "html", null, true);
        yield "
            </div>
        </div>
    </div>
<!-- Topbar End -->
<!-- Navbar Start -->
    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
                <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\" >";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "navbar", [], "any", false, false, true, 54), "html", null, true);
        yield "
                
            </div>
        </nav>
    </div>
<!-- Navbar End -->
<!-- Top News Slider Start -->
     
    ";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "top_news_slider", [], "any", false, false, true, 62), "html", null, true);
        yield "    
               
<!-- Top News Slider Start -->

";
        // line 67
        yield "<!-- Main News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-8\">";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 71), "html", null, true);
        yield "</div>
               <div class=\"col-lg-4\">";
        // line 72
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "categories", [], "any", false, false, true, 72), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>
<!-- Main News Slider End -->

<!-- Main Featured Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">";
        // line 80
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured", [], "any", false, false, true, 80), "html", null, true);
        yield "</div>
    </div>
<!-- Main Featured End -->


<!-- Main Business & technology Start -->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "business", [], "any", false, false, true, 90), "html", null, true);
        yield "
            </div>
            <div class=\"col-lg-6 py-3\">
               ";
        // line 93
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "technology", [], "any", false, false, true, 93), "html", null, true);
        yield "
            </div>
        </div>
    </div>
</div>
<!-- Main Business & technology End -->

<!-- Main Entertainment & Sports Start -->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                ";
        // line 105
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "entertainment", [], "any", false, false, true, 105), "html", null, true);
        yield "
            </div>
            <div class=\"col-lg-6 py-3\">
                ";
        // line 108
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sports", [], "any", false, false, true, 108), "html", null, true);
        yield "
            </div>
        </div>
    </div>
</div>
<!-- Main Entertainment & Sports End -->


<!-- Main Popular & social media Start -->
   <!-- News With Sidebar Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">  
               ";
        // line 122
        yield "                <main class=\"col-lg-8 col-md-8\">
                    ";
        // line 124
        yield "                    ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "popular", [], "any", false, false, true, 124), "html", null, true);
        yield "  

                    ";
        // line 127
        yield "                    ";
        // line 128
        yield "                </main>

                ";
        // line 131
        yield "                <aside class=\"col-lg-4 col-md-4\">
                    ";
        // line 132
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 132)) {
            // line 133
            yield "                    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 133), "html", null, true);
            yield "
                    ";
        }
        // line 135
        yield "                </aside>
               
                
            
            </div>
        </div>
    </div>
<!-- Main opular & social media End -->



<!-- Footer Start -->
<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 149
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 149), "html", null, true);
        yield "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 150
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 150), "html", null, true);
        yield "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 151
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 151), "html", null, true);
        yield "</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">";
        // line 152
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 152), "html", null, true);
        yield "</div>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/page--front.html.twig";
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
        return array (  248 => 152,  244 => 151,  240 => 150,  236 => 149,  220 => 135,  214 => 133,  212 => 132,  209 => 131,  205 => 128,  203 => 127,  197 => 124,  194 => 122,  178 => 108,  172 => 105,  157 => 93,  151 => 90,  138 => 80,  127 => 72,  123 => 71,  117 => 67,  110 => 62,  99 => 54,  82 => 40,  76 => 37,  68 => 32,  59 => 27,  46 => 15,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source(" {#
/**
 * @file
 * Theme override for a single local action link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - link: A rendered link element.
 *
 * @see template_preprocess_menu_local_action()
 *
 * @ingroup themeable
 */
#}



<!-- Topbar Start -->
    <div class=\"container-fluid\">
        <div class=\"row align-items-center bg-light px-lg-5\">
            <div class=\"col-12 col-md-8\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"bg-primary text-white text-center py-2\" style=\"width: 100px;\">Tranding</div>
                    <div class=\"owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3 owl-loaded owl-drag\" style=\"width: calc(100% - 100px); padding-left: 90px;\">
                         
                         {# ✅ VIEW OUTPUT COMES HERE #}
                        {{ drupal_view('first_slider', 'trending_top_bar') }}
                    </div>
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
                {{ page.top_image}}
            </div>
        </div>
    </div>
<!-- Topbar End -->
<!-- Navbar Start -->
    <div class=\"container-fluid p-0 mb-3\">
        <nav class=\"navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5\">
            <a href=\"\" class=\"navbar-brand d-block d-lg-none\">
                <h1 class=\"m-0 display-5 text-uppercase\"><span class=\"text-primary\">News</span>Room</h1>
            </a>
            <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-between px-0 px-lg-3\" id=\"navbarCollapse\" >{{ page.navbar}}
                
            </div>
        </nav>
    </div>
<!-- Navbar End -->
<!-- Top News Slider Start -->
     
    {{ page.top_news_slider }}    
               
<!-- Top News Slider Start -->

{# /.layout-container #}
<!-- Main News Slider Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">
               <div class=\"col-lg-8\">{{ page.main_slider }}</div>
               <div class=\"col-lg-4\">{{ page.categories }}</div>
            </div>
        </div>
    </div>
<!-- Main News Slider End -->

<!-- Main Featured Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">{{ page.featured }}</div>
    </div>
<!-- Main Featured End -->


<!-- Main Business & technology Start -->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                {{ page.business }}
            </div>
            <div class=\"col-lg-6 py-3\">
               {{ page.technology }}
            </div>
        </div>
    </div>
</div>
<!-- Main Business & technology End -->

<!-- Main Entertainment & Sports Start -->
<div class=\"container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6 py-3\">
                {{ page.entertainment }}
            </div>
            <div class=\"col-lg-6 py-3\">
                {{ page.sports }}
            </div>
        </div>
    </div>
</div>
<!-- Main Entertainment & Sports End -->


<!-- Main Popular & social media Start -->
   <!-- News With Sidebar Start -->
    <div class=\"container-fluid py-3\">
        <div class=\"container\">
            <div class=\"row\">  
               {# LEFT: Popular view (8 cols) #}
                <main class=\"col-lg-8 col-md-8\">
                    {# Option A: render a Views block placed via Block Layout #}
                    {{ page.popular }}  

                    {# Option B: or render direct via drupal_view() #}
                    {# {{ drupal_view('first_slider','popular') }} #}
                </main>

                {# RIGHT: Newsletter / Sidebar (4 cols) #}
                <aside class=\"col-lg-4 col-md-4\">
                    {% if page.sidebar_first %}
                    {{ page.sidebar_first }}
                    {% endif %}
                </aside>
               
                
            
            </div>
        </div>
    </div>
<!-- Main opular & social media End -->



<!-- Footer Start -->
<div class=\"container-fluid bg-light pt-5 px-sm-3 px-md-5\">
    <div class=\"row\">
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_first }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_second }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_third }}</div>
        <div class=\"col-lg-3 col-md-6 mb-5\">{{ page.footer_fourth }}</div>
    </div>
</div>", "themes/custom/gold/templates/page--front.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 132];
        static $filters = ["escape" => 27, "date" => 32];
        static $functions = ["drupal_view" => 27];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
