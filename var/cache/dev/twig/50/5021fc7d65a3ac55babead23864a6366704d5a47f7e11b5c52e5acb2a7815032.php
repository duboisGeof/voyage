<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8cd3f251db5c73544eefca0e4753bf16211b5ec55c3c769f70ecef312f8c747f extends Twig_Template
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
        $__internal_870db178bb312e7e1366803d56fcb88dafc06f32934ab69211a52d79d89a29f0 = $this->env->getExtension("native_profiler");
        $__internal_870db178bb312e7e1366803d56fcb88dafc06f32934ab69211a52d79d89a29f0->enter($__internal_870db178bb312e7e1366803d56fcb88dafc06f32934ab69211a52d79d89a29f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_870db178bb312e7e1366803d56fcb88dafc06f32934ab69211a52d79d89a29f0->leave($__internal_870db178bb312e7e1366803d56fcb88dafc06f32934ab69211a52d79d89a29f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
