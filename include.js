(function(DOMParser) {  
    "use strict";  
    var DOMParser_proto = DOMParser.prototype  
      , real_parseFromString = DOMParser_proto.parseFromString;

    // Firefox/Opera/IE throw errors on unsupported types  
    try {  
        // WebKit returns null on unsupported types  
        if ((new DOMParser).parseFromString("", "text/html")) {  
            // text/html parsing is natively supported  
            return;  
        }  
    } catch (ex) {}  

    DOMParser_proto.parseFromString = function(markup, type) {  
        if (/^\s*text\/html\s*(?:;|$)/i.test(type)) {  
            var doc = document.implementation.createHTMLDocument("")
              , doc_elt = doc.documentElement
              , first_elt;

            doc_elt.innerHTML = markup;
            first_elt = doc_elt.firstElementChild;

            if (doc_elt.childElementCount === 1
                && first_elt.localName.toLowerCase() === "html") {  
                doc.replaceChild(first_elt, doc_elt);  
            }  

            return doc;  
        } else {  
            return real_parseFromString.apply(this, arguments);  
        }  
    };  
}(DOMParser));

function HttpRequest(url, tid, sid) {   //url is target url; tid is id to be written to; sid is the source id from the target url

   req = new XMLHttpRequest() //create a new xmlhttprequest object set to the req variable

   req.open('GET', url, false) //get page synchronously
 
   req.onreadystatechange = function(){
      if(req.readyState == req.DONE){
         var parser = new DOMParser();
         var doc = parser.parseFromString(req.responseText, 'text/html');
         tid.innerHTML = doc.getElementById(sid).innerHTML;
      }
   }
   req.send(null) //send the request   
   
}
