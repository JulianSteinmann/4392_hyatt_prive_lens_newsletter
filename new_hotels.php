<?php
$page_title = "New Openings - Hyatt Privé Lens";
$page_description = "What do cosmopolitan capitals, trendy waterfront neighborhoods, and the world’s most iconic man-made island have in common? All are home to some of Hyatt’s most exciting new hotels worldwide.";
$next_page = "hyatt_ski_resorts.php";
$pdf_file_name = "hyatt-prive-lense-v1-new_hotels.pdf";
include "template_parts/header.php" ?>

<?php // Helper function to change text once hotels are open
function is_hotel_open($opening_date, $text_closed, $text_open) {
  $date_now = date("Y-m-d"); // this format is string comparable
  if ($date_now > $opening_date) {
    echo $text_open;
  }else{
    echo $text_closed;
  }
}
?>


<main class="page--content">
  <picture>
    <source media="(min-width: 1500px)" srcset="img/new_hotels_lhrub_p002_exterior_evening_xl.jpg">
    <source media="(min-width: 1200px)" srcset="img/new_hotels_lhrub_p002_exterior_evening_l.jpg">
    <source media="(min-width: 900px)" srcset="img/new_hotels_lhrub_p002_exterior_evening_m.jpg">
    <img src="img/new_hotels_lhrub_p002_exterior_evening_s.jpg" class="header__img" width="100%" alt="Hyatt Privé Lens – Banner">
  </picture>
  <div class="container container--content">

  <div class="card--content fade-contents">

    <section class="content-section">
      <h5>NEW OPENINGS STORY</h5>
      <h1>Now Booking: Six New and Noteworthy Hyatt Hotels Opening Worldwide</h1>
      <p>What do cosmopolitan capitals, trendy waterfront neighborhoods, and the world’s most iconic man-made island have in common? All are home to some of Hyatt’s most exciting new hotels worldwide. Brands will make their debut soon in beloved destinations like Dubai and London, while Hyatt’s highly-anticipated return to New Zealand opens in Auckland. Get to know a few of the newest additions to Hyatt’s global portfolio below.</p>
    </section>
    <div class="bg-image--content bg-image--content--top-left bg-image--content--outside">
      <img src="img/new_hotels_selaz_p001_king_guestroom.jpg" alt="">
    </div>
    <section class="content-section content-section--right">
      <h2>Andaz Dubai The Palm</h2>
      <p>See those gleaming towers rising over The Palm Jumeirah? Andaz has arrived in Dubai at last. Located on the iconic, tree-shaped Palm Jumeirah island, <a href="https://www.hyatt.com/en-US/hotel/dubai/andaz-dubai-the-palm/dxbct?src=corp_lclb_gmb_seo_swa_dxbct" class="content-link" target="_blank">Andaz Dubai The Palm</a> channels the colors and energy of Arabia throughout its 217 guest rooms and 115 serviced apartments. Travelers immerse themselves in Middle Eastern-inspired flavors and spices at one of five distinct dining experiences while reveling in pop-up art exhibitions featuring local talent. On the 14th floor, true tranquility awaits at the Ora boutique spa. <strong><a href="https://www.hyatt.com/en-US/hotel/dubai/andaz-dubai-the-palm/dxbct?src=corp_lclb_gmb_seo_swa_dxbct" class="content-link" target="_blank">Andaz Dubai The Palm</a> is now open.</strong></p>
    </section>

    <div class="bg-image--content bg-image--content--bottom-right">
      <img src="img/new_hotels_dxbct_p037_standard_king_guestroom.jpg" alt="">
    </div>
    <section class="content-section content-section--left">
      <h2>Andaz Seoul Gangnam</h2>
      <p>Debuting in 2019, <a href="https://www.hyatt.com/en-US/hotel/south-korea/andaz-seoul-gangnam/selaz?src=corp_lclb_gmb_seo_aspac_selaz" class="content-link" target="_blank">Andaz Seoul Gangnam</a> marks the fifth Hyatt-branded hotel in South Korea and the first Andaz. The hotel is right at home within the Gangnam district’s Apgujeong neighborhood, known for its high-end shopping and K-Pop studios. The style and sounds of this vibrant corner of the capital are celebrated in every design detail, drawing inspiration from bojagi, traditional Korean patchwork weaving art. Meanwhile, Seoul’s immersive alleyway eateries are elevated to surprising heights at Jogakbo, an exciting multi-concept space for dining and drinking. <a href="https://www.hyatt.com/en-US/hotel/south-korea/andaz-seoul-gangnam/selaz?src=corp_lclb_gmb_seo_aspac_selaz" class="content-link" target="_blank">Andaz Seoul Gangnam</a> <strong>is now open.</strong></p>
    </section>

    <div class="bg-image--content bg-image--content--top-left ">
      <img src="img/new_hotel_lhrub_p021_the_parlour_no_plant.jpg" alt="">
    </div>
    <section class="content-section content-section--right">
      <h2>Great Scotland Yard</h2>
      <p>The United Kingdom is set to welcome the first hotel to open under The Unbound Collection By Hyatt brand. <a href="https://www.hyatt.com/en-US/hotel/united-kingdom/great-scotland-yard/lhrub?src=corp_lclb_gmb_seo_eame_lhrub" class="content-link" target="_blank">Great Scotland Yard</a> is ready for a “smashing” debut in London. The former headquarters of the Metropolitan Police is now a one-of-a-kind luxury hotel, where a storied past is etched onto nearly every inch of the new, bespoke design. There are 153 stylish bedrooms and 11 suites, including a connected five-story townhouse, offering a uniquely intimate stay for the most discerning travelers. Secret doors conceal more hidden rooms, while celebrity chef Robin Gill brings a taste of the English countryside to the beating heart of Britain’s capital. <a href="https://www.hyatt.com/en-US/hotel/united-kingdom/great-scotland-yard/lhrub?src=corp_lclb_gmb_seo_eame_lhrub" class="content-link" target="_blank">Great Scotland Yard</a><strong> is now open.</strong></p>
    </section>

    <div class="bg-image--content bg-image--content--top-right bg-image--content--outside">
      <img src="img/new_hotels_iadth_r007_exterior.jpg" alt="">
    </div>
    <section class="content-section content-section--left">
      <h2>Thompson Washington D.C.</h2>
      <p>Designed to be a gathering place for Washingtonians and visitors alike, <a href="https://www.hyatt.com/en-US/hotel/washington-dc/thompson-washington-dc/iadth?src=corp_lclb_gmb_seo__iadth" class="content-link" target="_blank">Thompson Washington D.C.</a> <?php is_hotel_open('2020-03-01', 'is set to open in early 2020.', 'opened in early 2020.') ?> The 225-room lifestyle hotel is steps from the Anacostia River and poised to become the social anchor of its trendy Navy Yards neighborhood. A rooftop bar and multiple restaurants on-site invite spirited conversation, pairing perfectly with a stroll along the Riverwalk Trail or an exciting baseball game at nearby Nationals Park. Its design pays homage to the industrial and maritime history of the area, featuring elements of naval style as well as copper and metalwork. <a href="https://www.hyatt.com/en-US/hotel/washington-dc/thompson-washington-dc/iadth?src=corp_lclb_gmb_seo__iadth" class="content-link" target="_blank">Thompson Washington D.C.</a><strong> <?php is_hotel_open('2020-03-01', 'is accepting bookings from March 1, 2020.', 'is now open.') ?></strong></p>
    </section>

    <div class="bg-image--content bg-image--content--top-left bg-image--content--outside">
      <img src="img/new_hotels_ph_aukland.jpg" alt="">
    </div>
    <section class="content-section content-section--right ">
      <h2>Park Hyatt Auckland</h2>
      <p>Kia ora, New Zealand! <a href="https://www.hyatt.com/en-US/hotel/new-zealand/park-hyatt-auckland/aklph" class="content-link" target="_blank">Park Hyatt Auckland</a> <?php is_hotel_open('2020-03-01', 'opens', 'opened') ?> its doors in early 2020, marking Hyatt’s return to New Zealand. Poised on the water’s edge in stylish Wynyard Quarter, this modern hotel offers sweeping views over Waitematā Harbour—an enviable position ahead of the 2021 America’s Cup. Also overlooking the water is a 25-meter infinity pool, ideal for a refreshing dip after a luxurious spa treatment or afternoon spent lounging on the sun deck. Residential-inspired guest rooms and suites are elegantly appointed in rich woods, marble, and brass finishes, exuding luxury around every corner. In true Park Hyatt fashion, an elevated culinary experience awaits, featuring premium produce and in-season ingredients from around New Zealand. <a href="https://www.hyatt.com/en-US/hotel/new-zealand/park-hyatt-auckland/aklph" class="content-link" target="_blank">Park Hyatt Auckland</a> <strong><?php is_hotel_open('2020-03-01', 'is accepting bookings from March 1, 2020.', 'is now open.') ?></strong></p>

    </section>

    <div class="bg-image--content bg-image--content--bottom-right">
      <img src="img/new_hotels_itmph_p105_hotel_exterior.jpg" alt="">
    </div>
    <section class="content-section content-section--left ">
      <h2>Park Hyatt Kyoto</h2>
      <p>Combining heritage guesthouse architecture with interiors by renowned hospitality designer Tony Chi, the newly-opened <a href="https://www.hyatt.com/en-US/hotel/japan/park-hyatt-kyoto/itmph" class="content-link" target="_blank">Park Hyatt Kyoto</a> is poised to welcome guests with unrivaled omotenashi. This traditional Japanese hospitality philosophy presents luxury in every detail. Nestled beside the Kōdaiji Temple within the historic Higashiyama district, Park Hyatt Kyoto is an intimate hillside retreat designed in harmony with its peaceful surroundings. This serene setting is ideal for enjoying the region’s splendid seasons—including magnificent cherry blossoms—or for travelers planning a deeper exploration of Japan ahead of the 2020 Tokyo Olympics. <a href="https://www.hyatt.com/en-US/hotel/japan/park-hyatt-kyoto/itmph" class="content-link" target="_blank">Park Hyatt Kyoto</a> <strong>is now open.</strong></p>
    </section>
  </div>
</main>

<?php include "template_parts/footer.php" ?>
