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
});