<!-- jQuery -->
<script src="<?= base_url(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- admin LTE app -->
<script src="<?= base_url(); ?>/js/adminlte.min.js"></script>

<!-- file upload -->
<script>
  function previewPria() {
    const foto_p = document.querySelector('#foto_p');
    const foto_pLabel = document.querySelector('.form-label');
    const imgPreview = document.querySelector('.img-preview');

    //ganti url
    foto_pLabel.textContent = foto_p.files[0].name;

    //ganti preview
    const fileFotoP = new FileReader();
    fileFotoP.readAsDataURL(foto_p.files[0]);

    fileFotoP.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }

  function previewWanita() {
    const foto_w = document.querySelector('#foto_w');
    const foto_wLabel = document.querySelector('.form-label');
    const imgPreview = document.querySelector('.img-preview');

    //ganti url
    foto_wLabel.textContent = foto_w.files[0].name;

    //ganti preview
    const fileFotoW = new FileReader();
    fileFotoW.readAsDataURL(foto_w.files[0]);

    fileFotoW.onload = function(e) {
      imgPreview.src = e.target.result;
    }
  }

  $(function() {

    $('#images').change(function(e) {
      var files = e.target.files;
      for (var i = 0; i <= files.length; i++) {

        // when i == files.length reorder and break
        if (i == files.length) {
          // need timeout to reorder beacuse prepend is not done
          setTimeout(function() {
            reorderImages();
          }, 100);
          break;
        }

        var file = files[i];
        var reader = new FileReader();

        reader.onload = (function(file) {
          return function(event) {
            $('#sortable').prepend('<li class="ui-state-default" data-order=0 data-id="' + file.lastModified + '"><img src="' + event.target.result + '" style="width:100%;" /> <div class="order-number">0</div></li>');
          };
        })(file);

        reader.readAsDataURL(file);
      } // end for;

    });

    $('#sortable').sortable();
    $('#sortable').disableSelection();

    //sortable events
    $('#sortable').on('sortbeforestop', function(event) {

      reorderImages();

    });


    function reorderImages() {
      // get the items
      var images = $('#sortable li');

      var i = 0,
        nrOrder = 0;
      for (i; i < images.length; i++) {

        var image = $(images[i]);

        if (image.hasClass('ui-state-default') && !image.hasClass('ui-sortable-placeholder')) {
          image.attr('data-order', nrOrder);
          var orderNumberBox = image.find('.order-number');
          orderNumberBox.html(nrOrder + 1);
          nrOrder++;
        } // end if;

      } // end for;
    };

  });
</script>
<!-- DataTables  & Plugins 


<script src="assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ ('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ ('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ ('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ ('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App 

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- uPlot 
<script src="{{ ('assets/plugins/uplot/uPlot.iife.min.js')}}"></script>

<!-- Ekko Lightbox 
<script src="{{ ('assets/plugins/ekko-lightbox/ekko-lightbox.min.js')}}"></script>
<!-- Filterizr

<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

<!-- bs-custom-file-input
<script src="{{('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>