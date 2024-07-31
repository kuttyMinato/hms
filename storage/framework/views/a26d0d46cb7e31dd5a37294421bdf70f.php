<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->

    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostz Admin</title>
    <!-- plugins:css -->
    <style>
        label {
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
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
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




            <div class="container pt-5" align="center">

                <?php if(@session()->has('message')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session()->get('message')); ?>

                        <button type="button" class="close" onclick="$(this).parent().hide()"> x </button>


                    </div>
                <?php endif; ?>
                <form action="<?php echo e(url('sendemail',$data->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="p-2">
                        <label>Greeting:</label>
                        <input type="text" name="greeting" style="color:black;" required="">
                    </div>
                    <div class="p-2">
                        <label>Body:</label>
                        <input type="text" name="body" style="color:black;" required="">
                    </div>

                    <div class="p-2">
                        <label>Action Text:</label>
                        <input type="text" name="actiontext" style="color:black;" required="">
                    </div>

                    <div class="p-2">
                        <label>Action Url:</label>
                        <input type="text" name="actionurl" style="color:black;" required="">
                    </div>

                    <div class="p-2">
                        <label>End Part:</label>
                        <input type="text" name="endpart" style="color:black;" required="">
                    </div>

                    <div class="p-2">

                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
</body>

</html>
<?php /**PATH D:\hms\resources\views/admin/email_view.blade.php ENDPATH**/ ?>