<?php
include '_head.php';
  include '_header.php';
?>
  <div class="container padded">
    New customer or existing customer<br>
      //tasks and delagate
        <div class="tabs">
          <ul>
            <li><a href="#customer" class=""><i class="icon-user"></i> Customer</a></li>
            <li><a href="#design-1" class="active">Design 1</a></li>
            <li class="pull-right"><a href="#tasks" class=""><i class="icon-tasks"></i> Tasks</a></li>
            <li><a href="#add-design"><i class="icon-plus"></i></a></li>
          </ul>
          <div id="customer" class="">
            add new customer form or select existing customer
          </div>
          <div id="design-1" class="active">
            <form action="#" method="post">
              <div class="row">
                <div class="one fifth right-four">
                  <h3>Mock Up</h3>
                  <input type="file"></input>
                </div>
                <div class="four fifths left-one">
                  name the design or choose existing design
                  <h3>Placement</h3>
                  <div class="tiles center pad-bottom">
                    <select class="value hidden">
                      <option value="front-center" selected>Front Center</option>
                      <option value="back-center">Back Center</option>
                      <option value="left-breast">Left Breast</option>
                      <option value="right-breast">Right Breast</option>
                      <option value="left-sleeve">Left Sleeve</option>
                      <option value="right-sleeve">Right Sleeve</option>
                      <option value="other">Other</option>
                    </select>
                    <div data-value="front-center" class="tile asphalt padded">Front Center</div>
                    <div data-value="back-center" class="tile asphalt padded">Back Center</div> 
                    <div data-value="left-breast" class="tile asphalt padded">Left Breast</div> 
                    <div data-value="right-breast" class="tile asphalt padded">Right Breast</div>
                    <div data-value="left-sleeve" class="tile asphalt padded">Left Sleeve</div> 
                    <div data-value="right-sleeve" class="tile asphalt padded">Right Sleeve</div>
                    <div data-value="other" class="tile asphalt padded">Other</div> 
                  </div>
                  <h3>Screens</h3>
                  <div class="row">
                    <div class="one tenth padded">

                      <span class="select-wrap">
                        <select class="unselected">
                          <option value="1" selected>1<sup>st</sup></option>
                          <option value="2">2<sup>nd</sup></option>
                          <option value="3">3<sup>rd</sup></option>
                          <option value="4">4<sup>th</sup></option>
                          <option value="5">5<sup>th</sup></option>
                          <option value="6">6<sup>th</sup></option>
                        </select>
                      </span>
                    </div>
                    <div class="two tenths padded">
                      <input type="text" id="color" placeholder="Color">
                    </div>
                     <div class="two tenths padded">
                      <input type="text" id="pantone" placeholder="Pantone">
                    </div>
                    <div class="two tenths padded">
                      <input type="text" id="mesh" placeholder="Screen Mesh">
                    </div>
                    <div class="two tenths padded">
                      <input type="file" id="file" placeholder="Separtion File">
                    </div>
                  </div>
                  <div class="button padded"><i class="icon-plus"></i> Add Screen</div><br>
                  <div class="button padded"><i class="icon-plus"></i> Add Placement</div>
                    <hr>
                  <h3>Garments</h3>
                    <br/> (with an x to delete) - style - color- price each
                    sizes - qty - extra $ 
                    <div class="row">
                      <div class="one fourth padded mobile">
                        <span class="select-wrap">
                          <select class="unselected">
                            <option value="Small" selected>Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                            <option value="X-Large">X-Large</option>
                            <option value="XX-Large">XX-Large</option>
                            <option value="XXX-Large">XXX-Large</option>
                          </select>
                        </span>
                      </div>
                      <div class="one fourth padded mobile">
                        <input type="text" id="small-qty" placeholder="Quantity">
                      </div>
                      <div class="one fourth padded mobile">
                         <div class="row">
                          <div class="one mobile fifth"><span class="prefix">$</span></div>
                          <div class="four mobile fifths">
                            <input id="extra" type="text" name="extra" placeholder="Extra">
                          </div>
                        </div>
                      </div>
                      <div class="one fourth padded mobile">
                        <div class="one mobile fifth"><span class="prefix">$</span></div>
                        <div class="four mobile fifths">
                          <input type="text" id="cost" placeholder="Cost">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="two thirds skip-one padded">
                        <input id="size-notes" type="text" name="size-note" placeholder="Size Notes">
                      </div>
                    </div>
                    <div class="button pad-top"><i class="icon-plus"></i> Add Garment</div>
                </div>
              </div>
            </form>
          </div>
          <div id="tasks" class="">
            tasks for this order and a way to delagate them to employees<br>
            task name - due date - choose color - delagate - mark as complete - delete?<br>
            add new task
          </div>
          <div id="add-design">
            <h1>This should add a new design via jquery</h1>
          </div>
        </div>
      <br>//money stuff
    <br>//set up fees - artwork fees etc.
    <br>//discounts (automatic or manual)
    <br>//tax
    <br>//shipping
  <br>//total
  <br>//comments and actions
  </div>
<?php include '_footer.php'; ?>