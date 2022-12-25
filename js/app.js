document.addEventListener("DOMContentLoaded", () => {
    let adminRegisterForm = document.getElementById("admin-register__form-content");
    let username = document.getElementById("admin-register-username");
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let submitBtn = document.getElementById("admin-register__submit");
    let password = document.getElementById("admin-register-password");
    let invalidPassword = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("admin-register-message");

    adminRegisterForm?.addEventListener("submit", (e) => {
        if (username.value == "") {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
            e.preventDefault();
        }
        if (password.value == "") {
            password.style.borderColor = "#ff0000";
            invalidPassword.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            password.focus();
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let adminRegisterForm = document.getElementById("admin-register__form-content");
    let username = document.getElementById("admin-register-username");
    let submitBtn = document.getElementById("admin-register__submit");
    let password = document.getElementById("admin-register-password");
    let warningMessage = document.getElementById("admin-register-message");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/;
    let regExpPassword = /^(?=.*\d)(?=(.*\W){2})(?=.*[a-zA-Z])(?!.*\s).{1,15}$/;
    
    adminRegisterForm?.addEventListener("submit", (e) => {
        if  ((username.value.match(regExpUsername)) && (password.value.match(regExpPassword))) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let username = document.getElementById("admin-register-username");
    let validUsername = document.getElementsByClassName("check-form")[0];
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let warningMessage = document.getElementById("admin-register-message");
    let submitBtn = document.getElementById("admin-register__submit");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/;
    
    username?.addEventListener("input", () => {  
        if  ((username.value !== "") && (username.value.match(regExpUsername))) {
            username.style.borderColor = "#008000";
            invalidUsername.style.display = "none";
            validUsername.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            validUsername.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let password = document.getElementById("admin-register-password");
    let validPassword = document.getElementsByClassName("check-form")[1];
    let invalidPassword = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("admin-register-message");
    let submitBtn = document.getElementById("admin-register__submit");
    let regExpPassword = /^(?=.*\d)(?=(.*\W){2})(?=.*[a-zA-Z])(?!.*\s).{1,15}$/;
    
    password?.addEventListener("input", () => {  
        if  (password.value.match(regExpPassword)) {
            password.style.borderColor = "#008000";
            invalidPassword.style.display = "none";
            validPassword.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            password.style.borderColor = "#ff0000";
            invalidPassword.style.display = "inline-block";
            validPassword.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            password.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let adminLoginForm = document.getElementById("admin-login__form-content");
    let username = document.getElementById("admin-login-username");
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let submitBtn = document.getElementById("admin-login__submit");
    let password = document.getElementById("admin-login-password");
    let invalidPassword = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("admin-login-message");

    adminLoginForm?.addEventListener("submit", (e) => {
        if (username.value == "") {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
            e.preventDefault();
        }
        if (password.value == "") {
            password.style.borderColor = "#ff0000";
            invalidPassword.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            password.focus();
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let adminLoginForm = document.getElementById("admin-login__form-content");
    let username = document.getElementById("admin-login-username");
    let submitBtn = document.getElementById("admin-login__submit");
    let password = document.getElementById("admin-login-password");
    let warningMessage = document.getElementById("admin-login-message");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/;
    let regExpPassword = /^(?=.*\d)(?=(.*\W){2})(?=.*[a-zA-Z])(?!.*\s).{1,15}$/;
    
    adminLoginForm?.addEventListener("submit", (e) => {
        if  ((username.value.match(regExpUsername)) && (password.value.match(regExpPassword))) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let username = document.getElementById("admin-login-username");
    let validUsername = document.getElementsByClassName("check-form")[0];
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let warningMessage = document.getElementById("admin-login-message");
    let submitBtn = document.getElementById("admin-login__submit");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/;
    
    username?.addEventListener("input", () => {  
        if  ((username.value !== "") && (username.value.match(regExpUsername))) {
            username.style.borderColor = "#008000";
            invalidUsername.style.display = "none";
            validUsername.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            validUsername.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let password = document.getElementById("admin-login-password");
    let validPassword = document.getElementsByClassName("check-form")[1];
    let invalidPassword = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("admin-login-message");
    let submitBtn = document.getElementById("admin-login__submit");
    let regExpPassword = /^(?=.*\d)(?=(.*\W){2})(?=.*[a-zA-Z])(?!.*\s).{1,15}$/;
    
    password?.addEventListener("input", () => {  
        if  (password.value.match(regExpPassword)) {
            password.style.borderColor = "#008000";
            invalidPassword.style.display = "none";
            validPassword.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            password.style.borderColor = "#ff0000";
            invalidPassword.style.display = "inline-block";
            validPassword.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            password.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let addProductForm = document.getElementById("admin-add-product__form-content");
    let capName = document.getElementById("admin-add-product-name");
    let invalidCapName = document.getElementsByClassName("xmark-form")[0];
    let capPrice = document.getElementById("admin-add-product-price");
    let invalidCapPrice = document.getElementsByClassName("xmark-form")[1];
    let capQuantity = document.getElementById("admin-add-product-quantity");
    let invalidCapQuantity = document.getElementsByClassName("xmark-form")[2];
    let capCollectionId = document.getElementById("admin-add-product-collection_id");
    let invalidCapCollectionId = document.getElementsByClassName("xmark-form")[3];
    let capAdminCreatorId = document.getElementById("admin-add-product-admin_contributor_id");
    let invalidCapAdminCreatorId = document.getElementsByClassName("xmark-form")[4];
    let capImage = document.getElementById("admin-add-product-image");
    let invalidCapImage = document.getElementsByClassName("xmark-form")[5];
    let capDescription = document.getElementById("admin-add-product-description");
    let invalidCapDescription = document.getElementsByClassName("xmark-form")[6];
    let submitBtn = document.getElementById("admin-add-product__submit");
    let warningMessage = document.getElementById("add-product-message");

    addProductForm?.addEventListener("submit", (e) => {
        if  (capName.value == "") {
            capName.style.borderColor = "#ff0000";
            invalidCapName.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capName.focus();
            e.preventDefault();
        }
        if  (capPrice.value == "") {
            capPrice.style.borderColor = "#ff0000";
            invalidCapPrice.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capPrice.focus();
            e.preventDefault();
        }
        if  (capQuantity.value == "") {
            capQuantity.style.borderColor = "#ff0000";
            invalidCapQuantity.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capQuantity.focus();
            e.preventDefault();
        }
        if  (capCollectionId.value == "") {
            capCollectionId.style.borderColor = "#ff0000";
            invalidCapCollectionId.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capCollectionId.focus();
            e.preventDefault();
        }
        if  (capAdminCreatorId.value == "") {
            capAdminCreatorId.style.borderColor = "#ff0000";
            invalidCapAdminCreatorId.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capAdminCreatorId.focus();
            e.preventDefault();
        }
        if  (capImage.value == "") {
            capImage.style.borderColor = "#ff0000";
            invalidCapImage.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capImage.focus();
            e.preventDefault();
        }
        if  (capDescription.value == "") {
            capDescription.style.borderColor = "#ff0000";
            invalidCapDescription.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let addProductForm = document.getElementById("admin-add-product__form-content");
    let capName = document.getElementById("admin-add-product-name");
    let capPrice = document.getElementById("admin-add-product-price");
    let capQuantity = document.getElementById("admin-add-product-quantity");
    let capCollectionId = document.getElementById("admin-add-product-collection_id");
    let capAdminCreatorId = document.getElementById("admin-add-product-admin_contributor_id");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let warningMessage = document.getElementById("add-product-message");
    let regExpName = /^[a-zA-Z\s]*$/;
    let regExpPrice = /^[+]?\d+([.]\d+)?$/;
    let regExpQuantity = /^[1-9]\d*$/; 
    let regExpCollection_Id = /^[1-9]\d*$/;
    let regExpAdminCreator_Id = /^[1-9]\d*$/;

    addProductForm?.addEventListener("submit", (e) => {
        if  (capName.value.match(regExpName)) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capName.focus();
            e.preventDefault();
        }
        if  (capPrice.value.match(regExpPrice)) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capPrice.focus();
            e.preventDefault();
        }
        if  (capQuantity.value.match(regExpQuantity)) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capQuantity.focus();
            e.preventDefault();
        }
        if  (capCollectionId.value.match(regExpCollection_Id)) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capCollectionId.focus();
            e.preventDefault();
        }
        if  (capAdminCreatorId.value.match(regExpAdminCreator_Id)) {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capAdminCreatorId.focus();
            e.preventDefault();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let addProductForm = document.getElementById("admin-add-product__form-content");
    let capImage = document.getElementById("admin-add-product-image");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let validCapImage = document.getElementsByClassName("check-form")[5];
    let invalidCapImage = document.getElementsByClassName("xmark-form")[5];
	let regExpImage = /[\/.](jpg|jpeg)$/;
    addProductForm?.addEventListener("submit", (e) => {
        if  (capImage.value == "") {
            invalidCapImage.style.display = "inline-block";
            validCapImage.style.display = "none";
            e.preventDefault();
        }
        if  (capImage.value.match(regExpImage)) {
            invalidCapImage.style.display = "none";
            validCapImage.style.display = "inline-block";
            submitBtn.style.display = "block";
        } else {
            invalidCapImage.style.display = "inline-block";
            validCapImage.style.display = "none";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capName = document.getElementById("admin-add-product-name");
    let validCapName = document.getElementsByClassName("check-form")[0];
    let invalidCapName = document.getElementsByClassName("xmark-form")[0];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let regExpName = /^[a-zA-Z\s]*$/;
    
    capName?.addEventListener("input", () => {  
        if  ((capName.value !== "") && (capName.value.match(regExpName))) {
            capName.style.borderColor = "#008000";
            invalidCapName.style.display = "none";
            validCapName.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capName.style.borderColor = "#ff0000";
            invalidCapName.style.display = "inline-block";
            validCapName.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capName?.addEventListener("click", () => {  
        if  (capName.value == "") {
            capName.style.borderColor = "#ff0000";
            invalidCapName.style.display = "inline-block";
            validCapName.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capPrice = document.getElementById("admin-add-product-price");
    let validCapPrice = document.getElementsByClassName("check-form")[1];
    let invalidCapPrice = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let regExpPrice = /^[+]?\d+([.]\d+)?$/;
    
    capPrice?.addEventListener("input", () => {  
        if  (capPrice.value.match(regExpPrice)) {
            capPrice.style.borderColor = "#008000";
            invalidCapPrice.style.display = "none";
            validCapPrice.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capPrice.style.borderColor = "#ff0000";
            invalidCapPrice.style.display = "inline-block";
            validCapPrice.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capPrice?.addEventListener("click", () => {  
        if  (capPrice.value.match(regExpPrice)) {
            capPrice.style.borderColor = "#008000";
            invalidCapPrice.style.display = "none";
            validCapPrice.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capPrice.style.borderColor = "#ff0000";
            invalidCapPrice.style.display = "inline-block";
            validCapPrice.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capPrice.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capQuantity = document.getElementById("admin-add-product-quantity");
    let validCapQuantity = document.getElementsByClassName("check-form")[2];
    let invalidCapQuantity = document.getElementsByClassName("xmark-form")[2];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let regExpQuantity = /^[1-9]\d*$/; 
    
    capQuantity?.addEventListener("input", () => {  
        if  (capQuantity.value.match(regExpQuantity)) {
            capQuantity.style.borderColor = "#008000";
            invalidCapQuantity.style.display = "none";
            validCapQuantity.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capQuantity.style.borderColor = "#ff0000";
            invalidCapQuantity.style.display = "inline-block";
            validCapQuantity.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capQuantity?.addEventListener("click", () => {  
        if  (capQuantity.value.match(regExpQuantity)) {
            capQuantity.style.borderColor = "#008000";
            invalidCapQuantity.style.display = "none";
            validCapQuantity.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capQuantity.style.borderColor = "#ff0000";
            invalidCapQuantity.style.display = "inline-block";
            validCapQuantity.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capQuantity.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capCollectionId = document.getElementById("admin-add-product-collection_id");
    let validCapCollectionId = document.getElementsByClassName("check-form")[3];
    let invalidCapCollectionId = document.getElementsByClassName("xmark-form")[3];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let regExpCollection_Id = /^[1-9]\d*$/;
    
    capCollectionId?.addEventListener("input", () => {  
        if  (capCollectionId.value.match(regExpCollection_Id)) {
            capCollectionId.style.borderColor = "#008000";
            invalidCapCollectionId.style.display = "none";
            validCapCollectionId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capCollectionId.style.borderColor = "#ff0000";
            invalidCapCollectionId.style.display = "inline-block";
            validCapCollectionId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capCollectionId?.addEventListener("click", () => {  
        if  (capCollectionId.value.match(regExpCollection_Id)) {
            capCollectionId.style.borderColor = "#008000";
            invalidCapCollectionId.style.display = "none";
            validCapCollectionId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capCollectionId.style.borderColor = "#ff0000";
            invalidCapCollectionId.style.display = "inline-block";
            validCapCollectionId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capCollectionId.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capAdminCreatorId = document.getElementById("admin-add-product-admin_contributor_id");
    let validCapAdminCreatorId = document.getElementsByClassName("check-form")[4];
    let invalidCapAdminCreatorId = document.getElementsByClassName("xmark-form")[4];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");
    let regExpCollection_Id = /^[1-9]\d*$/;
    
    capAdminCreatorId?.addEventListener("input", () => {  
        if  (capAdminCreatorId.value.match(regExpCollection_Id)) {
            capAdminCreatorId.style.borderColor = "#008000";
            invalidCapAdminCreatorId.style.display = "none";
            validCapAdminCreatorId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capAdminCreatorId.style.borderColor = "#ff0000";
            invalidCapAdminCreatorId.style.display = "inline-block";
            validCapAdminCreatorId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capAdminCreatorId?.addEventListener("click", () => {  
        if  (capAdminCreatorId.value.match(regExpCollection_Id)) {
            capAdminCreatorId.style.borderColor = "#008000";
            invalidCapAdminCreatorId.style.display = "none";
            validCapAdminCreatorId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capAdminCreatorId.style.borderColor = "#ff0000";
            invalidCapAdminCreatorId.style.display = "inline-block";
            validCapAdminCreatorId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capAdminCreatorId.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let capDescription = document.getElementById("admin-add-product-description");
    let validCapDescription = document.getElementsByClassName("check-form")[6];
    let invalidCapDescription = document.getElementsByClassName("xmark-form")[6];
    let warningMessage = document.getElementById("add-product-message");
    let submitBtn = document.getElementById("admin-add-product__submit");

    capDescription?.addEventListener("input", () => {  
        if  (capDescription.value !== "") {
            capDescription.style.borderColor = "#008000";
            invalidCapDescription.style.display = "none";
            validCapDescription.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capDescription.style.borderColor = "#ff0000";
            invalidCapDescription.style.display = "inline-block";
            validCapDescription.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capDescription?.addEventListener("click", () => {  
        if  (capDescription.value == "") {
            capDescription.style.borderColor = "#ff0000";
            invalidCapDescription.style.display = "inline-block";
            validCapDescription.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let updateProductForm = document.getElementById("admin-product-update-img__form-content");
    let productId = document.getElementById("admin-product-update-image-product_id");
    let submitBtn = document.getElementById("admin-product-update-img__submit");
    let regExpPositiveNumbers = /^[1-9]\d*$/;

    updateProductForm?.addEventListener("submit", (e) => {
        if  (productId.value == "") {
            e.preventDefault();
        }
        if  (productId.value.match(regExpPositiveNumbers)) {
            submitBtn.style.display = "block";
        } else {
            e.preventDefault();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let updateProductForm = document.getElementById("admin-product-update-img__form-content");
    let capImage = document.getElementById("admin-product-update-image");
    let submitBtn = document.getElementById("admin-product-update-img__submit");
    let validCapImage = document.getElementsByClassName("check-image-form")[0];
    let invalidCapImage = document.getElementsByClassName("xmark-image-form")[0];
	let regExpImage = /[\/.](jpg|jpeg)$/;
    updateProductForm?.addEventListener("submit", (e) => {
        if  (capImage.value == "") {
            invalidCapImage.style.display = "block";
            invalidCapImage.style.textAlign = "center";
            invalidCapImage.style.marginTop = "2rem";
            invalidCapImage.style.fontSize = "2rem";
            validCapImage.style.display = "none";
            submitBtn.style.display = "block";
            e.preventDefault();
        }
        if  (capImage.value.match(regExpImage)) {
            invalidCapImage.style.display = "none";
            validCapImage.style.display = "block";
            validCapImage.style.textAlign = "center";
            validCapImage.style.marginTop = "2rem";
            validCapImage.style.fontSize = "2rem";
            submitBtn.style.display = "block";
        } else {
            invalidCapImage.style.display = "block";
            invalidCapImage.style.textAlign = "center";
            invalidCapImage.style.marginTop = "2rem";
            invalidCapImage.style.fontSize = "2rem";
            validCapImage.style.display = "none";
            submitBtn.style.display = "block";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let updateProductForm = document.getElementById("admin-add-product__form-content");
    let productId = document.getElementById("admin-product-update-product_id");
    let capName = document.getElementById("admin-product-update-name");
    let invalidCapName = document.getElementsByClassName("xmark-form")[0];
    let capPrice = document.getElementById("admin-product-update-price");
    let invalidCapPrice = document.getElementsByClassName("xmark-form")[1];
    let capQuantity = document.getElementById("admin-product-update-quantity");
    let invalidCapQuantity = document.getElementsByClassName("xmark-form")[2];
    let capCollectionId = document.getElementById("admin-product-update-collection_id");
    let invalidCapCollectionId = document.getElementsByClassName("xmark-form")[3];
    let capAdminCreatorId = document.getElementById("admin-product-update-admin_contributor_id");
    let invalidCapAdminCreatorId = document.getElementsByClassName("xmark-form")[4];
    let capDescription = document.getElementById("admin-product-update-description");
    let invalidCapDescription = document.getElementsByClassName("xmark-form")[5];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");

    updateProductForm?.addEventListener("submit", (e) => {
        if (productId.value == "") {
        e.preventDefault();
        }
        if (capName.value == "") {
        capName.style.borderColor = "#ff0000";
        invalidCapName.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capName.focus();
        e.preventDefault();
        }
        if (capPrice.value == "") {
        capPrice.style.borderColor = "#ff0000";
        invalidCapPrice.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capPrice.focus();
        e.preventDefault();
        }
        if (capQuantity.value == "") {
        capQuantity.style.borderColor = "#ff0000";
        invalidCapQuantity.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capQuantity.focus();
        e.preventDefault();
        }
        if (capCollectionId.value == "") {
        capCollectionId.style.borderColor = "#ff0000";
        invalidCapCollectionId.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capCollectionId.focus();
        e.preventDefault();
        }
        if (capAdminCreatorId.value == "") {
        capAdminCreatorId.style.borderColor = "#ff0000";
        invalidCapAdminCreatorId.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capAdminCreatorId.focus();
        e.preventDefault();
        }
        if (capDescription.value == "") {
        capDescription.style.borderColor = "#ff0000";
        invalidCapDescription.style.display = "inline-block";
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        e.preventDefault();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let updateProductForm = document.getElementById("admin-product-update__form-content");
    let productId = document.getElementById("admin-product-update-product_id");
    let capName = document.getElementById("admin-product-update-name");
    let capPrice = document.getElementById("admin-product-update-price");
    let capQuantity = document.getElementById("admin-product-update-quantity");
    let capCollectionId = document.getElementById("admin-product-update-collection_id");
    let capAdminCreatorId = document.getElementById("admin-product-update-admin_contributor_id");
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regExpName = /^[a-zA-Z\s]*$/;
    let regExpPrice = /^[+]?\d+([.]\d+)?$/;
    let regExpPositiveNumbers = /^[1-9]\d*$/;

    updateProductForm?.addEventListener("submit", (e) => {
        if(productId.value.match(regExpPositiveNumbers)) {
        submitBtn.style.display = "block";
        } else {
        e.preventDefault();
        }
        if(capName.value.match(regExpName)) {
        warningMessage.style.display = "none";
        submitBtn.style.display = "block";
        } else {
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capName.focus();
        e.preventDefault();
        }
        if(capPrice.value.match(regExpPrice)) {
        warningMessage.style.display = "none";
        submitBtn.style.display = "block";
        } else {
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capPrice.focus();
        e.preventDefault();
        }
        if(capQuantity.value.match(regExpPositiveNumbers)) {
        warningMessage.style.display = "none";
        submitBtn.style.display = "block";
        } else {
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capQuantity.focus();
        e.preventDefault();
        }
        if(capCollectionId.value.match(regExpPositiveNumbers)) {
        warningMessage.style.display = "none";
        submitBtn.style.display = "block";
        } else {
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capCollectionId.focus();
        e.preventDefault();
        }
        if(capAdminCreatorId.value.match(regExpPositiveNumbers)) {
        warningMessage.style.display = "none";
        submitBtn.style.display = "block";
        } else {
        warningMessage.style.display = "block";
        submitBtn.style.display = "none";
        capAdminCreatorId.focus();
        e.preventDefault();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capName = document.getElementById("admin-product-update-name");
    let validCapName = document.getElementsByClassName("check-form")[0];
    let invalidCapName = document.getElementsByClassName("xmark-form")[0];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regExpName = /^[a-zA-Z\s]*$/;
    
    capName?.addEventListener("input", () => {  
        if((capName.value !== "") && (capName.value.match(regExpName))) {
            capName.style.borderColor = "#008000";
            invalidCapName.style.display = "none";
            validCapName.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capName.style.borderColor = "#ff0000";
            invalidCapName.style.display = "inline-block";
            validCapName.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capName?.addEventListener("click", () => {  
        if(capName.value.match(regExpName)) {
            capName.style.borderColor = "#008000";
            invalidCapName.style.display = "none";
            validCapName.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capName.style.borderColor = "#ff0000";
            invalidCapName.style.display = "inline-block";
            validCapName.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capPrice = document.getElementById("admin-product-update-price");
    let validCapPrice = document.getElementsByClassName("check-form")[1];
    let invalidCapPrice = document.getElementsByClassName("xmark-form")[1];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regExpPrice = /^[+]?\d+([.]\d+)?$/;
    
    capPrice?.addEventListener("input", () => {  
        if(capPrice.value.match(regExpPrice)) {
            capPrice.style.borderColor = "#008000";
            invalidCapPrice.style.display = "none";
            validCapPrice.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capPrice.style.borderColor = "#ff0000";
            invalidCapPrice.style.display = "inline-block";
            validCapPrice.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capPrice?.addEventListener("click", () => {  
        if(capPrice.value.match(regExpPrice)) {
            capPrice.style.borderColor = "#008000";
            invalidCapPrice.style.display = "none";
            validCapPrice.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capPrice.style.borderColor = "#ff0000";
            invalidCapPrice.style.display = "inline-block";
            validCapPrice.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capPrice.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capQuantity = document.getElementById("admin-product-update-quantity");
    let validCapQuantity = document.getElementsByClassName("check-form")[2];
    let invalidCapQuantity = document.getElementsByClassName("xmark-form")[2];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regExpQuantity = /^[1-9]\d*$/; 
    
    capQuantity?.addEventListener("input", () => {  
        if(capQuantity.value.match(regExpQuantity)) {
            capQuantity.style.borderColor = "#008000";
            invalidCapQuantity.style.display = "none";
            validCapQuantity.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capQuantity.style.borderColor = "#ff0000";
            invalidCapQuantity.style.display = "inline-block";
            validCapQuantity.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capQuantity?.addEventListener("click", () => {  
        if(capQuantity.value.match(regExpQuantity)) {
            capQuantity.style.borderColor = "#008000";
            invalidCapQuantity.style.display = "none";
            validCapQuantity.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capQuantity.style.borderColor = "#ff0000";
            invalidCapQuantity.style.display = "inline-block";
            validCapQuantity.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capQuantity.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capCollectionId = document.getElementById("admin-product-update-collection_id");
    let validCapCollectionId = document.getElementsByClassName("check-form")[3];
    let invalidCapCollectionId = document.getElementsByClassName("xmark-form")[3];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regExpCollection_Id = /^[1-9]\d*$/;
    
    capCollectionId?.addEventListener("input", () => {  
        if(capCollectionId.value.match(regExpCollection_Id)) {
            capCollectionId.style.borderColor = "#008000";
            invalidCapCollectionId.style.display = "none";
            validCapCollectionId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capCollectionId.style.borderColor = "#ff0000";
            invalidCapCollectionId.style.display = "inline-block";
            validCapCollectionId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capCollectionId?.addEventListener("click", () => {  
        if(capCollectionId.value.match(regExpCollection_Id)) {
            capCollectionId.style.borderColor = "#008000";
            invalidCapCollectionId.style.display = "none";
            validCapCollectionId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capCollectionId.style.borderColor = "#ff0000";
            invalidCapCollectionId.style.display = "inline-block";
            validCapCollectionId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capCollectionId.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capAdminCreatorId = document.getElementById("admin-product-update-admin_contributor_id");
    let validCapAdminCreatorId = document.getElementsByClassName("check-form")[4];
    let invalidCapAdminCreatorId = document.getElementsByClassName("xmark-form")[4];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");
    let regAdminCreatorId = /^[1-9]\d*$/;
    
    capAdminCreatorId?.addEventListener("input", () => {  
        if(capAdminCreatorId.value.match(regAdminCreatorId)) {
            capAdminCreatorId.style.borderColor = "#008000";
            invalidCapAdminCreatorId.style.display = "none";
            validCapAdminCreatorId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capAdminCreatorId.style.borderColor = "#ff0000";
            invalidCapAdminCreatorId.style.display = "inline-block";
            validCapAdminCreatorId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capAdminCreatorId?.addEventListener("click", () => {  
        if(capAdminCreatorId.value.match(regAdminCreatorId)) {
            capAdminCreatorId.style.borderColor = "#008000";
            invalidCapAdminCreatorId.style.display = "none";
            validCapAdminCreatorId.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capAdminCreatorId.style.borderColor = "#ff0000";
            invalidCapAdminCreatorId.style.display = "inline-block";
            validCapAdminCreatorId.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            capAdminCreatorId.focus();
        }
    });
}); 

document.addEventListener("DOMContentLoaded", () => {  
    let capDescription = document.getElementById("admin-product-update-description");
    let validCapDescription = document.getElementsByClassName("check-form")[5];
    let invalidCapDescription = document.getElementsByClassName("xmark-form")[5];
    let warningMessage = document.getElementById("product-update-message");
    let submitBtn = document.getElementById("admin-product-update__submit");

    capDescription?.addEventListener("input", () => {  
        if(capDescription.value !== "") {
            capDescription.style.borderColor = "#008000";
            invalidCapDescription.style.display = "none";
            validCapDescription.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capDescription.style.borderColor = "#ff0000";
            invalidCapDescription.style.display = "inline-block";
            validCapDescription.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });

    capDescription?.addEventListener("click", () => {  
        if(capDescription.value !== "") {
            capDescription.style.borderColor = "#008000";
            invalidCapDescription.style.display = "none";
            validCapDescription.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            capDescription.style.borderColor = "#ff0000";
            invalidCapDescription.style.display = "inline-block";
            validCapDescription.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
        }
    });
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousPage = document.getElementById("admin-collections-list__next-page");
    let iconColor = document.getElementById("admin-collections-list__next-link");
    
    previousPage?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousPage?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 
 
document.addEventListener('DOMContentLoaded', () => {
    let nextBtn = document.getElementById("admin-caps-catalog__previous-page");
    let iconColor = document.getElementById("admin-caps-catalog__previous-link");
    
    nextBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    nextBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousBtn = document.getElementById("admin-caps-catalog__next-page");
    let iconColor = document.getElementById("admin-caps-catalog__next-link");
    
    previousBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousBtn = document.getElementById("admin-employees-list__previous-page");
    let iconColor = document.getElementById("admin-employees-list__previous-link");
    
    previousBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let nextBtn = document.getElementById("admin-employees-list__next-page");
    let iconColor = document.getElementById("admin-employees-list__next-link");
    
    nextBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    nextBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousBtn = document.getElementsByClassName("admin-product__previous-page")[0];
    let iconColor = document.getElementById("admin-product__previous-page");
    
    previousBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let nextBtn = document.getElementsByClassName("admin-product__next-page")[0];
    let iconColor = document.getElementById("admin-product__next-page");
    
    nextBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    nextBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousBtn = document.getElementById("admin-product-update__previous-page");
    let iconColor = document.getElementById("product-update__previous-link");
    
    previousBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousBtn = document.getElementById("admin-product-update__next-page");
    let iconColor = document.getElementById("product-update__next-link");
    
    previousBtn?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousBtn?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let previousPage = document.getElementById("admin-winners-list__previous-page");
    let iconColor = document.getElementById("admin-winners-list__previous-link");
    
    previousPage?.addEventListener('mouseover', () => {
        iconColor.style.color = "#ffd700";
    });  
        
    previousPage?.addEventListener('mouseout', () => {
        iconColor.style.color = "#ff0000";
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let segaGenesisController = document.getElementById("admin-add-product__sega-genesis-controller");
    let addProductForm = document.getElementsByClassName("admin-add-product")[0];
    
    segaGenesisController?.addEventListener("click", () => {
        addProductForm.style.display = "flex";
        segaGenesisController.style.display = "none";
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let navigation = document.querySelector("header");
    window.addEventListener("scroll", () => {
        if(window.scrollY > 30){
        navigation.classList.add("changing-header");
        } else {
        navigation.classList.remove("changing-header");}
    })
});

document.addEventListener("DOMContentLoaded",() => {
    let logoWebsite = document.getElementById("header-logo-desktop__image");
    let logoWebsiteDevices = document.getElementById("header-logo-devices__img");
    let changingBackground = document.querySelector("body");

    logoWebsite?.addEventListener("click", () => {
        logoWebsite.src="medias/img/layouts/retro_mania_logo_2.png";
        changingBackground.style.background ="linear-gradient(darkblue, purple) no-repeat fixed";

        if(logoWebsite.src="medias/img/layouts/retro_mania_logo_2.png") {
        logoWebsiteDevices.src="medias/img/layouts/retro_mania_logo_2.png";}
    });

    logoWebsiteDevices?.addEventListener("click", () => {
        logoWebsiteDevices.src="medias/img/layouts/retro_mania_logo_2.png";
        changingBackground.style.background ="linear-gradient(darkblue, purple) no-repeat fixed";
        
        if(logoWebsiteDevices.src="medias/img/layouts/retro_mania_logo_2.png") {
        logoWebsite.src="medias/img/layouts/retro_mania_logo_2.png";}
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let menuBar = document.getElementsByClassName("fa-bars")[0];
    let menuTwo = document.getElementsByClassName("menu-dropdown-content")[0];
    
    menuBar?.addEventListener('click', () => {
        menuTwo.classList.toggle("invisible-menu");
        menuBar.classList.toggle("changing-bar");
        });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let textHomeButton = document.getElementById("site-home-top__link");

    textHomeButton?.addEventListener("click", () => {
    textHomeButton.textContent = "Let's go ! 🚀";
    textHomeButton.style.backgroundColor = "#531253";
    });  
}); 

document.addEventListener("DOMContentLoaded", () => {
    let abImg = document.getElementById("anthony-bardinter__img");
    let abPresentation = document.getElementById("anthony-bardinter"); 
    abImg?.addEventListener("click", () => { 
            abPresentation.style.display = "block";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let mhImg = document.getElementById("marta-hernandez__img");
    let mhPresentation = document.getElementById("marta-hernandez");
    mhImg?.addEventListener("click", () => { 
            mhPresentation.style.display = "block";
    })
});

document.addEventListener("DOMContentLoaded", () => {
noContext = document.getElementsByClassName("cap-description__content-details")[0];

noContext?.addEventListener('contextmenu', (e) => {
    e.preventDefault();
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let akiraMotorbike = document.getElementById("akira-motorbike__img");
    akiraMotorbike?.addEventListener("click", () => {
        window.open("index.php?page=admin_home");
    });
});

document.addEventListener("DOMContentLoaded", () => {
noContext = document.getElementsByClassName("caps-catalog__content-details")[0];

noContext?.addEventListener('contextmenu', (e) => {
    e.preventDefault();
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let popupGif = document.getElementById("popup-message");
    let firstHeartIcon = document.getElementsByClassName("fa-heart")[0];
    let secondHeartIcon = document.getElementsByClassName("fa-heart")[1];
    let littleMark = document.getElementById("xmark-popup");

    firstHeartIcon?.addEventListener("click", () => {
        popupGif.setAttribute("open", true)
        firstHeartIcon.style.color = "#ff0000";
        secondHeartIcon.style.color = "#ff0000";
    }, {once : true});  

    littleMark?.addEventListener("click", () => {
        popupGif.removeAttribute("open", false)
    }); 
});

document.addEventListener("DOMContentLoaded", () => {
    let popupGif = document.getElementById("popup-message");
    let firstHeartIcon = document.getElementsByClassName("fa-heart")[0];
    let secondHeartIcon = document.getElementsByClassName("fa-heart")[1];
    let littleMark = document.getElementById("xmark-popup");

    secondHeartIcon?.addEventListener("click", () => {
        popupGif.setAttribute("open", true)
        firstHeartIcon.style.color = "#ff0000";
        secondHeartIcon.style.color = "#ff0000";
    }, {once : true});  

    littleMark?.addEventListener("click", () => {
        popupGif.removeAttribute("open", false)
    }); 
});

document.addEventListener("DOMContentLoaded", () => {
    let searchBox = document.getElementById("search-game-bar");
    let firstStar = document.getElementsByClassName("fa-star")[0];
    let thirdStar = document.getElementsByClassName("fa-star")[2];
    let winGame = document.getElementById("win-game-text");
    let looseGame = document.getElementById("loose-game-text");
    let typing = document.getElementById("typing-text");
    let forgot = document.getElementById("forgot-searching-text");

    firstStar?.addEventListener("click", () => {
        searchBox.classList.toggle("active");
        firstStar.classList.toggle("stars-rotation");
        thirdStar.classList.toggle("stars-rotation");
        looseGame.style.display = "none";
        winGame.style.display ="none";
        typing.style.display = "none";
        forgot.style.display = "none";
    });  

    thirdStar?.addEventListener("click", () => {
        searchBox.classList.toggle("active");
        firstStar.classList.toggle("stars-rotation");
        thirdStar.classList.toggle("stars-rotation");
        looseGame.style.display = "none";
        winGame.style.display ="none";
        typing.style.display = "none";
        forgot.style.display = "none";
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let searchBar = document.getElementById("search-game-bar");
    let secondStar = document.getElementsByClassName("fa-star")[1];
    let searchText = document.getElementById("search-game-text");
    let winGame = document.getElementById("win-game-text");
    let looseGame = document.getElementById("loose-game-text");
    let typing = document.getElementById("typing-text");
    let forgot = document.getElementById("forgot-searching-text");
    let winGameFile = document.getElementById("win-game-file");

    searchBar?.addEventListener("submit", (e) => {
        if(searchText.value === "Akira" || searchText.value === "akira" || searchText.value === "AKIRA") {
            winGame.style.display ="block";
            looseGame.style.display = "none";
            typing.style.display = "none";
            forgot.style.display = "none";
            winGameFile.href = "medias/img/site/search_game/winner_certificate.jpg";
            e.preventDefault();
        } else if(searchText.value == "") {
            winGame.style.display = "none";
            looseGame.style.display = "none";
            typing.style.display = "none";
            forgot.style.display = "block";
            e.preventDefault();
        } else {
            winGame.style.display = "none";
            looseGame.style.display = "block";
            typing.style.display = "none";
            forgot.style.display = "none";
            e.preventDefault();
        }    
    });

    secondStar?.addEventListener("click", () => {
        if(searchText.value === "Akira" || searchText.value === "akira" || searchText.value === "AKIRA") {
            winGame.style.display ="block";
            looseGame.style.display = "none";
            typing.style.display = "none";
            forgot.style.display = "none";
        } else if(searchText.value == "") {
            winGame.style.display = "none";
            looseGame.style.display = "none";
            typing.style.display = "none";
            forgot.style.display = "block";
            e.preventDefault();
        } else {
            winGame.style.display = "none";
            looseGame.style.display = "block";
            typing.style.display = "none";
            forgot.style.display = "none";
            e.preventDefault();
        }    
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let searchText = document.getElementById("search-game-text");
    let winGame = document.getElementById("win-game-text");
    let looseGame = document.getElementById("loose-game-text");
    let typing = document.getElementById("typing-text");
    let forgot = document.getElementById("forgot-searching-text");

    searchText?.addEventListener("input", (e) => {
        if(searchText.value !== "") {
            typing.style.display = "block";
            forgot.style.display = "none";
            } 
        if(searchText.value == "" || e.key == "Backspace") {
            typing.style.display = "none";
            looseGame.style.display = "none";
            winGame.style.display = "none";
        }
    });   
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-pp")[0];
    let mainContent = document.getElementsByClassName("privacy-policy__content-p")[0];
    let mainContentTwo = document.getElementsByClassName("privacy-policy__content-p")[1];
    let changingBackground = document.getElementsByClassName("privacy-policy__content-title")[0];
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            mainContentTwo.style.display = "none";
            changingBackground.style.color = "#00ffff";
            changingBackground.classList.add("add-background-img");
        } else {
            mainContent.style.display = "block";
            mainContentTwo.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-pp")[1];
    let mainContent = document.getElementsByClassName("privacy-policy__content-p")[2];
    let changingBackground = document.getElementsByClassName("privacy-policy__content-title")[1];
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            changingBackground.style.color = "#ff0000";
            changingBackground.classList.add("add-background-img");
        } else {
            mainContent.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-pp")[2];
    let mainContent = document.getElementsByClassName("privacy-policy__content-p")[3];
    let changingBackground = document.getElementsByClassName("privacy-policy__content-title")[2];   
    let audioTape = document.getElementById("audio-tape");
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            changingBackground.style.color = "#ff00ff";
            changingBackground.classList.add("add-background-img");
            audioTape.style.display = "block";
        } else {
            mainContent.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
            audioTape.style.display = "none";
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-tos")[0];
    let mainContent = document.getElementsByClassName("terms_of_service__content-p")[0];
    let mainContentTwo = document.getElementsByClassName("terms_of_service__content-p")[1];
    let changingBackground = document.getElementsByClassName("terms_of_service__content-title")[0];
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            mainContentTwo.style.display = "none";
            changingBackground.style.color = "#00ffff";
            changingBackground.classList.add("add-background-img");
        } else {
            mainContent.style.display = "block";
            mainContentTwo.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-tos")[1];
    let mainContent = document.getElementsByClassName("terms_of_service__content-p")[2];
    let mainContentTwo = document.getElementsByClassName("terms_of_service__content-p")[3];
    let changingBackground = document.getElementsByClassName("terms_of_service__content-title")[1];
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            mainContentTwo.style.display = "none";
            changingBackground.style.color = "#ff0000";
            changingBackground.classList.add("add-background-img");
        } else {
            mainContent.style.display = "block";
            mainContentTwo.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-tos")[2];
    let mainContent = document.getElementsByClassName("terms_of_service__content-p")[4];
    let changingBackground = document.getElementsByClassName("terms_of_service__content-title")[2];
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            changingBackground.style.color = "#ffff00";
            changingBackground.classList.add("add-background-img");
        } else {
            mainContent.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
        }
    }); 
}); 

document.addEventListener("DOMContentLoaded", () => {
    let chevronDown = document.getElementsByClassName("arrow-tos")[3];
    let mainContent = document.getElementsByClassName("terms_of_service__content-p")[5];
    let changingBackground = document.getElementsByClassName("terms_of_service__content-title")[3];   
    let radio = document.getElementById("radio");
    
    chevronDown?.addEventListener('click', () => {
        if(mainContent.style.display === "block") {
            mainContent.style.display = "none";
            changingBackground.style.color = "#ff00ff";
            changingBackground.classList.add("add-background-img");
            radio.style.display = "block";
        } else {
            mainContent.style.display = "block";
            changingBackground.style.color = "#ffc0cb";
            changingBackground.classList.remove("add-background-img");
            radio.style.display = "none";
        }
    }); 
}); 

document.addEventListener('DOMContentLoaded', () => {
    let segaGenesisController = document.getElementById("online-guestbook__sega-genesis-controller");
    let addProductForm = document.getElementsByClassName("online-guestbook__form")[0];
    let commentInstructions = document.getElementsByClassName("online-guestbook__add-comment-instructions")[0];
    
    segaGenesisController?.addEventListener("click", () => {
        addProductForm.style.display = "flex";
        commentInstructions.style.display = "block";
        segaGenesisController.style.display = "none";
    });
}); 

document.addEventListener("DOMContentLoaded", () => {
    let onlineGuestbookForm = document.getElementById("online-guestbook__form-content");
    let username = document.getElementById("guestbook-username");
    let title = document.getElementById("guestbook-title");
    let comment = document.getElementById("guestbook-comment");
    let website = document.getElementById("guestbook-website");
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let invalidTitle = document.getElementsByClassName("xmark-form")[1];
    let invalidComment = document.getElementsByClassName("xmark-form")[2];
    let submitBtn = document.getElementById("online-guestbook__submit");
    let warningMessage = document.getElementById("guestbook-message");

    onlineGuestbookForm?.addEventListener("submit", (e) => {
        if (username.value == "") {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
            e.preventDefault();
        }
        if (title.value == "") {
            title.style.borderColor = "#ff0000";
            invalidTitle.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            title.focus();
            e.preventDefault();
        }
        if (comment.value == "") {
            comment.style.borderColor = "#ff0000";
            invalidComment.style.display = "inline-block";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            comment.focus();
            e.preventDefault()
        }
        if (website.value !== "") {
            alert("You are a spammer ☠️☠️☠️!");
            e.preventDefault()
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {
    let onlineGuestbookForm = document.getElementById("online-guestbook__form-content");
    let username = document.getElementById("guestbook-username");
    let title = document.getElementById("guestbook-title");
    let comment = document.getElementById("guestbook-comment");
    let submitBtn = document.getElementById("online-guestbook__submit");
    let warningMessage = document.getElementById("guestbook-message");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/; 
	let regExpTitle = /^[a-zA-Z\s]*$/; 
    
    onlineGuestbookForm?.addEventListener("submit", (e) => {
        if (username.value.match(regExpUsername) && title.value.match(regExpTitle) && comment.value !== "") {
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            e.preventDefault();
        }
    });
});

document.addEventListener("DOMContentLoaded", () => {  
    let username = document.getElementById("guestbook-username");
    let title = document.getElementById("guestbook-title");
    let comment = document.getElementById("guestbook-comment");
    let validUsername = document.getElementsByClassName("check-form")[0];
    let validTitle = document.getElementsByClassName("check-form")[1];
    let validComment = document.getElementsByClassName("check-form")[2];
    let invalidUsername = document.getElementsByClassName("xmark-form")[0];
    let invalidTitle = document.getElementsByClassName("xmark-form")[1];
    let invalidComment = document.getElementsByClassName("xmark-form")[2];
    let submitBtn = document.getElementById("online-guestbook__submit");
    let warningMessage = document.getElementById("guestbook-message");
    let regExpUsername = /^[a-zA-Z0-9_-]*$/; 
	let regExpTitle = /^[a-zA-Z\s]*$/; 
    
    username?.addEventListener("input", () => {  
        if((username.value !== "") && (username.value.match(regExpUsername))) {
            username.style.borderColor = "#008000";
            invalidUsername.style.display = "none";
            validUsername.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            username.style.borderColor = "#ff0000";
            invalidUsername.style.display = "inline-block";
            validUsername.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            username.focus();
        }
    });

    title?.addEventListener("input", () => {  
        if((title.value !== "") && (title.value.match(regExpTitle))) {
            title.style.borderColor = "#008000";
            invalidTitle.style.display = "none";
            validTitle.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            title.style.borderColor = "#ff0000";
            invalidTitle.style.display = "inline-block";
            validTitle.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            title.focus();
        }
    });

    comment?.addEventListener("input", () => {  
        if(comment.value !== "") {
            comment.style.borderColor = "#008000";
            invalidComment.style.display = "none";
            validComment.style.display = "inline-block";
            warningMessage.style.display = "none";
            submitBtn.style.display = "block";
        } else {
            comment.style.borderColor = "#ff0000";
            invalidComment.style.display = "inline-block";
            validComment.style.display = "none";
            warningMessage.style.display = "block";
            submitBtn.style.display = "none";
            comment.focus();
        }
    });
}); 