function loadXMLDoc(dataInAry,userReq,userUrl){
		
		if(window.XMLHttpRequest){
			// code for ie7 firefox, chrome, opera, safari
			xmlhttp = new XMLHttpRequest();
			
		}else{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			
		}
		
		// set request 		
		var reqType = ['GET','POST'];
		var foundReq = false;
		var matchReq = '';
		var resptxt
		// check request are under array value
		for(var i=0; i<reqType.length; i++)
		{
			// access each request 
			var eachReq = reqType[i];
			// validate that user request is under validation 
			// str to lower both here 
			userReq = userReq.toLowerCase();
			eachReq = eachReq.toLowerCase();
			
			if(userReq == eachReq)
			{
				// set the variable foundReq to ture
				foundReq = true;
				// break the loop 				
				break;
			}
			
		}
		
			
			// user request to upper case 
			userReq = userReq.toUpperCase();
			var userData = "";
			var joinData = "";
			var a = 0;
			for(key in dataInAry)
			{
				
				// get key and value 
				var keyAndVal = "";
				// escape & string in the first index 
				if(a == 0)
				{
					keyAndVal = key+"="+dataInAry[key];
				}
				// need to add & before index and
				else
				{
					keyAndVal = "&"+key+"="+dataInAry[key];
				}
				
				// join all data 
				joinData += keyAndVal;
				
				a++;
			}
			var vars = '';
			// pass the variable value 
			vars = joinData;
			
			// loop each variable and construct string to send http request 
			var strData = "";
			// loop and get key and value 
		
			
						
			// if getting get request then url must be changed 
			// because in get request data sends through url 
			if(userReq == "GET")
			{
				userUrl = userUrl+"?"+vars;
				
			}						
			// url change if 
			switch(userReq)
			{
				case 'GET':
				xmlhttp.open(userReq,userUrl,true);
				break;
				
				case 'POST':
				xmlhttp.open(userReq,userUrl,true);
				xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");				
				break;
				
				default:
				break;
			}
			
	
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
				//document.getElementById("testing").innerHTML = xmlhttp.responseText;
				var resptxt = this.responseText;
				
			}
		}
		
		// switch the userReq
		// http send request will act accourding to it's request type 
		switch(userReq)
		{
			case 'GET':
			xmlhttp.send();
			break;
			
			case 'POST':
			xmlhttp.send(vars);
			break;
			
			default:
			break;
		}
		
	return this.responseText;
		
	}
	