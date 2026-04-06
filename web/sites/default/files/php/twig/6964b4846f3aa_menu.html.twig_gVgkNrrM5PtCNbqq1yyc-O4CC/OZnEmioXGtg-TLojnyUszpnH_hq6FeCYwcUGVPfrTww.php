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

/* themes/custom/gold/templates/menu.html.twig */
class __TwigTemplate_adf04763e453cd7470f3c6c42072447e extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 27, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        // line 50
        yield " ";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "  ";
            if (($context["items"] ?? null)) {
                // line 32
                yield "  <div class=\"navbar-nav mr-auto py-0\">
    ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 34
                    yield "        ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 34)) {
                        // line 35
                        yield "          <div class=\"nav-item dropdown\">
            <a href=\"";
                        // line 36
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), "html", null, true);
                        yield "\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), "html", null, true);
                        yield "</a>
            <div class=\"dropdown-menu rounded-0 m-0\">
            ";
                        // line 38
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 38));
                        foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                            // line 39
                            yield "              ";
                            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "title", [], "any", false, false, true, 39), CoreExtension::getAttribute($this->env, $this->source, $context["subitem"], "url", [], "any", false, false, true, 39), ["class" => ["dropdown-item"]]), "html", null, true);
                            yield "
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['subitem'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 41
                        yield "            </div>
          </div>
          ";
                    } else {
                        // line 44
                        yield "            ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 44), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 44), ["class" => ["nav-item", "nav-link"]]), "html", null, true);
                        yield "
        ";
                    }
                    // line 46
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                yield "  </div>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/menu.html.twig";
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
        return array (  130 => 47,  124 => 46,  118 => 44,  113 => 41,  104 => 39,  100 => 38,  93 => 36,  90 => 35,  87 => 34,  83 => 33,  80 => 32,  77 => 31,  74 => 30,  60 => 29,  54 => 50,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link URL, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *   - is_expanded: TRUE if the link has visible children within the current
 *     menu tree.
 *   - is_collapsed: TRUE if the link has children within the current menu tree
 *     that are not currently visible.
 *   - in_active_trail: TRUE if the link is in the active trail.
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see https://twig.symfony.com/doc/3.x/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
  <div class=\"navbar-nav mr-auto py-0\">
    {% for item in items %}
        {% if item.below %}
          <div class=\"nav-item dropdown\">
            <a href=\"{{ item.url }}\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\">{{ item.title }}</a>
            <div class=\"dropdown-menu rounded-0 m-0\">
            {% for subitem in item.below %}
              {{ link(subitem.title, subitem.url, { 'class':['dropdown-item'] }) }}
            {% endfor %}
            </div>
          </div>
          {% else %}
            {{ link(item.title, item.url, { 'class':['nav-item', 'nav-link'] }) }}
        {% endif %}
    {% endfor %}
  </div>
  {% endif %}
{% endmacro %}
 ", "themes/custom/gold/templates/menu.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 31, "for" => 33];
        static $filters = ["escape" => 36];
        static $functions = ["link" => 39];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for'],
                ['escape'],
                ['link'],
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
