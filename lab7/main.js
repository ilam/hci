
 var ct=0,prevTime,curTime;
$(document).ready(function() {

  
   
   $("#text").html("Double Click on the Red Circle to start exercise");

   $("#c01").dblclick(function(){
   $("#c0").hide(); $("#c1").show(); $("#text").html("Click on the Smallest Red Circle");   
   prevTime=(new Date()).getTime();
   curTime=(new Date()).getTime();
   ct++;
   });
   
   $("#c11").click(function(){
   curTime=(new Date()).getTime();
   $("#c1").hide(); $("#c2").show(); $("#text").html("Click on the Big Blue Circle");
   $('#vals').append('<tr><td>'+ct+'</td><td>'+ parseInt(curTime-prevTime)/1000+'</td></tr>');   
   prevTime=curTime;
   ct++;
   });
   
   $("#c21").click(function(){
   $("#c2").hide(); $("#c3").show(); $("#text").html("Click on the Smallest Orange Circle");   
   curTime=(new Date()).getTime();
     $('#vals').append('<tr><td>'+ct+'</td><td>'+ parseInt(curTime-prevTime)/1000+'</td></tr>');   
   prevTime=curTime;
   ct++;
   });
   
   $("#c31").click(function(){
   $("#c3").hide(); $("#c4").show(); $("#text").html("Click on the Smallest Green Circle");   
   curTime=(new Date()).getTime();
     $('#vals').append('<tr><td>'+ct+'</td><td>'+ parseInt(curTime-prevTime)/1000+'</td></tr>');   
   prevTime=curTime;
   ct++;
   });
   
   $("#c41").click(function(){
   $("#c4").hide(); $("#c5").show(); 
   curTime=(new Date()).getTime();
     $('#vals').append('<tr><td>'+ct+'</td><td>'+ parseInt(curTime-prevTime)/1000+'</td></tr>');   
   prevTime=curTime;
   ct++;
   $("#text").html("Click on the Yellow Circle");   
   });
    
   $("#c51").click(function(){
   curTime=(new Date()).getTime();
     $('#vals').append('<tr><td>'+ct+'</td><td>'+ parseInt(curTime-prevTime)/1000+'</td></tr>');   
   prevTime=curTime;
   ct++;
    $("#text").html("The Time in seconds for each case is as follows,");   
   $("#c5").hide(); $("#vals").show();
   });
   
});
