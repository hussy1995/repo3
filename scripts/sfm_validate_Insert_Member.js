function sfm_validate_Insert_Member()
{
var Insert_MemberValidator = new Validator("Insert_Member");
Insert_MemberValidator.addValidation("mname",{required:true,message:"Please fill in mname"} );
Insert_MemberValidator.addValidation("mname",{alpha_s:true,message:"The input for mname should be a valid alphabetic value"} );
Insert_MemberValidator.addValidation("maddress",{required:true,message:"Please fill in maddress"} );
Insert_MemberValidator.addValidation("maddress",{alnum_s:true,message:"The input for maddress should be a valid alpha-numeric value"} );
Insert_MemberValidator.addValidation("memail",{required:true,message:"Please fill in memail"} );
Insert_MemberValidator.addValidation("memail",{email:true,message:"The input for memail should be a valid email value"} );

}