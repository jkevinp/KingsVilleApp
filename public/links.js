var page =window.location.protocol + "//" + window.location.host + "/";
var page_user = page + 'user/';
var page_guest = page + 'guest/';
var page_homeowner = page + 'homeowner/';
$(document).ready(function(){

    var pageUrl = window.location.pathname.split('/');
    pageUrl[0] = "";
    pageUrl[1] = "";
    hasClicked = false;
    $.each(pageUrl, function(x){
        if(pageUrl[x].length > 0){

            if(!hasClicked){
                var name =  '.' +pageUrl[x];
                $(name).addClass('active');
                $(name).click();
                hasClicked = true;
                console.log(name);
            }else{
                var name= '.' +pageUrl[x -1] + "-" +pageUrl[x];
                 $(name).closest("li").addClass('active');
                 console.log(name);
            }
        }
       
    });
   
    var isHidden = true;
        $('#btn_search').click(function(e){
        var c = $('#main-content');
        var searchdiv = $('#div_search');
        e.preventDefault();
        if(isHidden){
             searchdiv.fadeIn();
             searchdiv.animate({ "right": "+=300px"
              }, "slow" ,function(){
                 c.css('-webkit-filter','blur(7px)');
            c.css('-moz-filter','blur(15px)');
            c.css('-o-filter','blur(15px)');
            c.css('-ms-filter','blur(15px)');
            c.css('filter' ,'blur(15px)');

              } );
           
        }
        else{
             
              searchdiv.animate({ "right": "-=300px" }, "slow"  , function(){
                c.css('-webkit-filter','blur(0px)');
                c.css('-moz-filter','blur(0px)');
                c.css('-o-filter','blur(0px)');
                c.css('-ms-filter','blur(0px)');
                c.css('filter' ,'blur(0px)');
                searchdiv.fadeOut();
            });
             
        }
        
      isHidden = !isHidden;
    });

    $('[type=text]').addClass('opacity5');
    $('[type=number]').addClass('opacity5');
    $('[type=email]').addClass('opacity5');
    $('[type=password]').addClass('opacity5');  
    $('textarea').addClass('opacity5');
    $('select').addClass('opacity4');
});