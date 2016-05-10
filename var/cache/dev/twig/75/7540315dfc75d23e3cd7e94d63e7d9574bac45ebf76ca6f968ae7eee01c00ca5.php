<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5f883c8b7b7aa7860b19e1d04cb1443c15477756bb8743585457b3b5b939a974 extends Twig_Template
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
        $__internal_19d3cb54372a51cbfa3f125ca771ebb701eacdee15fb1744e0626eafa02a0704 = $this->env->getExtension("native_profiler");
        $__internal_19d3cb54372a51cbfa3f125ca771ebb701eacdee15fb1744e0626eafa02a0704->enter($__internal_19d3cb54372a51cbfa3f125ca771ebb701eacdee15fb1744e0626eafa02a0704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_19d3cb54372a51cbfa3f125ca771ebb701eacdee15fb1744e0626eafa02a0704->leave($__internal_19d3cb54372a51cbfa3f125ca771ebb701eacdee15fb1744e0626eafa02a0704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
