<!-- jquery
        ============================================ -->
<script src="<?= base_url('public/admin/js/vendor/jquery-1.11.3.min.js') ?>"></script>
<!-- bootstrap JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/bootstrap.min.js') ?>"></script>
<!-- wow JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/wow.min.js') ?>"></script>

<!-- fontawesome -->
<script src="https://kit.fontawesome.com/00b7bb0fde.js" crossorigin="anonymous"></script>
<!-- price-slider JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/jquery-price-slider.js') ?>"></script>
<!-- meanmenu JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/jquery.meanmenu.js') ?>"></script>
<!-- owl.carousel JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/owl.carousel.min.js') ?>"></script>
<!-- sticky JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/jquery.sticky.js') ?>"></script>
<!-- scrollUp JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/jquery.scrollUp.min.js') ?>"></script>
<!-- mCustomScrollbar JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/scrollbar/mCustomScrollbar-active.js') ?>"></script>
<!-- metisMenu JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/metisMenu/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/metisMenu/metisMenu-active.js') ?>"></script>
<!-- morrisjs JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/morrisjs/raphael-min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/morrisjs/morris.js') ?>"></script>
<script src="<?= base_url('public/admin/js/morrisjs/morris-active.js') ?>"></script>
<!-- morrisjs JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/sparkline/jquery.sparkline.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/sparkline/jquery.charts-sparkline.js') ?>"></script>
<!-- calendar JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/calendar/moment.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/calendar/fullcalendar.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/calendar/fullcalendar-active.js') ?>"></script>
<!-- data table JS
                ============================================ -->
<script src="<?= base_url('public/admin/js/data-table/bootstrap-table.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/tableExport.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/data-table-active.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/bootstrap-table-editable.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/bootstrap-editable.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/bootstrap-table-resizable.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/colResizable-1.5.source.js') ?>"></script>
<script src="<?= base_url('public/admin/js/data-table/bootstrap-table-export.js') ?>"></script>
<!--  editable JS
                ============================================ -->
<script src="<?= base_url('public/admin/js/editable/jquery.mockjax.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/mock-active.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/select2.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/moment.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/bootstrap-datetimepicker.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/bootstrap-editable.js') ?>"></script>
<script src="<?= base_url('public/admin/js/editable/xediable-active.js') ?>"></script>
<!-- cropper JS
                ============================================ -->
<script src="<?= base_url('public/admin/js/cropper/cropper.min.js') ?>"></script>
<script src="<?= base_url('public/admin/js/cropper/cropper-actice.js') ?>"></script>
<!-- tab JS
                ============================================ -->
<script src="<?= base_url('public/admin/js/tab.js') ?>"></script>

<!-- plugins JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/plugins.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- main JS
        ============================================ -->
<script src="<?= base_url('public/admin/js/main.js') ?>"></script>
<script>
        $(function () {
                $('[data-toggle="tooltip"]').tooltip()
        })
</script>
<script>
        <?php if (session()->has('success')): ?>
                Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: '<?= session('success') ?>',
                });
        <?php elseif (session()->has('error')): ?>
                Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: '<?= session('error') ?>',
                });
        <?php endif; ?>
</script>
<script>
        function confirmLogout() {
                Swal.fire({
                        title: 'Are you sure?',
                        text: 'You will be logged out!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, log me out!'
                }).then((result) => {
                        if (result.isConfirmed) {
                                // If user clicks "Yes", redirect to the logout URL
                                window.location.href = '<?= site_url('logout') ?>';
                        }
                });
        }
</script>
</body>

</html>