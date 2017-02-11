$( document ).ready(function() {
    $('.buttonlb').on('click', function() {
    
    var link = $(this);
    $('.buttonlbAct').removeClass('buttonlbAct');
    
    link.addClass('buttonlbAct');
    
});
});