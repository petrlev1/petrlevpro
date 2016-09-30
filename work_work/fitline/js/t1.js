var placeholder = 'This is a line \n this1 should be a new line';
$('textarea').attr('value', placeholder);

$('textarea').focus(function(){
    if($(this).val() === placeholder){
        $(this).attr('value', '');
    }
});

$('textarea').blur(function(){
    if($(this).val() ===''){
        $(this).attr('value', placeholder);
    }    
});