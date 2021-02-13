<?php require_once("inc/head.php") ?>

<?php require_once("inc/nav.php") ?>

<?php 
require_once("config/db.php");

$sql = "SELECT * FROM newsletter_tbl";
$query = mysqli_query($conn, $sql);

?>

<div class="form-cont">
    <p>Suscribe To Our Newsletter.</p>
    <?php if(isset($_GET['err'])){?>
        <p class="text-danger"><?php echo $_GET['err']; ?></p>
    <?php }else if(isset($_GET['msg'])){?>
        <p class="text-success"><?php echo $_GET['msg']; ?></p>
    <?php }?>
    <form action="send_mail.php" method="post" class="form-group">
        <label>Emails</label>
        <select name="emails"  class="form-control mt-2">
            <option value="">----Select user---</option>
            <?php while($res = mysqli_fetch_assoc($query)){?>
                <option value="<?php echo $res['email']; ?>"><?php echo $res['username'];?> | <?php echo $res['email']; ?></option>
            <?php }?>
        </select>
        <label>Message</label>
        
        <textarea name="body" cols="30" rows="6" class="form-control mt-2"></textarea>

        <input type="submit" name="submit" class="btn btn-info mt-2 btn-block">
    </form>
</div>

<?php require_once("inc/footer.php") ?>