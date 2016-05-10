<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d9fbeb1f8439075bcda88d080f16b45f8929ad458b987c0334de130e28200edc extends Twig_Template
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
        $__internal_fa616a2ab13460fcb3932d5dd96a65a3f9d8480e8171332b329bd36433c22692 = $this->env->getExtension("native_profiler");
        $__internal_fa616a2ab13460fcb3932d5dd96a65a3f9d8480e8171332b329bd36433c22692->enter($__internal_fa616a2ab13460fcb3932d5dd96a65a3f9d8480e8171332b329bd36433c22692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fa616a2ab13460fcb3932d5dd96a65a3f9d8480e8171332b329bd36433c22692->leave($__internal_fa616a2ab13460fcb3932d5dd96a65a3f9d8480e8171332b329bd36433c22692_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
