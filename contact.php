<?php get_header(); ?>

          <article id="contact" class="fourth">
            <h2>Contact</h2>
            <p class="ancillary">What we need to start.</p>
            <ol>
              <li>Tell us who you are. Do you need a page for a person, brand, or business?</li>
              <li>Do you have images or a logo that you’d like included? Even when an image or logo is Trademarked &trade;, Registered &reg;, or Copyright &copy; protected, a low resolution version is considered fair use for the purposes of a Wikipedia page.</li>
              <li>Can you provide sources of information beyond a supporting website? For example, if you need an article about your company’s widget, can you point to other articles online or in print that have been written about the widget?</li>
              <li>If you need content removed or edited, can you tell us why? Can you provide a source for the requested edits?</li>
            </ol>
            <div class="contact-form">
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
                echo "<h2 style='text-align:center;color:white'>Oops! Something went wrong. Try again.</h2>
                      <form action='index.php' method='post'>
                      <div><input type='text' name='name' placeholder='Name' /></div>
                      <div><input type='email' name='email' placeholder='Email' /></div>
                      <div><textarea cols='40' rows='8' name='message' placeholder='Message'></textarea></div>
                      <div class='submit'><input type='submit' value='Send' /></div>
                      </form>"
                    ;
                  }
              else
                {//send email
                $name = $_REQUEST['name'] ;
                $email = $_REQUEST['email'] ;
                $message = $_REQUEST['message'] ;
                mail("contact@wikipediageeks.com", "Message from $name",
                $message, "From: $email" );
                echo "<h2 style='text-align:center;color:white'>Thank you! Your message has been sent.</h2>
                      <form action='index.php' method='post'>
                      <div><input type='text' name='name' placeholder='Name' /></div>
                      <div><input type='email' name='email' placeholder='Email' /></div>
                      <div><textarea cols='40' rows='8' name='message' placeholder='Message'></textarea></div>
                      <div class='submit'><input type='submit' value='Send' /></div>
                      </form>"
                    ;
                  }
                }
              else
              {//if "email" is not filled out, display the form
              echo "<form action='index.php' method='post'>
                    <div><input type='text' name='name' placeholder='Name' /></div>
                    <div><input type='email' name='email' placeholder='Email' /></div>
                    <div><textarea cols='40' rows='8' name='message' placeholder='Message'></textarea></div>
                    <div class='submit'><input type='submit' value='Send' /></div>
                    </form>"
                  ;
                }
              ?>
            </div>
          </article>

<?php get_footer(); ?>