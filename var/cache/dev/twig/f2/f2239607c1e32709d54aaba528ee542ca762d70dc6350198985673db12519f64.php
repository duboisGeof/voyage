<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b3a00ba40fdb8c4b067a978f95950bb4ef5c54ad4b9e4ba309d368a9d1aa2aa1 extends Twig_Template
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
        $__internal_18a01a7219ba7ece0b54890876320c2e0b267807de969dc91158fa7ae4719389 = $this->env->getExtension("native_profiler");
        $__internal_18a01a7219ba7ece0b54890876320c2e0b267807de969dc91158fa7ae4719389->enter($__internal_18a01a7219ba7ece0b54890876320c2e0b267807de969dc91158fa7ae4719389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_18a01a7219ba7ece0b54890876320c2e0b267807de969dc91158fa7ae4719389->leave($__internal_18a01a7219ba7ece0b54890876320c2e0b267807de969dc91158fa7ae4719389_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
