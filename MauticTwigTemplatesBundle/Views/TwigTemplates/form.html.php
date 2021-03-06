<?php

/*
 * @copyright   2020 mtcextendee.com All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$view->extend('MauticCoreBundle:FormTheme:form_simple.html.php');

?>
<?php
$view['slots']->start('primaryFormContent');
/** @var \MauticPlugin\MauticTwigTemplatesBundle\Entity\TwigTemplatesltiple $twigTemplates */
$twigTemplates = $entity;
$types    = ['plugins', 'themes', 'translations', 'assets'];
?>


<div class="row">
    <div class="col-md-5">
        <?php echo $view['form']->row($form['name']); ?>
    </div>
    <div class="col-md-5">
        <?php echo $view['form']->row($form['category']); ?>
    </div>
    <div class="col-md-2">
        <?php echo $view['form']->row($form['isPublished']); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?php echo $view['form']->row($form['template']); ?>
    </div>
</div>

<div class="ide">
    <?php echo $view['form']->rest($form); ?>
</div>

<?php if (isset($tester)): ?>
    <?php echo $tester; ?>
<?php endif; ?>


<?php $view['slots']->stop(); ?>

