var randomnumber = Math.floor(Math.random()*10)+1;

function getrandom(numm)
{
   if (numm>10)
   {
      var newnumm = Math.round(((numm/10)-Math.floor(numm/10))*10)+1;
	  return newnumm;
   }
   else
   {
	   return numm;
   }
}
function randomizer(image,newimage)
{
image.src='Images/kidbits'+ newimage + '.gif';
}

function kidbits() {
	document.getElementById('kidbits').innerHTML = '<img onclick="randomizer(this,getrandom(randomnumber+=1))" src="Images/kidbits'+ randomnumber + '.gif" width="489" height="482" alt="Kidsbit">';
}

function video1 () {
   jwplayer("mediaplayer").setup({
                    flashplayer: "jwplayer/player.swf",
                    file: "jwplayer/iwonder.mp4",
                  image: "Images/RhymeandReasonLogo.png",
                    height: 270,
                    width: 480
                });
}

function video2 () {
   jwplayer("mediaplayer").setup({
                    flashplayer: "jwplayer/player.swf",
                    file: "jwplayer/broccoli.mp4",
                  image: "Images/RhymeandReasonLogo.png",
                    height: 270,
                    width: 480
                });
}

function video3 () {
   jwplayer("mediaplayer").setup({
                    flashplayer: "jwplayer/player.swf",
                    file: "jwplayer/dreamingofyou.mp4",
                  image: "Images/RhymeandReasonLogo.png",
                    height: 270,
                    width: 480
                });
}
function video4 () {
   jwplayer("mediaplayer").setup({
                    flashplayer: "jwplayer/player.swf",
                    file: "jwplayer/Global-TV.mp4",
                  image: "Images/RhymeandReasonLogo.png",
                    height: 270,
                    width: 480
                });
}

function changeTv(img) {
   document.getElementById(img).src = "Images/small_tv_pink.gif"
}

function returnTv(img) {
   document.getElementById(img).src = "Images/small_tv.gif"
}

function changeBtn(img,file) {
  document.getElementsByTagName('img')[img].src=file;
}