<?php $__env->startSection('content'); ?>
<section class="breadcrumbs-section">
    <div class="container pl-3 p-sm-3">
      <div class="row">
        <div class="col-12">
          <h2>Contact Us</h2>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
          <hr />
        </div>
      </div>
    </div>
  </section>

  <section class="form-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Full name *">
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" placeholder="Email Address *">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Contact Number *">
              </div>
              <div class="form-group col-md-6">
                <select class="form-control" >
                  <option selected disabled>Country</option>
                  <option>Canada</option>
                  <option>USA</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input type="text" class="form-control" placeholder="Subject *">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                  <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12 text-center">
                   <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
             </div>
          </form>
        </div>
        <div class="col-md-6 address">
            <h5> Phone Number</h5>
            <p><a href="#">514-514-4144 </a><br>
            </p>
            <h5>Email / Website</h5>
            <p>
               <a href="#">CustomTees@gmail.com</a><br>
               <a href="https://github.com/fitzpatrickg/custom-tees/">Git Hub</a>
            </p>
            <h5>Working hours</h5>
            <p>Mon - Fri : 9am - 6pm</p>
            <h5>Address</h5>
            <p>21 275 Rue Lakeshore Road, Sainte-Anne-de-Bellevue, QC H9X 3L9</p>
         </div>
      </div>
    </div>
  </section>

    <section class="m-5">
      <div class="container-fluid mt-2">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.14248391629!2d-73.94350578444445!3d45.4064662791003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc938500caad3a7%3A0xd807d74a59dcffcf!2sJohn%20Abbott%20College!5e0!3m2!1sru!2sca!4v1578626605411!5m2!1sru!2sca"
            width="100%" height="300px" frameborder="0" style="border:0"></iframe>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\repositories\custom-tees\resources\views/contact.blade.php ENDPATH**/ ?>