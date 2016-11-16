(function($){
	$.fn.extend({
		hloFormValidateJs:function(op){
			var form = this;
			form.submit(function(){
				var valid=1;
				form.find(".error-hloFormValidateJs").remove();
				form.find(".validate").each(function(i,k){
					var thifoc = $(this);
					var thitype = thifoc.attr("data-type");
					var thisvalue = thifoc.val();				
					switch(thitype){
						case 'email':
						expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					    if (!expr.test(thisvalue)) { thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block; "+op.style+"'>"+op.textEmail+"</span>"); valid=0; return false; }					
						break;
						case 'password':
						expr = op.expPassword;
					    if (!expr.test(thisvalue)) { thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block; "+op.style+"'>"+op.textPassword+"</span>"); valid=0; return false; }							
						break;
						case 'textarea':										
							if (thisvalue.length<op.mintextarea) { thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block; "+op.style+"'>"+op.textTextarea+"</span>"); valid=0; return false; }							
						break;
						case 'number':							
					    	if (!/^([0-9])*$/.test(thisvalue)) { thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block; "+op.style+"'>"+op.textNumber+"</span>"); valid=0; return false; }
						break;	
						case 'text':
					    	if (!/^[a-zA-Z]*$/.test(thisvalue)) { thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block; "+op.style+"'>"+op.textText+"</span>"); valid=0; return false; }
						break;			
						default:
							if (thisvalue==""){ thifoc.focus().after("<span class='error-hloFormValidateJs' style='position:absolute; padding:5px; display:inline-block;"+op.style+"'>"+op.textNormal+"</span>"); valid=0; return false; }
						break;
					}
				})			
				if (valid==0){ return false; }
			});

		}
	})
})(jQuery)