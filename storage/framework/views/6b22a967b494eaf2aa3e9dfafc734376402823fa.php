<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['titre' => 'LaraGPT']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => 'LaraGPT']); ?>

    <div class="conteneur-accueil">
        <header class="header-accueil">
            <h1 class="titre-accueil">LaraGPT</h1>
            <div class="links-accueil">
                <a class="a-accueil" href="<?php echo e(route('connexion.create')); ?>">Connexion</a>
                <a class="a-accueil" href="<?php echo e(route('enregistrement.create')); ?>">Test moi !</a>
            </div>
        </header>

        <div>
            <?php if(session('succes')): ?>
                <div>
                    <?php echo e(session('succes')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\Synthese\cadw_esp_PASTOR_geoffrey\resources\views/index.blade.php ENDPATH**/ ?>