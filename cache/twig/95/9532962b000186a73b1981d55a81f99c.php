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

/* partials/base.html.twig */
class __TwigTemplate_4e592dcf5dfa202f3ff0b08842c943a4 extends Template
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

        // line 7
        $_trait_0 = $this->load("blocks/base.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."blocks/base.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'head' => [$this, 'block_head'],
                'stylesheets' => [$this, 'block_stylesheets'],
                'javascripts' => [$this, 'block_javascripts'],
                'assets' => [$this, 'block_assets'],
                'body_classes' => [$this, 'block_body_classes'],
                'header' => [$this, 'block_header'],
                'header_navigation' => [$this, 'block_header_navigation'],
                'hero' => [$this, 'block_hero'],
                'body' => [$this, 'block_body'],
                'messages' => [$this, 'block_messages'],
                'footer' => [$this, 'block_footer'],
                'mobile' => [$this, 'block_mobile'],
                'bottom' => [$this, 'block_bottom'],
            ]
        );
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
        $this->deferred = $this->env->getExtension('Twig\DeferredExtension\DeferredExtension');
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        $context["body_classes"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->bodyClassFunc($context, ["header-fixed", "header-animated", "header-transparent", "sticky-footer"]);
        // line 2
        $context["theme_default"] = (($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "theme-mode")) ? ($this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "theme-mode")) : ("auto"));
        // line 3
        $context["accent"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "accent-color");
        // line 4
        $context["accent_is_hex"] = (($context["accent"] ?? null) && CoreExtension::matches("/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})\$/", $this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 4, $this->source)));
        // line 5
        $context["fa_enabled"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "fontawesome.enabled");
        // line 6
        $context["fa_local"] = $this->extensions['Grav\Common\Twig\Extension\GravExtension']->themeVarFunc($context, "fontawesome.local");
        // line 8
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 9
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 9), "getActive", [], "any", false, false, true, 9)) ? ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "language", [], "any", false, false, true, 9), "getActive", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source)) : ($this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "config", [], "any", false, false, true, 9), "site", [], "any", false, false, true, 9), "default_lang", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source)));
        yield "\"
      data-theme-default=\"";
        // line 10
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["theme_default"] ?? null), 10, $this->source), "html", null, true), 10, $this->source);
        yield "\">
<head>
";
        // line 12
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 61
        yield "
";
        // line 62
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 75
        yield "
";
        // line 76
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 80
        yield "
";
        // line 81
        yield from $this->unwrap()->yieldBlock('assets', $context, $blocks);
        // line 85
        yield "
    <!-- FORȚARE REVOLUȚIONARĂ LUMINOS/BIOLOGIC -->
    <style>
      :root, [data-theme=\x27dark\x27], [data-theme=\x27light\x27], html, body {
        --q2-bg: #F8FAFC !important;
        --q2-surface: #FFFFFF !important;
        --q2-text: #0A0A0C !important;
        --q2-link: #0066CC !important;
        --q2-accent: #E41A2B !important;
        background-color: #F8FAFC !important;
        color: #0A0A0C !important;
      }

      /* Spargem fundalul de card / container închis */
      #page-wrapper, main, #start, #body-wrapper, .section, .container, article, .content-padding {
        background-color: #FFFFFF !important;
        color: #0A0A0C !important;
      }

      /* Titluri și text vizibil */
      h1, h2, h3, h4, h5, h6, p, li, span, div {
        color: #0A0A0C !important;
      }

      /* Header Antracit */
      #header, header, .navbar {
        background-color: #0A0A0C !important;
      }

      #header a, header a, .navbar a, #header span, header span {
        color: #FFFFFF !important;
      }

      /* Link-uri Albastru ADN cu Hover Roșu */
      a, a:visited {
        color: #0066CC !important;
      }

      a:hover {
        color: #E41A2B !important;
      }

      /* Misiunea Noastră */
      blockquote, blockquote p {
        border-left: 4px solid #E41A2B !important;
        background-color: #FEF2F2 !important;
        color: #0A0A0C !important;
      }

      /* Buton Biologic */
      .btn-biologic {
        display: inline-block !important;
        background-color: #0066CC !important;
        color: #ffffff !important;
        padding: 10px 22px !important;
        border-radius: 6px !important;
        text-decoration: none !important;
        font-weight: bold !important;
        margin-top: 10px !important;
      }

      .btn-biologic:hover {
        background-color: #E41A2B !important;
        color: #ffffff !important;
      }
    </style>
</head>
<body id=\"top\" class=\"";
        // line 152
        yield from $this->unwrap()->yieldBlock('body_classes', $context, $blocks);
        yield "\">
    <div id=\"page-wrapper\">
    ";
        // line 154
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 185
        yield "
    ";
        // line 186
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 187
        yield "
        <main id=\"start\">
        ";
        // line 189
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 199
        yield "        </main>

    </div>

    ";
        // line 203
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 206
        yield "
    ";
        // line 207
        yield from $this->unwrap()->yieldBlock('mobile', $context, $blocks);
        // line 222
        yield "
";
        // line 223
        yield from $this->unwrap()->yieldBlock('bottom', $context, $blocks);
        // line 226
        yield "</body>
</html>";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'head');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "    <meta charset=\"utf-8\" />
    <title>";
        // line 14
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html"), 14, $this->source);
            yield " | ";
        }
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["site"] ?? null), "title", [], "any", false, false, true, 14), 14, $this->source), "html"), 14, $this->source);
        yield "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"color-scheme\" content=\"light dark\">

    ";
        // line 19
        yield from $this->load("partials/metadata.html.twig", 19)->unwrap()->yield($context);
        // line 20
        yield "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 21
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://images/favicon.png"), 21, $this->source), "html", null, true), 21, $this->source);
        yield "\" />
    <link rel=\"canonical\" href=\"";
        // line 22
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "url", [true, true], "method", false, false, true, 22), 22, $this->source), "html", null, true), 22, $this->source);
        yield "\" />

    ";
        // line 25
        yield "    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/cal-sans/cal-sans-latin.woff2"), 25, $this->source), "html", null, true), 25, $this->source);
        yield "\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"";
        // line 26
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->extensions['Grav\Common\Twig\Extension\GravExtension']->urlFunc("theme://fonts/inter/inter-latin.woff2"), 26, $this->source), "html", null, true), 26, $this->source);
        yield "\" />

    ";
        // line 28
        if ((($tmp = ($context["accent_is_hex"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 29
            yield "    ";
            // line 30
            yield "    <style>
      :root {
        --q2-accent: ";
            // line 32
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 32, $this->source), "html", null, true), 32, $this->source);
            yield ";
        --q2-accent-contrast: #ffffff;
        --q2-link: ";
            // line 34
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 34, $this->source), "html", null, true), 34, $this->source);
            yield ";
        --q2-focus-ring: color-mix(in oklab, ";
            // line 35
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 35, $this->source), "html", null, true), 35, $this->source);
            yield " 45%, transparent);
      }
      :root[data-theme=\x27dark\x27] {
        --q2-accent: color-mix(in oklab, ";
            // line 38
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 38, $this->source), "html", null, true), 38, $this->source);
            yield " 80%, white 20%);
        --q2-accent-contrast: #ffffff;
        --q2-link: color-mix(in oklab, ";
            // line 40
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 40, $this->source), "html", null, true), 40, $this->source);
            yield " 75%, white 25%);
        --q2-focus-ring: color-mix(in oklab, ";
            // line 41
            yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["accent"] ?? null), 41, $this->source), "html", null, true), 41, $this->source);
            yield " 45%, transparent);
      }
    </style>
    ";
        }
        // line 45
        yield "
    ";
        // line 47
        yield "    <script>
    (function () {
      try {
        var d = document.documentElement;
        var stored = localStorage.getItem(\x27quark2-theme\x27);
        var pref = stored || d.getAttribute(\x27data-theme-default\x27) || \x27auto\x27;
        var isDark = pref === \x27dark\x27 || (pref === \x27auto\x27 && window.matchMedia && window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches);
        d.setAttribute(\x27data-theme\x27, isDark ? \x27dark\x27 : \x27light\x27);
        d.setAttribute(\x27data-theme-preference\x27, pref);
        d.classList.toggle(\x27dark\x27, isDark);
      } catch (e) {}
    })();
    </script>
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 62
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 63
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fonts.css", 100], "method", false, false, true, 63);
        // line 64
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/blades.min.css", 95], "method", false, false, true, 64);
        // line 65
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/theme.css", 90], "method", false, false, true, 65);
        // line 66
        yield "    ";
        if ((($tmp = ($context["fa_enabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "        ";
            if ((($tmp = ($context["fa_local"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "            ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/fontawesome/all.min.css", 85], "method", false, false, true, 68);
                // line 69
                yield "        ";
            } else {
                // line 70
                yield "            ";
                CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css", 85], "method", false, false, true, 70);
                // line 71
                yield "        ";
            }
            // line 72
            yield "    ";
        }
        // line 73
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addCss", ["theme://css/custom.css", 80], "method", false, false, true, 73);
        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 77
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/theme-toggle.js", ["group" => "head", "priority" => 100]], "method", false, false, true, 77);
        // line 78
        yield "    ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "addJs", ["theme://js/site.js", ["group" => "bottom", "priority" => 100]], "method", false, false, true, 78);
        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->deferred->defer($this, 'assets');
        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_assets_deferred(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 82
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "css", [], "method", false, false, true, 82), 82, $this->source), 82, $this->source);
        yield "
    ";
        // line 83
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", [], "method", false, false, true, 83), 83, $this->source), 83, $this->source);
        yield "
";
        $this->deferred->resolve($this, $context, $blocks);
        yield from [];
    }

    // line 152
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_classes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["body_classes"] ?? null), 152, $this->source), "html", null, true), 152, $this->source);
        yield from [];
    }

    // line 154
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 155
        yield "        <header id=\"header\" class=\"section\">
            <div class=\"container\">
                <nav class=\"navbar\" aria-label=\"Primary\">
                    <div class=\"navbar-section logo\">
                        ";
        // line 159
        yield from $this->load("partials/logo.html.twig", 159)->unwrap()->yield($context);
        // line 160
        yield "                    </div>
                    <div class=\"navbar-section desktop-menu\">
                        <div class=\"dropmenu\">
                        ";
        // line 163
        yield from $this->unwrap()->yieldBlock('header_navigation', $context, $blocks);
        // line 166
        yield "                        </div>
                    </div>
                    <div class=\"navbar-section actions\">
                        ";
        // line 169
        yield from $this->load("partials/theme-toggle.html.twig", 169)->unwrap()->yield($context);
        // line 170
        yield "                        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "plugins", [], "any", false, false, true, 170), "login", [], "any", false, false, true, 170), "enabled", [], "any", false, false, true, 170) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["grav"] ?? null), "user", [], "any", false, false, true, 170), "username", [], "any", false, false, true, 170))) {
            // line 171
            yield "                            <span class=\"login-status-wrapper\"><i class=\"fa-solid fa-user\" aria-hidden=\"true\"></i> ";
            try {
                $_v0 = $this->load("partials/login-status.html.twig", 171);
            } catch (LoaderError $e) {
                // ignore missing template
                $_v0 = null;
            }
            if ($_v0) {
                yield from $_v0->unwrap()->yield($context);
            }
            yield "</span>
                        ";
        }
        // line 173
        yield "                    </div>
                </nav>
            </div>
        </header>
        <div class=\"mobile-menu\">
            <button type=\"button\" class=\"button_container\" id=\"toggle\" aria-label=\"Open menu\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </button>
        </div>
    ";
        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 164
        yield "                            ";
        yield from $this->load("partials/navigation.html.twig", 164)->unwrap()->yield($context);
        // line 165
        yield "                        ";
        yield from [];
    }

    // line 186
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 190
        yield "            <section id=\"body-wrapper\" class=\"section\">
                <div class=\"container\">
                    ";
        // line 192
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 195
        yield "                    ";
        yield from         $this->unwrap()->yieldBlock("content_surround", $context, $blocks);
        yield "
                </div>
            </section>
        ";
        yield from [];
    }

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_messages(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 193
        yield "                        ";
        try {
            $_v1 = $this->load("partials/messages.html.twig", 193);
        } catch (LoaderError $e) {
            // ignore missing template
            $_v1 = null;
        }
        if ($_v1) {
            yield from $_v1->unwrap()->yield($context);
        }
        // line 194
        yield "                    ";
        yield from [];
    }

    // line 203
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 204
        yield "        ";
        yield from $this->load("partials/footer.html.twig", 204)->unwrap()->yield($context);
        // line 205
        yield "    ";
        yield from [];
    }

    // line 207
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mobile(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 208
        yield "    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\" role=\"dialog\" aria-label=\"Menu\">
            <div class=\"mobile-logo\">
                ";
        // line 211
        yield from $this->load("partials/logo.html.twig", 211)->unwrap()->yield(CoreExtension::merge($context, ["mobile" => true]));
        // line 212
        yield "            </div>
            <nav class=\"overlay-menu\" aria-label=\"Mobile\">
                ";
        // line 214
        yield from $this->load("partials/navigation.html.twig", 214)->unwrap()->yield(CoreExtension::merge($context, ["tree" => true]));
        // line 215
        yield "            </nav>
            <div style=\"margin-top:2rem;\">
                ";
        // line 217
        yield from $this->load("partials/theme-toggle.html.twig", 217)->unwrap()->yield(CoreExtension::merge($context, ["labeled" => true]));
        // line 218
        yield "            </div>
        </div>
    </div>
    ";
        yield from [];
    }

    // line 223
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bottom(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 224
        yield "    ";
        yield $this->sandbox->ensureToStringAllowed($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["assets"] ?? null), "js", ["bottom"], "method", false, false, true, 224), 224, $this->source), 224, $this->source);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/base.html.twig";
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
        return array (  629 => 224,  622 => 223,  614 => 218,  612 => 217,  608 => 215,  606 => 214,  602 => 212,  600 => 211,  595 => 208,  588 => 207,  583 => 205,  580 => 204,  573 => 203,  568 => 194,  557 => 193,  550 => 192,  540 => 195,  538 => 192,  534 => 190,  527 => 189,  517 => 186,  512 => 165,  509 => 164,  502 => 163,  486 => 173,  472 => 171,  469 => 170,  467 => 169,  462 => 166,  460 => 163,  455 => 160,  453 => 159,  447 => 155,  440 => 154,  429 => 152,  421 => 83,  416 => 82,  399 => 81,  393 => 78,  390 => 77,  383 => 76,  377 => 73,  374 => 72,  371 => 71,  368 => 70,  365 => 69,  362 => 68,  359 => 67,  356 => 66,  353 => 65,  350 => 64,  347 => 63,  340 => 62,  321 => 47,  318 => 45,  311 => 41,  307 => 40,  302 => 38,  296 => 35,  292 => 34,  287 => 32,  283 => 30,  281 => 29,  279 => 28,  274 => 26,  269 => 25,  264 => 22,  260 => 21,  257 => 20,  255 => 19,  243 => 14,  240 => 13,  223 => 12,  216 => 226,  214 => 223,  211 => 222,  209 => 207,  206 => 206,  204 => 203,  198 => 199,  196 => 189,  192 => 187,  190 => 186,  187 => 185,  185 => 154,  180 => 152,  111 => 85,  109 => 81,  106 => 80,  104 => 76,  101 => 75,  99 => 62,  96 => 61,  94 => 12,  89 => 10,  85 => 9,  82 => 8,  80 => 6,  78 => 5,  76 => 4,  74 => 3,  72 => 2,  70 => 1,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% set body_classes = body_class([\x27header-fixed\x27, \x27header-animated\x27, \x27header-transparent\x27, \x27sticky-footer\x27]) %}
{% set theme_default = theme_var(\x27theme-mode\x27) ?: \x27auto\x27 %}
{% set accent = theme_var(\x27accent-color\x27) %}
{% set accent_is_hex = accent and accent matches \x27/^#([0-9a-fA-F]{3}|[0-9a-fA-F]{6}|[0-9a-fA-F]{8})\$/\x27 %}
{% set fa_enabled = theme_var(\x27fontawesome.enabled\x27) %}
{% set fa_local   = theme_var(\x27fontawesome.local\x27) %}
{% use \x27blocks/base.html.twig\x27 %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: grav.config.site.default_lang }}\"
      data-theme-default=\"{{ theme_default }}\">
<head>
{% block head deferred %}
    <meta charset=\"utf-8\" />
    <title>{% if page.title %}{{ page.title|e(\x27html\x27) }} | {% endif %}{{ site.title|e(\x27html\x27) }}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"color-scheme\" content=\"light dark\">

    {% include \x27partials/metadata.html.twig\x27 %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url(\x27theme://images/favicon.png\x27) }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    {# Preload the critical latin subsets so headings + body text render in-font on first paint #}
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/cal-sans/cal-sans-latin.woff2\x27) }}\" />
    <link rel=\"preload\" as=\"font\" type=\"font/woff2\" crossorigin href=\"{{ url(\x27theme://fonts/inter/inter-latin.woff2\x27) }}\" />

    {% if accent_is_hex %}
    {# User-configured accent: tint links, focus ring, and filled UI accents with the chosen hex #}
    <style>
      :root {
        --q2-accent: {{ accent }};
        --q2-accent-contrast: #ffffff;
        --q2-link: {{ accent }};
        --q2-focus-ring: color-mix(in oklab, {{ accent }} 45%, transparent);
      }
      :root[data-theme=\x27dark\x27] {
        --q2-accent: color-mix(in oklab, {{ accent }} 80%, white 20%);
        --q2-accent-contrast: #ffffff;
        --q2-link: color-mix(in oklab, {{ accent }} 75%, white 25%);
        --q2-focus-ring: color-mix(in oklab, {{ accent }} 45%, transparent);
      }
    </style>
    {% endif %}

    {# Pre-paint theme bootstrap — blocks FOUC by setting data-theme synchronously #}
    <script>
    (function () {
      try {
        var d = document.documentElement;
        var stored = localStorage.getItem(\x27quark2-theme\x27);
        var pref = stored || d.getAttribute(\x27data-theme-default\x27) || \x27auto\x27;
        var isDark = pref === \x27dark\x27 || (pref === \x27auto\x27 && window.matchMedia && window.matchMedia(\x27(prefers-color-scheme: dark)\x27).matches);
        d.setAttribute(\x27data-theme\x27, isDark ? \x27dark\x27 : \x27light\x27);
        d.setAttribute(\x27data-theme-preference\x27, pref);
        d.classList.toggle(\x27dark\x27, isDark);
      } catch (e) {}
    })();
    </script>
{% endblock head %}

{% block stylesheets %}
    {% do assets.addCss(\x27theme://css/fonts.css\x27, 100) %}
    {% do assets.addCss(\x27theme://css/blades.min.css\x27, 95) %}
    {% do assets.addCss(\x27theme://css/theme.css\x27, 90) %}
    {% if fa_enabled %}
        {% if fa_local %}
            {% do assets.addCss(\x27theme://css/fontawesome/all.min.css\x27, 85) %}
        {% else %}
            {% do assets.addCss(\x27https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css\x27, 85) %}
        {% endif %}
    {% endif %}
    {% do assets.addCss(\x27theme://css/custom.css\x27, 80) %}
{% endblock %}

{% block javascripts %}
    {% do assets.addJs(\x27theme://js/theme-toggle.js\x27, {group:\x27head\x27, priority: 100}) %}
    {% do assets.addJs(\x27theme://js/site.js\x27, {group:\x27bottom\x27, priority: 100}) %}
{% endblock %}

{% block assets deferred %}
    {{ assets.css()|raw }}
    {{ assets.js()|raw }}
{% endblock %}

    <!-- FORȚARE REVOLUȚIONARĂ LUMINOS/BIOLOGIC -->
    <style>
      :root, [data-theme=\x27dark\x27], [data-theme=\x27light\x27], html, body {
        --q2-bg: #F8FAFC !important;
        --q2-surface: #FFFFFF !important;
        --q2-text: #0A0A0C !important;
        --q2-link: #0066CC !important;
        --q2-accent: #E41A2B !important;
        background-color: #F8FAFC !important;
        color: #0A0A0C !important;
      }

      /* Spargem fundalul de card / container închis */
      #page-wrapper, main, #start, #body-wrapper, .section, .container, article, .content-padding {
        background-color: #FFFFFF !important;
        color: #0A0A0C !important;
      }

      /* Titluri și text vizibil */
      h1, h2, h3, h4, h5, h6, p, li, span, div {
        color: #0A0A0C !important;
      }

      /* Header Antracit */
      #header, header, .navbar {
        background-color: #0A0A0C !important;
      }

      #header a, header a, .navbar a, #header span, header span {
        color: #FFFFFF !important;
      }

      /* Link-uri Albastru ADN cu Hover Roșu */
      a, a:visited {
        color: #0066CC !important;
      }

      a:hover {
        color: #E41A2B !important;
      }

      /* Misiunea Noastră */
      blockquote, blockquote p {
        border-left: 4px solid #E41A2B !important;
        background-color: #FEF2F2 !important;
        color: #0A0A0C !important;
      }

      /* Buton Biologic */
      .btn-biologic {
        display: inline-block !important;
        background-color: #0066CC !important;
        color: #ffffff !important;
        padding: 10px 22px !important;
        border-radius: 6px !important;
        text-decoration: none !important;
        font-weight: bold !important;
        margin-top: 10px !important;
      }

      .btn-biologic:hover {
        background-color: #E41A2B !important;
        color: #ffffff !important;
      }
    </style>
</head>
<body id=\"top\" class=\"{% block body_classes %}{{ body_classes }}{% endblock %}\">
    <div id=\"page-wrapper\">
    {% block header %}
        <header id=\"header\" class=\"section\">
            <div class=\"container\">
                <nav class=\"navbar\" aria-label=\"Primary\">
                    <div class=\"navbar-section logo\">
                        {% include \x27partials/logo.html.twig\x27 %}
                    </div>
                    <div class=\"navbar-section desktop-menu\">
                        <div class=\"dropmenu\">
                        {% block header_navigation %}
                            {% include \x27partials/navigation.html.twig\x27 %}
                        {% endblock %}
                        </div>
                    </div>
                    <div class=\"navbar-section actions\">
                        {% include \x27partials/theme-toggle.html.twig\x27 %}
                        {% if config.plugins.login.enabled and grav.user.username %}
                            <span class=\"login-status-wrapper\"><i class=\"fa-solid fa-user\" aria-hidden=\"true\"></i> {% include \x27partials/login-status.html.twig\x27 ignore missing %}</span>
                        {% endif %}
                    </div>
                </nav>
            </div>
        </header>
        <div class=\"mobile-menu\">
            <button type=\"button\" class=\"button_container\" id=\"toggle\" aria-label=\"Open menu\">
                <span class=\"top\"></span>
                <span class=\"middle\"></span>
                <span class=\"bottom\"></span>
            </button>
        </div>
    {% endblock %}

    {% block hero %}{% endblock %}

        <main id=\"start\">
        {% block body %}
            <section id=\"body-wrapper\" class=\"section\">
                <div class=\"container\">
                    {% block messages %}
                        {% include \x27partials/messages.html.twig\x27 ignore missing %}
                    {% endblock %}
                    {{ block(\x27content_surround\x27) }}
                </div>
            </section>
        {% endblock %}
        </main>

    </div>

    {% block footer %}
        {% include \x27partials/footer.html.twig\x27 %}
    {% endblock %}

    {% block mobile %}
    <div class=\"mobile-container\">
        <div class=\"overlay\" id=\"overlay\" role=\"dialog\" aria-label=\"Menu\">
            <div class=\"mobile-logo\">
                {% include \x27partials/logo.html.twig\x27 with {mobile: true} %}
            </div>
            <nav class=\"overlay-menu\" aria-label=\"Mobile\">
                {% include \x27partials/navigation.html.twig\x27 with {tree: true} %}
            </nav>
            <div style=\"margin-top:2rem;\">
                {% include \x27partials/theme-toggle.html.twig\x27 with {labeled: true} %}
            </div>
        </div>
    </div>
    {% endblock %}

{% block bottom %}
    {{ assets.js(\x27bottom\x27)|raw }}
{% endblock %}
</body>
</html>", "partials/base.html.twig", "C:\\laragon\\www\\grav\\user\\themes\\quark2\\templates\\partials\\base.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "use" => 7, "block" => 12, "if" => 14, "include" => 19, "do" => 63];
        static $filters = ["escape" => 9, "e" => 14, "raw" => 82];
        static $functions = ["body_class" => 1, "theme_var" => 2, "url" => 21];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'use', 'block', 'if', 'include', 'do'],
                ['escape', 'e', 'raw'],
                ['body_class', 'theme_var', 'url'],
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
    private $deferred;
}
