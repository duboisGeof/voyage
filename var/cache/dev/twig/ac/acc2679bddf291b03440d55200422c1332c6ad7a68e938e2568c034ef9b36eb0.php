<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5abda7a81553484dd3fc722d69d394ef2dce5cc51224f004f7f54a0b9fae2aa6 extends Twig_Template
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
        $__internal_d7ca96113cf0c500ec2f8b677f4463e1e2c1810d44da730ec2e641f12823d54d = $this->env->getExtension("native_profiler");
        $__internal_d7ca96113cf0c500ec2f8b677f4463e1e2c1810d44da730ec2e641f12823d54d->enter($__internal_d7ca96113cf0c500ec2f8b677f4463e1e2c1810d44da730ec2e641f12823d54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d7ca96113cf0c500ec2f8b677f4463e1e2c1810d44da730ec2e641f12823d54d->leave($__internal_d7ca96113cf0c500ec2f8b677f4463e1e2c1810d44da730ec2e641f12823d54d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
