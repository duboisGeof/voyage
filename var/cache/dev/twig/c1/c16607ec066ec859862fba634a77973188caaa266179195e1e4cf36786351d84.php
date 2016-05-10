<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6b460bf71facb77a8633a0aa6d9841063ef377dec5f2601460d6f500b184ec0b extends Twig_Template
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
        $__internal_7113871a965f54a3e1b962e48324364757eab3804cc65fd87c2eeb2478f800f8 = $this->env->getExtension("native_profiler");
        $__internal_7113871a965f54a3e1b962e48324364757eab3804cc65fd87c2eeb2478f800f8->enter($__internal_7113871a965f54a3e1b962e48324364757eab3804cc65fd87c2eeb2478f800f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7113871a965f54a3e1b962e48324364757eab3804cc65fd87c2eeb2478f800f8->leave($__internal_7113871a965f54a3e1b962e48324364757eab3804cc65fd87c2eeb2478f800f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
