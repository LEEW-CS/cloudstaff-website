<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * Generated from src/partials/contact.html by build.py — edit the partial,
 * not this file, then re-run `python3 build.py`.
 *
 * @package Cloudstaff
 */

get_header();
?>
<main class="lander" id="main-content">
<section class="lander-hero">
  <div class="lander-content">
    <span class="eyebrow">We're here to help</span>
    <h1>Talk to a remote staffing expert</h1>
    <p>Whether you're exploring outsourcing for the first time or scaling an existing program, we'll give you straight answers on roles, costs, security, and timelines. No pressure, no jargon.</p>
    <a href="tel:+18007308615" class="button button-lg">Call US +1 800 730 8615</a>
  </div>
</section>

<section class="lander-section">
  <div class="lander-content">
    <div>
      <span class="eyebrow">Tell us about your team</span>
      <h2>Request a consultation</h2>
      <p>Share a few details and a US-based team member will get back to you within one business day with role recommendations and a tailored cost comparison.</p>
      <form class="form" action="#" method="post">
        <div class="grid-2">
          <div class="field">
            <label class="field-label" for="contact-name">Full name <span class="field-required">*</span></label>
            <input class="input" id="contact-name" name="name" type="text" autocomplete="name" required>
          </div>
          <div class="field">
            <label class="field-label" for="contact-company">Company <span class="field-required">*</span></label>
            <input class="input" id="contact-company" name="company" type="text" autocomplete="organization" required>
          </div>
          <div class="field">
            <label class="field-label" for="contact-email">Work email <span class="field-required">*</span></label>
            <input class="input" id="contact-email" name="email" type="email" autocomplete="email" required>
            <p class="field-hint">We'll only use this to respond to your inquiry.</p>
          </div>
          <div class="field">
            <label class="field-label" for="contact-phone">Phone <span class="field-optional">(optional)</span></label>
            <input class="input" id="contact-phone" name="phone" type="tel" autocomplete="tel">
          </div>
          <div class="field">
            <label class="field-label" for="contact-industry">Industry</label>
            <select class="select" id="contact-industry" name="industry">
              <option>Public Accounting</option>
              <option>Real Estate &amp; Mortgage</option>
              <option>Healthcare</option>
              <option>Technology &amp; Software</option>
              <option>Billing &amp; Collections</option>
              <option>Legal</option>
              <option>Travel &amp; Leisure</option>
              <option>E-commerce &amp; Retail</option>
              <option>Other</option>
            </select>
          </div>
          <div class="field">
            <label class="field-label" for="contact-size">Roles you're considering</label>
            <select class="select" id="contact-size" name="team-size">
              <option>1 role to start</option>
              <option>2&ndash;4 roles</option>
              <option>5&ndash;10 roles (a team)</option>
              <option>10+ roles / a department</option>
              <option>Not sure yet &mdash; exploring</option>
            </select>
          </div>
        </div>
        <div class="field">
          <label class="field-label" for="contact-message">What would you like help with?</label>
          <textarea class="textarea" id="contact-message" name="message" rows="4" placeholder="e.g. We need two senior accountants who know QuickBooks and US GAAP, working Central time&hellip;"></textarea>
        </div>
        <button type="submit" class="button button-lg">Request my consultation</button>
      </form>
    </div>
  </div>
</section>

<section class="lander-section lander-section-tinted">
  <div class="lander-content">
    <div>
      <span class="eyebrow">Where we are</span>
      <h2>US offices, global delivery</h2>
      <div class="grid-3 collapse-2">
        <div class="card">
          <h3>Charlotte, NC</h3>
          <p>6801 Fairview Rd, Ste C/D<br>Charlotte, NC</p>
          <p><a href="tel:+18007308615">+1 800 730 8615</a></p>
        </div>
        <div class="card">
          <h3>Houston, TX</h3>
          <p>800 Town and Country Blvd, Ste 500<br>Houston, TX</p>
          <p><a href="tel:+18007308615">+1 800 730 8615</a></p>
        </div>
        <div class="card">
          <h3>Dallas, TX</h3>
          <p>400 E Las Colinas Blvd, Ste 78<br>Irving, TX</p>
          <p><a href="tel:+18007308615">+1 800 730 8615</a></p>
        </div>
        <div class="card">
          <h3>Australia</h3>
          <p>Sydney &middot; Brisbane</p>
          <p><a href="tel:1300881284">1300 881 284</a></p>
        </div>
        <div class="card">
          <h3>United Kingdom</h3>
          <p>55 Baker St, London</p>
        </div>
        <div class="card">
          <h3>Delivery centers</h3>
          <p>Philippines &middot; India &middot; Colombia &middot; Kenya<br>+ specialist hubs across Asia, Africa, and Latin America</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="lander-cta lander-cta-brand">
  <div class="lander-content">
    <h2>Prefer to start by reading?</h2>
    <p>Our plain-English guide walks you through the model, the costs, and the controls &mdash; at your own pace.</p>
    <a href="<?php echo esc_url( home_url( '/what-is-remote-staffing/' ) ); ?>" class="button button-inverse button-lg">Read: What is remote staffing?</a>
  </div>
</section>

</main>
<?php
get_footer();
