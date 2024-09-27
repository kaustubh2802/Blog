<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



<!-- DataTables JS -->
<!-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="cdn.datatables.net/2.1.7/js/dataTables.min.js"></script> -->


<!-- for bootstrap -->
<script src="  https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js "></script>
<script src=" https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap4.js "></script>












<script>
  // let table = new DataTable('#myTableOne');
  $(document).ready(function() {
    $('#myTableOne').DataTable(); // Initialize DataTables
  });
</script>

<!-- confirm-delete -->
<script>
  $(document).ready(function() {
    $('.confirm-delete').click(function(e) {
      e.preventDefault();
      confirmDialog = confirm("Are you sure? you want to delete this data?");
      if (confirmDialog) {
        var id = $(this).val();
        // alert(id);
        $.ajax({
          type: "DELETE",
          url: "/employee/confirmdelete/" + id,
          success: function(response) {
            alert("Record is deleted !");
            window.location.reload();
          }
        });
      }
    });

  });
</script>
</body>

</html>