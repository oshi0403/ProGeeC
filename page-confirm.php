<?php
/*
* Template Name: confirm
*/
?>

<?php get_header();?>

<main>
            <div class = "p__confirm__container">
                <div class = "p__confirm__title">
                    <h2>お問い合わせ内容の確認</h2>
                    <P>内容を確認し、問題がなければ送信を押してください</P>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="cbc7d22" title="お問い合わせフォーム(確認画面)"]'); ?>

                <!-- <div class = "c__confirm__table">
                    <form action = "<?php //echo home_url();?>/mailto.php" method = "post">
                        <table class = "c__confirm__table__inner">
                            <thead class = "c__confirm__table__header">
                                <tr class = "c__confirm__table__row">
                                    <th></th>
                                    <td>入力内容</td>
                                    
                                </tr>
                            </thead>
                            <tbody class = "c__confirm__table__body">
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>分類</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["which"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>名前</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["name"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>メールアドレス</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["email"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>電話番号</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["tel"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>企業名（任意）</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["com-name"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title"><p>お問い合わせ内容</p></th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["content"]) ?></td>
                                    </tr>
                                    <tr class = "c__confirm__table__body__row">
                                        <th class = "c__confirm__table__body__title">個人情報の取り扱いについて</th>
                                        <td class = "c__confirm__table__body__text"><?php //echo($_POST["agree"]) ?></td>
                                    </tr>
                                </tbody>
                            
                        </table>
                        
                        <input type = "submit" id = "submit" name ="submit">
                    </form>
                </div> -->
            </div>
        </main>

<?php get_footer();?>
