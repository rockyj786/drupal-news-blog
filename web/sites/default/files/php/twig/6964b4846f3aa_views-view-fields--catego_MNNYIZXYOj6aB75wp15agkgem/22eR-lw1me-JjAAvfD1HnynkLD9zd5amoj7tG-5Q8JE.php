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

/* themes/custom/gold/templates/views-view-fields--categories--categories.html.twig */
class __TwigTemplate_24d7509c1b3c64afbd6feb815309d074 extends Template
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
<div class=\"position-relative overflow-hidden mb-3\" style=\"height: 80px;\">
  ";
        // line 35
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), "html", null, true);
        yield "

  ";
        // line 38
        yield "  ";
        $context["term_url"] = Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "view_taxonomy_term", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38)));
        // line 39
        yield "  <a href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["term_url"] ?? null), "html", null, true);
        yield "\"
     class=\"overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none\">
    ";
        // line 41
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "name", [], "any", false, false, true, 41), "content", [], "any", false, false, true, 41), "html", null, true);
        yield "
  </a>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/views-view-fields--categories--categories.html.twig";
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
        return array (  63 => 41,  57 => 39,  54 => 38,  48 => 35,  44 => 32,);
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

<div class=\"position-relative overflow-hidden mb-3\" style=\"height: 80px;\">
  {# Render category image field #}
  {{ fields.field_image.content }}

  {# Render category name with overlay link #}
  {% set term_url = fields.view_taxonomy_term.content|striptags|trim %}
  <a href=\"{{ term_url }}\"
     class=\"overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none\">
    {{ fields.name.content }}
  </a>
</div>
", "themes/custom/gold/templates/views-view-fields--categories--categories.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/views-view-fields--categories--categories.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 38];
        static $filters = ["escape" => 35, "trim" => 38, "striptags" => 38];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'trim', 'striptags'],
                [],
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
