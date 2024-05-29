<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="<?=base_url(); ?>public/dashborads/pages/widget/amchart/amcharts.min.js"></script>
<script src="<?=base_url(); ?>public/dashborads/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/pages/todo/todo.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/script.js"></script>
<script type="text/javascript" src="<?=base_url(); ?>public/dashborads/js/SmoothScroll.js"></script>
<script src="<?=base_url(); ?>public/dashborads/js/pcoded.min.js"></script>
<script src="<?=base_url(); ?>public/dashborads/js/demo-12.js"></script>
<script src="<?=base_url(); ?>public/dashborads/js/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Include jQuery Validate Plugin after jQuery -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>


<script>
var $window = $(window);
var nav = $('.fixed-button');
    $window.scroll(function(){
        if ($window.scrollTop() >= 200) {
         nav.addClass('active');
     }
     else {
         nav.removeClass('active');
     }
 });
</script>
<script>
        $(document).ready(function() {
            // Handle click event on widget
            $('#todaysAppointmentWidget').click(function() {
                // Toggle visibility of the table container
                $('#appointmentTableContainer').toggle();
            });
        });
        
    function removeFilter() {
        var url = window.location.href;
        url = url.replace(/([&?])filter_date=.*?(&|$)/, '$1').replace(/([?&])$/, '');
        window.location.href = url;
    }

   
    // Function to remove the toast after 3 seconds
    setTimeout(() => {
        const toastContainer = document.getElementById('toast-container');
        if (toastContainer) {
            toastContainer.style.transition = 'opacity 0.5s ease-in-out';
            toastContainer.style.opacity = '0';
            setTimeout(() => toastContainer.remove(), 500); // remove from DOM after fade out
        }
    }, 3000);
 
    function confirmDelete(ab_id) {
        if (confirm('Are you sure you want to delete this record?')) {
            document.getElementById('deleteForm' + ab_id).submit();
        }
    }
    function confirmDelete(ab_id) {
        if (confirm('Are you sure you want to delete this record?')) {
            document.getElementById('deletefromschollclass' + ab_id).submit();
        }
    }
    function confirmDelete(ab_id) {
        if (confirm('Are you sure you want to delete this record?')) {
            document.getElementById('deletefacultyskills' + ab_id).submit();
        }
    }
    </script>
</body>

</html>