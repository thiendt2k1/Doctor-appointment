                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer>
		<div class="contact container-fluid bg-primary text-white">
			<div class="row">
      <div class="end col-md-4 col-sm-6 sticky-footer" style="font-size:20px;">
        <div>
          <p>Medical Search and Arrange Website</p>
        </div>
        <div>
          <p>Telephone number: 0961551910</p>
          <p>Email: company@gmail.com</p>
		  <p>Owners: </br>
			 			Trần Đức Thiện - 1952998 </br>
		  			  	Phan Đăng Khôi Nguyên - 1952366 </br>
					   	Phạm Quang Minh - 2053234 </br>
					   	Trần Xuân Đức - 1552102
		  </p>
        </div>
        <div>
          <p>Address: 268 Ly Thuong Kiet, District 10, Ho Chi Minh City, Vietnam</p>
        </div>
      </div>
	  <div class="col-md-6 col-sm-6" id="googleMap" style="width:50%;height:auto;"></div>
</div>
<!-- google js map API -->
<script>
    function myMap() {
        const myLatLng = new google.maps.LatLng(10.7721,106.6579);
        var mapProp= {center:myLatLng,
                      zoom:17,};
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        var marker = new google.maps.Marker({position: myLatLng, map, title:"Welcome to HCMUT!"});
        }
</script>

<!-- source with API key to enable -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk8AL0Oc9KxB0eWHAJjlLum4Zu7vpre_E&callback=myMap"></script>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript" src="../vendor/parsley/dist/parsley.min.js"></script>

    <script type="text/javascript" src="../vendor/bootstrap-select/bootstrap-select.min.js"></script>

    <script type="text/javascript" src="../vendor/datepicker/bootstrap-datepicker.js"></script>

</body>

</html>