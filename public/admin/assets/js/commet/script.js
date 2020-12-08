(function($){
    $(document).ready(function(){

        // POST DATATABLES
        $('table.data-table').DataTable();

        // CK Editor
        CKEDITOR.replace('post_editor');

        // Logout system
        $('a#logout-button').click(function(e){
            e.preventDefault();
            $('form#logout-form').submit();
        });


        // Category edit
        $(document).on('click', 'a#category_edit', function(e){
            e.preventDefault();

            let id = $(this).attr('edit_id');

            $.ajax({
                url : 'post-category-edit/' + id ,
                dataType : "json",
                success : function(data){
                    $('#category_modal_update form input[name="name"]').val(data.name);
                    $('#category_modal_update form input[name="id"]').val(data.id);
                }
            });


        });


        // Post featured image load
        $(document).on('change', "input#fimage", function(event){
            event.preventDefault();
            let post_image_url = URL.createObjectURL(event.target.files[0]);
            $('img#post_featured_image_load').attr('src', post_image_url);

        });


    });
})(jQuery)
