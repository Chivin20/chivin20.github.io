

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="container">
        <div class="col-6" style="font-family: 'Quicksand', sans-serif;">
            <h1 class="text-danger text-center mt-3 pt-3" style="font-size: 40px;"><b>TERM CALENDAR</b></h1>
        </div>
    </div>
</div>



<!-- About Principal of School -->
<div class="row">
    <div class="container">
        <div class="col-12 container-sm" style="margin-top: 20px; margin-bottom: 20px; font-family: 'Quicksand', sans-serif;" >
            <div class="row">
           
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h5>Name</h5>
                        </div>
                        <div class="col-9">
                            <h5>Date</h5>
                        </div>
                    </div>
                </div>
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6>Autumn Term</h6>
                        </div>
                        <div class="col-9">
                            <h6>Tuesday 24 August 2021 - Tuesday 21 December 2021</h6>
                            <p>(Nursery will be dismissed at 12 noon. Junior School will be dismissed at 12 noon. Lower School will be dismissed at 12 noon)</p>
                        </div>
                    </div>
                </div>
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6>First Term</h6>
                        </div>
                        <div class="col-9">
                            <h6>Monday 4 December 2021 - Friday 21 March 2022</h6>
                            <p>School Resumes: Monday 1 April 2022</p>

                            <div class = "col-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href="#">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>


                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6>Second Term</h6>
                        </div>
                        <div class="col-9">
                            <h6>Monday 4 December 2021 - Friday 21 March 2022</h6>
                            <p>School Resumes: Monday 1 April 2022</p>

                            <div class = "col-3">

                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href="#">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="#">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
                  
                <div class="shadow p-3 mb-2 bg-body rounded">
                    <div class="row">
                        <div class="col-3">
                            <h6>Third Term</h6>
                        </div>
                        <div class="col-9">
                            <h6>Monday 4 December 2021 - Friday 21 March 2022</h6>
                            <p>School Resumes: Monday 1 April 2022</p>

                            <div class = "col-3">
                                <div class="dropdown">
                                    <button class="btn btn-primary rounded-pill dropdown-toggle"  type="button" id = "dropdownMenu" data-bs-toggle="dropdown" aria-expanded="false">View Calendar
                                    <span class="caret"></span> </button>

                                        <ul class="dropdown-menu" aria-labelledby = "dropdownMenu">
                                            <li><a class = "dropdown-item" href= "<?php echo e(route('priviewcalendarthird')); ?>" routerLink="/priviewcalendarthird" routerLinkActive="active">Nursery and Primary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('secviewcalendarthird')); ?>" routerLink="/secviewcalendarthird" routerLinkActive="active">Secondary Section</a></li>
                                            <li><a class = "dropdown-item" href="<?php echo e(route('parviewcalendarthird')); ?>" routerLink="/parviewcalendarthird" routerLinkActive="active">Parents' Calendar</a></li>
                                        </ul>
                                </div> 
                            </div>

                        </div>
                    </div>
                </div>
                
                <div class="mt-4">
                    <p>*Boarders returns a day before the term start</p>
                    <p class="text-danger">Dates of Session 2022 - 2023</p>
                </div>
               
              
            </div>
        </div>
    </div>
</div>
<!-- end of about Principal of School-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\sanktgeorg\resources\views/calendar.blade.php ENDPATH**/ ?>