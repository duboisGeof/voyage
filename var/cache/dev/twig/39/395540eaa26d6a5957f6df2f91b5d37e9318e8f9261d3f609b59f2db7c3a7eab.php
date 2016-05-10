<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_56c3d3e0030841f81cbd64f4ed2c72f302fc0fff539164d7f58714b566180b75 extends Twig_Template
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
        $__internal_039813194de8624b9156728aa0b93d166a14845e13af4cdee080c5167b49a364 = $this->env->getExtension("native_profiler");
        $__internal_039813194de8624b9156728aa0b93d166a14845e13af4cdee080c5167b49a364->enter($__internal_039813194de8624b9156728aa0b93d166a14845e13af4cdee080c5167b49a364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_039813194de8624b9156728aa0b93d166a14845e13af4cdee080c5167b49a364->leave($__internal_039813194de8624b9156728aa0b93d166a14845e13af4cdee080c5167b49a364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
