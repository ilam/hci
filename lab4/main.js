$(document).ready(function() {
   function moveRow(row, targetTable){
       $(row)
           .appendTo(targetTable);
       var $date = $('#val');
	  $date.val($date.val() + $(row).attr('id')+',');
   }

   var ct=0;
   $("#toselect tr").click(function(){
       if(ct<7)
	   {
	   moveRow($(this), $("#scolors"));
	   ct++;
	   }
   });
   
   var count=7;
   var counter=setInterval(timer, 1000); //1000 will  run it every 1 second
   function timer()
   {
   count=count-1;
   if (count <= 0)
   {
     clearInterval(counter);
     //counter ended, do something here
     return;
   }

  document.getElementById("timer").innerHTML='Time Left :'+count + " secs"; 
}
});
