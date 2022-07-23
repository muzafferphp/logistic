
$(document).ready(function(){
		$("#carrierRegister").validate({
		
			rules:{
				name:{
					required:true,
					minlength:3
				},
				email:{
					required:true,
					email:true	
				},
					mobile:{
						required:true,
						number:true,
						minlength:10,
						maxlength:12
					
					},
					password:{
						required:true,
						minlength:5
					}
			},
			messages:{
				name:{
					required:"Please enter you name",
					minlength:"Please enter 3 characters name"
				},
				email:{
					required:"Please enter correct name",
					email:true	
				},
				mobile:{
					required:"Please enter correct mobile no",
					number:true,
					minlength:"Please enter 10 digit mobile no",
					maxlength:"Max 12 digit mobile no"
				},
			}
	});
});


	$(document).ready(function(){
		$("#userRegister").validate({
		
			rules:{
				name:{
					required:true,
					minlength:3
				},
				email:{
					required:true,
					email:true	
				},
					mobile:{
						required:true,
						number:true,
						minlength:10,
						maxlength:12
					
					},
					password:{
						required:true,
						minlength:5
					}
			},
			messages:{
				name:{
					//required:"Please enter you name",
					minlength:"Please enter 3 characters name"
				},
				email:{
					//required:"Please enter correct name",
					email:true	
				},
				mobile:{
					//required:"Please enter correct mobile no",
					number:true,
					minlength:"Please enter 10 digit mobile no",
					maxlength:"Max 12 digit mobile no"
				},
				password:{
						//required:"Please enter password",
						minlength:"Please enter atlest 5 character "
				},
			}
	});
});