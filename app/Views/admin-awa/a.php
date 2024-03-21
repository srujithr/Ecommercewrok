
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('relatedImagesInput');

        input.addEventListener('change', function () {
            const files = input.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const reader = new FileReader();

                reader.onload = function (e) {
                    const image = new Image();

                    image.onload = function () {
                        const width = this.width;
                        const height = this.height;

                        if (width !== 400 || height !== 400) {
                            // Invalid image size, clear the input and alert the user
                            input.value = ''; // Clear the input field
                            alert('Please upload images with dimensions 400x400.');
                            return;
                        }
                    };
                };

                reader.readAsDataURL(file);
            }
        });
    });
</script>