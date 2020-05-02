$('input[type="file"').on('change', function(e) {
    if(e.target.files.length == 1){
        const filename = e.target.files[0].name;

        $('.custom-file-label').html(filename);

        console.log(filename);
    }else{

        $('.custom-file-label').html(`${e.target.files.length} files selected`);
    }

});