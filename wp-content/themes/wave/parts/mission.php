<?php
$missions = [
  array( 
    'title' => '「明日も生きてみたい」と思える社会に。', 
    'desc' => '私たちは、世の中の全ての出来事を見聞きし、体験することはできません。
    でも、「当事者じゃなければわからない」と諦めてしまいたくない。
    当事者に寄り添い、想いを紡ぎ直して社会に届けることで、
    「もし自分だったら？」と、受け取った人の想像力を掻き立てることができるはず。
    自分を、誰かを、社会を信じることは難しい。それでも信じてみたい。
    水面に投げ込まれた小石が、やがて大きな波紋を生むように。
    WAVEは、「明日も生きてみたい」と思える社会の実現を目指します。',
    'icon' => '/images/creatures/cameriguin-1.png',
    'icon_class' => 'mission-penguin',
    'image' => '/images/mission.png'
  ),
  array( 
    'title' => 'こころの声を記録する。', 
    'desc' => 'あなたにしか語れない言葉がある。
    あなたを必要としている人がいる。
    自分の中の奥深いところに押し殺してきた想い。
    誰かに聞いてもらえずに、埋もれてしまった声。
    自分自身でも気が付いていない、秘められた可能性。
    それらをすべてを取り残さず、汲み取り、光を当てる。
    WAVEは、「こころの声」を「伝わる」カタチに変換して記録し、
    届くべく人に届けるために社会に送り出します。',
    'icon' => '/images/creatures/squirtle-outlined.png',
    'icon_class' => 'mission-crocs',
    'image' => '/images/mission.png'
  ),
  array( 
    'title' => '映像は生きている。', 
    'desc' => '濁流のように情報が流れ、絶えず変わりゆく現代社会。
    目の前のことだけを捉えていては、すぐに流されてしまいます。
    伝わっているようで、伝わっていない。
    そんな小さな違和感をそのままにしない。
    時代に消費されず、時が過ぎても色褪せないものを作るために。
    WAVEは、その人の表面や、目に見える活動だけを切り取るのではなく、
    じっくり時間をかけ、奥底にある「想い」を掘り起こしてカタチにします。',
    'icon' => '/images/creatures/polarbear-outlined.png',
    'icon_class' => 'mission-polarbear',
    'image' => '/images/mission.png'
  ),
]
?>

<section class="mission">
  <div class="mission-wave"></div>
  <div class="mission-wrapper">
    <div class="mission-content">
      <h3 class="mission-heading animate-in fade-in">our mission</h3>
      <div class="mission-cards">
        <?php foreach($missions as $mission) {?>
          <article class="mission-card animate-in fade-in">
            <figure class="mission-figure">
              <img src="<?php echo resolve_asset_url($mission["image"])?>" alt="">
            </figure>
            <div class="mission-block">
              <span class="mission-creature <?php echo $mission["icon_class"]?>">
                <img src="<?php echo resolve_asset_url($mission["icon"])?>" alt="">
              </span>
              <span class="mission-number"></span>
              <h4 class="mission-title"><?php echo $mission["title"]?></h4>
              <p class="mission-desc"><?php echo $mission["desc"]?></p>
            </div>
          </article>
        <?php } ?>
      </div>
    </div>
    <?php import_part('values')?>
  </div>
</section>