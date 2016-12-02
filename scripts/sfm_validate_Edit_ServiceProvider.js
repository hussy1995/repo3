function sfm_validate_Edit_ServiceProvider()
{
var Edit_ServiceProviderValidator = new Validator("Edit_ServiceProvider");
Edit_ServiceProviderValidator.addValidation("spname",{required:true,message:"Please fill in spname"} );
Edit_ServiceProviderValidator.addValidation("spname",{alpha_s:true,message:"The input for spname should be a valid alphabetic value"} );
Edit_ServiceProviderValidator.addValidation("spaddress",{required:true,message:"Please fill in spaddress"} );
Edit_ServiceProviderValidator.addValidation("spaddress",{alnum_s:true,message:"The input for spaddress should be a valid alpha-numeric value"} );
Edit_ServiceProviderValidator.addValidation("spphone",{required:true,message:"Please fill in spphone"} );
Edit_ServiceProviderValidator.addValidation("spphone",{regexp:"(?:[\\(][0-9]{3}[\\)]|[0-9]{3})[-. ]?[0-9]{3}[-. ]?[0-9]{4}$",message:"Please enter a valid input for spphone"} );
Edit_ServiceProviderValidator.addValidation("spcnic",{required:true,message:"Please fill in spcnic"} );
Edit_ServiceProviderValidator.addValidation("spcnic",{regexp:"(?:[\\(][0-9]{5}[\\)]|[0-9]{5})[-. ]?[0-9]{7}[-. ]?[0-9]{1}$",message:"Please enter a valid input for spcnic"} );

}