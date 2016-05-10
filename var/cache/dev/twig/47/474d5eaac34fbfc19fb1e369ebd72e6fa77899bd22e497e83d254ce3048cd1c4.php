<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_15b06d10b13df35126d6addee31bec8de3ea830c636bc7d5a0fc153bcb4bb9e3 extends Twig_Template
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
        $__internal_021c65a1eaa4a973878d87e3d16430764bcc88824678c91a35a6d5888ec5f1e2 = $this->env->getExtension("native_profiler");
        $__internal_021c65a1eaa4a973878d87e3d16430764bcc88824678c91a35a6d5888ec5f1e2->enter($__internal_021c65a1eaa4a973878d87e3d16430764bcc88824678c91a35a6d5888ec5f1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_021c65a1eaa4a973878d87e3d16430764bcc88824678c91a35a6d5888ec5f1e2->leave($__internal_021c65a1eaa4a973878d87e3d16430764bcc88824678c91a35a6d5888ec5f1e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
