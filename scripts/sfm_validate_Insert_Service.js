function sfm_validate_Insert_Service()
{
var Insert_ServiceValidator = new Validator("Insert_Service");
Insert_ServiceValidator.addValidation("sname",{required:true,message:"Please fill in sname"} );
Insert_ServiceValidator.addValidation("sname",{alpha_s:true,message:"The input for sname should be a valid alphabetic value"} );
Insert_ServiceValidator.addValidation("charges",{required:true,message:"Please fill in charges"} );
Insert_ServiceValidator.addValidation("charges",{numeric:true,message:"The input for charges should be a valid numeric value"} );

}