<!-- ******SIGNUP SECTION****** --> 
<section id="signup" class="signup">
    <div class="container text-center">
        <h2 class="title"><?=t('signup2_title',$dict)?></h2>
        <p class="summary"><?=t('signup2_sub',$dict)?></p>
        
        <?php if (isset($_GET['signup']) && $_GET['signup'] === 'success'): ?>
            <div class="alert alert-success mx-auto" style="max-width: 600px;" role="alert">
                <i class="fas fa-check-circle"></i> <?=t('signup_success',$dict)?>
            </div>
        <?php endif; ?>
        
        <form class="signup-form" method="post" action="/signup_handler.php">
            <input type="hidden" name="lang" value="<?=htmlspecialchars($lang, ENT_QUOTES, 'UTF-8')?>">
            <input type="hidden" name="return_url" value="<?=htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8')?>">
            <div class="form-group">
                <label class="sr-only" for="semail"><?=t('your_email',$dict)?></label>
                <input type="email" id="semail" name="email" class="form-control" placeholder="<?=t('email_placeholder',$dict)?>" required>
            </div>
            <button type="submit" name="signup_submit" class="btn btn-cta btn-cta-primary"><?=t('signup_btn',$dict)?></button>
        </form>
    </div>
</section>
