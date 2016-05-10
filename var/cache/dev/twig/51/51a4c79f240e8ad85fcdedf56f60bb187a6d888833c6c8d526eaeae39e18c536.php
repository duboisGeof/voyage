<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fc6d8eda683a57cb4356c795817c0c105e6fc61ba878bc41de1add6849660a2c extends Twig_Template
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
        $__internal_84fc65a8b2a02777def5333c83b810c5a923cce1e36af4d8f1862c5a80fb88dd = $this->env->getExtension("native_profiler");
        $__internal_84fc65a8b2a02777def5333c83b810c5a923cce1e36af4d8f1862c5a80fb88dd->enter($__internal_84fc65a8b2a02777def5333c83b810c5a923cce1e36af4d8f1862c5a80fb88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_84fc65a8b2a02777def5333c83b810c5a923cce1e36af4d8f1862c5a80fb88dd->leave($__internal_84fc65a8b2a02777def5333c83b810c5a923cce1e36af4d8f1862c5a80fb88dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
