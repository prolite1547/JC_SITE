export const importController = () =>{
    $('.json_import_file').submit(function(e){
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: '/upload/json',
            method: 'POST',
            data: formData,
            beforeSend: function(){
                $('#json_content').val("FETCHING DATA .........");
            },
            success : function(data){
                $('#json_content').val(data);
            },
            cache: false,
            contentType: false,
            processData: false,
           
        });
    });
}