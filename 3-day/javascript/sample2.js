$(function(){
    $('#click_id').click(function(){
        alert('クリック');
    });

    $('#check_id').click(function(){
        var name = $('#name_id').val();
        // val 値nameと言う変数に#name_idという値を代入
        if(name === ''){
            alert('名前を入れて');
        }else{
            $('#write').html(name);
            alert('入力された名前は'+name+"だよ");
        }
    });

    $("#area").hover(function(){
        $("#area").css("background", "red");
    }, function(){
        $("#area").css("background", "pink");
    });
});
