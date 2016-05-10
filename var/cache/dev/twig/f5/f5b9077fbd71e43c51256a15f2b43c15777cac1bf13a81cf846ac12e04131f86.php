<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c420de8717eb48adbc56a5010240c744a7ff96ea08d1bb238b58a088c0f48263 extends Twig_Template
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
        $__internal_37ac3755261a32e0609b278f57c54badcb83c54639c2abbdffd7557a8c9411d7 = $this->env->getExtension("native_profiler");
        $__internal_37ac3755261a32e0609b278f57c54badcb83c54639c2abbdffd7557a8c9411d7->enter($__internal_37ac3755261a32e0609b278f57c54badcb83c54639c2abbdffd7557a8c9411d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_37ac3755261a32e0609b278f57c54badcb83c54639c2abbdffd7557a8c9411d7->leave($__internal_37ac3755261a32e0609b278f57c54badcb83c54639c2abbdffd7557a8c9411d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
