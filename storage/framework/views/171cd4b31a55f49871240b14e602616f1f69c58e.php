<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['titre' => 'Enregistrement']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => 'Enregistrement']); ?>

    <div class="conteneur-enregistrer">
        <div>
            <span class="material-icons">account_circle</span>
            <h2 class="titre-create">Enregistrez-vous</h2>
        </div>

        <div>
            
            <form action="<?php echo e(route('enregistrement.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                
                <div>
                    <label class="label-create" for="prenom">Prénom</label>
                    <div>
                        <input class="input-create" id="prenom" name="prenom" type="text" autocomplete="given-name" autofocus value="<?php echo e(old('prenom')); ?>">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'prenom']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'prenom']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>

                
                <div>
                    <label class="label-create" for="nom">Nom</label>
                    <div>
                        <input class="input-create" id="nom" name="nom" type="text" value="<?php echo e(old('nom')); ?>" autocomplete="family-name">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'nom']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'nom']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>

                
                <div>
                    <label class="label-create" for="email">Courriel</label>
                    <div>
                        <input class="input-create" id="email" name="email" type="email" value="<?php echo e(old('email')); ?>" autocomplete="email">
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
                    <label class="label-create" for="avatar">Avatar (facultatif)</label>
                    <div>
                        <input class="input-create" id="avatar" name="avatar" type="file">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'avatar']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'avatar']); ?>
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
                    <label class="label-create" for="confirm-password">Confirmation du mot de passe</label>
                    <div>
                        <input class="input-create" id="confirm-password" name="confirmation_password" type="password">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.forms.erreur','data' => ['champ' => 'confirmation_password']]); ?>
<?php $component->withName('forms.erreur'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['champ' => 'confirmation_password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    </div>
                </div>

                <div>
                    <button class="btn-create" type="submit">Créez votre compte !</button>
                </div>
            </form>

            <p class="links-create">
                <a class="a-create" href="<?php echo e(route('connexion.create')); ?>">Vous connaissez déjà LaraGPT ?</a>
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
<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\Synthese\cadw_esp_PASTOR_geoffrey\resources\views/auth/enregistrement/create.blade.php ENDPATH**/ ?>