<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig */
class __TwigTemplate_7479db93f3b5305264001870e229bfcfb64e492ada0864ddb6b0da3f62d9868f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'currency_form_rest' => [$this, 'block_currency_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 25
        echo "
";
        // line 26
        $context["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form', $context, $blocks);
    }

    public function block_form($context, array $blocks = [])
    {
        // line 29
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_start', ["attr" => ["id" => "currency_form", "data-reference-url" => twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_currencies_get_reference_data", ["currencyIsoCode" => "CURRENCY_ISO_CODE"]), ["/CURRENCY_ISO_CODE" => "{/id}"]), "data-languages" => twig_replace_filter(twig_jsonencode_filter(        // line 33
($context["languages"] ?? null)), "'", "&#39;"), "data-translations" => twig_replace_filter(twig_jsonencode_filter(["step.symbol" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1. Enter symbol", [], "Admin.International.Feature"), "step.format" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2. Choose format", [], "Admin.International.Feature"), "modal.title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Customize symbol and format", [], "Admin.International.Feature"), "modal.apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", [], "Admin.Actions"), "modal.cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "modal.close" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "list.language" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Language", [], "Admin.Global"), "list.example" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Example", [], "Admin.Global"), "list.edit" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit symbol / format", [], "Admin.International.Feature"), "list.reset" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", [], "Admin.Actions"), "list.reset.success" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your symbol and format customizations have been successfully reset for this language.", [], "Admin.Notifications.Success"), "list.example.format" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%", [], "Admin.International.Feature"), "modal.restore.title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure you want to restore default settings?", [], "Admin.International.Feature"), "modal.restore.apply" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Restore", [], "Admin.Actions"), "modal.restore.cancel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "modal.restore.body" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Restoring your currency's default settings will delete all the customizations you made before. Parameters will look just the same as when the currency is freshly imported.", [], "Admin.International.Feature")]), "'", "&#39;")]]);
        // line 53
        echo "

  <div class=\"card card-currency\">
    <div class=\"card-header\">
      ";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currencies", [], "Admin.Global"), "html", null, true);
        echo "
    </div>
    <div class=\"card-block row\">
      <div class=\"card-text\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'errors');
        echo "

        ";
        // line 63
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["currencyForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "id", [], "any", true, true)) {
            // line 64
            echo "          ";
            ob_start(function () { return ''; });
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("By default, PrestaShop comes with a list of official currencies. If you want to use a local currency, you will have to add it manually. For example, to accept the Iranian Toman on your store, you need to create it before.", [], "Admin.International.Help"), "html", null, true);
            echo "
          ";
            $context["selectIsoCodeHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 67
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "selected_iso_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a currency", [], "Admin.International.Feature"), "help" =>             // line 69
($context["selectIsoCodeHelp"] ?? null)]);
            // line 70
            echo "

          ";
            // line 72
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "unofficial", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("or", [], "Admin.Global")]);
            // line 74
            echo "
        ";
        }
        // line 76
        echo "
        ";
        // line 77
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "names", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Currency name", [], "Admin.International.Feature")]);
        // line 79
        echo "

        ";
        // line 81
        $context["symbolsClass"] = ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["currencyForm"] ?? null), "symbols", []), "vars", []), "errors", []))) ? ("") : ("d-none"));
        // line 82
        echo "        ";
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "symbols", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Symbol", [], "Admin.International.Feature"), "class" =>         // line 84
($context["symbolsClass"] ?? null)]);
        // line 85
        echo "

        ";
        // line 87
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "iso_code", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISO code", [], "Admin.International.Feature"), "help" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ISO 4217 code (e.g. USD for Dollars, EUR for Euros, etc.)", [], "Admin.International.Help")]);
        // line 90
        echo "

        ";
        // line 92
        ob_start(function () { return ''; });
        // line 93
        echo "          ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exchange rates are calculated from one unit of your shop's default currency. For example, if the default currency is euros and your chosen currency is dollars, type \"1.20\" (1&euro; = \$1.20).", [], "Admin.International.Help"), "html", null, true);
        echo "
        ";
        $context["exchangeRateHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 95
        echo "
        ";
        // line 96
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "exchange_rate", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Exchange rate", [], "Admin.International.Feature"), "help" =>         // line 98
($context["exchangeRateHelp"] ?? null)]);
        // line 99
        echo "

        ";
        // line 101
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "precision", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Decimals", [], "Admin.International.Feature")]);
        // line 103
        echo "

        ";
        // line 105
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "active", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", [], "Admin.Global")]);
        // line 107
        echo "

        ";
        // line 109
        echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "transformations", []), [], ["class" => "d-none"]);
        echo "

        ";
        // line 111
        if (($context["isShopFeatureEnabled"] ?? null)) {
            // line 112
            echo "          ";
            echo $context["ps"]->getform_group_row($this->getAttribute(($context["currencyForm"] ?? null), "shop_association", []), [], ["label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop association", [], "Admin.Global")]);
            // line 114
            echo "
        ";
        }
        // line 116
        echo "
        ";
        // line 117
        $this->displayBlock('currency_form_rest', $context, $blocks);
        // line 120
        echo "      </div>
    </div>

    <div class=\"card-footer\">
      <div class=\"card-footer-left\">
        <a href=\"";
        // line 125
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_currencies_index");
        echo "\" class=\"btn btn-outline-secondary\">
          ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
        </a>

        ";
        // line 129
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["currencyForm"] ?? null), "vars", [], "any", false, true), "data", [], "any", false, true), "id", [], "any", true, true) &&  !$this->getAttribute($this->getAttribute($this->getAttribute(($context["currencyForm"] ?? null), "vars", []), "data", []), "unofficial", []))) {
            // line 130
            echo "          <button type=\"button\" id=\"currency_reset_default_settings\" class=\"btn btn-outline-primary card-currency-reset\">
            <i class=\"material-icons\">refresh</i>
            ";
            // line 132
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Restore default settings", [], "Admin.International.Feature"), "html", null, true);
            echo "
          </button>
        ";
        }
        // line 135
        echo "      </div>
      
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    </div>

  </div>
  ";
        // line 141
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["currencyForm"] ?? null), 'form_end');
        echo "

  <!-- Modal -->
  <div class=\"modal fade\" id=\"currency_loading_data_modal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\" data-backdrop=\"static\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading currency data", [], "Admin.International.Feature"), "html", null, true);
        echo "</h5>
        </div>
        <div class=\"modal-body\">
          ";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please wait while currency data is being loaded", [], "Admin.International.Feature"), "html", null, true);
        echo "
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-secondary spinner\">";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Close", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 117
    public function block_currency_form_rest($context, array $blocks = [])
    {
        // line 118
        echo "          ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["currencyForm"] ?? null), 'rest');
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 118,  239 => 117,  229 => 154,  223 => 151,  217 => 148,  207 => 141,  200 => 137,  196 => 135,  190 => 132,  186 => 130,  184 => 129,  178 => 126,  174 => 125,  167 => 120,  165 => 117,  162 => 116,  158 => 114,  155 => 112,  153 => 111,  148 => 109,  144 => 107,  142 => 105,  138 => 103,  136 => 101,  132 => 99,  130 => 98,  129 => 96,  126 => 95,  120 => 93,  118 => 92,  114 => 90,  112 => 87,  108 => 85,  106 => 84,  104 => 82,  102 => 81,  98 => 79,  96 => 77,  93 => 76,  89 => 74,  87 => 72,  83 => 70,  81 => 69,  79 => 67,  73 => 65,  70 => 64,  68 => 63,  63 => 61,  56 => 57,  50 => 53,  48 => 33,  46 => 29,  40 => 28,  37 => 27,  35 => 26,  32 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@PrestaShop/Admin/Improve/International/Currency/Blocks/form.html.twig", "C:\\wamp64\\www\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Improve\\International\\Currency\\Blocks\\form.html.twig");
    }
}
