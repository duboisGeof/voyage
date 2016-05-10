<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_86ee91f3185f34b2e6a6b299b88ac98dc26f32d74dac963665423f676156077e extends Twig_Template
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
        $__internal_d490f91b76f2d00d6e687f90af9455ced621b8f9641b28f383b1fd8c62881b5f = $this->env->getExtension("native_profiler");
        $__internal_d490f91b76f2d00d6e687f90af9455ced621b8f9641b28f383b1fd8c62881b5f->enter($__internal_d490f91b76f2d00d6e687f90af9455ced621b8f9641b28f383b1fd8c62881b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d490f91b76f2d00d6e687f90af9455ced621b8f9641b28f383b1fd8c62881b5f->leave($__internal_d490f91b76f2d00d6e687f90af9455ced621b8f9641b28f383b1fd8c62881b5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
