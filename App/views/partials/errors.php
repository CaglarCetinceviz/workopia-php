<?php if (isset($errors)) : ?>
    <?php foreach ($errors as $error) : ?>
        <div class="message border rounded bg-red-100 my-3"> <?= $error ?></div>
    <?php endforeach; ?>
<?php endif; ?>