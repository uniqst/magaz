$(document).ready(function(){
    $('.inputAll').click(function(){
        var input = '#' + $(this).parent().parent().attr('id');
        var inp = input + ' li input';
            $(inp).attr('checked', 'checked');
        $('#form').submit();
    })
});

$('.pluso').css({'position': 'fixed', 'right': '0', 'top' : '100px'});
