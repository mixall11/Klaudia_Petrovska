<?php
/**
 * Template Name: Klaudia – Hlavná stránka
 */
get_header();

// ACF hodnoty (s fallbackom na default)
$tagline = function_exists('get_field') ? get_field('tagline') : 'Matka · Bojovníčka · Žena so srdcom z ocele';
$narodena = function_exists('get_field') ? get_field('narodena') : '13. septembra 1991';
$domov = function_exists('get_field') ? get_field('domov') : 'Slovensko';
$pribeh = function_exists('get_field') ? get_field('pribeh') : '';
$citat = function_exists('get_field') ? get_field('citat') : '„Nezlomí ma to, čo ma raz bolelo — práve to ma urobilo tou, ktorou dnes som."';
$avatar_url = function_exists('get_field') ? get_field('avatar') : '';
?>

<!-- ═══ HERO ═══ -->
<div class="hero">
  <div class="avatar-wrap">
    <?php if ($avatar_url): ?>
      <img class="avatar" src="<?php echo esc_url($avatar_url); ?>" alt="Klaudia Petrovská">
    <?php else: ?>
      <div class="avatar">👩</div>
    <?php endif; ?>
    <div class="avatar-ring"></div>
  </div>
  <h1>Klaudia Petrovská</h1>
  <p class="tagline"><?php echo esc_html($tagline); ?></p>
  <div class="badges">
    <span class="badge">♍ Panna</span>
    <span class="badge">🐐 Rok Kozy</span>
    <span class="badge">👶 Mama dvoch detí</span>
    <span class="badge">💪 Silná žena</span>
  </div>
</div>

<!-- ═══ OSOBNÉ INFO ═══ -->
<section>
  <div class="container">
    <h2 class="section-title">Osobné informácie</h2>
    <p class="section-intro">Základné fakty o výnimočnej žene</p>
    <div class="info-grid">
      <div class="info-card">
        <div class="icon">🎂</div>
        <div class="label">Narodená</div>
        <div class="value"><?php echo esc_html($narodena); ?></div>
      </div>
      <div class="info-card">
        <div class="icon">📍</div>
        <div class="label">Domov</div>
        <div class="value"><?php echo esc_html($domov); ?></div>
      </div>
      <div class="info-card">
        <div class="icon">👧👦</div>
        <div class="label">Deti</div>
        <div class="value">Dve krásne deti</div>
      </div>
      <div class="info-card">
        <div class="icon">♍</div>
        <div class="label">Znamenie</div>
        <div class="value">Panna</div>
      </div>
      <div class="info-card">
        <div class="icon">🐐</div>
        <div class="label">Čínsky zodiak</div>
        <div class="value">Kovová Koza</div>
      </div>
      <div class="info-card">
        <div class="icon">💫</div>
        <div class="label">Životné heslo</div>
        <div class="value">"Nezlomná"</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ PRÍBEH ═══ -->
<section>
  <div class="container">
    <h2 class="section-title">Jej príbeh</h2>
    <p class="section-intro">Cesta, ktorá formovala výnimočnú ženu</p>
    <div class="story-wrap">
      <div class="story-text">
        <?php if ($pribeh): ?>
          <?php echo wpautop(esc_html($pribeh)); ?>
        <?php else: ?>
          <p>Niektoré príbehy sa nezačínajú ľahko. Klaudia Petrovská je dôkazom, že z najtemnejších chvíľ môžu vzísť tí najsilnejší ľudia.</p>
          <p>Vyrastala v časoch, keď okolnosti nepriazne osudu testovali jej charakter každý deň. Namiesto toho, aby sklesla pod tarchou ťažkostí, vybrala si ťažšiu cestu — cestu, ktorú si určila sama. Cestu dôstojnosti, sily a ticha.</p>
          <p>Nikdy nechcela, aby ju niekto ľutoval. Tá hrdosť nie je arogancia — je to hlboký rešpekt k sebe samej, ktorý si vybudovala vtedy, keď ho nikto iný neponúkal.</p>
          <p>Dnes, ako mama dvoch detí, prenáša do ich každodenného života niečo, čo sa nedá kúpiť ani naučiť z kníh — autentickú odolnosť.</p>
          <p>Klaudia nie je dokonalá. Je niečo vzácnejšie — je pravdivá.</p>
        <?php endif; ?>
      </div>
      <blockquote class="story-quote">
        <?php echo esc_html($citat); ?>
        <cite>— Klaudia Petrovská</cite>
      </blockquote>
    </div>
  </div>
</section>

<!-- ═══ VLASTNOSTI ═══ -->
<section>
  <div class="container">
    <h2 class="section-title">Charakter a vlastnosti</h2>
    <p class="section-intro">Čo robí Klaudiu tou, ktorou je</p>
    <div class="traits-grid">
      <?php
      $traits = [
        ['🔥','Nezlomná sila','Dokáže zniesť viac, ako by väčšina ľudí považovala za možné. Nie preto, že je tvrdá — ale preto, že vie, prečo bojuje.'],
        ['💞','Hlboká empatia','Tí, ktorí prežili ťažké chvíle, dokážu pochopiť bolesť druhých spôsobom, ktorý nikto iný nedokáže. Klaudia cíti srdcom.'],
        ['🎯','Cieľavedomosť','Keď si niečo zaumieni, ide za tým bez ohľadu na prekážky. Nie slepá tvrdohlavosť — múdra vytrvalosť.'],
        ['🤫','Hrdá mlčanlivosť','Niektoré veci nehovorí nahlas. Jej boje sú jej vlastné — nenosí ich ako záťaž pred druhými, ale ako medale v srdci.'],
        ['🌱','Materinský inštinkt','Jej deti sú jej najväčšou prioritou. V každom rozhodnutí je prítomná myšlienka — čo je pre nich najlepšie?'],
        ['😂','Zmysel pre humor','Schopnosť smiať sa — aj nad sebou, aj nad životom — je dar, ktorý si dokázala zachovať napriek všetkému.'],
        ['🧠','Praktická múdrosť','Škola života dala Klaudii niečo, čo sa neučí — schopnosť robiť správne rozhodnutia rýchlo, s jasnou hlavou.'],
        ['🤝','Lojálnosť','Ľudia, ktorých pustí do života blízko, sú tam natrvalo. Jej vernosť je vzácna — a preto ju nedáva ľahko.'],
      ];
      foreach ($traits as $t): ?>
      <div class="trait-card">
        <div class="trait-icon"><?php echo $t[0]; ?></div>
        <div>
          <h4><?php echo esc_html($t[1]); ?></h4>
          <p><?php echo esc_html($t[2]); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ HOROSKOPY ═══ -->
<section>
  <div class="container">
    <h2 class="section-title">Hviezdy a predispozície</h2>
    <p class="section-intro">Čo hovorí európsky aj čínsky horoskop</p>
    <div class="horo-grid">
      <div class="horo-card">
        <div class="horo-header">
          <div class="horo-symbol">♍</div>
          <div>
            <div class="horo-name">Panna</div>
            <div class="horo-sub">Európsky zodiak · 23. 8. – 22. 9.</div>
          </div>
        </div>
        <div class="stars">★★★★★</div>
        <div class="horo-traits">
          <span class="horo-tag">Analytická</span>
          <span class="horo-tag">Spoľahlivá</span>
          <span class="horo-tag">Starostlivá</span>
          <span class="horo-tag">Perfekcionistka</span>
          <span class="horo-tag">Praktická</span>
        </div>
        <p><strong>Charakter:</strong> Panna je znamením inteligencie, poriadku a hlbokej zodpovednosti. Ženy Panny nerobia veci napoly — keď sa do niečoho pustia, urobia to naplno a správne.</p>
        <p><strong>Láska a rodina:</strong> Ako matky sú Panny mimoriadne starostlivé. Všimnú si každý detail — čo ich dieťa potrebuje, cíti alebo mlčí.</p>
        <p><strong>Vládca:</strong> Merkúr — planéta komunikácie, myslenia a precíznosti.</p>
      </div>
      <div class="horo-card">
        <div class="horo-header">
          <div class="horo-symbol">🐐</div>
          <div>
            <div class="horo-name">Koza 羊</div>
            <div class="horo-sub">Čínsky zodiak · Rok 1991</div>
          </div>
        </div>
        <div class="stars">★★★★★</div>
        <div class="horo-traits">
          <span class="horo-tag">Kreatívna</span>
          <span class="horo-tag">Umelecká</span>
          <span class="horo-tag">Empatická</span>
          <span class="horo-tag">Pokojná</span>
          <span class="horo-tag">Yin energia</span>
        </div>
        <p><strong>Charakter:</strong> Koza je kreatívna a umelecky založená. Dáva prednosť pokoju pred súťaživosťou — jej sila je tichá, hlboká a autentická.</p>
        <p><strong>Rodina:</strong> Kozy sú výnimočné matky — intuitívne cítia, čo deti potrebujú. Vytvárajú domov, kde sa deti cítia milované a v bezpečí.</p>
        <p><strong>Rok 2025–2026:</strong> Rok Hada prináša Koze obdobie hlbokého osobného rastu a upevňovania vzťahov.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══ GALÉRIA ═══ -->
<section>
  <div class="container">
    <h2 class="section-title">Fotoalbum</h2>
    <p class="section-intro">Momenty, ktoré tvoria príbeh — klikni pre zobrazenie, stiahni originál</p>
    <div class="gallery-grid" id="gallery">
      <?php
      $gallery_items = [
        ['Mama','foto1'],['Deti','foto2'],['Jar','foto3'],['Domov','foto4'],
        ['Radosť','foto5'],['Nový deň','foto6'],['Oslavy','foto7'],['Sila','foto8'],
      ];
      foreach ($gallery_items as $i => $item):
        $src = get_template_directory_uri() . '/photos/' . $item[1] . '.jpg';
      ?>
      <div class="gallery-item" onclick="openLightbox(<?php echo $i; ?>)">
        <img src="<?php echo esc_url($src); ?>" alt="<?php echo esc_attr($item[0]); ?>">
        <div class="gallery-overlay">
          <div class="gallery-caption"><?php echo esc_html($item[0]); ?></div>
          <div class="gallery-actions">
            <button class="btn-view" onclick="event.stopPropagation();openLightbox(<?php echo $i; ?>)">👁 Zobraziť</button>
            <a class="btn-dl" href="<?php echo esc_url($src); ?>" download="klaudia-<?php echo esc_attr($item[1]); ?>.jpg" onclick="event.stopPropagation()">⬇ Stiahnuť</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══ LIGHTBOX ═══ -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <button class="lb-close" onclick="closeLightbox()">✕</button>
  <button class="lb-nav lb-prev" onclick="event.stopPropagation();navigate(-1)">‹</button>
  <button class="lb-nav lb-next" onclick="event.stopPropagation();navigate(1)">›</button>
  <img id="lb-img" src="" alt="" onclick="event.stopPropagation()">
  <div class="lb-bar" onclick="event.stopPropagation()">
    <span class="lb-caption" id="lb-caption"></span>
    <a class="lb-dl" id="lb-dl" href="" download>⬇ Stiahnuť originál</a>
  </div>
</div>

<?php get_footer(); ?>
