
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- confirm-delete -->
    <script>
      $(document).ready(function(){

        $('.confirm-delete').click(function(e){
          e.preventDefault();
          // alert("are you?");

          confirmDialog = confirm("Are you sure? you want to delete this data?");
          
          if(confirmDialog)
        {
            var id = $(this).val();
            // alert(id);
            $.ajax

        }

      });
      
    });
    </script>
  </body>
</html>