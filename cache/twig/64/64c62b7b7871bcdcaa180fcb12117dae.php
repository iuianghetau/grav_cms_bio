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

/* partials/navigation.html.twig */
class __TwigTemplate_4c89bf77af553244620b34ec634d24e1 extends Template
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
        $macros["͜macros"] = $this->macros["͜macros"] = $this->load("macros/macros.html.twig", 1)->unwrap();
        // line 2
        yield "
<ul ";
        // line 3
        yield (((($tmp = ($context["tree"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("class=\"tree navigation\"") : ("class=\"navigation\""));
        yield ">
    ";
        // line 4
        yield $macros["͜macros"]->getTemplateForMacro("macro_nav_loop", $context, 4, $this->getSourceContext())->macro_nav_loop(...[($context["pages"] ?? null)]);
        yield "
</ul>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/navigation.html.twig";
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
        return array (  53 => 4,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% import \x27macros/macros.html.twig\x27 as macros %}

<ul {{ tree ? \x27class=\"tree navigation\"\x27 : \x27class=\"navigation\"\x27 }}>
    {{ macros.nav_loop(pages) }}
</ul>
", "partials/navigation.html.twig", "C:\\laragon\\www\\grav\\user\\themes\\quark2\\templates\\partials\\navigation.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 1];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['import'],
                [],
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
