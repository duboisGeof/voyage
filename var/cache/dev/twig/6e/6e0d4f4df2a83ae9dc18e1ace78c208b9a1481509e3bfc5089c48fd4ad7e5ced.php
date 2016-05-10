<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3409a80bf7cd5fe354c90b34945db605d58e5a4ad979b07621df631be391610f extends Twig_Template
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
        $__internal_ae94456a325a6d5926e393972b2592c117ca40acaa3f5f152402f3c7d70790cf = $this->env->getExtension("native_profiler");
        $__internal_ae94456a325a6d5926e393972b2592c117ca40acaa3f5f152402f3c7d70790cf->enter($__internal_ae94456a325a6d5926e393972b2592c117ca40acaa3f5f152402f3c7d70790cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_ae94456a325a6d5926e393972b2592c117ca40acaa3f5f152402f3c7d70790cf->leave($__internal_ae94456a325a6d5926e393972b2592c117ca40acaa3f5f152402f3c7d70790cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
