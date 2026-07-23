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

/* partials/theme-toggle.html.twig */
class __TwigTemplate_e662abc21ad2ef3ab91762b50e75b283 extends Template
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
        $context["labeled"] = ((array_key_exists("labeled", $context)) ? ($this->sandbox->ensureToStringAllowed(Twig\Extension\CoreExtension::default($this->sandbox->ensureToStringAllowed(($context["labeled"] ?? null), 1, $this->source), false), 1, $this->source)) : (false));
        // line 2
        yield "<button type=\"button\"
        class=\"theme-toggle\"
        data-theme-toggle
        aria-label=\"Toggle appearance\"
        title=\"Toggle appearance\">
    ";
        // line 8
        yield "    <i class=\"icon icon-sun   fa-solid fa-sun\"   aria-hidden=\"true\"></i>
    <i class=\"icon icon-moon  fa-solid fa-moon\"  aria-hidden=\"true\"></i>
    <i class=\"icon icon-auto  fa-solid fa-circle-half-stroke\" aria-hidden=\"true\"></i>
    ";
        // line 11
        if ((($tmp = ($context["labeled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<span style=\"margin-left:.5rem;\">";
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->translate($this->env, "THEME_QUARK2.THEME_TOGGLE.LABEL"), 11, $this->source), "html", null, true), 11, $this->source);
            yield "</span>";
        }
        // line 12
        yield "</button>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/theme-toggle.html.twig";
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
        return array (  64 => 12,  58 => 11,  53 => 8,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set labeled = labeled|default(false) %}
<button type=\"button\"
        class=\"theme-toggle\"
        data-theme-toggle
        aria-label=\"Toggle appearance\"
        title=\"Toggle appearance\">
    {# Sun (light), Moon (dark), Adjust (auto) — Font Awesome 7 free #}
    <i class=\"icon icon-sun   fa-solid fa-sun\"   aria-hidden=\"true\"></i>
    <i class=\"icon icon-moon  fa-solid fa-moon\"  aria-hidden=\"true\"></i>
    <i class=\"icon icon-auto  fa-solid fa-circle-half-stroke\" aria-hidden=\"true\"></i>
    {% if labeled %}<span style=\"margin-left:.5rem;\">{{ \x27THEME_QUARK2.THEME_TOGGLE.LABEL\x27|t }}</span>{% endif %}
</button>
", "partials/theme-toggle.html.twig", "C:\\laragon\\www\\grav\\user\\themes\\quark2\\templates\\partials\\theme-toggle.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 11];
        static $filters = ["default" => 1, "escape" => 11, "t" => 11];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['default', 'escape', 't'],
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
