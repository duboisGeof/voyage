<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f63821b38731cb00f9e97bbde59f16d99eb0bd23c0d3e836c82225dacef3ff8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caa509896c284e8c49dfbdade7b8ad2de7d2289760951db61172919282419000 = $this->env->getExtension("native_profiler");
        $__internal_caa509896c284e8c49dfbdade7b8ad2de7d2289760951db61172919282419000->enter($__internal_caa509896c284e8c49dfbdade7b8ad2de7d2289760951db61172919282419000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_caa509896c284e8c49dfbdade7b8ad2de7d2289760951db61172919282419000->leave($__internal_caa509896c284e8c49dfbdade7b8ad2de7d2289760951db61172919282419000_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
