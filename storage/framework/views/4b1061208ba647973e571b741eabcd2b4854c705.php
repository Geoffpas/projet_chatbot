<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => ['titre' => 'Conversation']]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['titre' => 'Conversation']); ?>

    <div class="conteneur-lara">
        <header class="header-lara">
            <h1 class="titre-lara">LaraGPT</h1>
            <p>De quoi veux tu parler  <em><?php echo e(auth()->user()->prenom); ?></em> ?</p>
            <?php if(session('succes')): ?>
                <div>
                    <?php echo e(session('succes')); ?>

                </div>
            <?php endif; ?>

            <div class="avatar">
                <?php if(auth()->user()->avatar): ?>
                    <div class="img-conteneur">
                        <img class="img-avatar" src="<?php echo e(Storage::url(auth()->user()->avatar)); ?>" alt="Avatar de <?php echo e(auth()->user()->prenom); ?> <?php echo e(auth()->user()->nom); ?>">
                    </div>
                <?php else: ?>
                    <div class="img-conteneur">
                        <img class="img-avatar" src="<?php echo e(asset('storage/uploads/defaut.jpg')); ?>" alt="Avatar par défaut">
                    </div>
                <?php endif; ?>
            </div>

            <form action="<?php echo e(route('deconnexion')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input class="deco-lara" type="submit" value="Déconnexion">
            </form>
            <a class="a-lara" href="<?php echo e(route('accueil')); ?>">Accueil</a>
        </header>

        <main class="conteneur-msg">
            <div class="conversation">
                <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($message->reponse): ?>
                    <div class="msg-lara">
                        <p><strong>LaraGPT</strong></p>
                        <p><?php echo $message->reponse; ?></p>
                        <p><em><?php echo e($message->created_at->diffForHumans()); ?></em></p>
                    </div>
                    <?php endif; ?>
                    <div class="msg-user">
                        <p><strong><?php echo e($message->user->prenom); ?> <?php echo e($message->user->nom); ?></strong></p>
                        <p><?php echo e($message->question); ?></p>
                        <p><em><?php echo e($message->created_at->diffForHumans()); ?></em></p>
                    </div>
                    <br>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="form-msg">
                <form action="<?php echo e(route('messages.conversation')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <label class="votre-msg">Votre message :</label><br>
                    <textarea type="text" id="question" name="question" maxlength="60" required></textarea><br>
                    <input type="submit" id="envoyer" value="Envoyer">
                </form>
            </div>
        </main>
    </div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php /**PATH F:\MODULE 4\Cadriciel Web (Éric)\Synthese\cadw_esp_PASTOR_geoffrey\resources\views/messages/index.blade.php ENDPATH**/ ?>