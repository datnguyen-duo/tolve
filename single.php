<?php

// START ACF FIELDS
$themeurl = get_bloginfo('template_url');
$ID = get_the_id();

//INFORMATION
$leaders = get_field("leaders");
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
$optional = get_field("optional");


//IMAGE GRID
$layout = get_field("layout");
$grid_images = get_field("grid_images");

// END ACF FIELDS

get_template_part( 'header' );
get_template_part( 'content' ); ?>

<section class="light-trip">
  <div class="container">
    <div class="book">
      <a href="/booking/">book now</a>
    </div>
    <div id="emailToggle">
      <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
      <input type="checkbox" />

      <!--
      Span to act as a ... button?
      -->
      <span>Questions?</span>

      <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
      <ul id="emailbox">
        <form
          method="post"
          action="mailto:hello@tolve.co?subject=Question%20for%20Tolve"
        >
          <h5>Questions?</h5>
          <div class="close"></div>
          <h6 style="letter-spacing: 1px">Name</h6>
          <textarea
            type="text"
            id="name"
            style="margin-bottom: 15px"
            name="name"
            required
          ></textarea>

          <h6 style="letter-spacing: 1px">Email</h6>
          <textarea
            type="email"
            id="email"
            style="margin-bottom: 15px"
            name="email"
            required
          ></textarea>

          <h6 style="letter-spacing: 1px">Message</h6>
          <textarea
            id="message"
            name="message"
            rows="5"
            style="float: left; height: 100px; margin-bottom: 15px"
            required
          ></textarea>

          <input id="button-text" type="submit" value="Submit" />
        </form>
      </ul>
    </div>

    <span class="bar-strong">&nbsp;</span>
    <?php the_title('<h1>', '</h1>'); ?>
    
    <?php if ($leaders): ?>
      <h6 style="margin-block-start: 0.7em">
        <?php echo $leaders; ?>
      </h6>
    <?php endif; ?>

    <?php if ($statement): ?>
      <div class="mood-phrase">
        <?php echo $statement; ?>
      </div>
    <?php endif; ?>

    <div class="trip-overview">
      <?php if($dates): ?>

        <?php if ($dates['headline']): ?>
          <h4 class="right"><?php echo $dates['headline']; ?></h4>
        <?php endif; ?>

        <?php if ($dates['date']): foreach ($dates['date'] as $date): ?>

          <?php if ($date['text_1']): ?>
            <h6 class="right"><?php echo $date['text_1']?></h6>
          <?php endif; ?>

          <?php if ($date['text_2']): ?>
            <h6 class="right"><?php echo $date['text_2']?></h6>
          <?php endif; ?>

        <?php endforeach; endif; ?>

        <?php if ($dates['price']): ?>
          <h4 class="right" style="margin-top: 1em"><?php echo $dates['price']; ?></h4>
        <?php endif; ?>

        <?php if ($dates['price_disclaimer']): ?>
          <h6 class="right"><?php echo $dates['price_disclaimer']; ?></h6>
        <?php endif; ?>

        <?php if ($dates['group_size']): ?>
          <h6 class="right">Group size: <?php echo $dates['group_size']; ?> travelers</h6>
        <?php endif; ?>
      <?php endif; ?>

      <?php if ($paragraph): ?>
        <div class="story">
          <?php echo $paragraph; ?>
        </div>
      <?php endif; ?>

      <h6 style="margin-top: 4rem">EXPERIENCE PROFILE</h6>
      <span class="bar-thin">&nbsp;</span>
      <ul>

        <?php if ($stay): ?>
          <h6>STAY</h6>
          <?php foreach ($stay as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($style): ?>
          <h6>STYLE</h6>
          <?php foreach ($style as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($activities): ?>
          <h6>ACTIVITIES</h6>
          <?php foreach ($activities as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($cuisine): ?>
          <h6>CUISINE</h6>
          <?php foreach ($cuisine as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        <?php endif; ?>

        <?php if ($moments): ?>
          <h6>MOMENTS</h6>
          <?php foreach ($moments as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        <?php endif; ?>

      </ul>
    </div>
  </div>
</section>

<?php if ($image): ?>
  <section class="phrase-banner">
  <?php echo wp_get_attachment_image( $image['id'], 'full', false, array("loading" => "lazy") ); ?>
  <?php if ($text): ?>
    <div class="mid-phrase"><?php echo $text; ?></div>
  <?php endif; ?>
  </section>
<?php endif; ?>

<section class="light-det">
  <div class="container">
    <?php if ($whats_included): ?>
      <div class="col">
        <h6>WHAT'S INCLUDED</h6>
        <span class="bar-thin">&nbsp;</span>
        <ul>
          <?php foreach ($whats_included as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php if ($whats_not_included): ?>
      <div class="col">
        <h6>WHAT'S NOT INCLUDED</h6>
        <span class="bar-thin">&nbsp;</span>
        <ul>
          <?php foreach ($whats_not_included as $line): ?>
            <li><?php echo $line["text"]; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
  </div>
  <div class="col-right">
    
    <h6>PRICING</h6>
    <span class="bar-thin" style="float: right">&nbsp;</span>
    <?php if ($price): ?>
    <ul>
      <?php foreach ($price as $line): ?>

        <?php if ($line['text']): ?>
          <li><?php echo $line['text']; ?></li>
        <?php endif; ?>

        <?php if ($line['disclaimer']): ?>
          <li><?php echo $line['disclaimer']; ?></li>
        <?php endif; ?>

      <?php endforeach; ?>

    </ul>
    <?php endif; ?>

    <?php if ($note): echo $note; endif;?>

    <div class="book low" style="float: right">
      <a href="/booking/">book now</a>
    </div>

  </div>
</section>
  

<?php if ($optional): 
  $itinerary = get_field("optional_itinerary");
  $itinerary_headline = $itinerary["headline"];
  $itinerary_sub_headline = $itinerary["sub_headline"];
  $itinerary_dates = $itinerary["dates"];
  $itinerary_paragraph = $itinerary["paragraph"];
  $itinerary_price = $itinerary["price"];

  ?>
<section class="light-trip">
  <div class="container">
    <?php if ($itinerary_headline): ?>
      <h1 class="trip-title"><?php echo $itinerary_headline; ?></h1>
    <?php endif; ?>
    <?php if ($itinerary_sub_headline): ?>
      <h3><?php echo $itinerary_sub_headline; ?></h3>
    <?php endif; ?>
    <?php if ($itinerary_dates): 
      foreach ($itinerary_dates as $line): ?>
        <h4><?php echo $line["date"]; ?></h4>
    <?php endforeach; endif; ?>
    <?php if ($itinerary_paragraph): ?>
      <?php echo $itinerary_paragraph; ?>
    <?php endif; ?>
  </div>

  <?php if ($itinerary_price): ?>
  <div class="col-right" style="margin-top: 4rem;">
    <?php if ($itinerary["pricing_headline"]): ?>
      <h6><?php echo $itinerary["pricing_headline"]; ?></h6>
      <p><span class="bar-thin" style="float:right;">&nbsp;</span></p>
    <?php endif; ?>
    <ul>
    <?php foreach ($itinerary_price as $line): ?>
      <?php if ($line['text']): ?>
        <li><?php echo $line['text']; ?></li>
      <?php endif; ?>

      <?php if ($line['disclaimer']): ?>
        <li><?php echo $line['disclaimer']; ?></li>
      <?php endif; ?>
    <?php endforeach; ?>
    </ul>
    <div class="book low" style="float: right">
      <a href="/booking/">book now</a>
    </div>
  </div>
  <?php endif; ?>
</section>

<?php endif; ?>

<div class="col-right" style="margin-bottom: 2rem;">
  <?php if ($cta): echo $cta; endif;?>
</div>
<!-- Image grid -->
<?php if ($grid_images): ?>
<div class="grid__images <?php echo $layout; ?>">
  <?php foreach($grid_images as $grid_image): 
      echo wp_get_attachment_image( $grid_image['image']['id'], 'full', false, array("loading" => "lazy") );
    endforeach; ?>
</div>
<?php endif; ?>


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

