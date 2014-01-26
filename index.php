<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Wikipedia Geeks</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.ico">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
    <body>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#price">Price</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="mailto:contact@wikipediageeks.com">contact@wikipediageeks.com</a></li>
          <li><a href="tel:+16197191069">(619) 719-1069</a></li>
        </ul>
      </nav>
        <section>
          <header>
            <h1>Wikipedia Geeks</h1>
            <p class="ancillary">Let us write, edit, and monitor your Wikipedia page.</p>
          </header>
          <article class="first">
            <p>It’s widely understood that a <a href="#">Wikipedia</a> page about you, your brand, or your business is an excellent marketing tool that greatly improves Search Engine Optimization. But Wikipedia pages that contain marketing language conflict with their policy on article tone and neutrality.</p>
            <p>The Wikipedia Geeks understand this process. Our articles are written to be supportive, all while containing citations to verifiable references. The articles aren’t copied and pasted from your website. They’re a culmination of information; combined to explain what you, your brand, or your business are all about.</p>
            <hr>
            <figure>
              <figcaption><p>Much of what appears in a Google Search comes from Wikipedia.</p></figcaption>
              <a class="fancybox" href="images/Mozart-GoogleSearchResults.png"><img src="images/Mozart-GoogleSearchResults.png"></a>
            </figure>
          </article>
          <article id="about" class="second">
            <h2>About</h2>
            <p class="ancillary">We're geeks at heart.</p>
            <p>We’ve been contributing to <a href="#">Wikipedia</a> for a long time. We do it because we believe the internet is a better place when information is shared freely and consumed critically. We understand Wikipedia’s policy on tone and neutrality, and work hard to make contributions that respect those rules. We’ve also spent hundreds of hours learning the Wikipedia markup language and how to format and categorize article content appropriately.</p>
          </article>
          <article id="price" class="third">
            <h2>Our price is $500 per article.</h2>
            <p class="ancillary">We warranty our work for 6 months.<br>If we can't sustain your page or edits for 6 months, we'll give you a full refund.</p>
          </article>
          <article id="contact" class="fourth">
            <h2>Contact</h2>
            <p class="ancillary">What we need to start.</p>
            <ol>
              <li>Tell us who you are. Do you need a page for a person, brand, or business?</li>
              <li>Do you have images or a logo that you’d like included? Even when an image or logo is Trademarked &trade;, Registered &reg;, or Copyright &copy; protected, a low resolution version is considered fair use for the purposes of a Wikipedia page.</li>
              <li>Can you provide sources of information beyond a supporting website? For example, if you need an article about your company’s widget, can you point to other articles online or in print that have been written about the widget?</li>
              <li>If you need content removed or edited, can you tell us why? Can you provide a source for the requested edits?</li>
            </ol>
            <div class="contactForm">
              <form action='' method='post'>
                <div><label for="name"><input type="text" name="message_name" placeholder="Name" value=""></label></div>
                <div><label for="message_email"><input type="text" name="message_email" placeholder="Email" value=""><label></div>
                <div><label for="message_text"><textarea cols='40' rows='8' type="text" name="message_text" placeholder="Message" ></textarea><label></div>
                <div><label for="message_human"><input type="text" style="width:60px;" name="message_human"> + 3 = 5<label></div>
                <input type="hidden" name="submitted" value="1">
                <div class='submit'><input type='submit' value='Send' /></div>
              </form>
            </div>
          </article>
        </section>
      <footer>
        <p>Copyright &copy; <?php echo date('Y'); ?> Wikipedia Geeks</p>
      </footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  <script src="js/jquery.fancybox.min.js"></script>
	  <script src="js/global.min.js"></script>

    </body>
</html>