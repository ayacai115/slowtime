<?php get_header(); ?>

<!-- ==== トップ画像 ==== -->
<div class="jumbotron jumbotron-front">
  <h2 class="wf-sawarabigothic">飛騨古川で酵素風呂、<br><br>始めてみませんか？</h2>
</div>


<!-- ==== 薬草＋クレニオ ==== -->
<div class="thumbnail-wrapper container">
  <h2>ー　Slow Timeでくつろぐ　ー</h2>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-5">
      <div class="thumbnail">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/yakuso-top.JPG" alt="薬草酵素温浴">
        <div class="caption">
          <h3>薬草酵素温浴</h3>
          <p>ヒノキのおがくずと10種類の薬草をブレンドしたものを発酵させたのが、Slow Timeの薬草酵素温浴です。30分横になるだけで、身体の芯から温まることができ、血流とリンパの流れを活性化させます。また、ヒノキには森林浴の効果もあり、身体の健康にくわえて、癒しや安らぎを得ることができます。</p>
          <p><a href="<?php echo esc_url( home_url( '/yakuso') ); ?>" class="btn btn-success" role="button">もっと読む</a></p>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-5">
      <div class="thumbnail">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/cranio-top.jpg" alt="クレニオセイクラルワーク">
        <div class="caption">
          <h3>クレニオセイクラルワーク</h3>
          <p>身体の芯からあたたまったあとはクールダウン。クレニオセイクラルワークとは、アメリカ発祥の技術で、脳脊髄液の流れを整えることによって心身の調子をととのえることができます。お客様のご希望に合わせて、ピンポイントから全身まで幅広くケアさせていただきます。</p>
          <p><a href="<?php echo esc_url( home_url( '/cranio') ); ?>" class="btn btn-success" role="button">もっと読む</a></p>
        </div>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.thumnail-wrapper -->

<!-- ==== おすすめコース ==== -->
<div class="recommend-wrapper">
  <h3>ー　酵素温浴　ー</h3>
  <h2>30分   3780円<small>(税込)</small></h2>
  <p>詳しくはこちら↓</p>
  <div class="course-btn">
    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>">コース・料金</a>
  </div>
</div>

<!-- ==== 予約・問い合わせはこちら ==== -->
<div class="contact-wrapper">
  <h3 class="contact-wrapper-title">ー　ご予約・お問い合わせ　ー</h3>
  <div class="booking-btn">
    <a href="<?php echo esc_url( home_url( '/booking') ); ?>">ご予約</a>
  </div>
  <p>※当日のご予約はお電話にてお願い致します。</p>
  <p>※お問い合わせはお電話のみにて承っております。</p>
  <h3>TEL 0120-78-2340</h3>
  <p>営業時間  　10:00-18:30(最終受付17:30)</p>
  <p>定休 日・月曜</p>
</div>

<?php get_footer(); ?>
