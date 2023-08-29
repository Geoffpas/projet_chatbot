<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['titre' => 'Connexion']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => 'Connexion']); ?>

    <div class="conteneur-create">
        <div>
            <span class="material-icons">wifi</span>
            <h2 class="titre-create">Connectes toi !</h2>
        </div>

        <?php if(session('email')): ?>
            <p><?php echo e(session('email')); ?></p>
        <?php endif; ?>

        <div>
            
            <form action="<?php echo e(route('connexion.authentifier')); ?>" method="POST">
                <?php echo csrf_field(); ?>

                
                <div>
                    <label class="label-create" for="email">Courriel</label>
                    <div>
                        <input class="input-create" id="email" name="email" type="email" autocomplete="email" value="<?php echo e(old('email')); ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'email']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'email']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>

                
                <div>
                    <label class="label-create" for="password">Mot de passe</label>
                    <div>
                        <input class="input-create" id="password" name="password" type="password" autocomplete="current-password">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'password']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>

                <div>
                    <button class="btn-create" type="submit">Rejoins-moi !</button>
                </div>
            </form>

            <p class="links-create">
                <a class="a-create" href="<?php echo e(route('enregistrement.create')); ?>">Pas de compte ?</a>
                <a class="a-create" href="<?php echo e(route('accueil')); ?>">Accueil</a>
            </p>
        </div>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\Synthese\cadw_esp_PASTOR_geoffrey\resources\views/auth/connexion/create.blade.php ENDPATH**/ ?>