$(function(){

    $('.like').click(function(e){
        e.preventDefault();
        var postID = $(this).data('postid');
        var url = '/like/' + postID;
        var token = $('#token').val();
        $.post(url, {_token: token},  function(res, textStatus){
            $('#rating'+postID).html(res);
        }).error(function(){
            alert('Для этого действия необходимо авторизоваться');
        });
    });

    $('.dislike').click(function(e){
        e.preventDefault();
        var postID = $(this).data('postid');
        var token = $('#token').val();
        var url = '/dislike/' + postID;
        $.post(url, {_token: token}, function(res){
            $('#rating'+postID).html(res);
        }).error(function(){
            alert('Для этого действия необходимо авторизоваться');
        });
    });

});
