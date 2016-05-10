<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_1dc16cdd7e031ff4f311a2696633b7efe05a8539487071d423bac0a9f416990c extends Twig_Template
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
        $__internal_aeadf6f535a6b19c029d39178278275afbaf292bce35c3e35f553b7c2fc146ca = $this->env->getExtension("native_profiler");
        $__internal_aeadf6f535a6b19c029d39178278275afbaf292bce35c3e35f553b7c2fc146ca->enter($__internal_aeadf6f535a6b19c029d39178278275afbaf292bce35c3e35f553b7c2fc146ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_aeadf6f535a6b19c029d39178278275afbaf292bce35c3e35f553b7c2fc146ca->leave($__internal_aeadf6f535a6b19c029d39178278275afbaf292bce35c3e35f553b7c2fc146ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
