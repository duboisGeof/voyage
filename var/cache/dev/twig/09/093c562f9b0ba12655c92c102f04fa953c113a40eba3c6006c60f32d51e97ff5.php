<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_cc1f1bc30229b75b8387fb507f32ee21ee15775d720cd2fa271e622e318b715e extends Twig_Template
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
        $__internal_692e79c99ce461780aa57745fc66fbf4893e2675873ac84fa92f37e54399a6ee = $this->env->getExtension("native_profiler");
        $__internal_692e79c99ce461780aa57745fc66fbf4893e2675873ac84fa92f37e54399a6ee->enter($__internal_692e79c99ce461780aa57745fc66fbf4893e2675873ac84fa92f37e54399a6ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_692e79c99ce461780aa57745fc66fbf4893e2675873ac84fa92f37e54399a6ee->leave($__internal_692e79c99ce461780aa57745fc66fbf4893e2675873ac84fa92f37e54399a6ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
