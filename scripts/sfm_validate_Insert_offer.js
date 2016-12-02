function sfm_validate_Insert_offer()
{
var Insert_offerValidator = new Validator("Insert_offer");
Insert_offerValidator.addValidation("response",{required:true,message:"Please fill in response"} );
Insert_offerValidator.addValidation("response",{alpha_s:true,message:"The input for response should be a valid alphabetic value"} );
Insert_offerValidator.addValidation("allocation",{required:true,message:"Please fill in allocation"} );
Insert_offerValidator.addValidation("allocation",{alpha_s:true,message:"The input for allocation should be a valid alphabetic value"} );
Insert_offerValidator.addValidation("servicecharges",{required:true,message:"Please fill in servicecharges"} );
Insert_offerValidator.addValidation("servicecharges",{numeric:true,message:"The input for servicecharges should be a valid numeric value"} );

}