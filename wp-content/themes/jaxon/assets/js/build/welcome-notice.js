!function(){"use strict";document.addEventListener("DOMContentLoaded",(()=>{!function(e){const{activating:t,installing:s,done:o,activationUrl:n,ajaxUrl:a,nonce:c,otterRefNonce:i,otterStatus:d}=jaxonData,l=e(".jaxon-welcome-notice #jaxon-install-otter"),r=e(".jaxon-welcome-notice .notice-dismiss"),u=e(".jaxon-welcome-notice"),m=l.find(".text"),x=l.find(".dashicons"),w=()=>{u.fadeTo(100,0,(()=>{u.slideUp(100,(()=>{u.remove()}))}))},j=async()=>{var s;m.text(t),await(s=n,new Promise((e=>{jQuery.get(s).done((()=>{e({success:!0})})).fail((()=>{e({success:!1})}))}))),await e.post(a,{nonce:i,action:"jaxon_set_otter_ref"}),x.removeClass("dashicons-update"),x.addClass("dashicons-yes"),m.text(o),setTimeout(w,1500)};e(l).on("click",(async()=>{x.removeClass("hidden"),l.attr("disabled",!0),"installed"!==d?(m.text(s),await new Promise((e=>{wp.updates.ajax("install-plugin",{slug:"otter-blocks",success:()=>{e({success:!0})},error:t=>{e({success:!1,code:t.errorCode})}})})),await j()):await j()})),e(r).on("click",(()=>{e.post(a,{nonce:c,action:"jaxon_dismiss_welcome_notice",success:w})}))}(jQuery)}))}();