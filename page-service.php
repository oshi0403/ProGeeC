<?php
/*
* Template Name: service
*/
?>

<?php get_header();?>

<main>
    <div class = "p__service__all-grid">
        <div class = "p__service__mv">
            <h1>Employmet Agency</h1>
        </div>
        <section id = "p__service_all">
            <h1>貴社人材の母集団形成からサポートさせていただきます</h1>
            <p>
                当社の人材紹介事業では、
                リクルーティングアドバイザー（RA）がお預かりした求人情報を基に、
                キャリアアドバイザー（CA）がキャリアカウンセリングを実施。
                適切なマッチングを行い、貴社の採用ターゲットに合った適切な人材をご紹介します。
            </p>
        </section>

        <section id = "p__service_toB">
            <div class= "p__service__text">
                <h1>企業側向けサービス内容</h1>
            </div>
            <div class= "p__service__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/toB-service.png" alt="toB用の紹介画像"></src>
            </div>
        </section>
        
        <section id = "p__service_toC">
            <div class= "p__service__text">
                <h1>求職者向けサービス内容</h1>
            </div>
            <div class= "p__service__image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/toC-service.png" alt="toC用の紹介画像"></src>
            </div>
        </section>
    </div>
</main>

<?php get_footer();?>