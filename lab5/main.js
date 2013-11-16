$(document).ready(function() {
  var myArray = [
  {'position':'fixed','top':'105px','left':'150px','background':'#feefff','width':'50px','height':'50px','-webkit-border-radius':'25px','-moz-border-radius':'25px','border-radius':'25px'},
  {'position':'fixed','top':'25px','left':'50px','background':'#cccccc','width':'100px','height':'100px','-webkit-border-radius':'50px','-moz-border-radius':'50px','border-radius':'50px'},
  {'position':'fixed','top':'105px','left':'50px','background':'#dddddd','width':'50px','height':'50px','-webkit-border-radius':'25px','-moz-border-radius':'25px','border-radius':'25px'},
  {'position':'fixed','top':'185px','left':'150px','background':'#5e4f3f','width':'150px','height':'150px','-webkit-border-radius':'75px','-moz-border-radius':'75px','border-radius':'75px'},
  {'position':'fixed','top':'400px','left':'600px','background':'#ce3ded','width':'30px','height':'30px','-webkit-border-radius':'15px','-moz-border-radius':'15px','border-radius':'15px'},
  {'position':'fixed','top':'100px','left':'800px','background':'#eeeded','width':'200px','height':'200px','-webkit-border-radius':'100px','-moz-border-radius':'100px','border-radius':'100px'},
  {'position':'fixed','top':'50px','left':'100px','background':'#111111','width':'20px','height':'20px','-webkit-border-radius':'10px','-moz-border-radius':'10px','border-radius':'10px'},
  {'position':'fixed','top':'200px','left':'300px','background':'#dddddd','width':'60px','height':'60px','-webkit-border-radius':'30px','-moz-border-radius':'30px','border-radius':'30px'}
  
  //more objects...
];
   var ct=-1,prevTime,curTime=(new Date()).getTime(),deltaTime;
   var px,py;
   $("#circle").click(function(event){
   ct=ct+1;
   if(ct!=0)
   {
   //console.log(parseInt($(this).css('width')));
   //console.log(parseInt(myArray[ct-1]['width']));
   //console.log(ct);
   var dx,dy;
   if(ct==1)
   {
   dx = (parseInt(myArray[ct-1]['left'])+parseInt(myArray[ct-1]['width'])/2) - (parseInt(myArray[ct-1]['left'])+parseInt(myArray[ct-1]['width'])/2);
   dy = (parseInt(myArray[ct-1]['top'])+parseInt(myArray[ct-1]['height'])/2) - (parseInt(myArray[ct-1]['top'])+parseInt(myArray[ct-1]['height'])/2);
   }
   else
   {
   dx = (parseInt(myArray[ct-1]['left'])+parseInt(myArray[ct-1]['width'])/2) - (parseInt(myArray[ct-2]['left'])+parseInt(myArray[ct-2]['width'])/2);
   dy = (parseInt(myArray[ct-1]['top'])+parseInt(myArray[ct-1]['height'])/2) - (parseInt(myArray[ct-2]['top'])+parseInt(myArray[ct-2]['height'])/2);
   }
   var distance = Math.sqrt(Math.pow(dx,2) + Math.pow(dy,2));
    var clickd = Math.sqrt(Math.pow(px-event.screenX,2) + Math.pow(py-event.screenY,2));
   console.log(screenX);
   //console.log(distance);
   prevTime = curTime;
   curTime = (new Date()).getTime();
   deltaTime = curTime - prevTime;
   //console.log(deltaTime);
   $('#vals').append('<tr><td>'+ct+'</td><td>'+(parseInt(myArray[ct-1]['top'])+parseInt(myArray[ct-1]['height'])/2) +'</td><td>'+parseInt(myArray[ct-1]['width'])+'</td><td>'+parseFloat(distance).toFixed(2)+'</td><td>'+parseFloat(clickd).toFixed(2)+'</td><td>'+parseInt(myArray[ct-1]['width'])/2+'</td><td>'+deltaTime+'</td></tr>');
   px=event.screenX;
   py=event.screenY;
   }
   else
   {
   curTime=(new Date()).getTime()
   px=event.screenX;
   py=event.screenY;
   }
   if(ct!=myArray.length)
   {
   $(this).css(myArray[ct]);
   }
   else
   {
   $(this).css({'background' : '#ffffff'});
   ct=ct-1;
   }
   });   
});
