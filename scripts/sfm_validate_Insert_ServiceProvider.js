function sfm_validate_Insert_ServiceProvider()
{
var Insert_ServiceProviderValidator = new Validator("Insert_ServiceProvider");
Insert_ServiceProviderValidator.addValidation("spname",{required:true,message:"Please fill in spname"} );
Insert_ServiceProviderValidator.addValidation("spname",{alpha_s:true,message:"The input for spname should be a valid alphabetic value"} );
Insert_ServiceProviderValidator.addValidation("spaddress",{required:true,message:"Please fill in spaddress"} );
Insert_ServiceProviderValidator.addValidation("spaddress",{alnum_s:true,message:"The input for spaddress should be a valid alpha-numeric value"} );
Insert_ServiceProviderValidator.addValidation("spphone",{required:true,message:"Please fill in spphone"} );
Insert_ServiceProviderValidator.addValidation("spphone",{regexp:"(?:[\\(][0-9]{3}[\\)]|[0-9]{3})[-. ]?[0-9]{3}[-. ]?[0-9]{4}$",message:"Please enter a valid input for spphone"} );
Insert_ServiceProviderValidator.addValidation("spcnic",{required:true,message:"Please fill in spcnic"} );
Insert_ServiceProviderValidator.addValidation("spcnic",{regexp:"(?:[\\(][0-9]{5}[\\)]|[0-9]{5})[-. ]?[0-9]{7}[-. ]?[0-9]{1}$",message:"Please enter a valid input for spcnic"} );

}