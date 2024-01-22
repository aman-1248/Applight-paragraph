<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/applight/templates/page/page.html.twig */
class __TwigTemplate_a0ce67141164875a5e1629389f18309f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navbar_region", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "




<section class=\"banner\" data-scroll-index='0'>

    ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "

</section>




    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "

    <section class=\"contact section-padding\" data-scroll-index='6'>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sectioner-header text-center\">
          <h3>Contact us</h3>
          <span class=\"line\"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class=\"section-content\">
          <div class=\"row\">
            <div class=\"col-sm-12 col-md-12 col-lg-8\">
           ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "
            </div>
            <div class=\"col-sm-12 col-md-12 col-lg-4\">
              ";
        // line 34
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contact2", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "
            </div>
          </div>
        </div>
      </div>
    </div>
  
</section>
    ";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_region", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
        echo "






";
    }

    public function getTemplateName()
    {
        return "themes/applight/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 42,  86 => 34,  80 => 31,  63 => 17,  53 => 10,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{{page.navbar_region}}




<section class=\"banner\" data-scroll-index='0'>

    {{page.banner}}

</section>




    {{page.content}}

    <section class=\"contact section-padding\" data-scroll-index='6'>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sectioner-header text-center\">
          <h3>Contact us</h3>
          <span class=\"line\"></span>
          <p>Sed quis nisi nisi. Proin consectetur porttitor dui sit amet viverra. Fusce sit amet lorem faucibus, vestibulum ante in, pharetra ante.</p>
        </div>
        <div class=\"section-content\">
          <div class=\"row\">
            <div class=\"col-sm-12 col-md-12 col-lg-8\">
           {{page.contact}}
            </div>
            <div class=\"col-sm-12 col-md-12 col-lg-4\">
              {{page.contact2}}
            </div>
          </div>
        </div>
      </div>
    </div>
  
</section>
    {{page.footer_region}}






", "themes/applight/templates/page/page.html.twig", "C:\\laragon\\www\\AppLight2\\web\\themes\\applight\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
