
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

    <style type="text/css">

        label
        {
            display: inline-block;

            width: 200px;
        }


    </style>

  <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
<?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
      <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
         <div class="container" align="center" style="padding:100px">

            <?php if(@session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

                <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


            </div>
        <?php endif; ?>

            <form action="<?php echo e(url('editdoctor',$data->id)); ?>" method="POST" enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div style="padding: 15px;">
                    <label>Doctor Name</label>
                    <input type="text" style="color: black;" name="name" value="<?php echo e($data->name); ?>">
                </div>

                <div style="padding: 15px;">
                    <label>Phone</label>
                    <input type="number" style="color: black;" name="phone" value="<?php echo e($data->phone); ?>">
                </div>

                <div style="padding: 15px;">
                    <label>Speciality</label>
                    <input type="text" style="color: black;" name="speciality" value="<?php echo e($data->speciality); ?>">
                </div>

                <div style="padding: 15px;">
                    <label>Room</label>
                    <input type="text" style="color: black;" name="room" value="<?php echo e($data->room); ?>">
                </div>

                <div style="padding: 15px;">
                    <label>Old Image</label>
                    <img height="150" width="150" src="doctorimage/<?php echo e($data->image); ?>">
                </div>

                <div style="padding: 15px;">
                    <label>Change Image</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px;">

                    <input type="submit" class="btn btn-primary">
                </div>

            </form>
         </div>


        </div>
<?php echo $__env->make('admin.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- container-scroller -->
    <!-- plugins:js -->
   <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- End custom js for this page -->
  </body>
</html>
<?php /**PATH D:\hms\resources\views/admin/update_doctor.blade.php ENDPATH**/ ?>