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

/* themes/custom/gold/templates/views-view-fields--first_slider--popular.html.twig */
class __TwigTemplate_b278a0842777d2b57237ae46ecc32a6a extends Template
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

<div class=\"col-lg-6\">
    <div class=\"position-relative mb-3\">
        ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_blog_image", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), "html", null, true);
        yield "
        <div class=\"overlay position-relative bg-light\">
            <div class=\"mb-2\" style=\"font-size: 14px;\">
                <a href=\"\">Technology</a>
                <span class=\"px-1\">/</span>
                <span>January 01, 2045</span>
            </div>
            
            ";
        // line 44
        $context["node_id"] = CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "nid", [], "any", false, false, true, 44);
        // line 45
        yield "            ";
        $context["node_url"] = $this->extensions['Drupal\Core\Template\TwigExtension']->getPath("entity.node.canonical", ["node" => ($context["node_id"] ?? null)]);
        // line 46
        yield "            <a class=\"h4\" href=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["node_url"] ?? null), "html", null, true);
        yield "\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "title", [], "any", false, false, true, 46), "content", [], "any", false, false, true, 46), "html", null, true);
        yield "</a>
            <p class=\"m-0\">";
        // line 47
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "body", [], "any", false, false, true, 47), "content", [], "any", false, false, true, 47), "html", null, true);
        yield "</p>
        </div>
    </div>
     
    ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "attachment_after", [], "any", false, false, true, 51)) {
            // line 52
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["view"] ?? null), "attachment_after", [], "any", false, false, true, 52), "html", null, true);
            yield "

    ";
        }
        // line 55
        yield " </div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields", "row", "view"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gold/templates/views-view-fields--first_slider--popular.html.twig";
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
        return array (  89 => 55,  82 => 52,  80 => 51,  73 => 47,  66 => 46,  63 => 45,  61 => 44,  50 => 36,  44 => 32,);
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


<div class=\"col-lg-6\">
    <div class=\"position-relative mb-3\">
        {{ fields.field_blog_image.content }}
        <div class=\"overlay position-relative bg-light\">
            <div class=\"mb-2\" style=\"font-size: 14px;\">
                <a href=\"\">Technology</a>
                <span class=\"px-1\">/</span>
                <span>January 01, 2045</span>
            </div>
            
            {% set node_id = row.nid %}
            {% set node_url = path('entity.node.canonical', {'node': node_id}) %}
            <a class=\"h4\" href=\"{{ node_url }}\">{{ fields.title.content }}</a>
            <p class=\"m-0\">{{ fields.body.content}}</p>
        </div>
    </div>
     
    {% if view.attachment_after %}
    {{ view.attachment_after}}

    {% endif %}
 </div>

", "themes/custom/gold/templates/views-view-fields--first_slider--popular.html.twig", "/var/www/drupal/drupal_news_blog/web/themes/custom/gold/templates/views-view-fields--first_slider--popular.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 44, "if" => 51];
        static $filters = ["escape" => 36];
        static $functions = ["path" => 45];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
