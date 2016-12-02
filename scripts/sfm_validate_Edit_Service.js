function sfm_validate_Edit_Service()
{
var Edit_ServiceValidator = new Validator("Edit_Service");
Edit_ServiceValidator.addValidation("sname",{required:true,message:"Please fill in sname"} );
Edit_ServiceValidator.addValidation("sname",{alpha_s:true,message:"The input for sname should be a valid alphabetic value"} );

}