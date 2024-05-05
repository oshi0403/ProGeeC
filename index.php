<?php get_header(); ?>

<?php //▼▼ 既存ページヘ埋め込み時はまるっとコピペ下さい （この行も含みページ最上部に）※.phpでかつUTF-8のページのみ可▼▼
//※このページに対して既存のページのhtmlを記述する形でももちろんOKです。
//----------------------------------------------------------------------
// トップページ表示用ページ
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
include_once("pkobo_news/admin/include/config.php");//（必要に応じてパスは適宜変更下さい）
$img_updir = 'pkobo_news/upload';//画像保存パス（必要に応じてパスは適宜変更下さい）

/* ▽オプション設定▽ */

//表示件数
$config['dspNum'] = 10;

//本文の抜粋を表示するかどうか（0=しない、1=する）
$commentDsp = 1;

//本文を抜粋表示する場合の表示文字数 （単位はバイト。全角文字は「2バイト」で1文字となります。また末尾の文字「...」も含みます）
//※htmlタグは削除されます「0」にすれば全文をhtmlもそのままで表示します。（レイアウトに問題が出る可能性があるのでオススメしません）
$commentNum = 200;

//サムネイルを表示するか（0=しない、1=する）※アップファイルの1枚目が画像の場合のみ有効
$dspThumbNail = 1;

//表示するカテゴリを指定（指定なし（空）の場合は全件表示 ※デフォルト）
//このページで特定カテゴリのみ表示したい場合、0からの番号を指定下さい。 （1番目が0，2番目が1になるので注意）
//要するに複数のカテゴリがある場合でそれぞれ別々のファイルで表示したい場合用です
//このファイルを複製すればOKです（カテゴリごとにデザインを変えたい場合など）
//例　$category = '1'; ※この場合カテゴリ番号「1」（設定ファイルでの2番目）の記事のみが表示されます
$category = '';
//またはURLのパラメータでも指定可能です。番号ルールは↑と同じです。例　URLに ?cat=0 や ?cat=1 を追加するだけです
//1ファイルでパラメータを変えるだけでそれぞれのカテゴリを表示できるので便利です。（全カテゴリでデザインは共通で良い場合）

//----------------------------------------------------------------------
// 設定ファイルの読み込みとページ独自設定
//----------------------------------------------------------------------
//▲▲ コピペここまで ▲▲（この行も含む）?>

<main class="main">
    <section id="top__content-about">
        <div>
            <div class="top__content-about_1">
                <h1>プロフェッショナル</h1>
            </div>
            <div class="top__content-about_2">
                <h1>で溢れる社会に</h1>
            </div>
        </div>
    </section>
    <section id="top__content-company">
        <div>
            <div class="top__content-title top__content-company-title">
                <h1>COMPANY</h1>
            </div>
            <div class="top__content-company-detail">
                <div class="top__content-company-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_ProGeeC_1.jpg" alt="イメージ画像"></src>

                </div>
                <div class="top__content-company-text">
                    <h1>～代表挨拶～</h1>
                    <p>代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部代表挨拶の一部</p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/company">Read More</a>

                </div>


            </div>

        </div>
    </section>
    <section id="top__content-service">
        <div>
            <div class="top__content-title top__content-service-title">
                <h1>SERVICE</h1>
            </div>
            <div class="top__content-service-detail">
                <div class="top__content-service-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/logo_ProGeeC_1.jpg" alt="イメージ画像"></src>
                </div>

                <div class="top__content-service-text">
                    <h1>キャッチコピー</h1>
                    <p>文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります文章が入ります</p>
                    <a class="component__btn-readmore" href="<?php echo home_url(); ?>/service">Read More</a>
                </div>


            </div>
        </div>
    </section>
    <section id="top__content-news">
        <div class="top__content-news-detail">
            <div class="top__content-title top__content-news-title">
                <h1>NEWS</h1>
            </div>
            <div id="newsWrap">
                <ul id="newsList">

                    <?php if (!$copyright) {
                        echo $warningMesse;
                        exit;
                    } else {
                        $getFormatDataArr = getLines2DspData($file_path, $img_updir, $config, '', $category);
                        foreach ($getFormatDataArr as $key => $data) { ?>

                            <li id="postID_<?php echo $data['id']; ?>" class="cat-<?php echo $data['categoryNum']; ?> clearfix">
                                <span class="up_ymd"><?php echo $data['up_ymd']; //日付表示
                                                        ?></span>
                                <?php if (!empty($data['category'])) echo '<span class="catName">' . $data['category'] . '</span>'; //カテゴリ名表示
                                ?>
                                <span class="title"><?php echo $data['title']; //タイトル表示
                                                    ?></span>
                                <?php if ($data['newmark'] == 1) echo ' <span class="newMark">New!</span>'; //New表示。タグ変更可（表示期間は設定ファイルで）
                                ?>

                                <!--　サムネイルと本文表示（不要な場合削除OK）-->
                                <?php if (dspThumb($data) || ($commentDsp == 1 && !empty($data['comment'][0]))) { ?>
                                    <div class="clearfix">
                                        <span class="thumbNailWrap"><?php echo (dspThumb($data)) ? dspThumb($data, 100) : '　'; //サムネイル表示（数字は表示幅）サムネイルが無い場合には空白を入れておく（NoPhotoなどのimg画像でもOKです）
                                                                    ?></span>
                                        <span class="comment"><?php if ($commentDsp == 1) echo str2Format($data['comment'], $commentNum, $config['encodingType']); //本文抜粋表示。表示する設定の場合のみ
                                                                ?></span>
                                    </div>
                                <?php } ?>
                                <!--　/サムネイルと本文表示（不要な場合削除OK）-->

                            </li>

                        <?php } ?>
                </ul>
            </div>
        <?php echo $copyright;
                    } //著作権表記削除不可
        ?>

        <a class="component__btn-readmore" href="<?php echo home_url(); ?>/news">Read More</a>

        </div>
    </section>
    <section id="top__content-recruit">
        <div>
            <div class="top__content-title top__content-recruit-title">
                <h1>RECRUIT</h1>
            </div>
            <div class="top__content-recruit-detail">
                <h1>採用情報</h1>
                <p>採用情報の本文採用情報の本文採用情報の本文採用情報の本文採用情報の本文採用情報の本文</p>
                <a class="component__btn-readmore" href="<?php echo home_url(); ?>/recruit">Read More</a>
            </div>


        </div>
    </section>
    <section id="top__content-contact">
        <div>
            <div class="top__content-title top__content-contact-title">
                <h1>CONTACT</h1>
            </div>
            <div class="component__contact__form">
                <h1>お問い合わせフォーム</h1>
                <form action="<?php echo home_url(); ?>/confirm" method="post" enctype="application/x-www-form-urlencoded">
                    <label for="worker">転職をお考えの方:</label>
                    <input type="radio" id="worker" name="which" value="求職者" autocomplete="off">
                    <label for="company">企業の方:</label>
                    <input type="radio" id="company" name="which" value="企業" autocomplete="off"><br>
                    <label for="name">名前：</label><br>
                    <input type="text" id="name" name="name" autocomplete="off"><br>
                    <label for="email">メールアドレス：</label><br>
                    <input type="email" id="email" name="email" autocomplete="off"><br>
                    <label for="tel">電話番号:</label><br>
                    <input type="tel" id="tel" name="tel" autocomplete="off"><br>
                    <label for="com-name">企業名（任意）</label><br>
                    <input type="text" id="com-name" name="com-name" autocomplete="off"><br>
                    <label for="content">お問い合わせ内容（詳細）:</label><br>
                    <textarea id="content" name="content" wrap="hard" autocomplete="off"></textarea><br>
                    <label for="agree"><a href="<?php echo home_url(); ?>/policy">個人情報の取り扱いについて(プライバシーポリシー)</a></label><br>
                    <p>同意する<input type="checkbox" id="agree" name="agree" value="同意する"></p><br>

                    <input type="submit" id="submit" name="submit">

                </form>

            </div>


        </div>
    </section>
</main>
<!-- <a href = "?php echo home_url(); ?/policy">はホーム画面のurlに/policyを足すっていう意味 -->

<?php get_footer(); ?>