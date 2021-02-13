<?php require_once("config/db.php") ?>

<?php require_once("inc/head.php") ?>

<?php require_once("inc/nav.php") ?>


<div class="form-cont">
    <p>Suscribe To Our Newsletter.</p>
    <?php if(isset($_GET['err'])){?>
        <p class="text-danger"><?php echo $_GET['err']; ?></p>
    <?php }else if(isset($_GET['msg'])){?>
        <p class="text-success"><?php echo $_GET['msg']; ?></p>
    <?php }?>
    <form action="reguser.php" method="post" class="form-group">
        <label>Username</label>
        <input type="text" name="username" class="form-control mt-2">
        <label>Email</label>
        <input type="email" name="email" class="form-control mt-2">

        <input type="submit" name="submit" class="btn btn-info mt-2 btn-block">
    </form>
</div>

<?php require_once("inc/footer.php") ?>