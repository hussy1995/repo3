function sfm_validate_Edit_Offer()
{
var Edit_OfferValidator = new Validator("Edit_Offer");
Edit_OfferValidator.addValidation("response",{required:true,message:"Please fill in response"} );
Edit_OfferValidator.addValidation("response",{alpha_s:true,message:"The input for response should be a valid alphabetic value"} );
Edit_OfferValidator.addValidation("allocation",{required:true,message:"Please fill in allocation"} );
Edit_OfferValidator.addValidation("allocation",{alpha_s:true,message:"The input for allocation should be a valid alphabetic value"} );
Edit_OfferValidator.addValidation("servicecharges",{required:true,message:"Please fill in servicecharges"} );
Edit_OfferValidator.addValidation("servicecharges",{numeric:true,message:"The input for servicecharges should be a valid numeric value"} );

}