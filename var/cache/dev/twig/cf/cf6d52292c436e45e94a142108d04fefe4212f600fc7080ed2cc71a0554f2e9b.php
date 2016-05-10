<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_132e56f42ca3058e208c7dc4beadab42d8138ba0cc462114d1e016661d61bbfb extends Twig_Template
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
        $__internal_cb7dccd5d3fb118e9d8ceff775e2e301bf1e66997958abed37b9da188cbb15a0 = $this->env->getExtension("native_profiler");
        $__internal_cb7dccd5d3fb118e9d8ceff775e2e301bf1e66997958abed37b9da188cbb15a0->enter($__internal_cb7dccd5d3fb118e9d8ceff775e2e301bf1e66997958abed37b9da188cbb15a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_cb7dccd5d3fb118e9d8ceff775e2e301bf1e66997958abed37b9da188cbb15a0->leave($__internal_cb7dccd5d3fb118e9d8ceff775e2e301bf1e66997958abed37b9da188cbb15a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
