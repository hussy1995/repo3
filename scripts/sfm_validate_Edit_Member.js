function sfm_validate_Edit_Member()
{
var Edit_MemberValidator = new Validator("Edit_Member");
Edit_MemberValidator.addValidation("mname",{required:true,message:"Please fill in mname"} );
Edit_MemberValidator.addValidation("mname",{alpha_s:true,message:"The input for mname should be a valid alphabetic value"} );
Edit_MemberValidator.addValidation("maddress",{required:true,message:"Please fill in maddress"} );
Edit_MemberValidator.addValidation("maddress",{alnum_s:true,message:"The input for maddress should be a valid alpha-numeric value"} );
Edit_MemberValidator.addValidation("memail",{required:true,message:"Please fill in memail"} );
Edit_MemberValidator.addValidation("memail",{email:true,message:"The input for memail should be a valid email value"} );

}