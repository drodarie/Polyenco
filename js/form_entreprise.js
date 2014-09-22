var punct = "!\"\\#$%&'()*+,\\-.\\\/:;?@[\\\\\\]_`{|}^=~",
                    accents = "ÀÂÄÇÉÈÊËÎÏÔÖÙÛÜÆŒàâäçéèêëîïôöùûüæœÿŸáíóúñÁÍÓÚÑõÕìÒòÌ",
                    alpha = "a-zA-Z"+accents,
                    num = "\\d",
                    letter = "["+alpha+"]",
                    alphanum = "["+alpha+"0-9]",
                    tot = "["+alpha+"0-9"+punct+"]"
                    erreur = '<div class="alert alert-danger alert-dismissable">'
                            + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                            + '<span class="glyphicon glyphicon-ban-circle"></span><strong> Erreur : </strong>';
            
            
			function reset(element){
                element.className = element.className.replace(" has-success", "");
				element.className = element.className.replace(" has-error", "");
				document.getElementById("reponse").innerHTML="";
            }
			
            function addError(element){
                element.className = element.className.replace(" has-success", "");
                if(element.className.indexOf(" has-error")===-1){
                    element.className = element.className + " has-error";
                }
            }
            
            function addSuccess (element){
                element.className = element.className.replace(" has-error", "");
                if(element.className.indexOf(" has-success")===-1){
                    element.className = element.className + " has-success";
                }
            }
            
            function testNom (noblank){
				if(typeof(noblank)==='undefined') noblank = false;			
                var regName=new RegExp("^("+letter+"([-' ]{1,2}"+letter+")?)+$"),//Commence par une lettre, contient des lettre et si ' ou espace ou - lettre après.
                        name = document.getElementById("contact_nom");
				if (!noblank&&name.value==""){
					reset(name.parentNode);
					return false;
				}
                if (!regName.test(name.value)){
					document.getElementById("reponse").innerHTML=erreur
							+ "Le champ Nom n'est pas valide.</div>";
					addError(name.parentNode);
					return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(name.parentNode);
                    return true;
                }
            }
            
            function testPrenom (noblank){
				if(typeof(noblank)==='undefined') noblank = false;
                var regName=new RegExp("^("+letter+"([-' ]{1,2}"+letter+")?)+$"),//idem nom
                        forname = document.getElementById("contact_prenom");
				if (!noblank&&forname.value==""){
					reset(forname.parentNode);
					return false;
				}
                if (!regName.test(forname.value)){
					document.getElementById("reponse").innerHTML=erreur
							+ "Le champ Prénom n'est pas valide.</div>";
					addError(forname.parentNode);
					return false;
                }
                else{
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(forname.parentNode);
                    return true;
                }
            }
            
            function testEntreprise (noblank){
				if(typeof(noblank)==='undefined') noblank = false;
                var regComp=new RegExp("^("+tot+" ?)+$"),//Caractères alphanumériques ou ponctuation espacés ou non.
                        company = document.getElementById("contact_entreprise");
				if (!noblank&&company.value==""){
					reset(company.parentNode);
					return false;
				}
                if (!regComp.test(company.value)){
					document.getElementById("reponse").innerHTML=erreur
							+ "Le champ Entreprise n'est pas valide.</div>";
					addError(company.parentNode);
					return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(company.parentNode);
                    return true;
                }
            }
            
            function testTelephone(noblank){
				if(typeof(noblank)==='undefined') noblank = false;
                var regTel=new RegExp("^(\\+"+num+num+"[ \\-]?)?\\(?"+num+"\\)?[\\- ]?"+num+"[\\- ]?("+num+num+"[\\- ]?){4}$"),//+33 (0)X XX XX XX XX ou avec -
                        tel = document.getElementById("contact_tel");
				if (!noblank&&tel.value==""){
					reset(tel.parentNode);
					return false;
				}
                if (!regTel.test(tel.value)){
					document.getElementById("reponse").innerHTML=erreur
							+ "Le champ Téléphone n'est pas valide.</div>";
					addError(tel.parentNode);
					return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(tel.parentNode);
                    return true;
                }
            }
            
            function testEmail(noblank){
				if(typeof(noblank)==='undefined') noblank = false;
                var regEmail=new RegExp("^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])+_?@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])+\\.[a-z]{2,4}$"),
                        email = document.getElementById("contact_email");
				if (!noblank&&email.value==""){
					reset(email.parentNode);
					return false;
				}
                if (!regEmail.test(email.value)){
					document.getElementById("reponse").innerHTML=erreur
							+ "Le champ Email n'est pas valide.</div>";
					addError(email.parentNode);
					return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(email.parentNode);
                    return true;
                }
            }
            
            function testMessage(noblank){
				if(typeof(noblank)==='undefined') noblank = false;
                var message = document.getElementById("contact_message");
				if (!noblank&&message.value==""){
					reset(message.parentNode);
					return false;
				}
                if (message.value.length<20){
						document.getElementById("reponse").innerHTML=erreur
								+ "Le champ Message est trop court.</div>";
						addError(message.parentNode);
					return false;
                }
                else {
                    document.getElementById("reponse").innerHTML="";
                    addSuccess(message.parentNode);
                    return true;
                }
            }
            
            function testEnvoi(){
                if (testNom(true)&& testPrenom(true)&& testEntreprise(true)&&testTelephone(true)&&testEmail(true)&&testMessage(true)){
                    document.getElementById("reponse").innerHTML='<div class="alert alert-success alert-dismissable">'
                            + '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'
                            + '<span class="glyphicon glyphicon-ok-circle"></span> Votre message a été envoyé.<br>Nous vous contacterons dès que possible. </div>';
                    setTimeout(document.forms['contact_form'].submit(),3000);
                    return true;
                }
                document.getElementById("reponse").innerHTML=erreur
                            + "Il subsiste des erreurs dans le formulaire. Veuillez les corriger.</div>";
                return false;
            }


