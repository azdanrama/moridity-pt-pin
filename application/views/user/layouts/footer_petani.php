 <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © &amp; Developed by <a href="" target="_blank">MoriDity</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?=base_url('assets');?>/vendor/global/global.min.js"></script>
	<script src="<?=base_url('assets');?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="<?=base_url('assets');?>/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="<?=base_url('assets');?>/js/custom.min.js"></script>
	<script src="<?=base_url('assets');?>/js/deznav-init.js"></script>
	<script src="<?=base_url('assets');?>/vendor/owl-carousel/owl.carousel.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="<?=base_url('assets');?>/vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="<?=base_url('assets');?>/vendor/apexchart/apexchart.js"></script>

    <!-- Datepicker -->
	<script src="<?=base_url('assets');?>js/jquery.min.js"></script>
    <script src="<?=base_url('assets');?>/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
                endDate : '0d',
            });
        });
    </script>