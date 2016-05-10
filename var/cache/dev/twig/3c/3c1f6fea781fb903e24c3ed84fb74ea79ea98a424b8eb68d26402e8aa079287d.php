<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_47ba9ab6e481bdbd034e977c0a42501ddd0a6b16fa896fd4d9c257423e058fb6 extends Twig_Template
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
        $__internal_9a23cdeeb9c70feaeddb963c3ad20ac871c0c1d0aa404fecd357969c93565d5c = $this->env->getExtension("native_profiler");
        $__internal_9a23cdeeb9c70feaeddb963c3ad20ac871c0c1d0aa404fecd357969c93565d5c->enter($__internal_9a23cdeeb9c70feaeddb963c3ad20ac871c0c1d0aa404fecd357969c93565d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9a23cdeeb9c70feaeddb963c3ad20ac871c0c1d0aa404fecd357969c93565d5c->leave($__internal_9a23cdeeb9c70feaeddb963c3ad20ac871c0c1d0aa404fecd357969c93565d5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
