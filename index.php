<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="discription" content="A very first website of portfolia by hanna cho">
 <title>Hanna cho - Curriculum Vitae</title>
</head>
 
<body>
 <br/>
 <a href="https://www.mendeley.com/profiles/hanna-cho6/" target="_blank">[Mendeley]</a>
 <a href="https://github.com/hanncho" target="_blank">[GitHub]</a>
 <!-- Hi, hope you have a good day -->
 <h4>Hanna Cho</h4>
 <!-- need to work more on it -->
 <hr/>
 <br/>
 <p>B.S. in Chemistry</p>
 <p>Hi, <b>Thank you</b> for visiting my website</p>
 <p>This is my very <b><i>first</i></b> website</p> 
</body>
 
<footer>
<div id="respond">
 <h3>Feel free to leave a comment!</h3>
 <form action="post_comment.php" method="post" id="commentform">
  <label for="comment_author" class="required">Your name </label>
  <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
  <br/>
  <label for="email" class="required">Your email</label>
  <input type="email" name="email" id="email" value="" tabindex="2" required="required">
  <br/>
  <label for="comment" class="required">Your message</label>
  <br/>
  <br/>
  <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
  <!-- comment_post_ID value hard-coded as 1 -->
  <input type="hidden" name="comment_post_ID" value="1" id="comment_post_ID" />
  <br/>
  <input name="submit" type="submit" value="Submit comment" />
 </form>
</div>
<?php
require('Persistence.php');

$db = new Persistence();
if( $db->add_comment($_POST) ) {
  header( 'Location: index.php' );
}
else {
  header( 'Location: index.php?error=Your comment was not posted due to errors in your form submission' );
}
?>
</footer>
</html>
