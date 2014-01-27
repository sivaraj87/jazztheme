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
    <body id="home">
      <nav>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#price">Price</a></li>
          <li><a href="#examples">Examples</a></li>
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
            <h2>$500 per Article</h2>
            <p class="ancillary">We guaranty our work for 6 months.<br>If we can't sustain your page or edits for 6 months, we'll give you a full refund.</p>
            <p>We know what you’re thinking… “Why can’t I just do this myself?” You certainly can, and we encourage you to try. But did you know there are thousands of volunteer Wikipedia Administrators looking for pages that contain marketing and promotional language? Even the slightest misstep in your writing can be cause for immediate deletion.</p>
          </article>
          <article id="examples" class="three-and-a-half">
            <h2>Examples</h2>
            <p class="ancillary">These screenshots illustrate what you can acheive with a Wikipedia page.</p>
            <hr>
            <figure class="screenShots">
              <figcaption><p>Unordered & Ordered Lists</p></figcaption>
              <a class="fancybox" href="images/WikipediaArticle-500Words.png"><img src="images/WikipediaArticle-500Words.png"></a>
              <p><a href="http://en.wikipedia.org/wiki/Anna_Maria_Mozart" target="_blank"> View Anna Maria Mozart</a></p>
            </figure>
            <figure class="screenShots">
              <figcaption><p>Sortable Tables</p></figcaption>
              <a class="fancybox" href="images/Kochel-catalogue.png"><img src="images/Kochel-catalogue.png"></a>
              <p><a href="http://en.wikipedia.org/wiki/K%C3%B6chel_catalogue" target="_blank">View the Köchel catalogue</a></p>
            </figure>
            <figure class="screenShots">
              <figcaption><p>Track Lists & Album Covers</p></figcaption>
              <a class="fancybox" href="images/Mozarts-House.png"><img src="images/Mozarts-House.png"></a>
              <p><a href="http://en.wikipedia.org/wiki/Mozart's_House" target="_blank">View Mozart's House</a></p>
            </figure>
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
              <?php
              function spamcheck($field)
                {
                //filter_var() sanitizes the e-mail
                //address using FILTER_SANITIZE_EMAIL
                $field=filter_var($field, FILTER_SANITIZE_EMAIL);

                //filter_var() validates the e-mail
                //address using FILTER_VALIDATE_EMAIL
                if(filter_var($field, FILTER_VALIDATE_EMAIL))
                  {
                  return TRUE;
                  }
                else
                  {
                  return FALSE;
                  }
                }

              if (isset($_REQUEST['email']))
                {//if "email" is filled out, proceed

                //check if the email address is invalid
                $mailcheck = spamcheck($_REQUEST['email']);
                if ($mailcheck==FALSE)
                  {
                  echo "<h2 style='text-align:center;color:white'>Oops! Something went wrong. Try again.</h2>";
                  }
                else
                  {//send email
                  $name = $_REQUEST['name'] ;
                  $email = $_REQUEST['email'] ;
                  $message = $_REQUEST['message'] ;
                  mail("contact@wikipediageeks.com", "Email from $name",
                  $message, "From: $email" );
                  echo "<h2 style='text-align:center;color:white'>Thank you! Your message has been sent.</h2>";
                  }
                }
              else
                {//if "email" is not filled out, display the form
                echo "<form action=php echo htmlspecialchars('index.php'); method='post'>
                        <input class='contact' type='text' name='name' placeholder='Name' />
                        <input class='contact' type='email' name='email' placeholder='Email' />
                        <textarea class='contact' cols='40' rows='8' name='message' placeholder='Message'></textarea>
                        <div class='submit'><input type='submit' value='Send' /></div>
                      </form>";
                }
              ?>
            </div>
          </article>
        </section>
      <footer>
        <p>Copyright &copy; <?php echo date('Y'); ?> Wikipedia Geeks</p>
      </footer>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/global.min.js"></script>

    </body>
</html>