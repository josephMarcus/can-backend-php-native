$(document).ready(function(){

    $('#contact').click(function(){

        $('html,body').animate({scrollTop:'100px'},
        1000,"swing",function(){
    
        $(this).animate({scrollTop:$('.contact').offset().top},2000)
          })
        })    
    $('#login').click(function(){
        $('.parent_login').show(100);
        $('.login_part').show(100);
    })

    $('#close').click(function(){
        $('.parent_login').hide(100);
        $('.login_part').hide(100);
    })

    $('.parent_login').click(function(){
        $('.parent_login').hide(100);
        $('.login_part').hide(100);
    })


})









var status=0
function show(){

    p=$('.products').offset().top;
  // console.log(p)
 if(document.documentElement.scrollTop > p - 90){
    if(status==0){
    var counters=$(".count");
            var counter_units=counters.length;    // number of unit on screen
            var counter=[100,70,50,90,100,800];  // to save units values from screen like 0=100 1=500 2=300
            var lower_value=Math.min(...counter);
            var high_value=Math.max(...counter);
           // console.log(lower_value);
           // console.log(high_value);
         
            var count=function(start,value,id){
                var localStart=start;
                var newtime=lower_value/2000*100;
                var time2=high_value/2000*100;
                if(value < high_value){
                    setInterval(function(){
                    if(localStart < value){  // if the start value not close to the final value
                        localStart++;
                        counters[id].innerHTML=localStart; // inject in to screen 
                    }
                },time2);
                }else{
                    setInterval(function(){
                    if(localStart < value){  // if the start value not close to the final value
                        localStart++;
                        counters[id].innerHTML=localStart; // inject in to screen 
                    }
                },newtime);
                }
               //
            }
            for(unit_id=0;unit_id<counter_units;unit_id++){
                count(0,counter[unit_id],unit_id);
            }

            status=1
        }
 }
}


/*=============================================================== */




 

