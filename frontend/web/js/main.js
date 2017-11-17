$(document).ready(function(){
    $('.inputAll').click(function(){
        var input = '#' + $(this).parent().parent().attr('id');
        var inp = input + ' li input';
            $(inp).attr('checked', 'checked');
        $('#form').submit();
    })
});