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

/* themes/custom/gold/templates/views-view-fields--first_slider--featured.html.twig */
class __TwigTemplate_f793271a136ad25fea9aaba2de4b99e9 extends Template
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

<div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
    ";
        // line 35
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_blog_image", [], "any", false, false, true, 35), "content", [], "any", false, false, true, 35), "html", null, true);
        yield "
    <div class=\"overlay\">
        <div class=\"mb-1\" style=\"font-size: 13px;\">
            <a class=\"text-white\" href=\"\">";
        // line 38
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_categories", [], "any", false, false, true, 38), "content", [], "any", false, false, true, 38), "html", null, true);
        yield "</a>
            <span class=\"px-1 text-white\">/</span>
            ";
        // line 40
        $context["node_id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "nid", [], "any", false, false, true, 40);
        // line 41
        yield "            ";
        $context["node_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => ($context["node_id"] ?? null)]);
        // line 42
        yield "            <a class=\"text-white\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["node_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "changed", [], "any", false, false, true, 42), "content", [], "any", false, false, true, 42), "html", null, true);
        yield "</a>
        </div>
        <a class=\"h4 m-0 text-white\" href=\"";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["node_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 44), "content", [], "any", false, false, true, 44), "html", null, true);
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
        return "themes/custom/gold/templates/views-view-fields--first_slider--featured.html.twig";
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
        return array (  73 => 44,  65 => 42,  62 => 41,  60 => 40,  55 => 38,  49 => 35,  44 => 32,);
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


<div class=\"position-relative overflow-hidden\" style=\"height: 300px;\">
    {{ fields.field_blog_image.content }}
    <div class=\"overlay\">
        <div class=\"mb-1\" style=\"font-size: 13px;\">
            <a class=\"text-white\" href=\"\">{{ fields.field_categories.content }}</a>
            <span class=\"px-1 text-white\">/</span>
            {% set node_id = row.nid %}
            {% set node_url = path('entity.node.canonical', {'node': node_id}) %}
            <a class=\"text-white\" href=\"{{ node_url }}\">{{ fields.changed.content }}</a>
        </div>
        <a class=\"h4 m-0 text-white\" href=\"{{ node_url }}\">{{ fields.title.content}}</a>
    </div>
</div>
", "themes/custom/gold/templates/views-view-fields--first_slider--featured.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/views-view-fields--first_slider--featured.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 40];
        static $filters = ["escape" => 35];
        static $functions = ["path" => 41];

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
