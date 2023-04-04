<form name="contact" id="contact" method="post" action="<?php $config->rootPath(); ?>" class="row gy-3">
    <div class="col-6">
        <label for="firstName" class="form-label">Prénom</label>
        <input type="text" class="form-control" id="firstName" name="firstName" value="<?= $_POST['firstName'] ?? '' ?>" required>
    </div>
    <div class="col-6">
        <label for="lastName" class="form-label">Nom</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= $_POST['lastName'] ?? '' ?>" required>
    </div>
    <div class="col-12">
        <label for="email" class="form-label">Address Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" value="<?= $_POST['email'] ?? '' ?>" required>
    </div>
    <div class="col-12">
        <label for="subject" class="form-label">Objet</label>
        <input type="text" class="form-control" id="subject" name="subject" value="<?= $_POST['subject'] ?? '' ?>" required>
    </div>
    <div class="col-12">
        <label for="mailBody" class="form-label">Nous somme à votre écoute</label>
        <textarea class="form-control" id="mailBody" rows="3" name="mailBody" required><?= $_POST['mailBody'] ?? '' ?></textarea>
    </div>
    <div class="col-12">
        <button type="submit" name="send" id="send" class="btn btn-primary w-100">Envoyer</button>
    </div>
</form>
<p id="errorMessage"></p>
<script src="js/contact_script.js"></script>