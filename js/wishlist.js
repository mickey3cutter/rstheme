 function setCookie(cname,cvalue,exdays){
    var d=new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires="expires="+d.toGMTString();
    document.cookie=cname+"="+cvalue+"; "+expires+"; path=/";
}
function getCookie(cname){
    var name=cname+"=";
    var ca=document.cookie.split(';');
    for(var i=0;i<ca.length;i++){
        var c=ca[i];
        while(c.charAt(0)==' ')c=c.substring(1);
        if(c.indexOf(name)!=-1)return c.substring(name.length,c.length);
    }
    return"";
}
$('.add-to-wishlist').not('.act').click(function(event) {
    $(this).addClass('act');
    var id = $(this).attr('data-id');
    if(getCookie('wishlist')!=''){
        var ids = new Array();
        ids.push(getCookie('wishlist'));
        ids.push(id);
        setCookie('wishlist',ids,3);
    } else {
        setCookie('wishlist',id,3);
    }

});
$('.wishlist-remove').click(function(event) {
    var id_r = $(this).attr('data-id');
    $('.temp-remove-button').attr('data-id',id_r);
});

$('.temp-remove-button').click(function(event) {
    var id = $(this).attr('data-id');
    var ids = new Array();
    $('.wishlist-entry').each(function(index, el) {
        var id_n = $(this).attr('data-id');
        if(id_n!=id){
            ids.push(id_n); 
        }
    });
    console.log(ids);
   setCookie('wishlist',ids,3);
});