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

/* themes/custom/gold/templates/views-view-fields--first_slider--top_news_slider.html.twig */
class __TwigTemplate_b9e4119e686b3e81d0f2f13b21b4be4a extends Template
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
        // line 32
        yield "
  <div class=\"d-flex\">
      ";
        // line 34
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_blog_image", [], "any", false, false, true, 34), "content", [], "any", false, false, true, 34), "html", null, true);
        yield "
      <div class=\"d-flex align-items-center bg-light px-3\">
          ";
        // line 36
        $context["node_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "_entity", [], "any", false, false, true, 36), "id", [], "method", false, false, true, 36)]);
        // line 37
        yield "          ";
        $context["node_id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "nid", [], "any", false, false, true, 37);
        // line 38
        yield "          ";
        $context["node_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => ($context["node_id"] ?? null)]);
        // line 39
        yield "<a class=\"text-secondary font-weight-semi-bold\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["node_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 39), "content", [], "any", false, false, true, 39), "html", null, true);
        yield "</a>
      </div>
  </div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields", "row"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/views-view-fields--first_slider--top_news_slider.html.twig";
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
        return array (  61 => 39,  58 => 38,  55 => 37,  53 => 36,  48 => 34,  44 => 32,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
/**
 * @file
 * Theme override to display all the fields in a row.
 *
 * Available variables:
 * - view: The view in use.
 * - fields: A list of fields, each one contains:
 *   - content: The output of the field.
 *   - raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - class: The safe class ID to use.
 *   - handler: The Views field handler controlling this field.
 *   - inline: Whether or not the field should be inline.
 *   - wrapper_element: An HTML element for a wrapper.
 *   - wrapper_attributes: List of attributes for wrapper element.
 *   - separator: An optional separator that may appear before a field.
 *   - label: The field's label text.
 *   - label_element: An HTML element for a label wrapper.
 *   - label_attributes: List of attributes for label wrapper.
 *   - label_suffix: Colon after the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 *   - has_label_colon: A boolean indicating whether to display a colon after
 *     the label.
 *   - element_type: An HTML element for the field content.
 *   - element_attributes: List of attributes for HTML element for field content.
 * - row: The raw result from the query, with all data it fetched.
 *
 * @see template_preprocess_views_view_fields()
 */
#}

  <div class=\"d-flex\">
      {{ fields.field_blog_image.content }}
      <div class=\"d-flex align-items-center bg-light px-3\">
          {% set node_url = path('entity.node.canonical', {'node': row._entity.id()}) %}
          {% set node_id = row.nid %}
          {% set node_url = path('entity.node.canonical', {'node': node_id}) %}
<a class=\"text-secondary font-weight-semi-bold\" href=\"{{ node_url }}\">{{ fields.title.content }}</a>
      </div>
  </div>
", "themes/custom/gold/templates/views-view-fields--first_slider--top_news_slider.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/views-view-fields--first_slider--top_news_slider.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 36];
        static $filters = ["escape" => 34];
        static $functions = ["path" => 36];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape'],
                ['path'],
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
