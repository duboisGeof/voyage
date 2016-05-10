<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_1bf5c449f2ee71560ce93d95e38a2b1ee20e68b26012caccfaece1f859f48831 extends Twig_Template
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
        $__internal_dbec7b866050ceb4d3598317b6058851576c378e349ca716cde099cd86ea5642 = $this->env->getExtension("native_profiler");
        $__internal_dbec7b866050ceb4d3598317b6058851576c378e349ca716cde099cd86ea5642->enter($__internal_dbec7b866050ceb4d3598317b6058851576c378e349ca716cde099cd86ea5642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dbec7b866050ceb4d3598317b6058851576c378e349ca716cde099cd86ea5642->leave($__internal_dbec7b866050ceb4d3598317b6058851576c378e349ca716cde099cd86ea5642_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
