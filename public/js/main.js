function delete_resource($url){
    $.ajax({
        url: $url,
        type: 'DELETE',  // user.destroy
        success: function(result) {
            console.log(result);
        }
    });
}
