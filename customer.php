<?php include '_head.php'; ?>
  <?php include '_header.php'; ?>
  <div class="container">
    <div class="row">
      <div class="one whole padded">
        <form action="#" method="post">
          <fieldset>
            <legend>New Customer</legend>
            <div class="row">
              <div class="one half padded">
                <label for="firstname">First Name</label>
                <input id="firstname" type="text" placeholder="First Name">
              </div>
              <div class="one half padded">
                <label for="lastname">Last Name</label>
                <input id="lastname" type="text" placeholder="Last Name">
              </div>
            </div>
            <div class="row">
              <div class="one half padded">
                <label for="Company">Company</label>
                <input id="Company" type="text" placeholder="Company">
              </div>
            </div>
            <div class="row">
              <div class="one half padded">
                <label for="email">Email Address</label>
                <input id="email" type="email" placeholder="you@example.com">
              </div>
              <div class="one half padded">
                <label for="phone">Phone</label>
                <input id="phone" type="text" placeholder="(555) 555-5555">
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="address">Billing Address</label>
                <input id="address" type="text" placeholder="Street Address">
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <input id="address2" type="text" placeholder="Street Address">
              </div>
            </div>
            <div class="row">
              <div class="one half padded">
                <input type="text" id="city" placeholder="City">
              </div>
               <div class="one fourth padded">
                <input type="text" id="state" placeholder="State">
              </div>
              <div class="one fourth padded">
                <input type="text" id="zipcode" placeholder="Zip Code">
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="address">Shipping Address</label>
                <input id="address" type="text" placeholder="Street Address">
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <input id="address2" type="text" placeholder="Street Address">
              </div>
            </div>
            <div class="row">
              <div class="one half padded">
                <input type="text" placeholder="City">
              </div>
               <div class="one fourth padded">
                <input type="text" placeholder="State">
              </div>
              <div class="one fourth padded">
                <input type="text" placeholder="Zip Code">
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <label for="message">Extra Notes</label>
                <textarea id="message" placeholder="Enter your notes..."></textarea>
              </div>
            </div>
            <div class="row">
              <div class="one whole padded">
                <button>Submit</button> 
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
<?php include '_footer.php'; ?>