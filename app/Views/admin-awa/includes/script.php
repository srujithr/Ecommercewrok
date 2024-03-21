
  <!-- Bootstrap bundle JS -->
  <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
<!--plugins-->
<script src="<?= base_url('public/assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/simplebar/js/simplebar.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/metismenu/js/metisMenu.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') ?>"></script>
<script src="<?= base_url('public/assets/js/pace.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/chartjs/js/Chart.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/chartjs/js/Chart.extension.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') ?>"></script>
<!-- Vector map JavaScript -->
<script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') ?>"></script>
<script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!--app-->
<script src="<?= base_url('public/assets/js/app.js') ?>"></script>
<script src="<?= base_url('public/assets/js/index.js') ?>"></script>

  <script>
    new PerfectScrollbar(".review-list")
    new PerfectScrollbar(".chat-talk")
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