<?php
/*
 * Template Name: Trips (ACF)
 * Template Post Type: post
 */

// START ACF FIELDS


$themeurl = get_bloginfo('template_url');
$ID = get_the_id();

//INFORMATION
$leaders = get_field("leaders", false);
$statement = get_field("statement");
$dates = get_field("dates");
$paragraph = get_field("paragraph");

//EXPERIENCE PROFILE
$stay = get_field("stay");
$style = get_field("style");
$activities = get_field("activities");
$cuisine = get_field("cuisine");
$moments = get_field("moments");

//BANNER W/ TEXT
$image = get_field("image");
$text = get_field("text");

//PRICING
$whats_included = get_field("whats_included");
$whats_not_included = get_field("whats_not_included");
$price = get_field("price");
$note = get_field("note");
$cta = get_field("cta");

//IMAGE GRID
$layout = get_field("layout");
$grid_images = get_field("grid_images");

// END ACF FIELDS

get_template_part( 'header' );

get_template_part( 'content' ); ?>


<section class="light-trip">
  <div class="container">
    <div class="book">
      <a href="http://localhost/tolve/booking/">book now</a>
    </div>
    <span class="bar-strong">&nbsp;</span>
    <?php the_title('<h1>', '</h1>'); ?>
    
    <?php if ($leaders): ?>
      <h6 style="margin-block-start: 0.7em">
        <?php echo $leaders; ?>
      </h6>
    <?php endif; ?>

    <div class="mood-phrase">
      Passionate, proud, sultry, SULTRY, rich in tradition,
      &amp;&nbsp;creatively ingenious. Cuba’s&nbsp;style evokes an essence and
      <i>sway</i> unlike any other.
    </div>
    <div class="trip-overview">
      <h4 class="right">
        DATES: Three Options Oct. 21-27, 2023 Dec. 29-Jan. 4, 2023-24 Mar. 1-7,
        2024
      </h4>
      <h6 class="right">7 days, 6 nights</h6>
      <h6 style="margin-block-start: 0em">&nbsp;</h6>
      <h4 class="right">All-inclusive price PP $4950</h4>
      <h6 class="right"></h6>
      <h6 class="right">Group size: 8 travelers</h6>
      <p class="story">
        If your soul has an untamed and insatiable curiosity for the exotic (as
        ours does) then likely you have had the desire to travel to CUBA. A
        country that stands still in time, a postage stamp of culture insulated
        from the rest of the world, and “heartbreakingly beautiful” as Bourdain
        puts it. We travel to the island in collaboration with Del Caimán, a
        non-profit founded by Cubans to empower diverse artists with a platform
        and connection to the global community. “Cuban ART is a monument to
        perseverance”, a word that could easily describe much of the culture and
        way of life in CUBA.
      </p>
      Perseverant, yes. Also, passionate, proud, sultry, rich in tradition, and
      creatively ingenious. Cuban’s style evokes an essence and sway unlike any
      other. Their kindness is infectious, music and art a form of storytelling,
      and rum an elixir of the gods that makes for the perfect daiquiri. Havana,
      the capital, is rich with architectural buildings of a bygone era,
      lingering facades, stunning in form and beauty, remnants of once colonial
      opulence. Cars from the ‘50s and plumes of smoke from hand rolled cigars
      off the lips of elders have vibrant presence, while outside the capital
      bleached out beaches and glistening shorelines contrast the islands
      interior of rugged terrain and tobacco fields as far as the eye can see.
      Curious to journey deeper into the essence CUBA? We visit Cuba through the
      eyes of Cubans. With an early afternoon arrival in Havana, we welcome the
      heat and are whisked out of the city to an exquisite private mountain
      retreat in Terrazas. Situated in a UNESCO biosphere this western region is
      expansive and beautiful – the air is fresh and the tropical swimming holes
      seductive. After an evening immersed in nature, we continue to Viñales,
      where rugged vignettes frame the mountains and valleys as if from a dream
      – breathtaking and picturesque, tobacco claiming its presence, captivating
      the senses. Here we find connection with one of the islands staple crops
      and legacy for the best cigars in the world. On the third day we escape to
      the coast experiencing the wild and remote white sand beach of Cayo Jutia,
      a paradise only for those who know where to look. After moments of
      tranquility, reflection, and rejuvenation amidst the expansive Caribbean
      blue we journey back to the countryside for a Cuban style pig roast
      reveling in a style of living authentic to the island's interior.
      <i
        >For NYE dates, this is where we will unravel the evening in private
        style, inclusive of beer &amp; rum welcoming the new year!</i
      >

      In beautiful contrast to the outlying regions of the island our final two
      days are spent exploring Havana - immersing in the most iconic landmarks,
      wandering the plazas, and driving the streets from the vantage point of a
      classic car. While the sun dips into the horizon we tuck into acclaimed
      restaurants and bars, once frequented by the likes of Ernest Hemingway,
      often accompanied by dance and local music.
      <h5>Experience Profile</h5>
      <span class="bar-thin">&nbsp;</span>
      <ul>
        <h6>STAY</h6>
        <li>Casa Particulares / Guest houses &nbsp;</li>
        <h6>STYLE</h6>
        <li>History, Culture &amp; Art, Immersive, UNESCO sites</li>
        <h6>ACTIVITIES</h6>
        <li>
          Walking explorations, Photography, Beaches, Caves, Tobacco farms
        </li>
        <h6>CUISINE</h6>
        <li>Modern and Traditional Cuban</li>
        <h6>MOMENTS</h6>
        <li>Salsa dancing, Vintage car cruising, Local art studios, Rum</li>
      </ul>
    </div>
  </div>
</section>
<section class="phrase-banner">
  <img
    src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-musician-quote-2200.jpg"
    alt="musicista salsa"
    class="alignnone size-full wp-image-1688"
    width="2200"
    height="1473"
  />
  <div class="mid-phrase">We visit Cuba through the eyes of <i>Cubans.</i></div>
</section>
<section class="light-det">
  <div class="container">
    <div class="col">
      <h6>WHAT'S INCLUDED</h6>
      <span class="bar-thin">&nbsp;</span>
      <ul>
        <li>Roundtrip Airfare to Havana Cuba from major US cities*</li>
        <li>All accommodations</li>
        <li>All transportation on island</li>
        <li>Airport pick-up/drop off</li>
        <li>Required Cuban Visa &amp; Health Insurance</li>
        <li>Local bilingual guides (in partnership with Del Caiman)</li>
        <li>Daily breakfast, lunch &amp; group dinners</li>
        <li>Beer &amp; Rum</li>
        <li>Cuban Cafecito (always on us)</li>
        <li></li>
      </ul>
    </div>
    <div class="col">
      <h6>WHAT'S NOT INCLUDED</h6>
      <span class="bar-thin">&nbsp;</span>
      <ul>
        <li>Gratuities</li>
        <li>Leisure spending</li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="col"></div>
  </div>
  <div class="col-right">
    <h6>PRICING</h6>
    <span class="bar-thin" style="float: right">&nbsp;</span>
    <ul>
      <li>All-inclusive price PP $4950</li>
      <li style="font-size: 85%; margin-top: -6px"></li>
      <li></li>
    </ul>
    <li>
      *Please review attached document:
      <a
        href="http://localhost/tolve/wp-content/uploads/2023/03/cuba-faq-tolve.pdf"
        rel="noopener"
        target="_blank"
        >CUBA travel FAQs</a
      >
    </li>
    <li>
      *Note: Your deposit secures your reservation and we will proceed to book
      your airfare promptly. However, if the price of airfare rises/falls
      drastically from the $400. estimate to actual cost at time of booking we
      will notify you and submit a separate invoice for the difference in
      cost/credit accordingly.
    </li>
    <div class="book low" style="float: right">
      <a href="http://localhost/tolve/booking/">book now</a>
    </div>
    &nbsp; Looking to book as a group, family, business&nbsp;retreat? Love the
    itinerary however dates&nbsp;don’t&nbsp;work? Contact for custom options, we
    want the best in travel experiences for&nbsp;you! &nbsp;
  </div>
</section>
<!-- Image grid -->
<div class="trip-image-grid extra">
  <div class="trip-image-1">
    <img
      src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-tobaccofarm-2200.jpg"
      alt="tobacco farm cuba"
      class="alignnone size-full wp-image-1690"
      width="2200"
      height="1467"
    />
  </div>
  <div class="trip-image-left">
    <img
      src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-estate-2200.jpg"
      alt="estate"
      class="alignnone size-full wp-image-1691"
      width="2200"
      height="1467"
    />
  </div>
  <div class="trip-image-right">
    <img
      src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-viniales-2200.jpg"
      alt="food stop"
      class="alignnone size-full wp-image-1692"
      width="2200"
      height="1700"
    />
  </div>
  <div class="trip-image-left-3">
    <img
      src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-countryhouse-2200.jpg"
      alt="drying shed"
      class="alignnone size-full wp-image-1693"
      width="2200"
      height="1467"
    />
  </div>
  <div class="trip-image-right-3">
    <img
      src="http://localhost/tolve/wp-content/uploads/2022/10/cayo-jutia-cuba-2200.jpg"
      alt=""
      class="alignnone size-full wp-image-1721"
      width="2200"
      height="1466"
    />
  </div>
  <div class="trip-image-4-4">
    <img
      src="http://localhost/tolve/wp-content/uploads/2023/03/cuba-cigar-top-2200.jpg"
      alt="person with cigar on stairs"
      class="alignnone size-full wp-image-1685"
      width="2200"
      height="1462"
    />
  </div>
</div>


        </div><!-- .content-area -->
</div><!-- .site-content -->
<?php if ( get_page_by_path( 'archives' ) ) : ?>
    <footer class="site-footer">
        <a href="<?php echo esc_url( site_url( 'archives' ) ); ?>"><?php esc_html_e( 'View All Posts &rarr;', 'arke' ); ?></a>
    </footer><!-- .site-footer -->
<?php else : ?>
    <?php arke_the_posts_navigation(); ?>
<?php endif; ?>
<?php wp_footer(); ?>





<?php include("footer.php"); ?>


</div> <!-- end of #wrap -->

 


	</body>
</html>
