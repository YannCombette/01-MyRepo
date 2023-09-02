<?php
include __DIR__ . '/../layout/header.tpl.php';
?>
<main class="contact-section" id="contact">
  <div class="container">
    <h2 class="title">Contact</h2>
    <div class="contact-form">
      <form>
        <div class="form-group">
          <label for="name">Your Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
          <label for="lastName">Your Last Name</label>
          <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
        </div>
        <div class="form-group">
          <label for="email">Your Email</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label for="message">Your Message</label>
          <textarea class="form-control" id="message" rows="4" placeholder="Enter your message" required></textarea>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="regulationsCheckbox" required>
          <label class="form-check-label" for="regulationsCheckbox">
            I agree to comply with French regulations. <a href="YOUR_CNIL_LINK" target="_blank">CNIL Link</a>
          </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</main>
<?php
include __DIR__ .  '/../layout/footer.tpl.php';
?>