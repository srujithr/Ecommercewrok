<!-- Bootstrap Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productModalLabel">Product Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img src="" class="img-fluid product-image" alt="Product Image">
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to handle modal image display -->
<script>
  // Wait for the document to be ready
  document.addEventListener('DOMContentLoaded', function() {
    // Get all elements with the class 'view-product'
    const viewButtons = document.querySelectorAll('.view-product');

    // Loop through each view button
    viewButtons.forEach(function(button) {
      // Add click event listener
      button.addEventListener('click', function(event) {
        // Prevent default link behavior
        event.preventDefault();

        // Get the image source from the data-image attribute
        const imageSource = button.getAttribute('data-image');

        // Set the image source in the modal
        const modalImage = document.querySelector('.image');
        modalImage.src = imageSource;

        // Show the modal
        const modal = new bootstrap.Modal(document.getElementById('productModal'));
        modal.show();
      });
    });
  });
</script>