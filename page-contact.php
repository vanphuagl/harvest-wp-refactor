<?php get_header(); ?>
    
    <!-- @main -->
    <main class="contactpage">
        <!-- contact// -->
        <div class="contact">
            <div class="contact_container">
                <div class="contact_wrapper">
                    <div class="contact_heading c-heading">
                        <span></span>
                        <h2>CONTACT</h2>
                    </div>
                    <div class="contact_desc">
                        お仕事のご依頼やご相談はお問い合わせフォームまたはお電話にて承ります。<br />
                        <a href="<?= home_url(); ?>/privacy-policy/">プライバシーポリシー</a>をご確認頂き、同意の上、送信して下さい。
                    </div>
                    <div class="contact_info">
                        <div class="contact_info_content">
                            <p>TEL：<a href="tel:03-6820-0207">03-6820-0207</a></p>
                            <p><span>担当：入野 恵</span> | Megumi Irino</p>
                        </div>
                    </div>

                    <div class="contact_form">
                        <h3>※印は入力必須項目です</h3>

                        <?php echo do_shortcode('[contact-form-7 id="56a1b57" title="お問い合わせ" html_id="myForm"]') ?>

                        <!-- # -->
                        <div class="contact_checkbox">
                            <input id="js-checkbox" name="checkbox" type="checkbox">
                            <div class="privacy">
                                <a href="<?= home_url(); ?>/privacy-policy/">プライバシーポリシー</a>に同意します。
                            </div>
                        </div>
                        <!-- # -->
                        <div class="contact_submit js-send">
                            <input type="submit" form="myForm" id="btnSend" class="btn" value="SEND">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //contact -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>