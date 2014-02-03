<?php 
/*

Template Name: Contact Page

*/
get_header(); the_post(); ?>

  <section>

    <header>
      <h1><?php the_title(); ?></h1>
    </header>

      <article>

        <?php the_content(); ?>

        <hr>

        <div class="wufoo">

          <div id="wufoo-z1a171250aq5rbu">
            Fill out my <a href="https://wikipediageeks.wufoo.com/forms/z1a171250aq5rbu">online form</a>.
          </div>

          <div id="wuf-adv" style="font-family:inherit;font-size: small;color:#a7a7a7;text-align:center;display:block;"></div>

            <script type="text/javascript">var z1a171250aq5rbu;(function(d, t) {
            var s = d.createElement(t), options = {
            'userName':'wikipediageeks', 
            'formHash':'z1a171250aq5rbu', 
            'autoResize':true,
            'height':'795',
            'async':true,
            'host':'wufoo.com',
            'header':'show', 
            'ssl':true};
            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
            s.onload = s.onreadystatechange = function() {
            var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
            try { z1a171250aq5rbu = new WufooForm();z1a171250aq5rbu.initialize(options);z1a171250aq5rbu.display(); } catch (e) {}};
            var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
            })(document, 'script');</script>

        </div>
        
      </article>

  </section>

<?php get_footer(); ?>