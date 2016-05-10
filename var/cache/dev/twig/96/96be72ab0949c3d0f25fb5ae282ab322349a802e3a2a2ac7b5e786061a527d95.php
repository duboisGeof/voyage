<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_ff096a229349acfa1c9b1d9204f61ea85f22f1e1b49fc4034b73a33f8ca37eef extends Twig_Template
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
        $__internal_763cbb81a8d066c5808e4e23a9a65c905157d5fa1978c554373e43555d340689 = $this->env->getExtension("native_profiler");
        $__internal_763cbb81a8d066c5808e4e23a9a65c905157d5fa1978c554373e43555d340689->enter($__internal_763cbb81a8d066c5808e4e23a9a65c905157d5fa1978c554373e43555d340689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_763cbb81a8d066c5808e4e23a9a65c905157d5fa1978c554373e43555d340689->leave($__internal_763cbb81a8d066c5808e4e23a9a65c905157d5fa1978c554373e43555d340689_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
