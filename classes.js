// function mousePos(e){
//    document.getElementById('pos').innerHTML = 'X: '+window.event.clientX+' Y: '+window.event.clientY;
// }

// function viewSz(){
//    document.getElementById('sz').innerHTML = document.documentElement.offsetWidth+'x'+document.documentElement.offsetHeight;
// }

function classOverlay(src){
   window.response = null;
   var trans = document.createElement('div');
   trans.id = 'classOverlay';
   var ov = document.createElement('div');
   ov.id = 'overlayTrans';
   document.body.appendChild(trans);
   document.body.appendChild(ov);

   var overlay = document.getElementById('classOverlay');
   var transparency = document.getElementById('overlayTrans');

   HttpRequest(src, overlay, 'classinfo');     

   if(window.scrollY){
      overlay.style.top = (window.scrollY+(window.screen.availHeight/2))-(overlay.offsetHeight/1.75)+ 'px';
   }
   else{
      overlay.style.top = (document.documentElement.scrollTop+(window.screen.availHeight/2))-(overlay.offsetHeight/1.75)+'px';
   }
   overlay.style.left = ((document.documentElement.offsetWidth/2)-(overlay.offsetWidth/2))+'px';

   if (overlay.innerHTML == ''){
         location.href = src;
         return false;
      }

   else{
      transparency.onclick = function(e){closeOverlay(e);};
      window.onresize = function(e){moveOverlay(e);};

      overlay.style.visibility = 'visible';
      transparency.style.visibility = 'visible';
      document.body.style.overflow = 'hidden';
   }
}

function moveOverlay(){
   var overlay = document.getElementById('classOverlay');
   if (overlay.style.visibility == 'visible'){
      if(document.documentElement.offsetWidth>949){
         overlay.style.top = ((document.documentElement.offsetHeight/2)-(overlay.offsetHeight/2))+'px';
         overlay.style.left = ((document.documentElement.offsetWidth/2)-(overlay.offsetWidth/2))+'px';
      }
   }
}

function closeOverlay(e){
   var overlay = document.getElementById('classOverlay');
   
   if(overlay.style.visibility == 'visible'){
      var e = window.event||e;
      var x = e.clientX;
      var y = e.clientY;

      if(x<overlay.offsetLeft || x>(overlay.offsetLeft+overlay.offsetWidth) || y<overlay.offsetTop || y<(overlay.offsetTop+overlay.offsetHeight)){
            overlay.style.visibility = 'hidden';
            document.getElementById('overlayTrans').style.visibility = 'hidden';
            document.body.style.overflow = 'auto';
      }
   }
}